<?php

class UsuarioDao{
    
    public function create(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (                   
                  nomeUsuario,loginUsuario,senha)
                  VALUES (
                  :nomeUsuario,:loginUsuario,:senha)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeUsuario", $usuario->getNomeUsuario());
            $p_sql->bindValue(":loginUsuario", $usuario->getLoginUsuario());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            
           
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Usuário <br>" . $e . '<br>';
        }
    }
    

    public function read() {
        try {
            $sql = "SELECT * FROM usuario order by idUsuario asc  ";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    private function listaUsuarios($linha) {
        $usuario = new Usuario();
        $usuario->setIdUsuario($linha['idUsuario']);
        $usuario->setNomeUsuario($linha['nomeUsuario']);
        $usuario->setLoginUsuario($linha['loginUsuario']);
        $usuario->setSenha($linha['senha']);
        return $usuario;
    }
    
     public function update(Usuario $usuario) {
        try {
            $sql = "UPDATE usuario set
                
                  nomeUsuario=:nomeUsuario,
                  loginUsuario=:loginUsuario,
                  senha=:senha                  
                                                                       
                  WHERE idUsuario = :idUsuario";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nomeUsuario", $usuario->getNomeUsuario());
            $p_sql->bindValue(":loginUsuario", $usuario->getLoginUsuario());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Usuario $usuario) {
        try {
            $sql = "DELETE FROM usuarioa WHERE idUsuario = :idUsuario";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }

 }

 ?>