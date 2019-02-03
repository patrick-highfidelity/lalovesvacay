
<!-- main content start -->
<div class="mainwrap blog <?php if(is_front_page()) echo 'home' ?> <?php if(!anariel_globals('use_fullwidth')) echo 'sidebar' ?> default">
	<div class="anariel-breadcrumb">
		<!-- <div class="browsing"><?php //if(is_tag()){esc_attr_e('Browsing Tag','anariel');}else{esc_attr_e('Browsing Category','anariel');} ?></div> -->
		<?php echo anariel_breadcrumb(); ?>
	</div>
	<div class="main clearfix">
		<div class="pad"></div>
		<div class="content blog">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php if ( !get_post_format() ) {?>
						<div class="blogpostcategory">

								<div class="blogimage">
									<?php if ( has_post_thumbnail() ) { ?>
										<a href="<?php echo the_permalink(); ?>">
											<div class="post-image" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
											</div>
										</a>
									<?php } ?>
								</div>
								<?php get_template_part('includes/loops/loop-top-blog','category'); ?>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
							<?php get_template_part('includes/loops/loop-meta-blog','category'); ?>
							<?php get_template_part('includes/loops/loop-blog','category'); ?>
						</div>
					<?php } ?>
				<?php endwhile; ?>

				<?php
					get_template_part('includes/wp-pagenavi','navigation');
					if(function_exists('anariel_wp_pagenavi')) { anariel_wp_pagenavi(); }
				?>
			<?php else : ?>
				<div class="postcontent error-404">
					<?php $anariel_data = get_option(OPTIONS); ?>
					<h1><?php anariel_security($anariel_data['errorpagetitle']) ?></h1>
					<div class="posttext">
						<?php anariel_security($anariel_data['errorpage']) ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
		<!-- sidebar -->
		<?php if(!anariel_globals('use_fullwidth')) { ?>
			<?php if(is_active_sidebar( 'anariel_sidebar' )) { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'anariel_sidebar' ); ?>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>
