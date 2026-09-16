<?php

$servidor = 'localhost';
$usuario = 'wilso990_abcontrol';
$senha = 'jUQd0XS2&xV$X5}d';
$dbname = 'wilso990_DB_abcontrol';

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if (!$conn) {
    die("Erro na conex«ªo com o banco: " . mysqli_connect_error());
}

?>
