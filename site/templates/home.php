<?php snippet("header") ?>

<div class="block">

  <div class="container container--sm">
    <?= $page->text()->kirbytext() ?>
  </div>

  <div class="container container--md">
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
