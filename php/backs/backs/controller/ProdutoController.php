<?php
    echo '
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    ';
    include_once "../conexao/Conexao.php";
    include_once "../model/Produto.php";
    include_once "../dao/ProdutoDao.php";

    //instancia as classes
    $produto = new Produto();
    $produtodao = new ProdutoDao();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);
   

    //se a operação for gravar entra nessa condição
    if(isset($_POST['salvar'])){

        $produto->setNomeProduto($d['nome']);
        $produto->setDescricao($d['descricao']);
        $produto->setValor(str_replace(',', '.', $d['valor']));
        $imagem = $_FILES['imagem'];
        $produto->setImagem($imagem);

        if ( isset( $_FILES['imagem'] ) ) {
            $extensao = strtolower( substr( $_FILES['imagem']['name'], -4 ) );
            $imagem = md5( time() ).$extensao;
            $diretorio = '../../imagem/';

            move_uploaded_file( $_FILES['imagem']['tmp_name'], $diretorio.$imagem );
        }
       
        $produtodao->create($produto); 
        echo '
            <div class="alert alert-primary" role="alert">
                Produto Cadastrado com Sucesso
            </div>
        ';

        header("Location: ../telas/cadproduto.php");
    }
    
?>

