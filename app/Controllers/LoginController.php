<?php

namespace SIPAN\Controllers;

use PDO;
use SIPAN\App;

final readonly class LoginController
{
  function __construct(private PDO $db) {}

  function showLogin(): void
  {
    App::renderPage('login', 'Iniciar sesión');
  }

  function handleCredentials(): void {
    $credentials = App::request()->data;

    dd(compact('credentials'));
  }
}
