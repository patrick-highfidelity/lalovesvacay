<?php $postmeta = get_post_custom(get_the_id());   ?>
<div class="entry">
	<div class = "meta">
		<div class="blogContent">
			<div class="blogcontent"><?php the_excerpt() ?></div>
			<div class="anariel-read-more">
				<a class="more-link" href="<?php the_permalink() ?>">Continue Reading</a>
			</div>
			<div class="bottomBlog">

				<?php if(anariel_globals('display_socials')) { ?>

				<div class="blog_social"> <?php esc_html_e('Share: ','anariel') . anariel_socialLinkSingle(get_the_permalink(),get_the_title())  ?></div>
				<?php } ?>
				 <!-- end of socials -->

				<!-- end of reading -->
			</div>
		</div>
	</div>
</div>
