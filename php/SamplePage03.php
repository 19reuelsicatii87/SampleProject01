<?php

// #1 Example #1 A simple array
// ============================================
$array11 = array(
    "foo" => "barrrrrrrrrr",
    "bar" => "fooooooooooo"
);

$array12 = [
    "foo" => "bar2",
    "bar" => "foo2"
];

print_r($array11);
echo "<br>";
print_r($array12);

// #2 Type Casting and Overwriting example
// ============================================
echo "<br>".'=================================='."<br>";
$array2 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d"
);
var_dump($array2);

// #3 Mixed integer and string keys
// ============================================
echo "<br>".'=================================='."<br>";
$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);

var_dump($array3);
echo "<br>";
print_r($array3);


// #4 Indexed arrays without key
// ================================================
echo "<br>".'=================================='."<br>";
$array4 = array("foo", "bar", "hello", "world");
var_dump($array4);

// #5 Keys not on all elements
// ================================================
echo "<br>".'=================================='."<br>";
$array5 = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array5);


// #6 Accessing array elements
// ================================================
echo "<br>".'=================================='."<br>";
$array6 = array(
    "foo"   => "bar",
    42      => 24,
    "multi" => array(
                "dimensional" => array(
                    "Value01" => "fooOne",
                    "Value02" => "fooTwo",
                )
                ),
    "multitwo" => array(
                 "multitwodimensional"  => "multitwofooooooooo"
                )
);

var_dump($array6["foo"]);
var_dump($array6[42]);
var_dump($array6["multi"]["dimensional"]["Value01"]);
echo "<br>".'=================================='."<br>";
var_dump($array6);

?>