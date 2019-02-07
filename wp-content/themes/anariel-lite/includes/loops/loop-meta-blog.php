<?php $postmeta = get_post_custom(get_the_id());   ?>
<?php if(anariel_globals('display_post_meta') || anariel_globals('display_reading')) { ?>
	<div class = "post-meta">

		<!-- Date -->
		<?php if(anariel_globals('display_post_meta')) { ?>
			<?php
			$day = get_the_time('d');
			$month= get_the_time('m');
			$year= get_the_time('Y');

			echo '<a class="post-meta-time" href="'.get_day_link( $year, $month, $day ).'">'; ?><?php echo date("M d, Y", strtotime(get_the_date())); ?></a>
		<?php } ?>

		<!-- Reading -->
		<?php if(anariel_globals('display_reading')) { ?>
		<span class="blog_time_read">
			<?php if(empty($postmeta["anariel_sigle_option_recipe"][0]) || !isset($postmeta["anariel_sigle_option_recipe"][0])){ ?>
				<?php echo esc_html__('Reading time: ','anariel') . esc_attr(anariel_estimated_reading_time(get_the_ID())) . esc_html__(' min','anariel') ; ?>
			<?php } else { ?>
				<?php echo esc_html__('Cooking time: ','anariel') . esc_attr(anariel_recipe('wprm_total_time')) . esc_html__(' min','anariel') ; ?>
			<?php } ?>
		</span>
	<?php } ?>

	</div>
<?php } ?> <!-- end of post meta -->
