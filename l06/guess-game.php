<?php

if (isset($_POST['number']))
$number = (int)$_POST['number'];
$randomNumber = random_int(1, 10);

$randomNumber = $number === $rabdomNumber;

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guess Game</title>
</head>
<body>
    <h1>Guess Game</h1>
    <?php if ($isSuccess) : ?>
    <P>Yuo are WINNER</P>
    <P>You are LOOSER. Our number is <?= $randomNumber</P>
    <?php endif ?>


    <form method="post">
        <label for="number-input">Enter number from 1 to 10</label>
        <input type="number" name="number" min="1" max="10" id="number-input">
            name
    </form>
</body>
</html>