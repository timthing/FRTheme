<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix">
				<section id="pageheader" class="feature">
				
					<div class="featurecontent wrap">
						<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
						<div class="h1">
							<h1><?php bloginfo('description'); ?></h1>
							<img src="/wp-content/themes/FR/library/images/img_sig@2x.png">
						</div>
					</div>
					
				</section>
				</div>
				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="twelvecol first clearfix" role="main">
						<a href="#Contact" class="button button_contact">Neem contact op <img src="/wp-content/themes/FR/library/images/icn_contactbutton@2x.png" width="61" height="23" /></a> 

						<section>
							<div class="content-wrap clearfix">
								<div class="section_title">
								<?php
											$post_id = 1;
											$queried_post = get_post($post_id);
										?>
									<h2><?php echo $queried_post->post_title; ?></h2>
									<p><?php echo $queried_post->post_content; ?></p>
								</div>
									<div class="sixcol coaching-intro">			
										<article>
										<img src="/wp-content/themes/FR/library/images/icn_coach1@2x.png" width="29" height="61" alt="Persoonlijk leiderschap" />
										<?php
											$post_id = 1;
											$queried_post = get_post($post_id);
										?>
											<header>
												<h3><?php echo $queried_post->post_title; ?></h3>
											</header>
											<p>
													<?php echo $queried_post->post_content; ?>
											</p>
											<a href="#" class="button2">Lees meer</a>
										</article>
									</div>
									<div class="sixcol coaching-intro">			
										<article>
										<img src="/wp-content/themes/FR/library/images/icn_coach2@2x.png" width="54" height="61" alt="Teamleiderschap" />
										<?php
											$post_id = 1;
											$queried_post = get_post($post_id);
										?>
											<header>
												<h3><?php echo $queried_post->post_title; ?></h3>
											</header>
											<p>
													<?php echo $queried_post->post_content; ?>
											</p>
											<a href="#" class="button2">Lees meer</a>
										</article>
									</div>								
								</div>
						</section>

						<section id="global-blogroll" class="section-blue">
							<div class="content-wrap clearfix">
								<div class="section_title">
								<?php
											$post_id = 1;
											$queried_post = get_post($post_id);
										?>
									<h2><?php echo $queried_post->post_title; ?></h2>
									<p><?php echo $queried_post->post_content; ?></p>
								</div>
								<article>
									<ul>
										<?php
											$args = array( 'numberposts' => '3' );
											$recent_posts = wp_get_recent_posts( $args );
											foreach( $recent_posts as $recent ){
												echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' . $recent["post_title"].'</a> </li> ';
											}
										?>
									</ul>
									<a href="/Blog" class="button button_blog">Naar de blog <img src="/wp-content/themes/FR/library/images/icn_blog@2x.png" width="31" height="31" alt="Blog" /></a>
								</article>	
							</div>						
						</section>
						
						<section class="section-blue no-padding">
							<div class="content-wrap clearfix">
								<hr />
							</div>
						</section>
						
						<section id="newsletter" class="section-blue">
							<div class="content-wrap clearfix">
								<div class="section_title">
								<?php
											$post_id = 1;
											$queried_post = get_post($post_id);
										?>
									<h2><?php echo $queried_post->post_title; ?></h2>
									<p><?php echo $queried_post->post_content; ?></p>
								</div>
								<article>
	
									<form action="http://freekrooze.us2.list-manage.com/subscribe/post?u=9dfae98307cf5ca24e1bfed0b&amp;id=57655954f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<div class="mc-field-group clearfix">
											<input type="email" value="" placeholder="Type hier uw email adres" name="EMAIL" class="required email" id="mce-EMAIL">
											<a href="#" onclick="$(this).closest('form').submit()" class="button">Aanmelden<img src="/wp-content/themes/FR/library/images/icn_newsletter@2x.png" width="34" height="25" alt="Aanmelden nieuwsbrief" /></a>
										</div>
										<p class="disclaimer">*Uw email adres wordt NIET doorgestuurd aan derden, plat gespamd of op andere wijzen misbruikt.</p>
									</form>
								</article>
							</div>	
						</section>
						
						<section id="Contact">
							<div class="content-wrap clearfix">
							
								<div class="section_title">
								<?php
											$post_id = 1;
											$queried_post = get_post($post_id);
										?>
									<h2><?php echo $queried_post->post_title; ?></h2>
									<p><?php echo $queried_post->post_content; ?></p>
								</div>
	
								<div class="sixcol">
									<?php if (have_posts()) : while (have_posts()) : the_post();?>
									<?php the_content(); ?>
									<?php endwhile; endif; ?>
								</div>	
								<div class="sixcol">
									<div class="social">
										Freek Rooze
										<p><a href="mailto:info@freekrooze.nl">info@freekrooze.nl</a></p>
										<p>+31 (0) 172 417400</p>
										<hr>
										<div class="facebook">
											<div class="fb-like clearfix" data-href="http://www.freekrooze.nl" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
										</div>
										<div class="twitter">
											<p><a href="https://twitter.com/freekrooze" class="twitter-follow-button" data-show-count="false" data-lang="nl">@freekrooze volgen</a>
											<p><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
											<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.freekrooze.nl" data-text="Doelgericht coachen met resultaat" data-via="freekrooze" data-lang="nl" data-hashtags="coaching">Tweeten</a></p>
											<p><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
										</div>		
									</div>
								</div>
								
							</div>
						</section>

					
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
