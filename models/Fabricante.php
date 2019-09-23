<?php
    class Fabricante extends DB{
        public function consulta(){
            try{
                $stm = parent::conectar()->prepare("SELECT * FROM fabricantes");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>