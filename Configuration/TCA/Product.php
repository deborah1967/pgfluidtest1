<?php
/**
 * @copyright Copyright (C) 2015 PEGU Consulting, P. Arentzen <info@pegu.de>
 * @since 2015-02-07 17:15
 *
 * @author Petra Arentzen <info@pegu.de>
 *
 * @link                http://www.pegu.de
 * @version $Id$
 *
 **/

if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

/** @var string $_EXTKEY */
$GLOBALS['TCA']['tx_pgfluidtest1_domain_model_product'] = [
    'ctrl' => [
        'title'	=> 'Inventory',
        'label' => 'name',
//        'tstamp' => 'tstamp', // enable this??
//        'crdate' => 'crdate',
//        'cruser_id' => 'cruser_id',
//        'dividers2tabs' => TRUE,
//        'sortby' => 'sorting',
//        'versioningWS' => 2,
//        'versioning_followPages' => TRUE,
//
//        'languageField' => 'sys_language_uid',
//        'transOrigPointerField' => 'l10n_parent',
//        'transOrigDiffSourceField' => 'l10n_diffsource',
//        'delete' => 'deleted',
//        'enablecolumns' => array(
//            'disabled' => 'hidden',
//            'starttime' => 'starttime',
//            'endtime' => 'endtime',
//        ),
//        'searchFields' => 'title,description,url,maxitems,cachelifetime,lastfetched,failures,lasterror,',
//        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Feeds.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('pgfluidtest1') . 'Resources/Public/Icons/tx_pgfluidtest1_domain_model_product.gif'
    ],
    'types' => [
        0 => ['showitem' => 'name,description,quantity'],
    ],
    'columns' => [
        'name' => [
            'label' => 'Item Label',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim,required',
            ],
        ],
        'description' => [
            'label' => 'Item Description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
            ],
        ],
        'quantity' => [
            'label' => 'Stock Quantity',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
            ],
        ],
    ],
];