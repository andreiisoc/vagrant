<?php
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('Esec la conectare: ' . mysql_error());
}
echo 'Conectat cu succes';
mysql_close($link);
?>
