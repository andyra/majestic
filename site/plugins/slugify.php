<?php

function slugify($string) {
  return str::slug($string, $separator = '-');
}
