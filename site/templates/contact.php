<?php snippet("header") ?>

<div class="block">
  <div class="container container--sm">

    <dl class="contact-info list-plain">
      <dt class="contact-info__label">Phone</dt>
      <dd class="contact-info__value"><?php phoneLink($page->phone()) ?></dd>

      <dt class="contact-info__label">Email</dt>
      <dd class="contact-info__value"><a href="<?= $page->email() ?>"><?= $page->email() ?></a></dd>

      <dt class="contact-info__label">Address</dt>
      <dd class="contact-info__value">
        <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="streetAddress"><?= $page->address() ?></span><br>
          <span itemprop="addressLocality"><?= $page->city() ?>, <?= $page->state() ?></span><br>
          <span itemprop="postalCode"><?= $page->zip() ?></span>
        </address>
      </dd>

      <dt class="contact-info__label">Hours</dt>
      <dd class="contact-info__value">
        <ul class="contact-info__hours list">
          <?php foreach ($page->office_hours()->yaml() as $office_hour): ?>
            <li><strong><?= $office_hour["days"] ?></strong>: <?= $office_hour["from"] ?>&ndash;<?= $office_hour["to"] ?></li>
          <?php endforeach ?>
        </ul>
      </dd>
      <dt class="contact-info__label">Visit us on</dt>
      <dd class="contact-info__value">
        <ul class="list">
          <?php if (strlen($page->facebook()) > 0) : ?>
            <li>
              <a class="social-link" href="<?= $page->facebook() ?>" target="_blank">
                <?php sprite('facebook', 24, 24) ?><span>Facebook</span>
              </a>
            </li>
          <?php endif ?>
          <?php if (strlen($page->instagram()) > 0) : ?>
            <li>
              <a class="social-link" href="<?= $page->instagram() ?>" target="_blank">
                <?php sprite('instagram', 24, 24) ?><span>Instagram</span>
              </a>
            </li>
          <?php endif ?>
        </ul>
      </dd>
    </dl>

  </div>
</div>

<div class="container container--md">
  <section class="map">
    <div class="map__container"></div>
    <div class="map__zoom-control map__zoom-in">+</div>
    <div class="map__zoom-control map__zoom-out">&ndash;</div>
    <a class="map__view-on-google" href="https://www.google.com/maps/place/181+Pine+St,+Abilene,+TX+79601/@32.4502531,-99.7329453,17z/data=!3m1!4b1!4m2!3m1!1s0x86568e19b89c64f5:0xb5214bb1a242e9b0" target="_blank">View on Google Maps</a>
  </section>
</div>

<?php snippet("footer") ?>
