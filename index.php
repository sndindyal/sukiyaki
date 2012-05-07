<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main" class="clearfix">
			
			<div class="feature_box">
				
			</div>
			
			<div class="main-tree">

			<div class="sec-title purp">
				News	
			</div>
			
				<?php query_posts( array( 'posts_per_page' => 2, 'category_name' => 'news', 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),));?>
	
				<?php if ( have_posts() ) : ?>
	
					<?php/* twentyeleven_content_nav( 'nav-above' ); */?>
	
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php get_template_part( 'content', get_post_format() ); ?>
	
					<?php endwhile; ?>
					
					<?php/* if(function_exists('wp_paginate')) { wp_paginate();} ?>
					<?php/* twentyeleven_content_nav( 'nav-below' ); */?>
					
					<div class="more">
						<a href="http://sukiyakipress.com/category/news" title="More News &raquo;">More News &raquo;</a>
					</div>
	
				<?php else : ?>
	
					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->
	
				<?php endif; ?>
				
				<?php wp_reset_query(); ?>
			</div>
			
			<div class="video-box">
			<div class="sec-title red">
				Inspiration	
			</div>
			
				<?php query_posts( array( 'posts_per_page' => 2, 'category_name' => 'inspiration', 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),));?>

				<?php if ( have_posts() ) : ?>
	
					<?php/* twentyeleven_content_nav( 'nav-above' ); */?>
	
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php get_template_part( 'content', get_post_format() ); ?>
	
					<?php endwhile; ?>
					
					<?php/* if(function_exists('wp_paginate')) { wp_paginate();} ?>
					<?php/* twentyeleven_content_nav( 'nav-below' ); */?>
					
					<div class="more">
						<a href="http://sukiyakipress.com/category/inspiration" title="More Inspiration &raquo;">More Inspiration &raquo;</a>
					</div>
	
				<?php else : ?>
	
					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->
	
				<?php endif; ?>
				
				<?php wp_reset_query(); ?>
			</div>					

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>