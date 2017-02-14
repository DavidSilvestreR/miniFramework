<?php
class index extends Father_Controller
{

  function inicio(){
    $this->view->datos=$this->model->verProducto()
    $this->view->render($this->getClass(),$this->getVista());
  }
}


 ?>
