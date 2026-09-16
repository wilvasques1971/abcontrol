<?php

include("conexao.php");


if (isset($_POST["retirar"])) {

    $sql = "UPDATE piso1 SET estoque = estoque - 1 WHERE id = 1 AND estoque > 0";

    mysqli_query($conn, $sql);
}


$sql = "SELECT * FROM piso1 WHERE id = 1";

$resultado = mysqli_query($conn, $sql);

$dados = mysqli_fetch_assoc($resultado);

$estoque = $dados["estoque"];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Absorventes - Piso 1</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Absorventes Gratuitos</h1>

    <div class="stock-card">

        <h2>Banheiro Feminino - Piso 1</h2>

        <hr>

        <h3>Estoque disponível</h3>

        <p>
            <span class="stock-number"><?php echo $estoque; ?></span>
            <span class="stock-label">absorventes</span>
        </p>

        <?php if ($estoque > 0) { ?>

            <form method="POST">

                <button type="submit" name="retirar">
                    Retirar absorvente
                </button>

            </form>

        <?php } else { ?>

            <p class="stock-out">
                <strong>Estoque esgotado.</strong>
            </p>

        <?php } ?>

    </div>

</body>

</html>