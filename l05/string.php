<?php

$name = 'Dmytro';

echo 'test string<br>';
echo "test $name string<br>";
echo 'test',    $name,  'string<br>';



print 'test $name string<br>';
print "test $name string<br>";

$val = print 'test $name string<br>';
var_dump($val);
//HERODOC
$sql = <<<SQL
select *
from user  
where name = '$name'
SQL;
echo $sql, '<br>';
//NARODOC
