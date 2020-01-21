<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Pixelink.PxJobs',
            'Jobs',
            'Stellenanzeigen'
        );

        $pluginSignature = str_replace('_', '', 'px_jobs') . '_jobs';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:px_jobs/Configuration/FlexForms/flexform_jobs.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('px_jobs', 'Configuration/TypoScript', 'Jobs');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pxjobs_domain_model_job', 'EXT:px_jobs/Resources/Private/Language/locallang_csh_tx_pxjobs_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pxjobs_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            'px_jobs',
            'tx_pxjobs_domain_model_job'
        );

    }
);
