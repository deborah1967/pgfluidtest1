<?php
/**
 * @copyright Copyright (C) 2015 PEGU Consulting, P. Arentzen <info@pegu.de>
 * @since 2015-02-08 10:48
 *
 * @author Petra Arentzen <info@pegu.de>
 *
 * @link                http://www.pegu.de
 * @version $Id$
 *
 **/


namespace TestVendor1\Pgfluidtest1\Controller;


use \TestVendor1\Pgfluidtest1\Domain\Repository\ProductRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class Pgfluidtest1Controller extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * @var \TestVendor1\Pgfluidtest1\Domain\Repository\ProductRepository
     * @inject
     */
    protected $productsRepository = NULL;

    public function __construct() {
//        $this->productsRepository = GeneralUtility::makeInstance('TestVendor1\\Pgfluidtest1\\Domain\\Repository\\ProductRepository',$this)
    }


    public function listAction() {
        /** @var ProductRepository $productsRepository */
        $productsRepository = GeneralUtility::makeInstance('TestVendor1\\Pgfluidtest1\\Domain\\Repository\\ProductRepository');
        $products = $productsRepository->findAll();
//        $products = $this->productsRepository->findAll();
        $this->view->assign('products',$products);
    }
}