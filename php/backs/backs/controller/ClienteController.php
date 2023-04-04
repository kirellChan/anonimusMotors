<?php

    session_start();

    include_once "../conexao/Conexao.php";
    include_once "../model/Cliente.php";
    include_once "../dao/ClienteDao.php";

    //instancia as classes
    $cliente = new Cliente();
    $clientedao = new ClienteDao();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);

    //se a operação for gravar entra nessa condição
    if(isset($_POST['cadastrar'])){

        $usuario->setidUsuario($d['id']);
        $usuario->setnomeUsuario($d['nome']);0
        $usuario->setemail($d['email']);
        $usuario->setsenha($d['senha']);
        $usuario->setcpf($d['cpf']);
        $usuario->setendereco($d['endereco']);
        $usuario->setnacionalidade($d['nacionalidade']);
        $usuario->setsenha($d['cep']);
        $usuario->setsenha($d['genero']);
        $usuario->setsenha($d['rendaAnual']);

        $clientedao->cadastrar($cliente); 

      

        echo "<script>
                alert('Cadastro realizado com Sucesso. Você Precisa se logar para comprar')
                location.href='../../index.php'
            </script>";        
      

       // header("Location: ../../");
    }
?>