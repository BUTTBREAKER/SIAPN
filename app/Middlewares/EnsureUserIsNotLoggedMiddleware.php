<?php

namespace SIPAN\Middlewares;

use SIPAN\App;

final readonly class EnsureUserIsNotLoggedMiddleware
{
  function before(): void
  {
    dd('here');
    if (key_exists('loggedUserId', $_SESSION)) {
      App::redirect('/');
    }
  }
}
