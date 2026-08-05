<?php
    include_once("../controller/EquipamentoController.php");
    $ec = new EquipamentoController();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Equipamentos</title>
</head>
<body>
    <h1>Lista de Equipamentos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Cliente</th>
            <th>AÇÃO</th>
        </tr>

        <?php
            $listarE = $ec->listarEquipamento();

            while($equipamento = mysqli_fetch_assoc($listarE)){
        ?>
        <tr>
            <td><?=$equipamento['id_equipamento']?></td>
            <td><?=$equipamento['nome_equipamento']?></td>
            <td><?=$equipamento['estado']?></td>
            <td><?=$equipamento['nome']?></td>
            <td>
                <a href="../controller/EquipamentoController.php?acao=buscarE&id_equipamento=<?=$equipamento['id_equipamento']?>">Editar</a> |
                <a href="../controller/EquipamentoController.php?acao=excluirE&id_equipamento=<?=$equipamento['id_equipamento']?>">Excluir</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
