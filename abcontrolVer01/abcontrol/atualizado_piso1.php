<?php

session_start();

include_once("conexao.php");

if (!isset($_POST['estoque'])) {
    die("O campo estoque não foi enviado.");
}

// $ESTOQUE = $_POST['estoque'];

// $sql = "UPDATE piso1 SET estoque = '$ESTOQUE' WHERE id = 1";



$ESTOQUE = $_POST['estoque'];

$sql = "UPDATE piso1 
        SET estoque = estoque + $ESTOQUE
        WHERE id = 1";


$resultado = mysqli_query($conn, $sql);

if (!$resultado) {

    die("Erro no SQL: " . mysqli_error($conn));

}

$_SESSION['msg'] = "ESTOQUE ATUALIZADO COM SUCESSO!";

header("Location: painel_admin.php");
exit;

?>