<?php

namespace Source\App;

use League\Plates\Engine;


class Error {

  /** @var $view Engine */
  private $view;


  public function __construct () {

    $this->view = Engine::create(
      __DIR__ . "/../../theme",
      "php"
    );
  }


  public function error(array $data): void {

    echo $this->view->render("error", [
      "title" => NAME . " | {$data['errcode']}",
      "error" => $data['errcode']
    ]);
  }
}
