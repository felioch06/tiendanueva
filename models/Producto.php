<?php
    class Producto extends DB{
        public function consulta(){
            try{
                $stm = parent::conectar()->prepare("SELECT * FROM productos INNER JOIN fabricantes ON productos.fk_fabricante = fabricantes.id_fabricante INNER JOIN  categorias ON productos.fk_categoria = categorias.id_categoria");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>