<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio14
 */

?>
<?php the_content(); ?>

	<!--FOOTER SECTION-->
	<footer class="site-footer footer-section" id="footer-section">
		<div class="site-wrapper">
			<div class="footer-holder">
				<div class="footer-first-section">
					<div class="first">
						<span class="header">
							<h3>Keep in the loop. We won’t spam you.</h3>
							<!-- <?php
								// wp_nav_menu(
								// array(
								// 	'theme_location' => 'footer-menu-1',
								// 	'container' => '',
								// 	'items_wrap' => '<span>%3$s</span>',

								// )
								// );
							?> -->
						</span>

						<span class="paragragh">
							<p>
								<?php
									echo get_theme_mod ('footer_text')
								?>
							</p>
						</span>
						<span class="form">
							<input type="email" name="email" placeholder="email" id="">
							<button>Subscribe</button>
						</span>
					</div>
					<div class="second">
						<!-- -->
						<div class="contact">
							<span>
								<h3>Contact Us</h3>
							</span>
							<span>
								<p> <span>e-mail</span> <br>
								   <span> 
										<?php
											echo get_theme_mod ('footer_email')
										?>
									</span> <br> <br>
								   <span>
									   address
								   </span> <br>

								   	<?php
										echo get_theme_mod ('footer_address')
									?><br>
									<?php
										echo get_theme_mod ('footer_address_2')
									?><br>
									<?php
										echo get_theme_mod ('footer_address_3')
									?>
								</p>
							</span>
						</div>
						<!-- -->
						<div class="find-out-more">
							<h3>Find Out More</h3>
							<span>
								<img src="<?php echo get_template_directory_uri() ?>/asset/icons/facebook.png" alt="">
								<img src="<?php echo get_template_directory_uri() ?>/asset/icons/instagram.png" alt="">
							</span>
						</div>
					</div>
				</div>
			
			</div>
		</div>

		<!--LAST FOOTER SECTION -->
		<div class="footer-second-section">
			<div class="site-wrapper">
				<div class="footer">
					<div class="rights">
						<p>© 2019 Studio 14 ltd - All rights reserved.</p>
					</div>
					<div>
						<p>Privacy Policy</p>
						<p>Terms and Conditions</p>
					</div>
				</div>

			</div>
					
		</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
