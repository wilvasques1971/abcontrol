<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Absorvente</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
if (isset($_SESSION['msg'])) {
    echo '<p class="session-msg">' . htmlspecialchars($_SESSION['msg']) . '</p>';
    unset($_SESSION['msg']);
}
?>

<div class="form-container">

    <form class="row g-3" method="POST" action="atualizado_piso2.php">

        <label for="estoque" class="form-label">Atualizar Estoque</label>
        <input type="text" class="form-control" name="estoque" id="estoque">

        <div class="col-12">
            <button type="submit" class="btn btn-primary">SALVAR</button>
        </div>

    </form>
</div>

<a href="painel_admin.php">Voltar</a>

</body>
</html>
