<?php

namespace Source\App;

use League\Plates\Engine;
//use Source\Models\User;


class Web {

  /** @var $view Engine */
  private $view;


  public function __construct() {

    $this->view = Engine::create(
      __DIR__ . "/../../theme",
      "php"
    );
  }


  public function home(array $data): void {

    //$users = (new User())->find()->fetch(true);

    echo $this->view->render("dashboard", []);
  }
}
