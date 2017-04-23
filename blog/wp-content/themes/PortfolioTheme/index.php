<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



	<section id="banner" class="wrapper cf">
		<div class="wrapper">
			<p class="logo ">
			<img src="images/logo.png" alt="logo">
			</p>
			
			<h2>Hello, I'm Yun Hsuan. UI / UX designer, front-end developer living in Helsinki. I'm passionate about combining design thinking, research methods and business strategies to develop creative solutions.</h2>
			
			<br> <hr>
		</div>
	</section>

	<section id="work" class="wrapper cf">
		
			<a href="#" class="title"> <h3>WORK</h3></a>
			<hr class="marker" align="center" >
		


	<!-- 	<div class="picture_wrapper cf">
			<div class="work "><a href="#"><img src="images/airport_thumb.jpg" alt=""></a>
			<a href="#"><h4>Taoyuan Airport</h4></a>
			<p>UI / UX Design</p>
			</div>

			<div class="work"><a href="#"><img src="images/sharearadio_thumb.png" alt=""></a>
				<a href="#"><h4>Taoyuan Airport</h4></a>
				<p>UI / UX Design</p>
			</div>

			<div class="work"><a href="#"><img src="images/airport_thumb.jpg" alt=""></a>
				<a href="#"><h4>Taoyuan Airport</h4></a>
				<p>UI / UX Design</p>
			</div>
		</div>
 -->



	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
		<?php the_excerpt(); ?>
		</article>
	    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"class="button">Read More</a></p>
		
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

		




<!-- 
		<div class="button_wrapper">
			<a href="#" class="button"> See all projects </a>
		</div> -->

		<br> <hr>

	</section>

		

	<section id="instagram" class="wrapper cf ">
		
		<a href="#" class="title"><h3>FOLLOW ME ON INSTAGRAM</h3></a>
		<hr class="marker" align="center" >
		
		<!-- <div id="instafeed"> -->
			
		<!-- </div> -->
		<div class="instagram_wrapper cf">
			<div class="insta">
				<a href="#"><img src="images/airport_thumb.jpg" alt=""></a> 
			</div>

			<div class="insta">
				<a href="#"><img src="images/airport_thumb.jpg" alt=""></a> 
			</div>

			<div class="insta">
				<a href="#"><img src="images/airport_thumb.jpg" alt=""></a> 
			</div>

			<div class="insta">
				<a href="#"><img src="images/airport_thumb.jpg" alt=""></a> 
			</div>

			<div class="insta">
				<a href="#"><img src="images/airport_thumb.jpg" alt=""></a> 
			</div>

		</div>


		<div class="button_wrapper">
			<a href="#" class="button"> Visit </a>
		</div>



	</section>

<!-- End content -->

<?php get_footer();?>