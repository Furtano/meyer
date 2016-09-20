<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>

  <!-- Latest compiled and minified JavaScript -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css" >


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/wp_generated_classes.css">
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/jquery-2.1.4.min.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/bootstrap.js"></script>

  <?php wp_head(); ?>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />




</head>


  <!-- Latest compiled and minified JavaScript -->


<body <?php body_class(); ?>>
  <div id="page" class="hfeed site container-fluid">

    <div class="col-xs-12" style="padding-left:0px; padding-right:0px;padding-top: 0px;">
      <div class="col-xs-1 col-lg-1">
      </div>

      <div class="wpcntent col-xs-10 col-lg-10">

        <div class="col-xs-12" style="padding-left:0px; padding-right:18px;padding-top:0px;">
          <div id="logologo" class="col-xs-12 col-md-2 col-lg-2">
            <a href="http://meyer.webfuchs-entwicklung.de/"><img  src="<?php echo get_template_directory_uri(); ?>/fitdurchessen2.png" style="height: 17vh;"/></a>
          </div>
          <div class="col-xs-10 hidden-xs hidden-sm " id="bgheader">
          </div>
        </div>

        <!--- HEADER MENU -->
        <div class="col-xs-12 col-lg-12" style="padding-bottom: 15px" >
          <?php if ( is_active_sidebar( 'erstes_widget' ) ) : ?>
          <?php dynamic_sidebar( 'erstes_widget' ); ?>
          <?php endif; ?>
        </div>



      <div class="col-xs-12" >
        <?php if(is_home())
        {
          query_posts( 'cat=-' .  get_option('ernaehrungsnews_kategorieId')  );
        };
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php {the_content();} ?>
        <?php endwhile; endif; ?>
      </div>



    </div>

    <div class="col-xs-1 col-lg-1">
    </div>

  </div>



</div>


</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
   <?php wp_footer(); ?>
  <div class="site-info">
    <a href="impressum" style="color: white">Impressum</a> | © <?php echo date('Y') ?> Sabine Meyer (außer Fotos)
  </div><!-- .site-info -->
</footer><!-- .site-footer -->

</div><!-- .site -->


</body>
</html>
