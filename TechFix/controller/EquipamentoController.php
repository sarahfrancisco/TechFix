<?php
    include_once("../dao/EquipamentoDAO.php");
    include_once("../model/Equipamento.php");

    $ec = new EquipamentoController();

    if($_POST){
        $cc->cadastrarCliente();
    }

    if($_GET){
        if($_GET['acao'] == 'excluirE'){
                $ec->excluirEquipamento();
        }

        if($_GET['acao'] == 'buscarE'){
                $ec->buscarEquipamento();
        }

        if($_GET['acao'] == 'editarE'){
            $ec->buscarEquipamento();
        }
    }

    class EquipamentoController{
        function cadastrarEquipamento(){
            if($_POST){
                $equipamentoDAO = new EquipamentoDAO();
                $equipamento = new Equipamento();

                $equipamento->setNomeEquipamento($_POST['nome_equipamento']);
                $equipamento->setEstado($_POST['estado']);
                $equipamento->setFkCliente($_POST['fk_cliente']);

                $equipamentoDAO->cadastrarEquipamento($equipamento);
            }
        }

        function listarEquipamento(){
            
            $equipamentoDAO = new EquipamentoDAO();
            $listarE = $equipamentoDAO->listarEquipamento();
            return $listarE;
        }

        function excluirEquipamento(){
            if($_GET){
                if($_GET['acao'] == "excluirE"){
                    $equipamentoDAO = new EquipamentoDAO();
                    $equipamentoDAO->excluir($_GET['id_equipamento']);
                }
            }
        }

        function buscarEquipamento(){

            if($_GET){
                if($_GET['acao'] == "buscarE"){
                    global $busca;

                    $equipamentoDAO = new EquipamentoDAO();
                    $busca = $equipamentoDAO->buscar($_GET['id_equipamento']);
                    include_once("../view/editarEquipamento.php");
                }
                if($_GET['acao'] == "editarE"){
                    $equipamentoDAO = new EquipamentoDAO();

                    $equipamento->setIdEquipamento($_GET['id_equipamento']);
                    $equipamento->setNomeEquipamento($_GET['nome_equipamento']);
                    $equipamento->setEstado($_GET['estado']);
                    $equipamento->setCliente($_GET['fk_cliente']);


                    $equipamentoDAO->editar($equipamento);
                    
                }
            }
        }
    }
?>
