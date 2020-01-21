<?php

namespace Pixelink\PxJobs\Domain\Repository;

/***
 *
 * This file is part of the "Jobs" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Benjamin Riezler <b.riezler@pixel-ink.de>, Pixel Ink
 *
 ***/

use function GuzzleHttp\Promise\exception_for;
use Pixelink\PxJobs\Domain\Model\Job;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;

/**
 * The repository for Jobs
 */
class JobRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];


    public function findCategoriesWithJob($parentId)
    {


        /**
         * SELECT CAT.title, count(JOB.uid) FROM tx_pxjobs_domain_model_job AS JOB
         * left join sys_category_record_mm AS CATMM
         * on JOB.uid = CATMM.uid_foreign
         * left join sys_category AS CAT
         * ON CATMM.uid_local = CAT.uid
         * GROUP BY CATMM.uid_local
         */

        $dataMapper = GeneralUtility::makeInstance(DataMapper::class);

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_pxjobs_domain_model_job');
        $rows = $queryBuilder
            ->select('CAT.title', 'CAT.uid')
            ->addSelectLiteral(
                $queryBuilder->expr()->count('JOB.uid', 'count')
            )
            ->from('tx_pxjobs_domain_model_job', 'JOB')
            ->join(
                'JOB',
                'sys_category_record_mm',
                'CATMM',
                $queryBuilder->expr()->eq('JOB.uid',
                    $queryBuilder->quoteIdentifier('CATMM.uid_foreign'))
            )
            ->join(
                'CATMM',
                'sys_category',
                'CAT',
                $queryBuilder->expr()->eq('CATMM.uid_local',
                    $queryBuilder->quoteIdentifier('CAT.uid'))
            )
            ->where(
                $queryBuilder->expr()->eq('CAT.parent',
                    $queryBuilder->createNamedParameter($parentId, \PDO::PARAM_INT))
            )
            ->groupBy('CATMM.uid_local')
            ->execute()
            ->fetchAll();
        return $rows;
    }

    public function findByCategory($category)
    {
        $dataMapper = GeneralUtility::makeInstance(DataMapper::class);

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_pxjobs_domain_model_job');
        $rows = $queryBuilder
            ->select('tx_pxjobs_domain_model_job.*')
            ->from('tx_pxjobs_domain_model_job')
            ->join(
                'tx_pxjobs_domain_model_job',
                'sys_category_record_mm',
                'category',
                $queryBuilder->expr()->eq('tx_pxjobs_domain_model_job.uid',
                    $queryBuilder->quoteIdentifier('category.uid_foreign'))
            )
            ->where(
                $queryBuilder->expr()->eq('category.uid_local',
                    $queryBuilder->createNamedParameter($category, \PDO::PARAM_INT))
            )
            ->orderBy('crdate', 'DESC')
            ->execute()
            ->fetchAll();
        return $dataMapper->map(Job::class, $rows);

    }
}
