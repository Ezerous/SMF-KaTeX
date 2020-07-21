<?php

$theme_images_bbc_dirs = glob($boarddir . '/Themes/*/images/bbc' , GLOB_ONLYDIR);

foreach ($theme_images_bbc_dirs as $dir){
  copy(dirname(__FILE__) . '/images/tex.gif', $dir . '/tex.gif');
  copy(dirname(__FILE__) . '/images/tex-inline.gif', $dir . '/tex-inline.gif');
}

?>
