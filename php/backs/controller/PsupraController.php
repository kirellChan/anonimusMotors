<?php

    session_start();

    include_once "../conexao/Conexao.php";
    include_once "../model/Psupra.php";
    include_once "../dao/PsupraDao.php";

    //instancia as classes
    $psupra = new Psupra();
    $psupradao = new PsupraDao();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);

    //se a operação for gravar entra nessa condição
    if(isset($_POST['cadastrar'])){

        $usuario->setIdconsessionaria($d['id']);
        $usuario->setNome($d['nome']);
        $usuario->setSobrenome($d['sobrenome']);
        $usuario->setTelefone($d['telefone']);
        $usuario->setCelular($d['celular']);
        $usuario->setCpf($d['cpf']);
        $usuario->setEndereco($d['endereco']);
        $usuario->setComplemento($d['complemento']);
        $usuario->setDetalhe($d['detalhes']);

        $psupradao->cadastrar($psupra); 

      

        echo "<script>
                alert('Pedido realizado com sucesso. A concessionária avaliara seu pedido')
                location.href='../../Psupra.php'
            </script>";        
      

       // header("Location: ../../");
    }
?>