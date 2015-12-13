<?php get_header(); ?>

<div id="contentwrapper">
  <div class="home-tags-cloud" style="display: block;">
    <?php show_tag_cloud(array(
      taxomony=>"post_tag",
      /*
      number=>"0",
      order_by=>"count",
      order=>"RAND",
      format=>"list",
      opacity=>"1",
      tilt=>"1",
      colorize=>"1",
      cache=>"1",
      timeout=>"300",
      zoom=>"1",
      smallest=>"75",
      largest=>"200",
      color=>"#FF5800",
      background=>"FFFFFF",
      */
    ));?>
  </div>
  <div class="grid-wrap">
    <ul class="grid swipe-right" id="grid">
      <?php query_posts( 'posts_per_page=-1' ); ?>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <li> <a href="<?php the_permalink() ?>" rel="bookmark">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('tiles_2-blogthumb'); ?>
        <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png"/>
        <?php endif; ?>
        <h2 class="entry-title" id="post-<?php the_ID(); ?>">
          <?php the_title(); ?>
        </h2>
        </a> </li>
      <?php endwhile; ?>
      <?php else : ?>
      <p class="center">
        <?php _e( 'You don&#39;t have any posts yet.', 'tiles_2' ); ?>
      </p>
      <?php endif; ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
