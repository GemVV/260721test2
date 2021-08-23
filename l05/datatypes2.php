<?php


$var = 'Test text';
$var = 111;
var_dump(gettype($var));

var_dump(
    is_int('test'),
    is_int(22),
    is_float('3.5'),
    is_array('3.5'),
    is_numeric(22),

);


echo '<hr>';

var_dump(
    (int)'test',
    (int)12.2,
    (int)'12.2',
    (int)'test 123',
    (int)'123 test',
    (int)' 123 test'

);
echo '<hr>';

$var1 = false;
var_dump(
    empty(0),
    empty('0'),
    isset(0),


);


