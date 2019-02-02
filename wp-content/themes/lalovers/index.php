
<?php get_header(); if(have_posts()) : the_post();?>
<section>
  <div class="container">
    <div class="col-8">
      <div class="col">
        <div class="column-posts">
    			<?php
    			$args = array(
    			'posts_per_page' => 6
    			);
    			$the_query = new WP_Query( $args );
    			// The Loop
    			if ( $the_query->have_posts() ) {
    				while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
    					<div class="col-4 post-item">
    						<div class="col">
    							<?php if ( has_post_thumbnail() ) { ?>
    								<a href="<?php echo the_permalink(); ?>">
    									<div class="post-image" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
    									</div>
    								</a>
    							<?php } ?>
    							<div class="post-meta">
    								<span class="post-date"><?php echo date("M d, Y", strtotime(get_the_date())); ?></span>
    								<span class="post-category"><?php echo the_category(); ?></span>
    							</div>
    							<a href="<?php echo the_permalink(); ?>">
    								<h3 class="post-title"><?php echo the_title();?></h3>
    							</a>
    							<p class="post-excerpt"><?php echo strip_tags(get_the_excerpt());?></p>
                  <p><?php the_author(); ?></p>
    							<a class="post-link btn" href="<?php echo the_permalink(); ?>">Read More</a>
    						</div>
    					</div>
    			<?php } wp_reset_postdata(); } else { }?>
    		</div>
      </div>
    </div>
    <div class="col-4">
      <div class="col">
        <?php include('sidebar.php'); ?>
      </div>
    </div>

  </div>
</section>


<?php endif; get_footer(); ?>
