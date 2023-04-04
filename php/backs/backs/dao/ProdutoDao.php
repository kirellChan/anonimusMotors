<?php
/*
    Criação da classe Usuario com o CRUD
*/

class ProdutoDao{
    
    public function create(Produto $produto) {
        try {
            $sql = "INSERT INTO produto (                   
                  nomeProduto,descricao,valor,imagem)
                  VALUES (
                  :nomeProduto,:descricao,:valor,:imagem)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeProduto", $produto->getNomeProduto());
            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":valor", $produto->getValor());
            $p_sql->bindValue(":imagem", $produto->getImagem());
           
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Produto <br>" . $e . '<br>';
        }
    }
    

    public function read() {
        try {
            $sql = "SELECT * FROM tbProduto  order by idProduto asc  ";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaProdutos($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

 }

 ?>