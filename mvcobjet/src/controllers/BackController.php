<?php

namespace mvcobjet\controllers;

use mvcobjet\models\daos\ActeurDao;

class BackController
{
  
  function liste()
  {
    $acteurDao = new ActeurDao();
    $result = $acteurDao->findAll();
    echo"<pre>";
    print_r($result);
    echo"</pre>";
  }
}