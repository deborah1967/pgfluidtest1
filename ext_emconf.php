<?php
/**
 * @copyright Copyright (C) 2015 PEGU Consulting, P. Arentzen <info@pegu.de>
 * @since 2015-02-07 16:55
 *
 * @author Petra Arentzen <info@pegu.de>
 *
 * @link                http://www.pegu.de
 * @version $Id$
 *
 **/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title' => 'PEGU Fluid Test 1',
    'description' => 'Versuch Nummer 1',
    'category' => 'Plugin',
    'author' => 'Petra Arentzen',
    'author_company' => 'PEGU Consulting',
    'author_email' => 'typo3@pegu.de',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => TRUE,
    'version' => '0.0.0',
    'constraints' => [
        'typo3' => '6.2',
    ],
];