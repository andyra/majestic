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

    <?php if ($section->gallery()->isNotEmpty()): ?>
      <div class="container container--md">
        <ul class="gallery gallery--<?= $slug ?>">
          <?php $filenames = explode(",", $section->gallery()->value()); ?>
          <?php foreach($page->files()->find($filenames) as $file): ?>
            <?php $caption = $file->caption()->value(); ?>
            <li class="gallery__item">
              <a class="gallery__link" rel="<?= $slug ?>-gallery" href="<?= thumb($file, array('width' => 1200))->url() ?>" title="<?= $caption ?>">
                <img src="<?= thumb($file, array('width' => 800))->url() ?>" alt="<?= $caption ?>">
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif ?>

  </section>
<?php endforeach ?>

<?php snippet("footer") ?>
