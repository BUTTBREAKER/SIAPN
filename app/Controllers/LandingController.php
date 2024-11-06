<?php

namespace SIPAN\Controllers;

use PDO;
use SIPAN\App;

final readonly class LandingController
{
  function __construct(private PDO $db) {}

  function showLanding(): void
  {
    App::renderPage('landing', 'SIPAN', 'landing-layout');
  }
}
