<?php
    include_once("../dao/ClienteDAO.php");
    include_once("../model/Cliente.php");

    $cc = new ClienteController();

    if($_POST){
        $cc->cadastrarCliente();
    }

    if($_GET){
        if($_GET['acao'] == 'excluirC'){
                $cc->excluirCliente();
        }

        if($_GET['acao'] == 'buscarC'){
                $cc->buscarCliente();
        }

        if($_GET['acao'] == 'editarC'){
            $cc->buscarCliente();
        }
    }

    class ClienteController{

        function cadastrarCliente(){
            if($_POST){
                $clienteDAO = new ClienteDAO();
                $cliente = new Cliente();

                $cliente->setNomeCliente($_POST['nome']);
                $cliente->setTelefone($_POST['telefone']);

                $clienteDAO->cadastrarC($cliente);
            }
        }

        function listarCliente(){
            $clienteDAO = new ClienteDAO();
            $listarC = $clienteDAO->listar();
            return $listarC;
        }

        function excluirCliente(){
            if($_GET['acao'] == 'excluirC'){
                $clienteDAO = new ClienteDAO();
                $clienteDAO->excluir($_GET['id_cliente']);
            }
        }

        function buscarCliente(){
            if($_GET){
                if($_GET['acao'] == 'buscarC'){
                    global $busca;

                    $clienteDAO = new ClienteDAO();
                    $busca = $clienteDAO->buscar($_GET['id_cliente']);
                    include_once("../view/editarCli.php");
                }

                if($_GET['acao'] == 'editarC'){
                    $clienteDAO = new ClienteDAO();
                    $cliente = new Cliente();

                    $cliente->setIdCliente($_GET['id_cliente']);
                    $cliente->setNomeCliente($_GET['nome']);
                    $cliente->setTelefone($_GET['telefone']);

                    $clienteDAO->editar($cliente);
                }
            }
        }
    }
?>