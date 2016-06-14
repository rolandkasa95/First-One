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
            $this->setColor($color);
        }

        public function setColor($color)
        {
            $this->color = $color;
        }

        public function setHarvestDate($HarvestDate)
        {
            $this->harvestDate = date("d-m-Y",$HarvestDate);
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

    $apple1 = new Apple('Green');
    $apple2 = new Apple('Red');
    $dateOfHarvestingApple1 = strtotime("June 11");
    $apple1->setHarvestDate($dateOfHarvestingApple1);
    $dateOfHarvestingApple2 = strtotime("June 13");
    $apple2->setHarvestDate($dateOfHarvestingApple2);

    $pear = new Pear('Yellow');
    $dateOfHarvestingPear = strtotime("June 9");
    $pear->setHarvestDate($dateOfHarvestingPear);

    $grape = new Grape('Violet');
    $dateOfHarvestingGrape = strtotime("June 14");
    $grape->setHarvestDate($dateOfHarvestingGrape);

    echo "The first fruit is " . get_class($apple1) . " which color is: " . $apple1->getColor() . " and also it was harvested on: " . $apple1->getHarvestDate() . "<br />";
    echo "The first fruit is " . get_class($apple2) . " which color is: " . $apple2->getColor() . " and also it was harvested on: " . $apple2->getHarvestDate() . "<br />";
    echo "The first fruit is " . get_class($pear) . " which color is: " . $pear->getColor() . " and also it was harvested on: " . $pear->getHarvestDate() . "<br />";
    echo "The first fruit is " . get_class($grape) . " which color is: " . $grape->getColor() . " and also it was harvested on: " . $grape->getHarvestDate() . "<br />";