<?php
/*
  Template Name: Home-Page-Template
*/
get_header();
// do_action('ddd_add_responsive_image',
// [
//   'desktopName' => 'test-desktop',
//   'desktopWidth' => '100vw',
//   'tabletName' => null,
//   'tabletWidth' => '100vw',
//   'mobileName' => 'test-mobile',
//   'mobileWidth' => '100vw',
//   'altText' => 'Hero Image',
//   'class' => 'hero-image',
//   'id' => null,
//   'dataValue' => null
// ]);

?>
<div class="hero-image-container">
  <img src="http://via.placeholder.com/1900x550" alt="" class="hero-image">
  <div class="hero-image-text-container">
    <h1>The Bowery</h1>
    <h3>A full service salon in Albany, NY</h3>
    <a href="" class="book-appointment-button">Book An Apointment</a>
  </div>
</div>
</header>
<main>

  <section class="site-content-wrapper">
    <h2>Welcome To The Bowery</h2>
    <h3>Our trained staff are for you</h3>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
  </section>
  <div class="home-page-grabber-grid-container">
    <?php
    do_action('ddd_add_image_card',
    [
      'imageName' => 'test-mobile',
      'heading' => 'Test',
      'text' => 'testing text testing text testing text testing text testing text testing texttesting text testing text testing text testing text testing text testing text',
      'link' => '#'
    ]);
    do_action('ddd_add_image_card',
    [
      'imageName' => 'test-mobile',
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#'
    ]);
    do_action('ddd_add_image_card',
    [
      'imageName' => 'test-mobile',
      'heading' => 'Test',
      'text' => 'testing text testing text testing text testing text testing text testing text',
      'link' => '#'
    ]);
    do_action('ddd_add_image_card',
    [
      'imageName' => 'test-mobile',
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#'
    ]);
    do_action('ddd_add_image_card',
    [
      'imageName' => 'test-mobile',
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#'
    ]);
    do_action('ddd_add_image_card',
    [
      'imageName' => 'test-mobile',
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#'
    ]);
    ?>
  </div>

  <div class="home-page-banner-container">
    <img src="http://via.placeholder.com/1900x550" alt="" class="home-page-banner-image">
    <p class="home-page-banner-text site-content-wrapper">sunt quis tempor veniam dolor irure nulla fore labore quid minim nisi export
      minim elit quorum summis magna tamen quae sunt legam illum aliqua sint irure
      legam culpa fore quid quorum fugiat minim fore duis summis minim sunt dolor
      cillum</p>
  </div>

  <div class="site-content-wrapper home-page-pre-footer-container">
    <div class="pre-footer-text-wrapper">
      <h2>Why Choose Us?</h2>
      <h3>Albany comes to us for all their hair needs.</h3>
      <p>anim cillum duis labore aliqua ipsum tempor minim sint amet veniam culpa quorum
        aute nisi illum fore velit dolor dolor culpa quae enim nulla minim fore fore
        eram aute legam</p>
    </div>
    <a href="#" class="contact-us-button">Contact Us</a>
  </div>

<?php
get_footer();
?>
