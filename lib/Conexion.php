<?php
class Conexion
{
  private $localhots=LOCALHOST;
  private $user=USSER;
  private $pasword=PASSWORD;
  private $db=DB;
  private $conexion;
  protected $query;
  protected $array;

  public function conection()
  {
    try {
     $this->conexion=ew PDO("mysql:host={$this->localhots};dbname={$this->db}","{$this->user}","{$this->pasword}");
     echo "conexion realizada";
    } catch (PDOException  $e) {
      echo 'Error!: ' . $e->getMessage() . PHP_EOL;
    }
  }
  public function query(){
    $this->conection()
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
    $this->conection();
    if ($this->query) {
      $sentencia = $this->conexion->prepare($this->query);
      $resultado=$sentencia->execute();
      if ($resultado) {
        $this->array=$resultado;
      }
    }


  }
}



 ?>
