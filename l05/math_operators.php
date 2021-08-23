<?php


$four = 4;
$five = 5;



$multyply = 4 * 5;
var_dump($multyply);

$sum = $five + $four;
var_dump($sum) ;

$divide = $five / $four;
var_dump($divide);

$res = 1 / 3;
$round = round($res,3);

$floor = floor($res);
$ceil = ceil($res);

var_dump($res, $round, $ceil, $floor);


echo 'Increments';
$incNumber = 5;


$incNumber++;
$incNumber--;
--$incNumber;

var_dump($incNumber);

$test = 6;
$test = $test++ + ++$test;
var_dump($test);

