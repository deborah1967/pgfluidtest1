<?php
/**
 * @copyright Copyright (C) 2015 PEGU Consulting, P. Arentzen <info@pegu.de>
 * @since 2015-02-07 17:03
 *
 * @author Petra Arentzen <info@pegu.de>
 *
 * @link                http://www.pegu.de
 * @version $Id$
 *
 **/


namespace TestVendor1\Pgfluidtest1\Domain\Model;


use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;


class Product extends AbstractEntity {
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var int
     */
    protected $quantity = 0;

    public function __construct($name = '',$description = '', $quantity = 0) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setQuantity($quantity);
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity) {
        $this->quantity = (int)$quantity;
    }

    /**
     * @return int
     */
    public function getQuantity() {
        return $this->quantity;
    }
}