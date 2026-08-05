<?php
    include_once("../controller/EquipamentoController.php");
    global $busca;
    $ec = new EquipamentoController();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipamento</title>
</head>
<body>
    <header>
        <h1>Edição de Equipamento</h1>
    </header>

    <main>
        <form method="get">
            <input type="hidden" name="id_equipamento" value="<?=$busca['id_equipamento']?>">

            <label for="nome_equipamento">Nome:</label>
            <input type="text" name="nome_equipamento" value="<?=$busca['nome_equipamento']?>">

            <label for="estado">Estado:</label>
            <input type="text" name="estado" value="<?=$busca['estado']?>">

            <label for="fk_cliente">Cliente:</label>
            <input type="text" name="fk_cliente" value="<?=$busca['fk_cliente']?>">

            <button type="submit" name="acao" value="editarE">Editar Equipamento</button>
        </form>
    </main>
</body>
</html>
