<?php
    include_once("../controller/ClienteController.php");
    $cc = new ClienteController();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>TELEFONE</th>
            <th>AÇÃO</th>
        </tr>

        <?php
            $listarC = $cc->listarCliente();

            while($cliente = mysqli_fetch_assoc($listarC)){
        ?>
        <tr>
            <td><?=$cliente['id_cliente']?></td>
            <td><?=$cliente['nome']?></td>
            <td><?=$cliente['telefone']?></td>
            <td>
                <a href="../controller/ClienteController.php?acao=buscarC&id_cliente=<?=$cliente['id_cliente']?>">Editar</a>
                |
                <a href="../controller/ClienteController.php?acao=excluirC&id_cliente=<?=$cliente['id_cliente']?>">Excluir</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>