<?php
    include_once("../controller/AtendimentoController.php");
    global $listarA;
    $ac = new AtendimentoController();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Atendimentos</title>
</head>
<body>
    <h1>Lista de Atendimentos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Serviço</th>
            <th>Cliente</th>
            <th>Equipamento</th>
        </tr>

        <?php
            $listarA = $ac->listarAtendimento();

            while($atendimento = mysqli_fetch_assoc($listarA)){
        ?>
        <tr>
            <td><?=$atendimento['id_atendimento']?></td>
            <td><?=$atendimento['servico']?></td>
            <td><?=$atendimento['fk_cliente']?></td>
            <td><?=$atendimento['fk_equipamento']?></td>
            <td>
                <a href="../controller/AtendimentoController.php?acao=buscarA&id_atendimento=<?=$atendimento['id_atendimento']?>">Editar</a> |
                <a href="../controller/AtendimentoController.php?acao=excluirA&id_atendimento=<?=$atendimento['id_atendimento']?>">Excluir</a>
            </td>
        </tr>
        <?php
            }
 
        ?>
    </table>
</body>
</html>
