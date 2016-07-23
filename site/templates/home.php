<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <title><?php echo $site->title()->html() ?></title>
  <?php echo css('assets/stylesheets/npl.min.css') ?>
  <link rel="icon" type="image/png" href="/<?php echo c::get('favicon') ?>-16x16.png?v=5" sizes="16x16">
  <link rel="icon" type="image/png" href="/<?php echo c::get('favicon') ?>-32x32.png?v=5" sizes="32x32">
  <link rel="icon" type="image/png" href="/<?php echo c::get('favicon') ?>-96x96.png?v=5" sizes="96x96">
</head>

<body>
  <?php snippet('header') ?>
  <?php snippet('masthead') ?>
  <main class="main" role="main">
    <?php foreach($pages->visible() as $section):
      snippet($section->uid(), array('data' => $section));
    endforeach ?>
  </main>
  <?php snippet('footer') ?>
  <?php snippet('scripts') ?>
</body>
</html>
