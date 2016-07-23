<?php

// Convert a string like "08:30 PM", which Kirby outputs, to a prettier time
function nice_date($s, $format) {
  $date = new DateTime($s);
  return $date->format($format);

  // $time = date_create_from_format('h:i A', $s);
  // $time->getTimestamp();
}
