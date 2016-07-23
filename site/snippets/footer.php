  </main>

  <footer class="footer">
    <div class="container">
      <ul class="colophon list--plain list--inline">
        <?php $data = $pages->find('contact') ?>
        <li class="colophon__item colophon__address">
          <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress"><?= $data->address() ?></span>
            <span itemprop="addressLocality"><?= $data->city() ?>, <?= $data->state() ?></span>
            <span itemprop="postalCode"><?= $data->zip() ?></span>
          </address>
        </li>
        <li class="colophon__item colophon__phone" itemprop="telephone">
          <?php phoneLink($data->phone()) ?>
        </li>
        <li class="colophon__item colophon__email" itemprop="email">
          <a href="mailto:<?= $data->email() ?>"><?= $data->email() ?></a>
        </li>
        <li class="colophon__item colophon__social">
          <?php if (strlen($data->facebook()) > 0) : ?>
            <a href="<?= $data->facebook() ?>" target="_blank"><?php sprite('facebook', 24, 24) ?></a>
          <?php endif ?>
          <?php if (strlen($data->instagram()) > 0) : ?>
            <a href="<?= $data->instagram() ?>" target="_blank"><?php sprite('instagram', 24, 24) ?></a>
          <?php endif ?>
        </li>
      </ul>
      <small class="footer__copyright">&copy; <?= date("Y") ?> <?= $site->title()->html() ?></small>
    </div>
  </footer>

  <?php snippet("scripts") ?>

</body>
</html>
