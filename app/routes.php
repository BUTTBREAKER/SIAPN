<?php

use SIPAN\App;
use SIPAN\Controllers\LandingController;
use SIPAN\Controllers\LoginController;
use SIPAN\Controllers\RegisterController;
use SIPAN\Middlewares\EnsureUserIsLoggedMiddleware;
use SIPAN\Middlewares\EnsureUserIsNotLoggedMiddleware;

// Ruta pública para la landing page
App::route('GET /', [LandingController::class, 'showLanding']);

// Grupo para rutas de login (solo si no estás logueado)
App::group('/ingresar', function (): void {
  App::route('GET /', [LoginController::class, 'showLogin']);
  App::route('POST /', [LoginController::class, 'handleCredentials']);
}, [EnsureUserIsNotLoggedMiddleware::class]);

// Grupo para el registro (público)
App::group('/registrarse', function (): void {
  App::route('GET /', [RegisterController::class, 'showRegister']);
  App::route('POST /', [RegisterController::class, 'handleRegister']);
});

// Grupo para rutas protegidas por login
App::group('/app', function (): void {
  App::route('', function (): void {
    // HOME CONTROLLER
  });
}, [EnsureUserIsLoggedMiddleware::class]);
