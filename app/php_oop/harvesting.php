<?php
/**
 * Created by PhpStorm.
 * User: roland
 * Date: 14.06.2016
 * Time: 14:14
 */
    class Fruits
    {

        private $color;
        private $harvestDate;

        public function __construct($color)
        {
            $this->color = $color;
        }

        public function setColor($color)
        {
            $this->color = $color;
        }

        public function setHarvestDate($HarvestDate)
        {
            $this->harvestDate = $HarvestDate;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getHarvestDate()
        {
            return $this->harvestDate;
        }
    }

    class Apple extends Fruits
    {

        private $color;
        private $harvestDate;

        public function __construct($color)
        {
            parent::__construct($color);
        }
    }

    class Pear extends Fruits
    {
        private $color;
        private $harvestDate;

        public function __construct($color)
        {
            parent::__construct($color);
        }
    }

    class Grape extends Fruits
    {
        private $color;
        private $harvestDate;

        public function __construct($color)
        {
            parent::__construct($color);
        }
    }