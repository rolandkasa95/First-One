<!--
  http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
  Beggining php Classes
 -->
<?php

// This Class i constructing and deconstructing itself,
// it's only made for learning porpuses.

class MyClass
{
    public $prop1 = "I'm a class property!";

    //This is the constructor, it is initiated whenever the object is made
    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }
    //This is de deconstructor, it is initiated when the program stops,
    //or the unset command is used
    public function __destruct()
    {
        echo "The class was destroyed <br />";
    }

    //This function print the object whenever it's printed by itself
    public function __toString()
    {
        echo "Using the toString method: ";
        return $this->getProperty();
    }

    //With this function we can set a new value to @param $prop1
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    //with this function we can print out the value of @param $prop1
    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }
}


//This is an extended class by @param MyClass
class MyClass1 extends MyClass
{
    //This function calls in the parent construtor, and also prints out his one
    public function __construct()
    {
        parent::__construct();
        echo "A new constructor in " . __CLASS__ . " was initiated. <br />";
    }

    //This function prints out the name of the Class
    public function newMethod()
    {
        echo "From a new method in " . __CLASS__ . ". <br />";
    }
}

//Setting up new objects
$obj = new MyClass;
$obj2 = new MyClass;
$obj3 = new MyClass1;

// Get the property value
echo $obj->getProperty();
echo $obj2->getProperty();

// Set a new one
$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I'm just a poor boy having no fantasy");

// Read it out again to show the change
echo $obj->getProperty();
echo $obj2->getProperty();
$obj3->newMethod();

//destroyed object
echo $obj;
unset($obj);
unset($obj2);
unset($obj3);

echo "End of file. <br />";
?>
