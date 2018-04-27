<?php

function classRegister($class)
{
  $classFile = '';
  if(preg_match('~.*Model$~', $class))
  {
    $classFile = __DIR__ . '/../app/models/' . $class . 'php';
  }
  elseif (preg_match('~.*View$~', $class))
  {
    $classFile = __DIR__ . '/../app/views/' . $class . 'php';
  }
  elseif (preg_match('~.*Controller$~', $class))
  {
    $classFile = __DIR__ . '/../app/controllers/' . $class . 'php';
  }

  if(file_exists($classFile))
  {
    require_once($classFile);
  }

}

spl_autoload_register('classRegister');


 ?>
