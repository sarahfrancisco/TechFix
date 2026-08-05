<?php
    include_once("../controller/ClienteController.php");
    global $busca;
    $cc = new ClienteController();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <header>
        <h1>Edição de Cliente</h1>
    </header>

    <main>
        <form method="get">
            <input type="hidden" name="id_cliente" value="<?=$busca['id_cliente']?>">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?=$busca['nome']?>">

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" value="<?=$busca['telefone']?>">

            <button type="submit" name="acao" value="editarC">Editar Cliente</button>
        </form>
    </main>
</body>
</html>
