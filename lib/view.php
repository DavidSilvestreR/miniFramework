<?php
  class View
  {
    function __construct()
    {

    }
    function render($carp,$vista){
       $file='Views/'.$carp.'/'.$vista.'.php';
      if (file_exists($file)) {

          include_once $file;

      }else{
        echo "404";
      }
    }
  }



 ?>
