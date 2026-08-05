<?php
    include_once("../controller/EquipamentoController.php");
    $ec = new EquipamentoController();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Equipamento</title>
</head>
<body>
    <header>
        <h1>Cadastrar Equipamento</h1>
    </header>

    <main>
        <?php $ec->cadastrarEquipamento();?>
        <form method="post">
            <label for="nome_equipamento">Nome do Equipamento:</label>
            <input type="text" name="nome_equipamento" required>

            <label for="estado">Estado:</label>
            <input type="text" name="estado" required>

            <label for="fk_cliente">Cliente:</label>
            <input type="text" name="fk_cliente" required>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>
