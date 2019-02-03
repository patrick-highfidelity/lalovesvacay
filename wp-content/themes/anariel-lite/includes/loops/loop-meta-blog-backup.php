<?php $postmeta = get_post_custom(get_the_id());   ?>
<?php if(anariel_globals('display_post_meta')) { ?>
	<div class = "post-meta">
		<?php
		$day = get_the_time('d');
		$month= get_the_time('m');
		$year= get_the_time('Y');
		?>

		<!-- Date -->
		

		<?php echo date("M d, Y", strtotime(get_the_date())); ?>
		<?php if(anariel_globals('display_reading')) { ?>
		<span class="blog_time_read">
			<?php if(empty($postmeta["anariel_sigle_option_recipe"][0]) || !isset($postmeta["anariel_sigle_option_recipe"][0])){ ?>
				<?php echo esc_html__('Reading time: ','anariel') . esc_attr(anariel_estimated_reading_time(get_the_ID())) . esc_html__(' min','anariel') ; ?>
			<?php } else { ?>
				<?php echo esc_html__('Cooking time: ','anariel') . esc_attr(anariel_recipe('wprm_total_time')) . esc_html__(' min','anariel') ; ?>
			<?php } ?>
		</span>
		<?php } ?>

		<!-- Author -->
		<!-- <a class="post-meta-author" href="<?php echo  the_author_meta( 'user_url' ) ?>"><?php esc_html_e('by ','anariel'); echo get_the_author(); ?></a> -->

		<!-- Comments -->
		<!-- <?php if(empty($postmeta["anariel_sigle_option_recipe"][0])){ ?>
			<a href="<?php echo the_permalink() ?>#comments"><?php comments_number(); ?></a>
		<?php } else { ?>
			<?php echo '<a class="recipe-rating" href="'. esc_url(get_the_permalink()) .'#comments">' . esc_html__('Recipe rating: ','anariel')  . anariel_recipe('wprm_rating').'</a>' ; ?>
		<?php } ?> -->

	</div>
<?php } ?> <!-- end of post meta -->
