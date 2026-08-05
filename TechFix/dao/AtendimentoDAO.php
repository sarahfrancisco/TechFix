<?php
    include_once("../config/conexao.php");
    include_once("../model/Atendimento.php");

    class AtendimentoDAO{
        function cadastrarAtendimento($atendimento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $servico = $atendimento->getServico();
            $fkCliente = $atendimento->getFkCliente();
            $fkEquipamento = $atendimento->getFkEquipamento();

            $sql = "INSERT INTO atendimento(servico, fk_cliente, fk_equipamento)
                    VALUES (?,?,?)";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "sii",
                $servico,
                $fkCliente,
                $fkEquipamento
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "ATENDIMENTO CADASTRADO";
        }

        function listarAtendimento(){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "SELECT * FROM atendimento";

            $stmt = mysqli_prepare($conexao, $sql);
            mysqli_stmt_execute($stmt);
            $listarA = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);

            return $listarA;
        }

        function excluir($id_atendimento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "DELETE FROM atendimento
                    WHERE id_atendimento = ?";

            $stmt = mysqli_prepare($conexao, $sql);
            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $id_atendimento
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "ATENDIMENTO EXCLUÍDO";
        }

        function buscar($id_atendimento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "SELECT * FROM atendimento
            WHERE id_atendimento = ?";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $id_atendimento
            );

            mysqli_stmt_execute($stmt);

            $resultado = mysqli_stmt_get_result($stmt);
            $dados = mysqli_fetch_assoc($resultado);

            mysqli_stmt_close($stmt);

            return $dados;
        }

        function editar($atendimento){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $id_atendimento = $atendimento->getIdAtendimento();
            $servico = $atendimento->getServico();
            $fkCliente = $atendimento->getFkCliente();
            $fkEquipamento = $atendimento->getFkEquipamento();

            $sql = "UPDATE atendimento
                    SET servico = ?, fk_cliente = ?, fk_equipamento = ?
                    WHERE id_atendimento = ?";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "siii",
                $servico,
                $fkCliente,
                $fkEquipamento,
                $id_atendimento
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "ATENDIMENTO EDITADO";
        }
    }



?>
