<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  
  <?= css('assets/css/grid_rules.css') ?>
  <?= css('assets/css/index.css') ?>
  <?= css('@auto') ?>
  <?= js('@auto') ?>

</head>
<body>

  <header class="header" role="banner">
    <div class= "grid--auto">
      <div class="branding grid--row--1-2 grid--col--1-4">
        <img src = '/assets/images/adonis-logo-01.svg' class='header-logo' />
      </div>
      <?php snippet('menu') ?>
    </div>
  </header>
