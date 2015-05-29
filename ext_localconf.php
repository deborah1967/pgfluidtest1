<?php
/**
 * @copyright Copyright (C) 2015 PEGU Consulting, P. Arentzen <info@pegu.de>
 * @since 2015-02-08 11:02
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

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TestVendor1.'.$_EXTKEY,
    'List',
    ['Pgfluidtest1' => 'list']
);
