<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Projeto Objeto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <style>
      table th{
        text-align: center;
      }
      table td{
        text-align: center;
      }
      img.imagem{
        width: 100px;
        height: 70px;
      }
      
    </style>
</head>
<body>
  <?php
    include 'painel.php';
  ?>
  <div class="container">
    <section>
      <header>
        <h3>Consultar Produtos</h3>
      </header>
      <div class="formulario">
   
        <form action="#" method="POST">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="digite a letra ou o nome do produto"
                name="nome"
              />
              <div class="form-group">
              <label>Para ver todos os produtos, clique direto em Consultar</label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="consultar">Consultar</button>
            </div>
          </form>
          <hr>
        <?php
            if (isset($_POST['consultar'])) {
                include '../../php/conexao.php';
                $nome = $_POST['nome'];
                $sql = mysqli_query($conn,"select * from produto where 
                nomeProduto like '%$nome%'");

                echo '<div class="container">';
                echo '<h4>Resultado da Busca</h4>';
                echo '<table class="table">';
                echo '<thead>';
                echo '<tr class="table-primary">
                    <th scope="col">ID Produto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Controle</th>
                    </tr>
                    </thead>
                ';
                while($linha = mysqli_fetch_array($sql)){
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>'.$linha['idProduto'].'</td>
                          <td>'.$linha['nomeProduto'].'</td>
                          <td>'.$linha['descricao'].'</td>
                          <td>R$ '.str_replace('.',',',$linha['valor']).'</td>
                          <td><div>
                            <img class="imagem" src="../../imagem/'.$linha['imagem'].'"></div></td>
                          <td>
                          <a href="">
                          <button type="button" class="btn btn-warning">
                          Editar</button></a>
                          <a href="">
                          <button type="button" class="btn btn-danger">
                          Excluir</button></a>
                          </td>';
                    echo '</tr>';
                    echo '</tbody>';
                }

            }
        ?>
      
    </div>

    </section>
  </div>

</body>
</html>