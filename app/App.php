<?php

namespace SIPAN;

use Flight;

final class App extends Flight {
  static function renderPage(
    string $pageFileName,
    string $pageTitle,
    string $layoutFileName,
    array $pageData = []
  ): void {
    self::render('index', ['title' => $pageTitle] + $pageData);
  }
}
