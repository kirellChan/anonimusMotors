<?php
/*
    Criação da classe Usuario com o CRUD
*/

class PsupraDao{

   // session_start();
    
    public function cadastrar(Psupra $Psupra) {
        try {
            $sql = "INSERT INTO consessionaria (idconcessionaria, nome, sobrenome, telefone, celular, cpf, endereco, complemento, detalhes)
                  VALUES ( 
                   :default, :nome, :sobrenome, :telefone, :celular, :cpf, :endereco, :complemento, :detalhes)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":idconcessionaria", $consessionaria->getIdconcessionaria());
            $p_sql->bindValue(":nome", $consessionaria->getNome());
            $p_sql->bindValue(":sobrenome", $consessionaria->getSobenome());
            $p_sql->bindValue(":telefone", $consessionaria->getTelefone());
            $p_sql->bindValue(":celular", $consessionaria->getCelular());
            $p_sql->bindValue(":cpf", $consessionaria->getCpf());
            $p_sql->bindValue(":endereco", $consessionaria->getEndereco());           
            $p_sql->bindValue(":complemento", $consessionaria->getComplemento());
            $p_sql->bindValue(":detalhes", $consessionaria->getDetalhes());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao contactar a concessionária <br>" . $e . '<br>';
        }
    }

    
 }

 ?>
  