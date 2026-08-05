<?php
    include_once("../config/conexao.php");
    include_once("../model/Cliente.php");

    class ClienteDAO{
        function cadastrarC($cliente){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $nome = $cliente->getNomeCliente();
            $telefone = $cliente->getTelefone();

            $sql = "INSERT INTO cliente(nome, telefone)
                    VALUES (?,?)";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "ss",
                $nome,
                $telefone
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "CLIENTE CADASTRADO";
        }

        function listar(){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "SELECT * FROM cliente";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($stmt);
            $listarC = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);

            return $listarC;
        }

        function excluir($id_cliente){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "DELETE FROM cliente
                    WHERE id_cliente = ?";

            $stmt = mysqli_prepare($conexao, $sql);
            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $id_cliente
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "CLIENTE EXCLUÍDO";
        }

        function buscar($id_cliente){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $sql = "SELECT * FROM cliente
                    WHERE id_cliente = ?";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "i",
                $id_cliente
            );

            mysqli_stmt_execute($stmt);

            $resultado = mysqli_stmt_get_result($stmt);
            $dados = mysqli_fetch_assoc($resultado);

            mysqli_stmt_close($stmt);

            return $dados;
        }

        function editar($cliente){
            $conexaoOBJ = new Conexao();
            $conexao = $conexaoOBJ->getConexao();

            $id_cliente = $cliente->getIdCliente();
            $nome = $cliente->getNomeCliente();
            $telefone = $cliente->getTelefone();

            $sql = "UPDATE cliente
                    SET nome = ?, 
                    telefone = ?
                    WHERE id_cliente = ?";

            $stmt = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param(
                $stmt,
                "ssi",
                $nome,
                $telefone,
                $id_cliente
            );

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            echo "CLIENTE EDITADO";
        }
    }
?>