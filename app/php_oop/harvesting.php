<?php
/**
 * Created by PhpStorm.
 * User: roland
 * Date: 14.06.2016
 * Time: 14:14
 */
    class Fruits
    {
        /**
         * Two variables.
         *
         * Initiated 2 variables which will contain data
         * of the color of the fruit and the harvest date
         *
         */
        private $color;
        private $harvestDate;

        /**
         * Fruits constructor.
         * @param $color
         *
         * This constructor will set the color
         * of the fruit.
         *
         */
        public function __construct($color)
        {
            $this->setColor($color);
        }

        /**
         * Setting Color.
         * @param $color
         *
         * This function takes a color as a parameter,
         * and puts it into a variable which will store
         * the data when the object is initiated.
         *
         */
        public function setColor($color)
        {
            $this->color = $color;
        }

        /**
         * Setting the Harvest Date.
         * @param $HarvestDate
         *
         * This function will also takes a parameter,
         * which has a data type, and stores it in a
         * variable when it's called.
         *
         */
        public function setHarvestDate($HarvestDate)
        {
            $this->harvestDate = date("d-m-Y",$HarvestDate);
        }

        /**
         * Returning the color field.
         * @return mixed
         *
         * When called upon this function will send back
         * the stored color of the object.
         *
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * Returning the harvest Date.
         * @return mixed
         *
         * When called upon, this function will return
         * a data in which contains the date of the harvest.
         *
         */
        public function getHarvestDate()
        {
            return $this->harvestDate;
        }
    }

    /**
    * Class Apple
     *
     * This class extends the Fruits class,
     * in which are all the function and variablesK.
     *
    */
    class Apple extends Fruits
    {
        /**
         * Apple constructor.
         * @param $color
         *
         * This constructor calls the parents(Fruits)
         * constructor, and will set the color wich was
         * given as a parameter
         *
         */
        public function __construct($color)
        {
            parent::__construct($color);
        }
    }

    /**
    * Class Pear
     *
     * This Class also extends the Fruit class.
    */
    class Pear extends Fruits
    {
        /**
         * Pear constructor.
         * @param $color
         *
         * This constructor calls up the parent's(Fruits)
         * constructor and sends the color for the setColor
         * function wich is called in the parent's constructor
         *
         */
        public function __construct($color)
        {
            parent::__construct($color);
        }
    }

    /**
    * Class Grape
     *
     * This Class also extends the Grape class.
    */
    class Grape extends Fruits
    {
        /**
         * Grape constructor.
         * @param $color
         *
         * This constructor calls up the parent's(Fruits)
         * constructor and sends the color for the setColor
         * function wich is called in the parent's constructor
         *
         */
        public function __construct($color)
        {
            parent::__construct($color);
        }
    }

    /**
    * Setting up the apples.
     *
     * In this segment of the code we send the __constructor
     * the color of the apple, afterwards we send the date
     * of which was harvested.
     *
    */
    $apple1 = new Apple('Green');
    $apple2 = new Apple('Red');
    $dateOfHarvestingApple1 = strtotime("June 11");
    $apple1->setHarvestDate($dateOfHarvestingApple1);
    $dateOfHarvestingApple2 = strtotime("June 13");
    $apple2->setHarvestDate($dateOfHarvestingApple2);

    /**
    * Setting up the Pear.
     *
     *In this part of the code we set up the color and
     *the havest date of the product.
     *
    */
    $pear = new Pear('Yellow');
    $dateOfHarvestingPear = strtotime("June 9");
    $pear->setHarvestDate($dateOfHarvestingPear);

    /**
    * Setting up the Grape.
     *
     * Here we give the color and the harvest date of
     * the Grape.
     *
    */
    $grape = new Grape('Violet');
    $dateOfHarvestingGrape = strtotime("June 14");
    $grape->setHarvestDate($dateOfHarvestingGrape);

    /**
    * We print out the data.
    *
     * In the following 4 lines we print out
     * the name, the color, and the harvest date
     * of the product.
     *
    */
    echo "The first fruit is " . get_class($apple1) . " which color is: " . $apple1->getColor() . " and also it was harvested on: " . $apple1->getHarvestDate() . "<br />";
    echo "The first fruit is " . get_class($apple2) . " which color is: " . $apple2->getColor() . " and also it was harvested on: " . $apple2->getHarvestDate() . "<br />";
    echo "The first fruit is " . get_class($pear) . " which color is: " . $pear->getColor() . " and also it was harvested on: " . $pear->getHarvestDate() . "<br />";
    echo "The first fruit is " . get_class($grape) . " which color is: " . $grape->getColor() . " and also it was harvested on: " . $grape->getHarvestDate() . "<br />";