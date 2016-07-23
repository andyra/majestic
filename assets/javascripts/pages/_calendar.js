// $(document).ready(function() {
//   $.fn.slideFadeToggle  = function(speed, easing, callback) {
//     return this.animate({
//       opacity: 'toggle',
//       height: 'toggle'
//     }, speed, easing, callback);
//   };

//   $events = $('.event');
//   maxEvents = 10;

//   showEvents = function(events) {
//     events.slice(0, maxEvents).slideFadeToggle();
//   }

//   // Show a "View More" button if there are enough events
//   if ($events.length > maxEvents) {
//     $('.events').append('<a href="#" class="events__view-more">View More ⬇︎</a>');
//   }

//   // Show More events
//   $('.events__view-more').click(function(e) {
//     e.preventDefault();
//     showEvents($('.event:hidden'));
//   });

//   // Show the first few events
//   showEvents($events);
// });
