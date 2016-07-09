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
            <?php wp_nav_menu( array(
              'theme_location' 	  => 'header-menu',
              'container' 		    => 'div',
              'container_class' 	=> 'collapse navbar-collapse',
              'container_id'    	=> 'main-navbar-collapse',
              'menu_class'      	=> 'nav navbar-nav',
              'menu_id'         	=> '',
              'echo'            	=> true,
              'fallback_cb'     	=> 'wp_page_menu',
              'before'          	=> '',
              'after'           	=> '',
              'link_before'     	=> '',
              'link_after'      	=> '',
              'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           	=> 0,
              'walker'          	=> ''
            )); ?>

          </div>
        </nav>


      </div>

      <div class="col-xs-12" >
        <?php if(is_home())
        {
          query_posts( 'cat=-3' );
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
