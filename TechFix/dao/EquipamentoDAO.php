<?php
    include_once("../config/conexao.php");
    include_once("../model/Equipamento.php");

    class EquipamentoDAO{
        function cadastrarEquipamento($equipamento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $nomeEquipamento = $equipamento->getNomeEquipamento();
            $estado = $equipamento->getEstado();
            $fkCliente = $equipamento->getFkCliente();

            $sql = "INSERT INTO equipamento(nome_equipamento, estado, fk_cliente)
                    VALUES (?,?,?)";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "ssi",
                $nomeEquipamento,
                $estado,
                $fkCliente
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "EQUIPAMENTO CADASTRADO";
        }

        function listarEquipamento(){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "SELECT e.id_equipamento,
                     e.nome_equipamento, 
                     e.estado, 
                     c.id_cliente,
                     c.nome
                    FROM equipamento e
                    INNER JOIN cliente c ON e.fk_cliente = c.id_cliente";

            $stmt = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($stmt);
            $listarE = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);

            return $listarE;
        }

         function excluir($id_equipamento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "DELETE FROM equipamento
                    WHERE id_equipamento = ?";

            $stmt = mysqli_prepare($conexao, $sql);
            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $id_equipamento
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "EQUIPAMENTO EXCLUÍDO";
        }

        function buscar($id_equipamento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "SELECT * FROM equipamento
                    WHERE id_equipamento = ?";

            $stmt = mysqli_prepare($conexao, $sql);
            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $id_equipamento
            );

            mysqli_stmt_execute($stmt);
            $resultado = mysqli_stmt_get_result($stmt);
            $dados = mysqli_fetch_assoc($resultado);
            mysqli_stmt_close($stmt);

            return $dados;
        }

        function editar($equipamento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $id_equipamento = $equipamento->getIdEquipamento();
            $nomeEquipamento = $equipamento->getNomeEquipamento();
            $estado = $equipamento->getEstado();
            $fkCliente = $equipamento->getFkCliente();

            $sql = "UPDATE equipamento
                    SET nome_equipamento = ?, estado = ?, fk_cliente = ?
                    WHERE id_equipamento = ?";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "ssii",
                $nomeEquipamento,
                $estado,
                $fkCliente,
                $id_equipamento
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "EQUIPAMENTO EDITADO";
        }
    }
?>
