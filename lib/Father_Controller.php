<?php
class Father_Controller
{
  private $class;
  private $vista;
  function __construct($class,$vista){

    $this->class=$class;
    $this->vista=$vista;
    $this->view =new View();
    $this->loadModel();
  }
  public function getClass()
  {
    return $this->class;
  }
  public function getVista(){
    return $this->vista;
  }
  function loadModel(){
     $model=$this->class."Model.php";
     $file="Models/".$this->class."Model.php";
     if(file_exists($file)){
       require_once $file;
       if (class_exists($model)){
         $this->model=new $model();
       }
     }
  }
}


 ?>
