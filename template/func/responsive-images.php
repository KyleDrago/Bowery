<?php
// Add responsive image ----------------------------------------------------------------------------------//
// Usage:
// do_action('ddd_add_responsive_image',
// [
//   'desktopName' => 'desk image',
//   'desktopWidth' => '25vw',
//   'tabletName' => null,
//   'tabletWidth' => '25vw',
//   'mobileName' => null,
//   'mobileWidth' => '95vw',
//   'altText' => null,
//   'class' => null,
//   'id' => null,
//   'dataValue' => null
// ]);

function ddd_image_responsive($args) {
  $uploadDir = '//'.$_SERVER['HTTP_HOST'].'/wp-content/uploads/'.'responsive/';

  $tabletBreakpoint = '(max-width: 768px)';
  $desktopBreakpoint = '(max-width: 1024px)';

  $imageNameDesktop = $args['desktopName'];
  $imageWidthDesktop = $args['desktopWidth'];
  if (isset($args['tabletName'])) {
    $imageNameTablet = $args['tabletName'];
  } else {
    $imageNameTablet = $imageNameDesktop;
  }
  $imageWidthTablet = $args['tabletWidth'];
  if (isset($args['mobileName'])) {
    $imageNameMobile = $args['mobileName'];
  } else {
    $imageNameMobile = $imageNameDesktop;
  }
  $imageWidthMobile = $args['mobileWidth'];
  $altText = $args['altText'];
  if (isset($args['class'])) {
    $className = 'class="'.$args['class'].'"';
  } else {
    $className = null;
  }
  if (isset($args['id'])) {
    $id = 'id="'.$args['id'].'"';
  } else {
    $id = null;
  }
  if(isset($args['data-value'])) {
    $dataValue = 'data-value="'.$args['dataValue'].'"';
  } else {
    $dataValue = null;
  }

  ?>
  <picture>
    <source
    type='image/webp'
    media='<?php echo $tabletBreakpoint ?>'
    srcset=
    '
    <?php echo $uploadDir.$imageNameMobile.'-300px.webp' ?> 300w,
    <?php echo $uploadDir.$imageNameMobile.'-450px.webp' ?> 450w,
    <?php echo $uploadDir.$imageNameMobile.'-600px.webp' ?> 600w,
    <?php echo $uploadDir.$imageNameMobile.'-750px.webp' ?> 750w
    '
    sizes='<?php echo $imageWidthMobile ?>'
    >
    <source
    type='image/jpeg'
    media='<?php echo $tabletBreakpoint ?>'
    srcset=
    '
    <?php echo $uploadDir.$imageNameMobile.'-300px.jpg' ?> 300w,
    <?php echo $uploadDir.$imageNameMobile.'-450px.jpg' ?> 450w,
    <?php echo $uploadDir.$imageNameMobile.'-600px.jpg' ?> 600w,
    <?php echo $uploadDir.$imageNameMobile.'-750px.jpg' ?> 750w
    '
    sizes='<?php echo $imageWidthMobile ?>'
    >
    <source
    type='image/webp'
    media='<?php echo $desktopBreakpoint ?>'
    srcset=
    '
    <?php echo $uploadDir.$imageNameTablet.'-300px.webp' ?> 300w,
    <?php echo $uploadDir.$imageNameTablet.'-450px.webp' ?> 450w,
    <?php echo $uploadDir.$imageNameTablet.'-600px.webp' ?> 600w,
    <?php echo $uploadDir.$imageNameTablet.'-750px.webp' ?> 750w,
    <?php echo $uploadDir.$imageNameTablet.'-900px.webp' ?> 900w,
    <?php echo $uploadDir.$imageNameTablet.'-1050px.webp' ?> 1050w,
    <?php echo $uploadDir.$imageNameTablet.'-1200px.webp' ?> 1200w,
    <?php echo $uploadDir.$imageNameTablet.'-1350px.webp' ?> 1350w,
    <?php echo $uploadDir.$imageNameTablet.'-1500px.webp' ?> 1500w,
    <?php echo $uploadDir.$imageNameTablet.'-1750px.webp' ?> 1750w,
    <?php echo $uploadDir.$imageNameTablet.'-1900px.webp' ?> 1900w
    '
    sizes='<?php echo $imageWidthTablet ?>'
    >
    <source
    type='image/jpeg'
    media='<?php echo $desktopBreakpoint ?>'
    srcset=
    '
    <?php echo $uploadDir.$imageNameTablet.'-300px.jpg' ?> 300w,
    <?php echo $uploadDir.$imageNameTablet.'-450px.jpg' ?> 450w,
    <?php echo $uploadDir.$imageNameTablet.'-600px.jpg' ?> 600w,
    <?php echo $uploadDir.$imageNameTablet.'-750px.jpg' ?> 750w,
    <?php echo $uploadDir.$imageNameTablet.'-900px.jpg' ?> 900w,
    <?php echo $uploadDir.$imageNameTablet.'-1050px.jpg' ?> 1050w,
    <?php echo $uploadDir.$imageNameTablet.'-1200px.jpg' ?> 1200w,
    <?php echo $uploadDir.$imageNameTablet.'-1350px.jpg' ?> 1350w,
    <?php echo $uploadDir.$imageNameTablet.'-1500px.jpg' ?> 1500w,
    <?php echo $uploadDir.$imageNameTablet.'-1750px.jpg' ?> 1750w,
    <?php echo $uploadDir.$imageNameTablet.'-1900px.jpg' ?> 1900w
    '
    sizes='<?php echo $imageWidthTablet ?>'
    >
    <source
    type='image/webp'
    srcset=
    '
    <?php echo $uploadDir.$imageNameDesktop.'-300px.webp' ?> 300w,
    <?php echo $uploadDir.$imageNameDesktop.'-450px.webp' ?> 450w,
    <?php echo $uploadDir.$imageNameDesktop.'-600px.webp' ?> 600w,
    <?php echo $uploadDir.$imageNameDesktop.'-750px.webp' ?> 750w,
    <?php echo $uploadDir.$imageNameDesktop.'-900px.webp' ?> 900w,
    <?php echo $uploadDir.$imageNameDesktop.'-1050px.webp' ?> 1050w,
    <?php echo $uploadDir.$imageNameDesktop.'-1200px.webp' ?> 1200w,
    <?php echo $uploadDir.$imageNameDesktop.'-1350px.webp' ?> 1350w,
    <?php echo $uploadDir.$imageNameDesktop.'-1500px.webp' ?> 1500w,
    <?php echo $uploadDir.$imageNameDesktop.'-1750px.webp' ?> 1750w,
    <?php echo $uploadDir.$imageNameDesktop.'-1900px.webp' ?> 1900w
    '
    sizes='<?php echo $imageWidthDesktop ?>'
    >
    <source
    type='image/jpeg'
    srcset=
    '
    <?php echo $uploadDir.$imageNameDesktop.'-300px.jpg' ?> 300w,
    <?php echo $uploadDir.$imageNameDesktop.'-450px.jpg' ?> 450w,
    <?php echo $uploadDir.$imageNameDesktop.'-600px.jpg' ?> 600w,
    <?php echo $uploadDir.$imageNameDesktop.'-750px.jpg' ?> 750w,
    <?php echo $uploadDir.$imageNameDesktop.'-900px.jpg' ?> 900w,
    <?php echo $uploadDir.$imageNameDesktop.'-1050px.jpg' ?> 1050w,
    <?php echo $uploadDir.$imageNameDesktop.'-1200px.jpg' ?> 1200w,
    <?php echo $uploadDir.$imageNameDesktop.'-1350px.jpg' ?> 1350w,
    <?php echo $uploadDir.$imageNameDesktop.'-1500px.jpg' ?> 1500w,
    <?php echo $uploadDir.$imageNameDesktop.'-1750px.jpg' ?> 1750w,
    <?php echo $uploadDir.$imageNameDesktop.'-1900px.jpg' ?> 1900w
    '
    sizes='<?php echo $imageWidthDesktop ?>'
    >
    <img <?php echo $className ?> <?php echo $id ?> <?php echo $dataValue ?> src='<?php echo $uploadDir.$imageNameDesktop.'-1050px.jpg' ?>' alt='<?php echo $altText ?>'>
  </picture>
  <?php
}
add_action('ddd_add_responsive_image', 'ddd_image_responsive', 10); ?>
