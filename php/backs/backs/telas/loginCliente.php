<?php
    session_start();
    include "../../php/conexao.php";
    if (isset($_POST['entrar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = mysqli_query($conn,"select idCliente,nomeCliente,email,senha from cliente email='$email' and senha='$senha'");

        if($linha = mysqli_fetch_array($sql)) {
            $idCliente = $linha['idCliente'];
            $email = $linha['email'];
            $senha = $linha['senha'];
            $nomeCliente = $linha['nomeCliente'];
            
            $_SESSION['email'] = $emailCli;
            $_SESSION['senha'] = $senhaCli;
            $_SESSION['nome'] = $nomeCli;
            $_SESSION['id'] = $idCli;

            echo "<script>
            alert('Bem-vindo(a) $nomeCliente')
            location.href='compras.php'
            </script>";
        }else{
            echo "<script>
            alert('Erro ao logar')
            location.href='../../index.php'
            </script>";
        }
    }
?>