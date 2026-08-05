<?php
    include_once("../controller/AtendimentoController.php");
    global $busca;
    $ac = new AtendimentoController();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Atendimento</title>
</head>
<body>
    <header>
        <h1>Edição de Atendimento</h1>
    </header>

    <main>
        
        <form method="get">
            <input type="hidden" name="id_atendimento" value="<?=$busca['id_atendimento']?>">

            <label for="servico">Serviço:</label>
            <input type="text" name="servico" value="<?=$busca['servico']?>">

            <label for="fk_cliente">Cliente (id):</label>
            <input type="text" name="fk_cliente" value="<?=$busca['fk_cliente']?>">

            <label for="fk_equipamento">Equipamento (id):</label>
            <input type="text" name="fk_equipamento" value="<?=$busca['fk_equipamento']?>">

            <button type="submit" name="acao" value="editarA">Editar Atendimento</button>
        </form>
    </main>
</body>
</html>
