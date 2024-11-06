<?php

use SIPAN\App;

if (!file_exists('vendor/autoload.php')) {
  exit(<<<html
    <html data-theme="dark">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
      <h1>SE TE OLVIDÓ EJECUTAR <code>composer i</code> :v</h1>
    </html>
  html);
}

require 'vendor/autoload.php';
require 'app/configs.php';
require 'app/routes.php';

App::start();
