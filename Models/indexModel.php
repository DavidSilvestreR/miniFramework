<?php

class indexModel extends Conexion
{
  function __construct(){

  }

  public function verProducto(){
   $this->query="SELECT * FROM description";
   $this->getQuery($this->query);
   return $this->array;
  }
}



 ?>
