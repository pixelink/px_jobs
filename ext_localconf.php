<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Pixelink.PxJobs',
            'Jobs',
            [
                'Job' => 'list, show, categories'
            ],
            // non-cacheable actions
            [
                'Job' => 'list, show, categories'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    jobs {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('px_jobs') . 'Resources/Public/Icons/user_plugin_jobs.svg
                        title = LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_px_jobs_domain_model_jobs
                        description = LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_px_jobs_domain_model_jobs.description
                        tt_content_defValues {
                            CType = list
                            list_type = pxjobs_jobs
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
