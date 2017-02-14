<?php
class Conexion
{
  private $localhots=LOCALHOST;
  private $user=USSER;
  private $pasword=PASSWORD;
  private $db=DB;
  private $sentencia;
  private $conexion;
  protected $query;
  protected $array;

   function conection()
  {
    try {
     $this->conexion=new PDO("mysql:host={$this->localhots};dbname={$this->db}","{$this->user}","{$this->pasword}");

    } catch (PDOException  $e) {
      echo 'Error!: ' . $e->getMessage() . PHP_EOL;
    }
  }
  public function query(){
    $this->conection();
    $sentencia = $this->conexion->prepare($this->query);
    $sentencia->execute();
    $cuenta=$sentencia->rowCount();
    if ($cuenta>0) {
      $sentencia=null;
      return true;
    }else {
      $sentencia=null;
      return false;
    }
  }
  public function getQuery(){

    if ($this->query) {
      $this->conection();
      $sentencia =$this->conexion->prepare($this->query);
      $sentencia->execute();
      $resultado=$sentencia->fetchAll();
      if ($resultado) {

        $this->array=$resultado;
      }
    }


  }
}



 ?>
