<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>
/style.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container-fluid">

	<div class="col-xs-12" style="padding-left:0px; padding-right:0px;padding-top: 85px;">
		<div class="col-xs-1 col-lg-2">
		</div>

		<div class="wpcntent col-xs-10 col-lg-8">

			<div class="col-xs-12" style="padding-left:0px; padding-right:0px;padding-top:40px;">
				<div class="col-xs-2">
					<a href="http://meyer.webfuchs-entwicklung.de/"><img src="<?php echo get_template_directory_uri(); ?>/fitdurchessen.png" style="height: 20vh;"></a>
				</div>
				<div class="col-xs-10 hidden-xs hidden-sm " id="bgheader">
				</div>
			</div>

      <!-- Header -->
			<div class="col-xs-12" >
				<nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
								<?php

									$defaults = array(
										'theme_location'  => '',
										'menu'            => '',
										'container'       => 'null',
										'container_class' => 'null',
										'container_id'    => 'null',
										'menu_class'      => 'null',
										'menu_id'         => 'null',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '',
										'depth'           => 0,
										'walker'          => ''
									);

									wp_nav_menu( $defaults );
								?>

            </ul>
        </div>
    </nav>
			</div>

					<div class="col-xs-12" >
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				            <?php the_content(); ?>
				      <?php endwhile; endif; ?>
					</div>



		</div>

		<div class="col-xs-1 col-lg-2">
		</div>

	</div>



	</div>
