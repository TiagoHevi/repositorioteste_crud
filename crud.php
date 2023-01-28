<?php


    class Crud{

        private $servidor   = "127.0.0.1";
        private $senha      = "root";
        private $usuario    = "root";
        private $banco      = "brincando_cim_sql";
        private $site       = "localhost";
        private $teste = "testeParaloli";

        public $conexao;

        function __construct(){

            $this->conexao = mysqli_connect($this->servidor,$this->usuario,$this->senha,$this->banco);

              if (mysqli_connect_errno()){

                  echo "Falha ao se conectar ao SGBD " . mysqli_connect_error();

              }
              /* else{
                echo "<br>";
                echo "sucesso";
                echo "<br>";
                 }*/
              mysqli_set_charset ( $this->conexao , 'utf8' );
              // Check connection
              mysqli_select_db($this->conexao, $this->banco);

        }

       

        public function inserir($tabela, $coluna, $valor){//create

            //$query = "insert into postagem_index(imagem_postagem,titulo_postagem,resumo)value('imagem6', 'ragnarock', 'E uma fuilem que tem um supereroi com um martelo tor')";

            $query = "INSERT INTO $tabela({$coluna})value({$valor})";
            //echo $query;
            //$query = "insert into postagem_index('{$coluna}')value('{$valor}')";
            //$query = "select imagem_postagem from postagem_index WHERE '{$colunabd}' = '{$nome}' ";

            mysqli_query($this->conexao, $query);

              //$lista = $stmt->fetchAll();

        }

        function update($tabela, $set, $where){
             /**SET 
                  titulo = '$titulo', 
                  data = '$data', 
                  hora = '$hora', 
                  descricao = '$descricao',
                  categoria_cod = $categoria
                  */

              $sql = "UPDATE 
                        $tabela 
                      SET 
                        $set
                      WHERE
                        $where
                       ";
            mysqli_query($this->conexao, $sql);

            }
            //
            function Insert($tabela, $coluna, $valor){


              $query = "INSERT INTO $tabela($coluna)VALUES($valor)";

              mysqli_query($this->conexao, $query);

              //modo de uso
              //$atualizar->Insert('usuario', 'id, usuario, senha', " 1, 'henrique', '123456789' ");

        } 



    }

?>