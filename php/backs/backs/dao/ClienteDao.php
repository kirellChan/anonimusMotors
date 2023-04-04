<?php
/*
    Criação da classe Usuario com o CRUD
*/

class ClienteDao{

   // session_start();
    
    public function cadastrar(Cliente $cliente) {
        try {
            $sql = "INSERT INTO cliente (                   
                  nomeCliente,email,senha,cpf,endereco,nacionalidade,cep,sexo,rendaAnual)
                  VALUES (
                    :nomeCliente, :email, :senha, :cpf, :endereco, :nacionalidade, :cep, :sexo, :rendaAnual)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeCliente", $cliente->getNomeCliente());
            $p_sql->bindValue(":email", $cliente->getEmail());
            $p_sql->bindValue(":senha", $cliente->getSenha());
            $p_sql->bindValue(":cpf", $cliente->getCpf());
            $p_sql->bindValue(":endereco", $cliente->getEndereco());
            $p_sql->bindValue(":nacionalidade", $cliente->getNacionalidade());           
            $p_sql->bindValue(":cep", $cliente->getCep());
            $p_sql->bindValue(":genero", $cliente->getGenero());
            $p_sql->bindValue(":rendaAnual", $cliente->getRandaAnual());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Cliente <br>" . $e . '<br>';
        }
    }

    
 }

 ?>
  