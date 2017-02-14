<?php
/**
 *
 */
class indexModel extends Conexion
{

  function verProducto(){
   $this->query="SELECT * FROM personas";
   $this->getQuery($this->query); 
  }
}



 ?>
