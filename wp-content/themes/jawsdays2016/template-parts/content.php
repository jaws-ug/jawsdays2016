<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JAWSDAYS 2016
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-thumbnail"><a href="<?php the_permalink(); ?>" rel="bookmark">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'archive-thumb' ); ?>
	<?php else : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="no-image" width="148" height="148" />
	<?php endif; ?>
	</a></div>

	<header class="entry-header">
		<?php do_action( 'jawsdays_before_entry_header' ); ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php jawsdays_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php do_action( 'jawsdays_after_entry_header' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p class="entry-more"><a href="<?php the_permalink(); ?>"><?php _e( 'Read more &raquo;', 'jawsdays' ) ?></a></p>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
