<?php
// Add image card ----------------------------------------------------------------------------------//
// Usage:
// do_action('ddd_add_image_card',
// [
//   'imageName' => 'desk image',
//   'heading' => 'Test',
//   'text' => 'testing text',
//   'link' => '#'
// ]);

function ddd_image_card($args) {
  $imageNameDesktop = $args['imageName'];
  $heading = $args['heading'];
  $textContent = $args['text'];
  $link = $args['link'];
  ?>
    <section class='image-card-container'>
      <?php
      // console_log($imageNameDesktop);
      do_action('ddd_add_responsive_image',
      [
        'desktopName' => $imageNameDesktop,
        'desktopWidth' => '15vw',
        'tabletName' => null,
        'tabletWidth' => '20vw',
        'mobileName' => null,
        'mobileWidth' => '90vw',
        'altText' => null,
        'class' => null,
        'id' => null,
        'dataValue' => null
      ]);
      ?>
      <h2><?php echo $heading ?></h2>
      <p><?php echo $textContent ?></p>
      <a href="<?php echo $link ?>">Learn More</a>
    </section>
  <?php
}
add_action('ddd_add_image_card', 'ddd_image_card', 10); ?>
