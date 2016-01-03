<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div id="los_angeles_pic"></div>
			<div class="container col-xs-12 col-sm-10 col-sm-offset-1">
				<nav class="chapter_menu col-xs-7 col-xs-offset-2">
			        <ul class="chapter_menu_list">
			            <li class="chapter_menu_item"><a href='/home'>Welcome</a></li>
			            <li class="chapter_menu_item"><a href='/next_meeting'>Next Meeting</a></li>
			            <li class="chapter_menu_item"><a href='/symposium'>Symposium</a></li>
			            <li class="chapter_menu_item"><a href='/contact'>Contact</a></li>
			            <li class="chapter_menu_item"><a href='/past_meetings'>Past Meetings</a></li> 
			            <br>
			            
			        </ul>
			    </nav>

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


.
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		</div><!--container-->
	</main>
	



<?php get_footer(); ?>
