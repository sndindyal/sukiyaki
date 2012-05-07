<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator" class="clearfix">		
				<div class="footernav">
					<h2>Menu</h2>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>		
				<div class="drop">
				<p>
					<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">All writen and illustrated work pertaining to Eleanor, Wings of Destiny, Unit 01, Anomoly, Saint Slayer and Doctor Wolf!</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://sukiyakipress.com/" property="cc:attributionName" rel="cc:attributionURL">Sukiyaki Press</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://sukiyakipress.com/" rel="dct:source">sukiyakipress.com</a>.
				</p>
				<span class="copy">&copy; Copyright Sukiyaki Press</span>
				</div>				
				<?php/* do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a> */?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</div>

<?php wp_footer(); ?>

</body>

<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.scrollfollow.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.colorbox-min.js"></script>  
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.easing.1.3.js"></script>  
<script src="<?php bloginfo( 'template_directory' ); ?>/js/script.js"></script>		

<div style="display:none;">
<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="medium" annotation="inline"></g:plusone>
</div>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</html>