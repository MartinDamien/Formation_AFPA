<?php

namespace mvcobjet\controllers;

use mvcobjet\models\daos\ActorDao;

class BackController
{

  function liste()
  {
    $ActorDao = new ActorDao();
    $result = $ActorDao->findAll();
    echo "<pre>";
    print_r($result);
    echo "</pre>";
  }
}

function getActor($id)
{
  $ActorDao = new ActorDao();
  $result = $ActorDao->findById($id);
  echo "<pre>";
  print_r($result);
  echo "</pre>";
}
