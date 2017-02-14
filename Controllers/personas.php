<?php

class personas extends Father_Controller
{


  public function index(){
    $this->view->render($this->getClass(),$this->getVista());
  }
}


 ?>
