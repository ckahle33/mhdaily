				<!--left sidebar -->
				<div id="sidebar1" class="col-md-3 feed" role="complementary">
				<div class="subscribe">
					<!-- <h2>Subscribe</h2> -->
					<!-- <div class="email-text">Subscribe to receive a daily or weekly digest of mental health news directly in your inbox.</div> -->
					<!-- <?php // echo do_shortcode('[mc4wp_form id="1390"]'); ?> -->

					<!-- Begin Robly Signup Form -->
						<div id="mc4wp-form">
						  <form action="https://list.robly.com/subscribe/post" method="post" id="robly_embedded_subscribe_form" name="robly_embedded_subscribe_form" class="validate" target="_blank" novalidate="">

						    <input type="hidden" name="a" value="c0685bedc0d5f91cef8768d65e4f3d20" />
						    <h2>Subscribe</h2>

			        	<p class="italic">Subscribe to receive a daily or weekly digest of mental health news directly in your inbox.</p>

				        <div class="robly_field_group">
				        	<input type="email" name="EMAIL" id="DATA0" class="required" autocapitalize="off" autocorrect="off" value="" placeholder="Your email address">

					        <input type="submit" value="Sign Up" name="subscribe" id="robly_embedded_subscribe" class="button"/> 
				        </div>

				        <div class="robly_field_group input_group">
				        	<ul>
				        		<li><label><input type="checkbox" class="sublist_fb_option" value="41564" name="sub_lists[]"> Daily Dose</label></li>
				        		<li><label><input type="checkbox" class="sublist_fb_option" value="41587" name="sub_lists[]"> Weekly Dose</label></li>
				        	</ul>
				        </div>

						  </form>
						</div>
						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
						<script>
						  $(document).ready(function () {

						      $("#robly_embedded_subscribe").click(function (e) {
						          e.preventDefault();

						          var email = $("#DATA0").val();
						          if (!is_valid_email_address(email)) {
						              alert("Please enter a valid email address.");
						              return false;
						          }
						              if (!$("#DATA0").val()) {
						                  alert("Please fill in all required fields!");
						                  return false
						              }


						          var f = $("#robly_embedded_subscribe_form");
						          f.submit();

						          return false;
						      });

						  });

						  function is_valid_email_address(emailAddress) {
						      var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
						      return pattern.test(emailAddress);
						  }

						</script>
						<!-- End Robly Signup Form -->


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