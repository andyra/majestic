<section class="masthead block">
  <div class="container">
    <h1 class="masthead__title">
      <?php if ($page->isHomePage()): ?>
        <?php sprite("logo", 600, 190) ?>
      <?php else : ?>
        <?= $page->title() ?>
      <?php endif ?>
    </h1>
  </div>
</section>
