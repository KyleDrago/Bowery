<?php
// Add image card ----------------------------------------------------------------------------------//
// Usage:
// do_action('ddd_add_image_card',
// [
    // 'heading' => 'Test',
    // 'text' => 'testing text',
    // 'link' => '#',
    // 'desktopName' => 'desk image',
    // 'desktopWidth' => '15vw',
    // 'tabletName' => null,
    // 'tabletWidth' => '20vw',
    // 'mobileName' => null,
    // 'mobileWidth' => '90vw',
    // 'altText' => 'TestAltText',
    // 'class' => null,
    // 'id' => null,
    // 'dataValue' => null
// ]);

function ddd_image_card($args = array()) {
  $defaults = array(
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#',
      'desktopName' => 'desk image',
      'desktopWidth' => '15vw',
      'tabletName' => null,
      'tabletWidth' => '20vw',
      'mobileName' => null,
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText',
      'class' => null,
      'id' => null,
      'dataValue' => null
  );

  $args = wp_parse_args( $args, $defaults);

  // $imageNameDesktop = $args['imageName'];
  $heading = $args['heading'];
  $textContent = $args['text'];
  $link = $args['link'];
  ?>
    <section class='image-card-container'>
      <?php
      // console_log($imageNameDesktop);
      do_action('ddd_add_responsive_image',
      [
        'desktopName' => $args['desktopName'],
        'desktopWidth' => $args['desktopWidth'],
        'tabletName' => $args['tabletName'],
        'tabletWidth' => $args['tabletWidth'],
        'mobileName' => $args['mobileName'],
        'mobileWidth' => $args['mobileWidth'],
        'altText' => $args['altText'],
        'class' => $args['class'],
        'id' => $args['id']
      ]);
      ?>
      <h3><?php echo $heading ?></h3>
      <p><?php echo $textContent ?></p>
      <a href="<?php echo $link ?>">Learn More</a>
    </section>
  <?php
}
add_action('ddd_add_image_card', 'ddd_image_card', 10); ?>
