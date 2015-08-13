				<!--left sidebar -->
				<div id="sidebar1" class="col-md-3 feed" role="complementary">
				<div class="subscribe">
					<h2>Subscribe</h2>
					<!-- <div class="email-text">Subscribe to receive a daily or weekly digest of mental health news directly in your inbox.</div> -->
					<?php echo do_shortcode('[mc4wp_form id="1390"]'); ?>
				</div>
						<div class="topics">
							<h2>TOPICS</h2>
							<?php
							$tags = get_tags();
							$html = '<div class="post_tags-sidebar">';
							foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
										
								$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
								$html .= "{$tag->name} ({$tag->count})</a>";
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