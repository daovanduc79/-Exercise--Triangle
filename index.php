<?php
include_once 'class/MyShape.php';
include_once 'class/Triangle.php';

$triangle = new Triangle('Triangle-01', 'blue', 1, 2, 3);
echo $triangle->__toString() . '<br>';
$triangle->setSide1(2);
$triangle->setSide2(3);
$triangle->setSide3(4);
echo $triangle->__toString();