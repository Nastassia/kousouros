<?php
/**
 * The post template file.
 * @package DaisyChain
 * @since DaisyChain 1.0.0
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content-headline">
      <h1 class="entry-headline"><?php the_title(); ?></h1>
<?php daisychain_get_breadcrumb(); ?>
    </div>
<?php daisychain_get_display_image_post(); ?>
<?php if ( $daisychain_options_db['daisychain_display_meta_post'] != 'Hide' ) { ?>
    <p class="post-meta">
      <span class="post-info-author"><?php _e( 'Author: ', 'daisychain' ); ?><?php the_author_posts_link(); ?></span>
      <span class="post-info-date"><?php echo get_the_date(); ?></span>
<?php if ( comments_open() ) : ?>
      <span class="post-info-comments"><a href="<?php comments_link(); ?>"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'daisychain' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></a></span>
<?php endif; ?>
    </p>
    <div class="post-info">
      <p class="post-category"><span class="post-info-category"><?php the_category(', '); ?></span></p>
      <p class="post-tags"><?php the_tags( '<span class="post-info-tags">', ', ', '</span>' ); ?></p>
    </div>
<?php } ?>
    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'daisychain' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php edit_post_link( __( 'Edit', 'daisychain' ), '<p>', '</p>' ); ?>
<?php endwhile; endif; ?>
<?php if ( $daisychain_options_db['daisychain_next_preview_post'] != 'Hide' ) { ?>
<?php daisychain_prev_next('daisychain-post-nav'); ?>
<?php } ?>
<?php comments_template( '', true ); ?>
    </div>  
  </div> <!-- end of content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>