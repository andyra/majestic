<?php // Redirect to the correct anchor on home

$url = explode('/', $_SERVER['REQUEST_URI']);
$requested_page = $url[1];

$items = $pages->visible();
foreach($items as $item):
  $page_path = $item->uri();
  if ($requested_page == $page_path):
    $anchor = $site->url() . "/#" . $page_path;
    go($anchor);
  else:
    go(url());
  endif;
endforeach;

?>
