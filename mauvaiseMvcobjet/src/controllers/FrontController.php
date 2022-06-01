<?php

namespace mvcobjet\controllers;

use mvcobjet\models\services\ActorService;

class FrontController{
  private $actorService;

  public function __construct(){
    $this->actorService = new ActorService();
  }

  public function liste(){
    $result = $this->actorService->getAllActors();
    return $result;
  }
}
