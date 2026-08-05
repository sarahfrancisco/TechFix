<?php
    include_once("../controller/AtendimentoController.php");
    $ac = new AtendimentoController();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Atendimento</title>
</head>
<body>
    <header>
        <h1>Cadastrar Atendimento</h1>
    </header>

    <main>
        <?php $ac->cadastrarAtendimento()?>
        <form method="post">
            <label for="servico">Serviço:</label>
            <input type="text" name="servico" required>

            <label for="fk_cliente">Cliente:</label>
            <input type="text" name="fk_cliente" required>

            <label for="fk_equipamento">Equipamento:</label>
            <input type="text" name="fk_equipamento" required>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>
