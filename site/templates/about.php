<?php
$subtitle = "<ul class='masthead__subtitle nav animated fadeInUp'>";
foreach ($page->about()->yaml() as $item):
  $slug = slugify($item['heading']);
  $subtitle .= "\n\t<li class='nav__item'>";
  $subtitle .= "\n\t\t<a class='masthead__subtitle-item nav__link' href='#{$slug}'>{$item['heading']}</a>";
  $subtitle .= "\n\t</li>";
endforeach;
$subtitle .= "</ul>";
?>

<?php snippet("header", array("masthead_subtitle" => $subtitle)) ?>

<?php foreach ($page->about()->toStructure() as $section): ?>
  <?php $slug = slugify($section->heading()) ?>
  <section id="<?= $slug ?>" class="<?= $slug ?>-section block">
    <div class="container container--sm">
      <h2 class="section-heading"><span><?= $section->heading() ?></span></h2>
      <?= $section->text()->kirbytext() ?>
    </div>
    <div class="container container--md">
      <?php $images = explode("\n", $section->gallery()->html()); ?>
      <ul class="gallery">
        <?php foreach ($images as $image): ?>
          <li class="gallery__item">
            <img src="<?= $image ?>" alt="<?= ?>">
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
<?php endforeach ?>

<?php snippet("footer") ?>
