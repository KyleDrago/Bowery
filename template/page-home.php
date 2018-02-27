<?php
/*
  Template Name: Home-Page-Template
*/
get_header();

do_action('ddd_add_hero_image',
[
  'h1' => 'The Bowery',
  'h3' => 'A full service salon in Albany, NY',
  'hasButton' => true,
  'buttonText' => 'Book An Appointment',
  'link' => '#',
  'debug' => true,
  'debugWidth' => 1900
]);
?>
</header>
<main>
  <section class="site-content-wrapper page-header-text">
    <h2>Welcome To The Bowery</h2>
    <h3>Our trained staff are for you</h3>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
  </section>
  <div class="home-page-grabber-grid-container">
    <?php
    do_action('ddd_add_image_card',
    [
      'heading' => 'Hair Styling',
      'text' => 'Duis fore export cillum nulla veniam enim summis malis minim fore dolor dolor
      elit esse',
      'link' => '#',
      'desktopName' => 'test-mobile',
      'desktopWidth' => '15vw',
      'tabletWidth' => '20vw',
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText'
    ]);
    do_action('ddd_add_image_card',
    [
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#',
      'desktopName' => 'test-mobile',
      'desktopWidth' => '15vw',
      'tabletWidth' => '20vw',
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText'
    ]);
    do_action('ddd_add_image_card',
    [
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#',
      'desktopName' => 'test-mobile',
      'desktopWidth' => '15vw',
      'tabletWidth' => '20vw',
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText'
    ]);
    do_action('ddd_add_image_card',
    [
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#',
      'desktopName' => 'test-mobile',
      'desktopWidth' => '15vw',
      'tabletWidth' => '20vw',
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText'
    ]);
    do_action('ddd_add_image_card',
    [
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#',
      'desktopName' => 'test-mobile',
      'desktopWidth' => '15vw',
      'tabletWidth' => '20vw',
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText'
    ]);
    do_action('ddd_add_image_card',
    [
      'heading' => 'Test',
      'text' => 'testing text',
      'link' => '#',
      'desktopName' => 'test-mobile',
      'desktopWidth' => '15vw',
      'tabletWidth' => '20vw',
      'mobileWidth' => '90vw',
      'altText' => 'TestAltText'
    ]);
    ?>
  </div>
    <?php
    do_action('ddd_add_hero_image',
    [
      'h1' => null,
      'h2' => null,
      'h3' => null,
      'p' => 'illum magna elit export culpa nulla eram export quae export malis irure quis
      malis aliqua malis minim legam malis quem summis fugiat anim amet cillum velit
      dolor veniam quem nulla fugiat elit aute aliqua noster malis malis enim minim
      velit',
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
      'debug' => true,
      'debugWidth' => 1900
    ]);
    ?>

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
