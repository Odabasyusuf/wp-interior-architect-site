<?php $greenhash_redux_demo = get_option('redux_demo'); ?>

<section class="client-logo-section theme-bg pt-80 pb-80">

	<div class="container">

		<div class="row client-logo-wrapper text-center">

			<?php if (isset($greenhash_redux_demo['client_image_1']['url']) && $greenhash_redux_demo['client_image_1']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_1']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-1.png"
					     alt="">

				</div>

			<?php } ?>

			<?php if (isset($greenhash_redux_demo['client_image_2']['url']) && $greenhash_redux_demo['client_image_2']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_2']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-2.png"
					     alt="">

				</div>

			<?php } ?>

			<?php if (isset($greenhash_redux_demo['client_image_3']['url']) && $greenhash_redux_demo['client_image_3']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_3']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-3.png"
					     alt="">

				</div>

			<?php } ?>

			<?php if (isset($greenhash_redux_demo['client_image_4']['url']) && $greenhash_redux_demo['client_image_4']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_4']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-4.png"
					     alt="">

				</div>

			<?php } ?>

			<?php if (isset($greenhash_redux_demo['client_image_5']['url']) && $greenhash_redux_demo['client_image_5']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_5']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-5.png"
					     alt="">

				</div>

			<?php } ?>

			<?php if (isset($greenhash_redux_demo['client_image_6']['url']) && $greenhash_redux_demo['client_image_6']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_6']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-6.png"
					     alt="">

				</div>

			<?php } ?>

			<?php if (isset($greenhash_redux_demo['client_image_7']['url']) && $greenhash_redux_demo['client_image_7']['url'] != '') { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo esc_url($greenhash_redux_demo['client_image_7']['url']); ?>" alt="">

				</div>

			<?php } else { ?>

				<div class="col-xl-2 client-logo">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/client-logo/client-logo-6.png"
					     alt="">

				</div>

			<?php } ?>

		</div>

	</div>

</section>

<!-- client-logo-section end -->


</main>


<!-- footer start -->

<?php if (isset($greenhash_redux_demo['footer_image_2']['url']) && $greenhash_redux_demo['footer_image_2']['url'] != ''){ ?>

<footer class="footer img-bg footer-area-2"
        data-background="<?php echo esc_url($greenhash_redux_demo['footer_image_2']['url']); ?>">

	<?php }else{ ?>
	<footer class="footer footer-area-2">

		<?php } ?>

		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<div class="footer-right ml-0 pt-80">

						<div class="row mb-25">
							<div class="col-xl-3  col-md-6">
								<?php if (is_active_sidebar('footer-area-6')) : ?>
									<?php dynamic_sidebar('footer-area-6'); ?>
								<?php endif; ?>
							</div>
							<div class="col-xl-3  col-md-6">

								<?php if (is_active_sidebar('footer-area-2')) : ?>

									<?php dynamic_sidebar('footer-area-2'); ?>

								<?php endif; ?>

							</div>

							<div class="col-xl-3 col-md-6">

								<?php if (is_active_sidebar('footer-area-3')) : ?>

									<?php dynamic_sidebar('footer-area-3'); ?>

								<?php endif; ?>

							</div>

							<div class="col-xl-3 col-md-6">

								<?php if (is_active_sidebar('footer-area-7')) : ?>

									<?php dynamic_sidebar('footer-area-7'); ?>

								<?php endif; ?>

							</div>

						</div>

						<div class="row">

							<div class="col-xl-12 text-center">

								<?php if (isset($greenhash_redux_demo['footer_text']) && $greenhash_redux_demo['footer_text'] != '') { ?>

									<div class="copy-right pt-25 pb-25">

										<p class="mb-0"><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['footer_text'])); ?></p>

									</div>

								<?php } else { ?>

									<div class="copy-right pt-25 pb-25">

										<p class="mb-0"><?php echo esc_html__('© 2020 Greenhash. All Rights Reserved', 'greenhash') ?></p>

									</div>

								<?php } ?>

							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</footer>

	<!-- footer end -->


	<!-- scroll-top -->

	<div class="scroll-top">

		<i class="fas fa-level-up"></i>

	</div>


	<?php wp_footer(); ?>

	</body>

	</html>