<?php get_header(); ?>
	
			<div id="content" class="clearfix row">
			<?php get_sidebar('left-sidebar'); // sidebar 1 ?>
				<div id="main" class="col-sm-9 clearfix" id="post-stream" role="main">
    		
			<div class="row">

			
			<div class="col-sm-12">
				
				<h2 class='topic tag-page'><?php single_tag_title(); ?> </h2>

				<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "/feed/"; ?>"> RSS </a>

				<?php echo tag_description($tag_id); ?>
			</div>
				<div class="col-sm-12">
    			<?php $args = array(
				    'posts_per_page' => 30,
				    'offset' => 0,
				    'tag_id' => $tag_id,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish',
				    'suppress_filters' => true );

				    $the_query = new WP_Query( $args );?>

						<?php while ($the_query -> have_posts()) : $the_query->the_post(); ?> 
						<?php if (in_category('Featured')){ 
								echo "<div class='title large featured'>";
							} else {
								echo "<div class='title large'>";
							}?>
							<a href="<?php the_field('post_url') ?>"><?php the_title(); ?></a><br>
						</div>
						<div class="sidebar-source">
							<?php the_field('post_source'); ?> -  <?php echo get_the_date('F j, Y'); ?>			
						</div>
						
						<div class="post-body">
							<?php the_excerpt(); ?>
						</div>

						<div class="sidebar-tags">
							<?php the_tags(' ',' | '); ?>	
						</div>



						<?php endwhile ?>
						<?php wp_reset_query(); ?>
				</div>	
				
			</div> <!-- end #main -->
    	</div>
			
	</div> <!-- end #content -->


<?php get_footer(); ?>