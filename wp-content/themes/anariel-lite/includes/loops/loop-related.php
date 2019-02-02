<?php

$post_categories = wp_get_post_categories( get_the_ID() );
$cats = array();

foreach($post_categories as $c){
    $cat = get_category( $c );
    $cats[] = $cat->term_id;
}
$cats = implode(",", $cats);


$args = array(
		'category__and' => $cats,
		'posts_per_page' => 50,
		'orderby' => 'rand',
		'exclude' => array( get_the_id(),

		)
	);

$postslist = get_posts( $args );
$postmeta = get_post_custom(get_the_id());
$anariel_fullwidth = !empty($postmeta["anariel_sigle_option_fullwidth"][0]) ? $postmeta["anariel_sigle_option_fullwidth"][0] : '';
?>

<?php if(anariel_globals('display_related') && count($postslist) > 0) { ?>



	<div class="relatedPosts <?php if(anariel_globals('use_fullwidth') || anariel_globals('singe_fullwidth') || !empty($anariel_fullwidth)) echo 'anariel_fullwidth' ?>">
		<div class="relatedtitle">
			<h4><?php  esc_html_e('Related Posts','anariel'); ?></h4>
		</div>
		<div class="related">

      <?php
  		$args = array(
  		'post_type' => 'post',
  		'posts_per_page' => 3
  		);
  		$the_query = new WP_Query( $args );
  		// The Loop
  		if ( $the_query->have_posts() ) {
        $count = 0;
  			while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

          <?php if($count != 2){ ?>
    				<div class="one_third">
    			<?php } else { ?>
    				<div class="one_third last">
    			<?php } ?>
            <?php if ( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink(); ?>">
                <div class="post-image" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
                </div>

              </a>
            <?php } ?>
    					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
    					<p class="post-meta-time"><?php echo date("M d, Y", strtotime(get_the_date())); ?></p>
    				</div>

  		<?php $count++; } wp_reset_postdata(); } ?>


		</div>
	</div>
	<?php  wp_reset_postdata(); ?>
<?php } ?> <!-- end of related -->
