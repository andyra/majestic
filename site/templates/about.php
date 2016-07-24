<?php snippet("header") ?>

<?php foreach ($page->about()->yaml() as $section): ?>
  <section id="events" class="events-section block">
    <h2 class="section-heading"><span><?= $section['heading'] ?></span></h2>
  </section>
<?php endforeach ?>

<?php snippet("footer") ?>
