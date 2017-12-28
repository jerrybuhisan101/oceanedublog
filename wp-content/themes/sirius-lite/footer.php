    <!-- Footer -->

	<footer>

		<div class="container" style = "padding-top:18%;">

			<div class="row">

				<div class="col-md-7 col-md-push-5">

                    <?php 

                    if ( has_nav_menu( 'footer' ) ) { 

                        wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => 1, 'container' => '', 'menu_class' => 'footer-menu' ) );

                    } 

                    ?>

				</div>

				<div class="col-md-5 col-md-pull-7">

                

                    <?php $sirius_text_logo = sirius_get_option('sirius_text_logo'); if($sirius_text_logo == '') $sirius_text_logo = get_bloginfo('name'); ?>

                    <div class="footer-logo">

						<div class="footer-logo-text"><?php echo esc_html($sirius_text_logo) ?></div>

					</div>

                    

                    <?php $sirius_footer_copyright = sirius_get_option('sirius_footer_copyright'); if($sirius_footer_copyright) { ?>

                    <div class="footer-copyright"><?php echo wp_kses_post($sirius_footer_copyright); ?></div>

                    <?php } ?>

                    

					<div class="footer-credits"><?php echo wp_kses_post(sirius_get_option('sirius_theme_credits')); ?></div>

                    

				</div>

			</div>

		</div>

	</footer>

	<!-- /Footer -->



</div><!-- /Main Wrapper -->



<?php wp_footer(); ?> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109716189-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109716189-2');
</script>


</body>

</html>