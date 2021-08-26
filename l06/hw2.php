<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate</title>
</head>
<body>
<h1>Calculate</h1>


<form method="post" action="hw2.php">
    <label for="number-input"></label>
    <input type="number"
           name="number"

           id="number-input">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
 <input type="number"
           name="number2"

           id="number-input">

    <button type="submit">Calculate</button>
</form>
<?php

if (!empty($_POST)) {
    $a = $_POST['number'];
    $b = $_POST['operation'];
    $c = $_POST['number2'];

    switch ($b) {
        case '+':
            $result = $a + $c;
            break;
        case '-':
            $result = $a - $c;
            break;
        case '/':
            $result = $a / $c;
            break;
        case '*':
            $result = $a * $c;
            break;
        default:
            $result = 'операция не поддерживается';
    }
    echo $result;
}

/*
* Калькулятор
* создать форму с 3 полями и кнопкой отправки
* 1 поле принимает число
* 2поле примает математический оператор (+.-./.*)
*
* пример [1] [+] [3] [Calculate]
* РезультатЖ 1+3=4
*/
?>
</body>
</html>
