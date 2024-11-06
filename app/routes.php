<?php

use SIPAN\App;
use SIPAN\Controllers\LoginController;
use SIPAN\Middlewares\EnsureUserIsLoggedMiddleware;
use SIPAN\Middlewares\EnsureUserIsNotLoggedMiddleware;

App::group('/ingreso', function (): void {
  App::route('GET /', [LoginController::class, 'showLogin']);
  App::route('POST /', [LoginController::class, 'handleCredentials']);
}, [EnsureUserIsNotLoggedMiddleware::class]);

App::group('/', function (): void {
  App::route('', function (): void {
    // HOME CONTROLLER
  });
}, [EnsureUserIsLoggedMiddleware::class]);
