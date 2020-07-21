<?php

$tex_images_paths = glob($boarddir . '/Themes/*/images/bbc/tex.gif');
$tex_images_paths = array_merge($tex_images_paths, glob($boarddir . '/Themes/*/images/bbc/tex-inline.gif'));

foreach ($tex_images_paths as $image_path)
  unlink($image_path);

?>
