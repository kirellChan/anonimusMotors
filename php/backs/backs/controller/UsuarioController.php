<?php
    include_once "../conexao/Conexao.php";
    include_once "../model/Usuario.php";
    include_once "../dao/UsuarioDao.php";

    //instanciar as classes

    $usuario = new Usuario();
    $usuariodao = new UsuarioDao();

    // pegar todos os dados passados pelo POST

    $d = filter_input_array(INPUT_POST);

    if(isset($_POST['cadastrar'])){
        $usuario->setidUsuario($d['id']);
        $usuario->setnomeUsuario($d['nome']);
        $usuario->setemail($d['email']);
        $usuario->setsenha($d['senha']);
        $usuario->setcpf($d['cpf']);
        $usuario->setendereco($d['endereco']);
        $usuario->setnacionalidade($d['nacionalidade']);
        $usuario->setsenha($d['cep']);
        $usuario->setsenha($d['genero']);
        $usuario->setsenha($d['rendaAnual']);
        
        $usuariodao->create($usuario);

        header("Location:../../");
        
    }
    

elseif (isset($_POST['editar'])) {
    $usuario->setidUsuario($d['id']);
    $usuario->setnomeUsuario($d['nome']);
    $usuario->setemail($d['email']);
    $usuario->setsenha($d['senha']);
    $usuario->setcpf($d['cpf']);
    $usuario->setendereco($d['endereco']);
    $usuario->setnacionalidade($d['nacionalidade']);
    $usuario->setsenha($d['cep']);
    $usuario->setsenha($d['genero']);
    $usuario->setsenha($d['rendaAnual']);
    
    $usuariodao->update($usuario);
    header("Location:../../");

}elseif (isset($_GET['del'])) {
    $usuario->setId($d['id']);
    $usuariodao->delelte($usuario);
    header("Location:../../");
}else{
    header("Location:../../");
}

?>
