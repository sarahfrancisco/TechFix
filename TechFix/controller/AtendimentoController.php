<?php
    include_once("../dao/AtendimentoDAO.php");
    include_once("../model/Atendimento.php");
    $ac=new AtendimentoController();
    if($_GET){
        if($_GET['acao']=='excluirA'){
                $ac->excluirAtendimento();

        }
        if($_GET['acao']=='buscarA')
                {
                    $ac->buscarAtendimento();
                }
        if($_GET['acao']=='editarA')
            {
                $ac->buscarAtendimento();
            }
    }
    class AtendimentoController{
        
        function cadastrarAtendimento(){
            if($_POST){
            $atendimentoDAO = new AtendimentoDAO();
            $atendimento = new Atendimento();

            $atendimento->setServico($_POST['servico']);
            $atendimento->setFkCliente($_POST['fk_cliente']);
            $atendimento->setFkEquipamento($_POST['fk_equipamento']);

            $atendimentoDAO->cadastrarAtendimento($atendimento);
        }

        }
        
        function listarAtendimento(){
            //global $listarA;

            $atendimentoDAO = new AtendimentoDAO();
            $listarA = $atendimentoDAO->listarAtendimento();
            return $listarA;
        }

        function excluirAtendimento(){
            
                if($_GET['acao'] == "excluirA"){
                $atendimentoDAO = new AtendimentoDAO();
                $atendimentoDAO->excluir($_GET['id_atendimento']);
                }
            

        }
        
        function buscarAtendimento(){
            if($_GET){
                if($_GET['acao'] == "buscarA"){
                    global $busca;

                    $atendimentoDAO = new AtendimentoDAO();
                    $busca = $atendimentoDAO->buscar($_GET['id_atendimento']);
                    include_once("../view/editarAtendimento.php");
                }

                if($_GET['acao'] == "editarA"){
                    $atendimentoDAO = new AtendimentoDAO();
                    $atendimento = new Atendimento();

                    $atendimento->setIdAtendimento($_GET['id_atendimento']);
                    $atendimento->setServico($_GET['servico']);
                    $atendimento->setFkCliente($_GET['fk_cliente']);
                    $atendimento->setFkEquipamento($_GET['fk_equipamento']);

                    $atendimentoDAO->editar($atendimento);
                }
            }
        }
    }

?>
