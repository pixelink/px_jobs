<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,subtitle,location,job_start,job_start_additional,work_time, work_time_additional, tasks,perspective,profile,looking_for,we_offer,about_location,contact_person',
        'iconfile' => 'EXT:px_jobs/Resources/Public/Icons/tx_pxjobs_domain_model_job.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, subtitle, location, job_start, job_start_additional, work_time, work_time_additional, tasks, perspective, profile, looking_for, we_offer, about_location, contact_person',
    ],
    'palettes' => [
        'titles' => [
            'showitem' => 'title, subtitle'
        ],
        'location' => [
            'showitem' => 'location'
        ],
        'beginn' => [
            'showitem' => 'job_start, job_start_additional'
        ],
        'pensum' => [
            'showitem' => 'work_time, work_time_additional'
        ],
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, --palette--;Title; titles, --palette--;Ort; location, --palette--; Beginn; beginn, --palette--;Arbeitspensum; pensum, --div--;Inhalte, tasks, perspective, profile, looking_for, we_offer, about_location, --div--;Ansprechpartner, contact_person, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_pxjobs_domain_model_job',
                'foreign_table_where' => 'AND tx_pxjobs_domain_model_job.pid=###CURRENT_PID### AND tx_pxjobs_domain_model_job.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'subtitle' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.subtitle',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'location' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'job_start' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.job_start',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'job_start_additional' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.job_start_additional',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'work_time' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.work_time',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'work_time_additional' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.work_time_additional',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'tasks' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.tasks',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'perspective' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.perspective',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'profile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.profile',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'looking_for' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.looking_for',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'we_offer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.we_offer',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'about_location' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.about_location',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'contact_person' => [
            'exclude' => true,
            'label' => 'LLL:EXT:px_jobs/Resources/Private/Language/locallang_db.xlf:tx_pxjobs_domain_model_job.contact_person',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'enableRichtext' => true
            ],
        ],

    ],
];
