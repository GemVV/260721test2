<?php

$clientBalance = 1000;
var_dump($clientBalance);
$clientBalance = $clientBalance - 200;
$clientBalance = $clientBalance + 100;
var_dump($clientBalance);

//$1dollar = 1;
//$one$ = 1;
//test-string = 'data';
$client_birthday_month = 5;
$clientBirthdayMonth = 5;
$cbm = 5; // использовать только общепринятые аббревиатуры
$usd = 123;

echo '<br><br>';

var_dump($clientBalance);
echo '<br>';
$clientBalanceBackup = &$clientBalance;
$clientBalance -= 500;
var_dump($clientBalance, $clientBalanceBackup);
$t = 'q';
$$t = 123;
var_dump($q);
