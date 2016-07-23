<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <title><?php echo $site->title()->html() ?></title>
  <?php echo css('assets/stylesheets/npl.min.css') ?>
  <link rel="icon" type="image/png" href="/<?php echo c::get('favicon') ?>-16x16.png?v=5" sizes="16x16">
  <link rel="icon" type="image/png" href="/<?php echo c::get('favicon') ?>-32x32.png?v=5" sizes="32x32">
  <link rel="icon" type="image/png" href="/<?php echo c::get('favicon') ?>-96x96.png?v=5" sizes="96x96">
</head>

<body>
  <main class="main" role="main">
    <ul id="events-upcoming"></ul>
    <ul id="events-past"></ul>
  </main>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <?php echo js('assets/javascripts/format-google-calendar.js') ?>
  <script>
    formatGoogleCalendar.init({
      calendarUrl: 'https://www.googleapis.com/calendar/v3/calendars/p08apg0soacun6sv595f47njp8@group.calendar.google.com/events?key=AIzaSyAQAEHjUaS09hIBRqw2UWv2cZ6GoFp7W1A',
      past: true,
      upcoming: true,
      pastTopN: 20,
      upcomingTopN: 3,
      itemsTagName: 'li',
      upcomingSelector: '#events-upcoming',
      pastSelector: '#events-past',
      upcomingHeading: '<h2>Upcoming events</h2>',
      pastHeading: '<h2>Past events</h2>',
      format: ['*date*', ': ', '*summary*', ' &mdash; ', '*description*', ' in ', '*location*']
    });
  </script>
</body>
</html>
