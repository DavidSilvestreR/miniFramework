<?php

class personas extends Father_Controller
{


  public function index(){
    $this->view->datos=$this->model->getpersonas();
    $this->view->render($this->getClass(),$this->getVista());
  }
  public function borrar($url){
 if ($url) {
     echo "$url";
 }else {
   return 1;

 }


  }
}


 ?>
