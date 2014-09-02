<?php
echo gethostname();

echo '<hr>';

$link = mysql_connect('10.66.66.111', 'root', '123456');
if (!$link) {
    die('Esec la conectare: ' . mysql_error());
}
echo 'Conectat cu succes';
mysql_close($link);