<?php
class Autoload
{
  public function __construct()
  {
    spl_autoload_register(function($class){
      $file="Controllers/".$class.".php";
      if (file_exists($file)) {
        require_once "{$file}";
      }else if (file_exists("lib/".$class.".php")) {
         require_once "lib/".$class.".php";
      } elseif (file_exists("Models/".$class.".php")) {
        require_once "Models/".$class.".php";
      }else {
        echo "No existe el archivo";
      }
    });
  }
  public function load($controller,$method,$params){
    if (class_exists($controller)) {
      $controller =new $controller($controller,$method);
      if (method_exists($controller,$method)) {
        $controller->$method($params);
      }else {
        echo "Debes crear el methodo [{$method} dentro de la class_exists]";
      }
    }else {
      echo "debes crear la clase [{$controller}]";
    }

  }
}
 ?>
