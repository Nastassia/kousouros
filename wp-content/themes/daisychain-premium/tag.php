<?php
/**
 * The tag archive template file.
 * @package DaisyChain
 * @since DaisyChain 1.0.0
*/
get_header(); ?>
<?php if ( have_posts() ) : ?>
    <div class="content-headline">
      <h1 class="entry-headline"><?php printf( __( 'Tag Archive: %s', 'daisychain' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
<?php daisychain_get_breadcrumb(); ?>
    </div>
<?php if ( tag_description() ) : ?>
    <div class="archive-meta"><?php echo tag_description(); ?></div>
<?php endif; ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'content', 'archives' ); ?>
<?php endwhile; endif; ?> 
<?php daisychain_content_nav( 'nav-below' ); ?>  
  </div> <!-- end of content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>