<?php

class personasModel extends Conexion
{

  function __construct()
  {
    # code...
  }
  public function getpersonas(){
   $this->query="SELECT * FROM personas";
   $this->getQuery($this->query);
   return $this->array;
  }
  public function delatepersonas($id){
  $this->query="DELETE FROM personas  WHERE id={$id}";
  $this->query();

  }
}



 ?>
