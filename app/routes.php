<?php

use SIPAN\App;
use SIPAN\Controllers\LandingController;
use SIPAN\Controllers\LoginController;
use SIPAN\Middlewares\EnsureUserIsLoggedMiddleware;
use SIPAN\Middlewares\EnsureUserIsNotLoggedMiddleware;

App::route('GET /', [LandingController::class, 'showLanding']);

App::group('/ingresar', function (): void {
  App::route('GET /', [LoginController::class, 'showLogin']);
  App::route('POST /', [LoginController::class, 'handleCredentials']);
}, [EnsureUserIsNotLoggedMiddleware::class]);

App::group('/app', function (): void {
  App::route('', function (): void {
    // HOME CONTROLLER
  });
}, [EnsureUserIsLoggedMiddleware::class]);
