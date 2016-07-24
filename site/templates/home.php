<?php
$subtitle = "<div class='masthead__subtitle animated fadeInUp'>\n";
$subtitle .= "\t<h2 class='masthead__subtitle-item'>{$site->description()}</h2>\n";
$subtitle .= "</div>";
?>

<?php snippet("header", array("masthead_subtitle" => $subtitle)) ?>

<div class="block">
  <div class="container container--sm">
    <?= $page->text()->kirbytext() ?>
  </div>

  <div class="container container--md">
    <ul class="gallery">
      <?php foreach($page->files() as $image): ?>
        <li class="gallery__item">
          <a class="gallery__link" rel="home-gallery" href="<?= thumb($image, array('width' => 1200))->url() ?>" title="<?= $image->caption() ?>">
            <img src="<?= thumb($image, array('width' => 800))->url() ?>" alt="<?= $image->caption() ?>">
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<?php snippet("footer") ?>
