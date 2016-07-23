<?php

function sprite($slug, $width, $height) { ?>
  <svg class="svg svg--<?php echo $slug ?>" viewbox="0 0 <?php echo $width ?> <?php echo $height ?>">
    <use xlink:href="/assets/images/sprite.svg#<?php echo $slug ?>"></use>
  </svg>
<?php }
