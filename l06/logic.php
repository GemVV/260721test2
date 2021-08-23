<?php

$v1 = 1 > 0 &&  3 == true;
$v2 = 1 > 0 && 4 > 5;
var_dump($v1, $v2);

$v3 = 1 > 2 || 3 > 1;
var_dump($v3);

$v4 = 1 > 0 xor 4 > 2;
var_dump($v4);
$v5 = 1 > 0 && (4 < 1 )

$v6 = false;
$v7 = !$v5;
$v8 = false == $v6;
$v9 =null
var_dump($v7, $v6);