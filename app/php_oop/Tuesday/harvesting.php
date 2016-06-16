<?php
/**
 * Created by PhpStorm.
 * User: roland
 * Date: 14.06.2016
 * Time: 14:14
 */

/**
 * Class Fruits
 *
 * Here i store the methods and the
 * properties for all the extended
 * classes like apple, pear and grape
 */
    class Fruits
    {

        /**
         * @var string
         */
        private $color;

        /**
         * @var string
         */
        private $harvestDate;

        private $url_toimage;

        /**
         * Construct fruit
         *
         * This constructor will set the color
         * of the fruit.
         *
         * @param string $color
         *
         */
        public function __construct($color)
        {
            $this->setColor($color);
        }

        /**
         * Set Color
         * @param $color
         *
         * This function takes a color as a parameter,
         * and puts it into a property which will store
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
         * Setting up the url to image.
         * @param $url_toimage
         *
         * This function gets a path as parameter,
         * and sets the parameter as a path to an
         * image of the fruit.
         */
        public function setUrl_toimage($url_toimage)
        {
            $this->url_toimage=$url_toimage;
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

        /**
         * Returning the url to image.
         * @return mixed
         *
         * When called it returns the url of the
         * fruit.
         */
        public function getUrl_toImage()
        {
            return $this->url_toimage;
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
         * function which is called in the parent's constructor
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
     * of which was harvested and the url to the picture.
     *
    */
    $apple1 = new Apple('Green');
    $apple2 = new Apple('Red');
    $dateOfHarvestingApple1 = strtotime("June 11");
    $apple1->setHarvestDate($dateOfHarvestingApple1);
    $dateOfHarvestingApple2 = strtotime("June 13");
    $apple2->setHarvestDate($dateOfHarvestingApple2);
    $apple1->setUrl_toimage('/php_oop/Tuesday/images/apple_green.jpeg');
    $apple2->setUrl_toimage('/php_oop/Tuesday/images/apple_red.jpg');

    /**
    * Setting up the Pear.
     *
     *In this part of the code we set up the color, url to picture and
     *the havest date of the product.
     *
    */
    $pear = new Pear('Yellow');
    $dateOfHarvestingPear = strtotime("June 9");
    $pear->setHarvestDate($dateOfHarvestingPear);
    $pear->setUrl_toimage('/php_oop/Tuesday/images/pear.jpeg');

    /**
    * Setting up the Grape.
     *
     * Here we give the color, url to picture and the harvest date of
     * the Grape.
     *
    */
    $grape = new Grape('Violet');
    $dateOfHarvestingGrape = strtotime("June 14");
    $grape->setHarvestDate($dateOfHarvestingGrape);
    $grape->setUrl_toimage('/php_oop/Tuesday/images/grape.jpeg');


    /**
    * We print out the data.
    *
     * In the following 4 lines we print out
     * the name, the color, picture of the fruit and the harvest date
     * of the product.
     *
    */
    echo "The first fruit is " . get_class($apple1) . " which color is: " . $apple1->getColor() . " and also it was harvested on: " . $apple1->getHarvestDate() . "<img src=" . $apple1->getUrl_toImage() . " style='width:30px; height:30px' />" . "<br />";
    echo "The first fruit is " . get_class($apple2) . " which color is: " . $apple2->getColor() . " and also it was harvested on: " . $apple2->getHarvestDate() . "<img src=" . $apple2->getUrl_toImage() . " style='width:30px; height:30px' />" .  "<br />";
    echo "The first fruit is " . get_class($pear) . " which color is: " . $pear->getColor() . " and also it was harvested on: " . $pear->getHarvestDate() . "<img src=" . $pear->getUrl_toImage() . " style='width:30px; height:30px' />" .  "<br />";
    echo "The first fruit is " . get_class($grape) . " which color is: " . $grape->getColor() . " and also it was harvested on: " . $grape->getHarvestDate() . "<img src=" . $grape->getUrl_toImage() . " style='width:30px; height:30px' />" .  "<br />";