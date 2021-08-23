<?php

$int = 1;
var_dump($int, PHP_INT_MIN, PHP_INT_MAX);
$float = 3.2;
var_dump($float);

$problem = (0.1+0.7)*10;
var_dump($problem, (int)$problem);

$string = 'test string';
var_dump($string, $string);

$bool = true;
$bool2 = false;
$testString = '';
var_dump($bool, $bool2, 5 < 10, empty($testString));


$null = null;
var_dump($null);


$array = ['test', 123, 5.4];
var_dump($array, $array[1]);

$object = new stdClass();
$object->test = 123;
var_dump($object, $object->test);

$resourse = fopen(__DIR__ . 'constants.php', 'rb');
var_dump($resourse);

$callable = static function() {
    var_dump('INSIDE FUNCTION');
};
var_dump($callable);
$callable();