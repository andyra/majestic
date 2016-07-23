<?php

function phoneLink($number) { ?>
  <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $number) ?>"><?php echo $number ?></a>
<?php }
