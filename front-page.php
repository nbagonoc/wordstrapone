<?php get_header(); ?>
  	
  	<!-- Intro Row -->
	<!-- retrieving specific post by  post ID -->
	<?php $query = new WP_Query('p=263'); ?>				
	<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
		<div id="intro" class="introRow verticalAlign" style="background-image: url('<?php echo $thumb['0'];?>');">
		<div class="verticalAlignElement ">
		  <div class="container">
		        <h1 class="post"><?php the_title();?></h1>
				<h3 class="light"><?php echo get_the_excerpt(); ?></h3>	        
		        <a class="btn btn-default page-scroll post" href="#about">Learn More!</a>
		  </div>
		</div>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>


  <!-- About Row -->
  <div id="about" class="aboutRow verticalAlign">
    <div class="verticalAlignElement">
      <div class="container">

		<!-- retrieving specific post by  post ID -->
		<?php $query = new WP_Query('p=266'); ?>				
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
	        <h1 class="post"><?php the_title();?></h1>
			<h3 class="light"><?php echo get_the_excerpt(); ?></h3>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>


		<div class="contentArea marginTop post"><!-- featured post -->
			<div class="row">
				<!-- retrieves a post/page, if any -->
				<?php $query = new WP_Query('cat=30&posts_per_page=3'); ?>	
				<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('custom', array('class'=>'img-responsive featuredPostThumbnail')); ?></a>
							<a href="<?php the_permalink(); ?>"><h2 class="text-capitalize text-center"><?php the_title(); ?></h2></a>
							<p><?php echo get_the_excerpt(); ?></p>
						</div>
				<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div><!--close featured post  -->

      </div>
    </div>
  </div>

  	<!-- Intro Row -->
	<!-- retrieving specific post by  post ID -->
	<?php $query = new WP_Query('p=269'); ?>				
	<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
		<div id="contact" class="introRow verticalAlign" style="background-image: url('<?php echo $thumb['0'];?>');">
		<div class="verticalAlignElement ">
		  <div class="container">
		        <h1 class="post"><?php the_title();?></h1>
				<h3 class="light"><?php echo get_the_excerpt(); ?></h3>
		  </div>
		</div>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>