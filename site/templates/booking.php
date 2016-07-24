<?php
$subtitle = "<ul class='masthead__subtitle nav animated fadeInUp'>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#amenities'>Amenities</a></li>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#rates'>Rates</a></li>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#forms'>Forms</a></li>";
$subtitle .= "\n\t<li class='nav__item'><a class='masthead__subtitle-item nav__link' href='#faqs'>FAQs</a></li>";
$subtitle .= "</ul>";
?>
<?php snippet("header", array("masthead_subtitle" => $subtitle)) ?>

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
