<?php
    class Categoria extends DB{
        public function consulta(){
            try{
                $stm = parent::conectar()->prepare("SELECT * FROM categorias");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>