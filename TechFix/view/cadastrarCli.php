<?php
    include_once("../controller/ClienteController.php");
    $cc = new ClienteController();
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>techfix</title>
    </head>
    <body>
        <header>
            <h1>
                cadastrar cliente
            </h1>
        </header>
        <main>
            <?php $cc->cadastrarCliente();?>
            <form method="post">
                <input type="text" name="nome" required>
                <input type="text" name="telefone" required>

                <button type="submit" name="cadastrarCliente">Cadastrar</button>
            </form>
        </main>
        
    </body>
    </html>