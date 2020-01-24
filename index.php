<?php get_header(); ?>
  <section class="main-banner">
    <div class="main-banner__mask">
      <img class="particles one_bluelight" src="<?php echo get_template_directory_uri();?>/assets/img/pluslight.png" alt="">
      <img class="particles two_bluelight" src="<?php echo get_template_directory_uri();?>/assets/img/pluslight.png" alt="">
      <img class="particles three_bluelight" src="<?php echo get_template_directory_uri();?>/assets/img/pluslight.png" alt="">
      <img class="particles four_bluelight" src="<?php echo get_template_directory_uri();?>/assets/img/pluslight.png" alt="">
      <img class="particles one_bluedark" src="<?php echo get_template_directory_uri();?>/assets/img/plusdark.png" alt="">
      <img class="particles two_bluedark" src="<?php echo get_template_directory_uri();?>/assets/img/plusdark.png" alt="">
      <img class="particles three_bluedark" src="<?php echo get_template_directory_uri();?>/assets/img/plusdark.png" alt="">
      <img class="particles circle" src="<?php echo get_template_directory_uri();?>/assets/img/circle.png" alt="">
      
    </div>
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="container">
          <div class="main-banner__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
          </div>
          <div class="main-banner__box">
            <div class="main-banner__text">
              <h1>Próximamente Wecan!</h1>
            </div>
            <div class="main-banner__description">
              <p>Somos una agencia de marketing digital que sí puede impulsar tu presencia digital e incrementar las ventas de tu negocio. </p>
            </div>
  
          </div>
          <div class="main-banner__redes">
            <a class="main-banner__link" target="_blank" href="https://www.facebook.com/wecan.c0mpany/">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a class="main-banner__link" target="_blank" href="https://www.instagram.com/wecan.company/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a class="main-banner__link" target="_blank" href="https://www.linkedin.com/company/we-can-company/">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        
      </div>
      <div class="main-banner__item">
        <div class="main-banner__form" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/form.png')">
          <div class="main-banner__contentform">
            <div class="main-banner__form--title">
              <p>¿Quieres saber más?</p>
            </div>
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>