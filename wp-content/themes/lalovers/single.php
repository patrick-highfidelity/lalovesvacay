Single Post<br/>

<?php get_header(); if(have_posts()) : the_post();?>
<section>
  <div class="container">
    <div class="col-8">
      <div class="col">
        <h1><?php echo the_title(); ?></h1>
        <?php if ($post->post_author == $current_user->ID) { ?>
          <a href="<?php echo site_url(); ?>/wp-admin/post.php?post=<?php echo get_the_ID(); ?>&action=edit">Edit Post</a>
          <a onclick="return confirm('Are you SURE you want to delete this post?')" href="<?php echo get_delete_post_link( $post->ID ) ?>">Delete Post</a>
        <?php } ?>
        <br/>
        <a href="<?php echo site_url(); ?>/profile/<?php the_author(); ?>"><?php the_author(); ?></a>

        <div class="main-content"><?php echo the_content(); ?></div>
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


<style media="screen">
  .main-content figure, .main-content p{
    margin: 35px 0 15px 0;
  }
</style>
