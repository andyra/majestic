<?php snippet("header") ?>

<div class="container container--sm">
  <div class="block">
    <?= $page->text() ?>
  </div>
</div>

<div class="container container--md">
  <div class="block">
    <ul class="gallery">
      <?php foreach($page->files() as $image): ?>
        <li class="gallery__item">
          <a class="gallery--link" rel="home-gallery" href="<?= thumb($image, array('width' => 1200))->url() ?>">
            <img src="<?= thumb($image, array('width' => 800))->url() ?>" alt="">
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<?php snippet("footer") ?>
