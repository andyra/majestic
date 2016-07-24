<?php
$subtitle = "<ul class='masthead__subtitle nav animated fadeInUp'>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#amenities'>Amenities</a></li>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#rates'>Rates</a></li>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#forms'>Forms</a></li>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#faqs'>FAQs</a></li>";
$subtitle .= "</ul>";
?>
<?php snippet("header", array("masthead_subtitle" => $subtitle)) ?>

<section id="amenities" class="amenities-section block">
  <div class="container container--sm">
    <h2 class="section-heading"><span>Amenities</span></h2>
    <?= $page->amenities()->kirbytext() ?>
  </div>
</section>

<section id="rates" class="rates-section block">
  <div class="container container--sm">
    <h2 class="section-heading"><span>Rates</span></h2>
    <dl class="rates">
      <?php foreach ($page->rates()->toStructure() as $rate): ?>
        <?php $slug = slugify($rate->heading()); ?>
        <dt id="<?= $slug ?>" class="rates__heading">
          <a class="link--plain" href="#<?= $slug ?>"><?= $rate->heading() ?></a>
          <small class="rates__subheading"><?= $rate->subheading() ?></small>
        </dt>
        <dd class="rates__content">
          <?= $rate->content()->html() ?>
        </dd>
      <?php endforeach ?>
    </dl>
  </div>
</section>

<section id="forms" class="forms-section block">
  <div class="container container--sm">
    <h2 class="section-heading"><span>Forms</span></h2>
    <?= $page->formCaption()->kirbytext() ?>
    <ul class="list file-list">
      <?php $filenames = explode(",", $page->forms()->value()); ?>
        <?php foreach($page->files()->find($filenames) as $file): ?>
          <li>
            <a class="file" href="<?= $file->url() ?>" title="<?= $file->title() ?>">
              <div class="file-image"><?= $file->title() ?></div>
              <span class="file-download">Download PDF</span>
            </a>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
</section>

<section id="faqs" class="faqs-section block">
  <div class="container container--sm">
    <h2 class="section-heading"><span>FAQs</span></h2>
    <dl class="dl-faq">
      <?php foreach ($page->faqs()->toStructure() as $faq): ?>
        <dt id="<?= slugify($faq->question()->html()) ?>">
          <a class="link--plain" href="#<?= slugify($faq->question()->html()) ?>"><?= $faq->question()->html() ?></a>
        </dt>
        <dd><?= $faq->answer()->kirbytext() ?></dd>
      <?php endforeach ?>
    </dl>
  </div>
</section>

<?php snippet("footer") ?>
