<?php
class Father_Controller
{
  private $class;
  private $vista;
  protected $model;
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
     $model=$this->class."Model";
     $file="Models/".$this->class."Model.php";
     if(file_exists($file)){
       require_once $file;
       if (class_exists($this->class,$model)){         
          $this->model=new $model();
       }
     }
  }
}


 ?>
