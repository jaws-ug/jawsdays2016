<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JAWSDAYS 2016
 */

?>

		<?php do_action( 'jawsdays_after_content' ); ?>
	</div><!-- #content -->

	<section class="jawsdays-supporter" class="footer-section jawsdays-supporter">
		すらいどやで
		<?php //jawsdays2015_slide(); ?>
	</section>

	<?php if ( is_front_page() ) : ?>
		<?php if ( is_active_sidebar( 'footer-widgets-area' ) ) : ?>
		<section id="footer-widgets-area" class="footer-section footer-widgets-area">
			<?php dynamic_sidebar( 'footer-widgets-area' ); ?>
		</section><!-- #jawsdays2015-new-post-box -->
		<?php endif; ?>
	<?php endif; ?>

	<section class="jawsdays-contact-box" class="footer-section jawsdays-contact-box"><div class="inner">
		<p class="contact-text"><?php esc_html_e( 'JAWS DAYS 2015 に参加する', 'jawsdays' ); ?></p>
		<p class="contact-button"><a href="<?php echo home_url('/tickets'); ?>"><?php esc_html_e( 'Tickets', 'jawsdays' ); ?></a></p>
	</div></section>

	<footer id="colophon" class="site-footer" role="contentinfo"><div class="inner">
		<?php do_action( 'jawsdays_before_footer' ); ?>
		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
		</nav>
		<div class="site-info">
			<div class="social-button">
				<ul>
					<li><a href="https://twitter.com/share?url=<?php echo rawurlencode( home_url( '/' ) ); ?>&hashtags=jawsdays&via=jawsdays" target="_blank">
<i class="fa fa-twitter-square"></i></a></li>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( home_url( '/' ) ); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
				</ul>
			</div>
			<p class="copyright">Copyright &copy; AWS User Group Japan. All rights reserved.</p>
		</div><!-- .site-info -->
		<?php do_action( 'jawsdays_after_footer' ); ?>
	</div></footer><!-- #colophon -->
</div><!-- #page -->

<?php do_action( 'jawsdays_after_body' ); ?>

<?php wp_footer(); ?>

</body>
</html>
