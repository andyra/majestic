<?php

// Convert a string like "08:30 PM", which Kirby outputs, to a prettier time
function show_events($events) {
  function filterFutureEvents($event) {
    return ($event['date'] >= date('Y-m-d'));
  }
  return a::sort(array_filter($events, 'filterFutureEvents'),'date','asc');
}
