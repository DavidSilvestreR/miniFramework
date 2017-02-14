<?php
require_once "config.php";
$ruta= isset($_GET['url']) ? $_GET['url'] : 'index/inicio/';
$ruta=explode('/',$ruta);
if (isset($ruta[0])) { $controller=$ruta[0]; }
if (isset($ruta[1])) { $method=$ruta[1]; }else{ $method="index";}
if (isset($ruta[2])) { $params=$ruta[2]; }else { $params="";}
$load=new Autoload();
$load->load($controller,$method,$params);

 ?>
