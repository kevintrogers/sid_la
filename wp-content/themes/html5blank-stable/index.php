<?php get_header(); ?>

	<main role="main">
		<!-- section -->
	<div id="los_angeles_pic"></div>	

			 

        
  <div class="location_list col-xs-2 col-xs-offset-1">
    <ul class="list-group">
      <li class="list-group-item"><a href="http://www.sid.org/Chapters/Americas.aspx">Americas</a></li>
      <li class="list-group-item"><a href="http://www.sid.org/Chapters/Europe.aspx">Europe</a></li>
      <li class="list-group-item"><a href="http://www.sid.org/Chapters/Asia.aspx">Asia</a></li>
    
    </ul>
  </div>
  <div class="container">
    

    


 
</body><h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
