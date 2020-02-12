<?php

require_once ('function.php');
require_once ('routes.php');

function __autoload($class){
  if(file_exists('./classes/'.$class.'.php')){
    require_once './classes/'.$class.'.php';
  }else if(file_exists('./controller/'.$class.'.php')){
    require_once './controller/'.$class.'.php';
  }
}



//echo $_GET['url'];
//pr1($_GET);
