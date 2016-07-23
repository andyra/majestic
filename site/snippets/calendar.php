
<section class="calendar block" id="calendar">
  <div class="container">
    <h2 class="block__title tooltip" title="Calendar"><?php sprite('calendar', 366.5, 50) ?></h2>

    <div class="happy-hours">
      <?php echo $data->happy_hours()->kirbytext(); ?>
    </div>

    <ul class="events list--plain">
      <?php
        $events = yaml($data->events());
        $future_events = show_events($events);

        foreach ($future_events as $event) : ?>
          <li class="event" href="#">
            <div class="event__date">
              <span class="event__day"><?= nice_date($event['date'], "j") ?></span>
              <span class="event__month"><?= nice_date($event['date'], "M") ?></span>
            </div>
            <div class="event__content">
              <h3 class="event__title"><?= $event['title'] ?></h3>
              <time class="event__time">
                <span class="event__fulldate"><?= nice_date($event['date'], "l") ?></span>
                <span class="event__start"><?php if ($event['start']) { echo nice_date($event['start'], "g:ia"); } ?></span>
              </time>
              <?php if ($event['description']): ?>
                <div class="event__description">
                  <?= kirbytext($event['description']) ?>
                </div>
              <?php endif ?>
            </div>
          </li>
        <?php endforeach;
      ?>
    </ul>
  </div>
</section>
