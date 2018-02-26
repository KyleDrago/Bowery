<?php
/*
  Template Name: Template
*/
get_header();
do_action('ddd_add_responsive_image',
[
  'desktopName' => 'test-desktop',
  'desktopWidth' => '100vw',
  'tabletName' => null,
  'tabletWidth' => '100vw',
  'mobileName' => 'test-mobile',
  'mobileWidth' => '100vw',
  'altText' => 'Hero Image',
  'class' => 'hero-image',
  'id' => null,
  'dataValue' => null
]);
?>
</header>
<main>


<?php
get_footer();
?>
