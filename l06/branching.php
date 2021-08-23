<?php


if (1 > 0) {
    echo '1 is greater then 0<br>';
}

$v1 = rand(0, 5);
var_dump($v1);

if ($v1 === 1) {
    echo '1 is greater then 100<br>';
}
elseif ($v1 === 2) {
    echo 'labllal<br>';
}
else{
    echo 'balbla<br>';
}

switch ($v1) {
    case 1:
        echo '1 is greater then 100<br>';
        break;
    case 2:
        echo 'labllal<br>';
        break;
    default:
        echo 'balbla<br>';
}



echo $v1 >= 3 ? 'Pentagon<br>' : 'USA<br>';

$v2 = 'Test Data<br>';

echo $v2 ?: 'Qwerty<br>';

$v4 = 'OK';
$v3 = $v4 ?? 'FAIL';
echo $v3;