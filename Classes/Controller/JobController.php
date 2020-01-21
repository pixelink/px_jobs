<?php

namespace Pixelink\PxJobs\Controller;

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

use TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;;

/**
 * JobController
 */
class JobController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * jobRepository
     *
     * @var \Pixelink\PxJobs\Domain\Repository\JobRepository
     * @inject
     */
    protected $jobRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $jobs = $this->jobRepository->findByCategory($this->settings['categories']);
        $this->view->assign('jobs', $jobs);
    }

    /**
     * action show
     *
     * @param \Pixelink\PxJobs\Domain\Model\Job $job
     * @return void
     */
    public function showAction(\Pixelink\PxJobs\Domain\Model\Job $job)
    {
        $this->view->assign('job', $job);
    }

    /**
     * action list
     *
     * @return void
     */
    public function categoriesAction()
    {

        $nrOfJobs = $this->jobRepository->findCategoriesWithJob(10);
        $this->view->assign('openJobs', $nrOfJobs);
    }
}
