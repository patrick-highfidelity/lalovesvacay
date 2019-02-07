<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" >
<!-- start -->
<head>
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/heart.png">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="icon" href="" type="image/gif" sizes="16x16">
    <meta name="format-detection" content="telephone=no">

		<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Sedgwick+Ave" rel="stylesheet">

	<?php wp_head();?>
</head>
<!-- start body -->
<body <?php body_class(); ?> >
				<header>
				<?php if(anariel_globals('top_bar')) { ?>
					<div class="top-wrapper">
						<div class="main">
							<div class="top-wrapper-content">
								<div class="top-left">
									<?php if(is_active_sidebar( 'anariel_sidebar-top-left' )) { ?>
										<?php dynamic_sidebar( 'anariel_sidebar-top-left' ); ?>
									<?php } ?>
								</div>
								<div class="top-right">
									<?php if(is_active_sidebar( 'anariel_sidebar-top-right' )) { ?>
										<?php dynamic_sidebar( 'anariel_sidebar-top-right' ); ?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<div id="headerwrap">
						<!-- logo and main menu -->
						<div id="header" class="main">

							<!-- logo -->
							<?php anariel_logo(); ?>

							<!-- main menu -->
							<div class="pagenav">
								<div class="main">
										<div class="pmc-main-menu">
										<?php
											if ( has_nav_menu( 'anariel_mainmenu' ) ) {
												wp_nav_menu( array(
												'container' =>false,
												'container_class' => 'menu-header home',
												'menu_id' => 'menu-main-menu-container',
												'theme_location' => 'anariel_mainmenu',
												'echo' => true,
												'fallback_cb' => 'anariel_fallback_menu',
												'before' => '',
												'after' => '',
												'link_before' => '',
												'link_after' => '',
												'depth' => 0,
												'walker' => new anariel_Walker_Main_Menu()));
											} ?>
										</div>
								</div>
							</div>
						</div>
					</div>
				</header>

				<?php if(is_front_page()){ ?>
					<div id="frontpage_banner" style="background-image:url('<?php header_image(); ?>');">
					</div>
				<?php } ?>

				<?php if(is_front_page() && anariel_globals('use_categories')){ ?>
					<?php anariel_block_one(); ?>
				<?php } ?>
