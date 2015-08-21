<?php get_header(); ?>

		<?php $args = array(
		    'posts_per_page' => 2,
		    'offset' => 0,
		    'category_name' => "Featured",
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'post_type' => 'post',
		    'post_status' => 'publish',
		    'suppress_filters' => true );

		    $the_query = new WP_Query( $args );?>


			
			<div id="content" class="row">
			<?php get_sidebar('left-sidebar'); // sidebar 1 ?>
				<div id="main" class="col-md-9 clearfix" id="post-stream" role="main">
					<h2>Daily Special</h2>
				<div class='row'>
				<?php while ($the_query -> have_posts()) : $the_query->the_post(); ?> 
					<div class="recent col-sm-6">
						<a href="<?php echo the_field('post_url'); ?>">
								
						<div class="feature-tags" style="display: none;">
							<?php the_tags(' ',' | '); ?>	
						</div>
						<?php	$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0]; 
								$thumb_alt = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
						?>
							
							<div class="image-overlay">
							
							<!-- check if the advanced custom field is set, if not use normal permalink -->
								<?php if (get_field('post_url')) { ?>
									<a href="<?php echo the_field('post_url'); ?> "></a>
								<?php } else { ?>
									<a href="<?php echo get_permalink(); ?>"> <?php get_the_title(); ?> </a>
								<?php } ?>

								<div class="image" style="background: url('<?php echo $thumb_url; ?>'); background-size: cover;">
									<?php if (has_tag('video')) { ?>
										<div class="video-icon">	
											<i class="glyphicon glyphicon-play-circle" aria-hidden="true"></i>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="feature-overlay">
								<div class="feature-title">
								 	<?php if (strlen($post->post_title) > 35) {
										echo substr(the_title($before = '', $after = '', FALSE), 0, 100) . ''; } else {
										the_title();
									} ?>
								</div>
						 			<br>
							 	<div class='feature-info'>
							 		<?php the_field('post_source'); ?>&nbsp;-&nbsp;
							 		<?php echo get_the_date('F j, Y'); ?>
							 	</div>
							 </div>
						 		<br>
							 	<div class='feature-intro'>
							 		<?php echo apply_filters('the_content', substr(get_the_content(), 0, 250) ); ?>
								</div>
							
						</a>
					</div>	

					<?php endwhile; ?>
    			<?php wp_reset_query(); ?>
			</div>

    		<div class="row">

				
			<?php $args = array(
		    'posts_per_page' => 2,
		    'offset' => 2,
		    'category_name' => "Featured",
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'post_type' => 'post',
		    'post_status' => 'publish',
		    'suppress_filters' => true );

		    $the_query = new WP_Query( $args );?>

		    <?php while ($the_query -> have_posts()) : $the_query->the_post(); ?> 
					<div class="recent col-sm-6">
						

						<div class="feature-tags" style="display: none;">
							<?php the_tags(' ',' | '); ?>	
						</div>
						<?php	$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0]; 
								$thumb_alt = get_post_meta($thumb_id , '_wp_attachment_image_alt', true);
						?>
							<div class="image-overlay">

								<!-- check if the advanced custom field is set, if not use normal permalink -->
								<?php if (get_field('post_url')) { ?>
									<a href="<?php echo the_field('post_url'); ?> "></a>
								<?php } else { ?>
									<a href="<?php echo get_permalink(); ?>"> <?php get_the_title(); ?> </a>
								<?php } ?>

								<div class="image" style="background: url('<?php echo $thumb_url; ?>'); background-size: cover;">
									<?php if (has_tag('video')) { ?>
										<div class="video-icon">	
											<i class="glyphicon glyphicon-play-circle" aria-hidden="true"></i>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="feature-overlay">
								<div class="feature-title">
								 	<?php if (strlen($post->post_title) > 35) {
										echo substr(the_title($before = '', $after = '', FALSE), 0, 100) . ''; } else {
										the_title();
									} ?>
								</div>
						 			<br>
							 	<div class='feature-info'>
							 		<?php the_field('post_source'); ?>&nbsp;-&nbsp;
							 		<?php echo get_the_date('F j, Y'); ?>
							 	</div>
							 </div>
						 		<br>
							 	<div class='feature-intro'>
							 		<?php echo apply_filters('the_content', substr(get_the_content(), 0, 250) ); ?>
								</div>
					</div>	

					<?php endwhile; ?>
    			<?php wp_reset_query(); ?>
			</div>

			<?php 
				wp_reset_query();
				$url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (!strpos($url, 'tag')) {

					$args = array(
				    'posts_per_page' => 10,				    
				    'category_name' => 'Feed',
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish'
				    );

				    $the_query = new WP_Query( $args );?>
						
						<h2>Daily Dose</h2>
						
						<?php while ($the_query -> have_posts()) : $the_query->the_post(); ?> 

						<div class="news-item">

						<?php if (in_category('Featured')){ 
								echo "<div class='title large featured'>";
							} else {
								echo "<div class='title large'>";
							}?>

							<!-- check if the advanced custom field is set, if not use normal permalink -->
							<?php if (get_field('post_url')) { ?>
								<a href="<?php echo get_field('post_url'); ?> "> <?php the_title(); ?> </a></br>
							<?php } else { ?>
								<a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></br>

							<?php } ?>
						</div>

						<?php 
							
							$content = get_the_content();
							$trimmed_content = wp_trim_words( $content, 40, '...' );

							echo $trimmed_content; ?>

						<div class="sidebar-source">
							<?php the_field('post_source'); ?>			
						</div>
						<div class="sidebar-tags">
							<?php the_tags(' ',' | '); ?>	
						</div>
						<!-- <hr class="blue"></hr> -->
					
					</div>

					<?php endwhile; ?>
	    			
					<?php } ?>

			<div class="row">

				<h2>Featured Posts</h2>

				<div class="col-sm-12 daily-feed">
    			<?php $args = array(
				    'posts_per_page' => 45,
				    'offset' => 4,
				    'category_name' => "Featured",
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish',
				    'suppress_filters' => true );

				    $the_query = new WP_Query( $args );?>
					
						<?php while ($the_query -> have_posts()) : $the_query->the_post(); ?> 
						<div class="news-item">
							<div class='title large featured'>
							
							<!-- check if the advanced custom field is set, if not use normal permalink -->
							<?php if (get_field('post_url')) { ?>
								<a href="<?php echo get_field('post_url'); ?> "> <?php the_title(); ?> </a></br>
							<?php } else { ?>
								<a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a></br>
							<?php } ?>

							</div>
							<div class="body-source">
								<div class="italic"><?php the_field('post_source'); ?></div> -  <?php echo get_the_date('F j, Y'); ?>			
							</div>
							
							<div class="post-body">
								<?php 
								$content = get_the_content();
								$trimmed_content = wp_trim_words( $content, 40, '...' );

								echo $trimmed_content; ?>
							</div>

							<div class="body-tags">
								<?php the_tags(' ',' | '); ?>	
							</div>

						</div>

						<?php endwhile ?>
						<?php wp_reset_query(); ?>
				</div>	
				
			</div> <!-- end #main -->
    	
			
	</div> <!-- end #content -->


<?php get_footer(); ?>