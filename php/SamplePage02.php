<?php

// Convertiong Other TYPES ==> BOOLEAN
// var_dump() function is used to display 
// structured information (type and value) 
// ====================================
$var_name1=678;
$var_name2="a678";
$var_name3="678";
$var_name4="W3resource.com";
$var_name5=698.99;
$var_name6=+125689.66;
echo var_dump($var_name1)."<br>";
echo var_dump($var_name2)."<br>";
echo var_dump($var_name3)."<br>";
echo var_dump($var_name4)."<br>";
echo var_dump($var_name5)."<br>";
echo var_dump($var_name6)."<br><br>";

// Convertiong Other TYPES ==> BOOLEAN
// Force to BOOLEAN TYPE
// ====================================
echo var_dump((bool) "")."<br>";        // bool(false)
echo var_dump((bool) 1)."<br>";         // bool(true)
echo var_dump((bool) -2)."<br>";        // bool(true)
echo var_dump((bool) "foo")."<br>";     // bool(true)
echo var_dump((bool) 2.3e5)."<br>";     // bool(true)
echo var_dump((bool) array(12))."<br>"; // bool(true)
echo var_dump((bool) array())."<br>";   // bool(false)
echo var_dump((bool) "false")."<br>";   // bool(true)

?>