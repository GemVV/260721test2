<?php

setcookie('skillup_test', 'OK');

$money = 123;

var_dump($_POST, $_GET, $_COOKIE,$_FILES, $_REQUEST);
var_dump($_SERVER, $_ENV, $GLOBALS);



?>
<form mathod="post"
      action="/l07/superglobal.php?name=Dmyto&age=32"
        anctype="multipart/form-data">
    <input tape="text" name="test" value="123">
    <input tape="file" name="attach">
    <input type="submit" value="TEST">

</form>
