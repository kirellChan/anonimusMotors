<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Projeto Objeto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
      table th{
        text-align: center;
      }
      table td{
        text-align: center;
      }
      img{
        width: 100px;
        height: 50px;
      }
      .imgEdit{
        margin-top: 10px;
      }
    </style>
</head>
<body id="ab">
  <?php
    include 'painel.php';
  ?>
  <div class="container">
    <section class="formulario">
      <span>*Preenchimento Obrigatório</span>
      <form class="row g-3" action="#" method="POST" 
      enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome do Produto<span>*</span></label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-md-6">
          <label for="valor" class="form-label">Valor R$<span>*</span></label>
          <input type="text" class="form-control" id="valor" name="valor" required>
        </div>
        <div class="col-md-12">
          <label for="descricao" class="form-label">Descrição<span>*</span></label>
          <textarea class="form-control"  id="descricao" name="descricao" required></textarea>  
      </div>
      
            <div class="col-md-6">
          <label for="imagem" class="form-label">Imagem<span>*</span></label>
          <input type="file" class="form-control" id="imagem" name="imagem" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
        </div>
      </form>

<?php
if (isset($_POST['salvar'])){
    include '../../php/conexao.php';
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = str_replace(',','.',$_POST['valor']);
    $imagem = $_FILES['imagem'];
    if(isset($_FILES['imagem'])){
        $extensao = strtolower(substr($_FILES['imagem']['name'],-4));
        $imagem = md5(time()).$extensao;
        $diretorio = '../../imagem';
        move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$imagem);
    }
$sql = mysqli_query($conn,"insert into produto(nomeProduto,descricao,valor,imagem)values('$nome','$descricao',$valor,'$imagem')");

if($sql){
  echo'<div class="alert alert-success" role="alert">
  Cadastrado com Sucesso!
</div>' ; 
}else{
    echo'<div class="alert alert-danger" role="alert">
   Erro ao Cadastrar!
  </div>';


}
}
?>
</section>  
</div>
</body>
</html>