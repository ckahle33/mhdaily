				<!--left sidebar -->
				<div id="sidebar1" class="col-md-3 feed" role="complementary">
				<div class="subscribe">
					<h2>Subscribe</h2>
					<!-- <div class="email-text">Subscribe to receive a daily or weekly digest of mental health news directly in your inbox.</div> -->
					<?php echo do_shortcode('[mc4wp_form id="1390"]'); ?>
				</div>
				
				<?php 
				wp_reset_query();
				$url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

				if (!strpos($url, 'tag')) {

					$args = array(
				    'posts_per_page' => 30,				    
				    'category_name' => 'Feed',
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish'
				    );

				    $the_query = new WP_Query( $args );?>
						
						<h2>Feed</h2>
						
						<?php while ($the_query -> have_posts()) : $the_query->the_post(); ?> 
						<?php if (in_category('Featured')){ 
								echo "<div class='title featured'>";
							} else {
								echo "<div class='title'>";
							}?>
							<a href="<?php echo the_field('post_url') ?>"><?php the_title(); ?></a><br>
						</div>
						<div class="sidebar-source">
							<?php the_field('post_source'); ?>			
						</div>
						<div class="sidebar-tags">
							<?php the_tags(' ',' | '); ?>	
						</div>
						<hr class="blue"></hr>

					<?php endwhile; ?>
	    			
					<?php } ?>

						<div class="topics">
							<h2>TOPICS</h2>
							<?php
							$tags = get_tags();
							$html = '<div class="post_tags-sidebar">';
							foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
										
								$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
								$html .= "{$tag->name}</a>";
							}
							$html .= '</div>';
							echo $html;
							?>
						</div>
					
						<div class="mh-sources">
							<?php dynamic_sidebar('mh-sources'); ?>
						</div>

						<div class="mh-authors">
							<?php dynamic_sidebar('mh-authors'); ?>
						</div>
				</div>