<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>

  <!-- Latest compiled and minified JavaScript -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



  <link href='<?php echo get_template_directory_uri(); ?>/opensans.css' rel='stylesheet' type='text/css'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css" >


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/wp_generated_classes.css">
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/jquery-2.1.4.min.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/bootstrap.js"></script>

  <?php wp_head(); ?>

</head>


  <!-- Latest compiled and minified JavaScript -->


<body <?php body_class(); ?>>
  <div id="page" class="hfeed site container-fluid">

    <div class="col-xs-12" style="padding-left:0px; padding-right:0px;padding-top: 35px;">
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

        <!-- navbar -->
        <div class="col-xs-12 col-lg-12" >
        <nav id="site-navigation" class="navbar navbar-default" role="navigation">
          <div class="container-fullwidth">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <?php   wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );?>

          </div>
        </nav>


      </div>

      <div class="col-xs-12" >

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>



    </div>

    <div class="col-xs-1 col-lg-1">
    </div>

  </div>



</div>


</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    Alle Rechte für <?php echo date('Y') ?> hat Sabine Meyer
  </div><!-- .site-info -->
</footer><!-- .site-footer -->

</div><!-- .site -->


</body>
</html>
