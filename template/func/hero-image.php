<?php
/*
Usage:
<?php
do_action('ddd_add_hero_image',
[
  'h1' => null,
  'h2' => null,
  'h3' => null,
  'p' => null,
  'hasButton' => false,
  'link' => '#',
  'desktopName' => 'desk image',
  'desktopWidth' => '25vw',
  'tabletName' => null,
  'tabletWidth' => '25vw',
  'mobileName' => null,
  'mobileWidth' => '95vw',
  'altText' => 'TestAltText',
  'class' => null,
  'id' => null,
  'dataValue' => null,
  'debug' => false,
  'debugWidth' => 1900,
  'debugHeight' => 500
]);
?>
*/
function ddd_hero_image($args = array()) {
  $defaults = array(
      'h1' => null,
      'h2' => null,
      'h3' => null,
      'p' => null,
      'hasButton' => false,
      'buttonText' => null,
      'link' => '#',
      'desktopName' => 'desk image',
      'desktopWidth' => '25vw',
      'tabletName' => null,
      'tabletWidth' => '25vw',
      'mobileName' => null,
      'mobileWidth' => '95vw',
      'altText' => null,
      'class' => null,
      'id' => null,
      'dataValue' => null,
      'debug' => false,
      'debugWidth' => 1900,
      'debugHeight' => 500
  );
  $args = wp_parse_args( $args, $defaults);
  ?>
  <div class="hero-image-container">
    <?php
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
      'id' => $args['id'],
      'dataValue' => $args['dataValue'],
      'debug' => $args['debug'],
      'debugWidth' => $args['debugWidth'],
      'debugHeight' => $args['debugHeight']
    ]);
    ?>
    <?php if ($args['hasButton'] || ($args['h1'] != null) || ($args['h2'] != null) || ($args['h3'] != null) || ($args['p'] != null)) {?>
    <div class="hero-image-text-container">
      <?php if (isset($args['h1']))  {?>
        <h1><?php echo $args['h1'] ?></h1>
      <?php } ?>
      <?php if (isset($args['h2']))  {?>
        <h2><?php echo $args['h2'] ?></h2>
      <?php } ?>
      <?php if (isset($args['h3'])) {?>
        <h3><?php echo $args['h3'] ?></h3>
      <?php } ?>
      <?php if (isset($args['p']))  {?>
        <p><?php echo $args['p'] ?></p>
      <?php } ?>
      <?php if ($args['hasButton']) {?>
        <a href="<?php echo $args['link'] ?>" class="book-appointment-button"><?php echo $args['buttonText'] ?></a>
      <?php } ?>
    </div>
  <?php } ?>
  </div>
  <?php
}
add_action('ddd_add_hero_image', 'ddd_hero_image', 10);

?>
