<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;


class User {

  public function __construct () {

    parent::__construct("users", ["name", "email", "password"]);
  }


  public function save(): bool {

    return (parent::save());
  }
}
