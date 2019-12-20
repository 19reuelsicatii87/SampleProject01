<?php

// #1 Creating an object
// ===========================================
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

// To create a new object, use the new statement to instantiate a class
// ======================================================================
$bar = new foo;
$bar->do_foo();



// #2 Converting to object
// ===========================================

/* outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
 * The isset() function checks whether a variable is set, which 
 * means that it has to be declared and is not NULL. This function 
 * returns true if the variable exists and is not NULL, otherwise 
 * it returns false.*/
echo "<br>".'=================================='."<br>";
$obj01 = (object) array(
                    '1' => 'One',
                    '2' => 'Two',
                     3 => 'Three',
                     4 => 4
);
echo var_dump(isset($obj01->{'1'}))."<br>";
echo $obj01->{'1'}."<br>";
echo $obj01->{3}."<br>";


// outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
echo "<br>".'=================================='."<br>";
var_dump(key($obj01)); 


/* outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously.
 scalar() function is used to check whether a variable. Variables which contain boolean, double, integer, or string types are scalar. Array, object, and resource are not scalar.*/
$obj = (object) 'ciao';
echo $obj->scalar;  

// 3 ways to create an empty object
// ========================================

// Instantiate stdClass object
$obj1 = new \stdClass; 

// Instantiate anonymous class
$obj2 = new class{}; 

// Cast empty array to object
$obj3 = (object)[]; 


?>