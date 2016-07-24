<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <title><?= $site->title()->html() ?></title>
  <?= css("assets/stylesheets/majestic.min.css") ?>
  <link rel="icon" type="image/png" href="/<?= c::get('favicon') ?>-16x16.png?v=5" sizes="16x16">
  <link rel="icon" type="image/png" href="/<?= c::get('favicon') ?>-32x32.png?v=5" sizes="32x32">
  <link rel="icon" type="image/png" href="/<?= c::get('favicon') ?>-96x96.png?v=5" sizes="96x96">
</head>

<body>
  <header class="header" role="navigation">
    <ul class="nav header__nav">
      <li class="header__logo nav__item">
        <a class="nav__link<?php if ($page->isHomePage()) echo ' nav__link--active' ?>" href="/"><?php sprite("logo", 75.5, 50) ?></a>
      </li>
      <?php foreach($pages->visible() as $item): ?>
        <li class="nav__item">
          <a class="nav__link<?php e($item->isOpen(), ' nav__link--active') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
      <?php endforeach ?>
    </ul>
  </header>
  <?php snippet("masthead") ?>

  <main class="main" role="main">
