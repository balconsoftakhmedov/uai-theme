<?php get_header(); ?>
<?php $menu_items = get_field( 'menu_items' ); ?>
<div class="news_pop-up js_news_pop-up">
	<button class="pop-up_close js_news-pop-up_close">
		<img
				src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png"
				alt=""
		/>
	</button>
	<p class="pop-up_title"><?php echo $menu_items['news_text']; ?></p>
	<ul class="news_list">
		<?php
		$lastposts = get_posts( array(
				'posts_per_page' => - 1
		) );
		if ( $lastposts ) {
			foreach ( $lastposts as $post ) :
				setup_postdata( $post ); ?>
				<li class="news_item">
					<div class="news_block js_news_block">
						<div class="news_block__content">
							<div class="news_block__data-box">
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/calendar.png"
										alt=""
								/>
								<span><?php echo get_the_date( 'j/m/Y' ); ?></span>
							</div>
							<div class="news_block__visible">
								<p class="news_block__title"><?php echo get_the_title(); ?></p>
								<?php the_content(); ?>
							</div>

						</div>
					</div>
				</li>
			<?php
			endforeach;
			wp_reset_postdata();
		}
		?>

	</ul>
</div>

<div class="pop-ups js_pop-ups">


	<?php $first_block = get_field( 'first_block' ); ?>
	<div class="pop-up js_pop-up" data-id="first">
		<button class="pop-up_close js_pop-up_close">
			<img
					src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png"
					alt=""
			/>
		</button>
		<p class="pop-up_title"><?php echo $first_block['block_title']; ?></p>
		<!-- START -->

		<div class="services-tabs  tabs tabs-first">
			<div class="tabs__bar-wrap">
				<div class="tabs__bar">
					<?php $first_slider_first_pop_up = get_field( 'first_slider_first_pop_up' ); ?>

					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $first_slider_first_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $first_slider_first_pop_up['tab_image']; ?>" alt="">
					</div>
					<?php $second_slider_first_pop_up = get_field( 'second_slider_first_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $second_slider_first_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $second_slider_first_pop_up['tab_image']; ?>" alt="">
					</div>
					<?php $third_slider_first_pop_up = get_field( 'third_slider_first_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $third_slider_first_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $third_slider_first_pop_up['tab_image']; ?>" alt="">
					</div>
					<?php $fourth_slider_first_pop_up = get_field( 'fourth_slider_first_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $fourth_slider_first_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $fourth_slider_first_pop_up['tab_image']; ?>" alt="">
					</div>
					<?php $fifth_slider_first_pop_up = get_field( 'fifth_slider_first_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $fifth_slider_first_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $fifth_slider_first_pop_up['tab_image']; ?>" alt="">
					</div>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--tenth"
							>
								<div class="swiper-wrapper">
									<?php if ( $first_slider_first_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_first_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_first_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_first_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $first_slider_first_pop_up['text_1_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_1']; ?>
															</p>
															<p>
																<span><?php echo $first_slider_first_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_first_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img bozo1"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_first_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_first_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_first_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_first_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $first_slider_first_pop_up['text_2_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_2']; ?>
															</p>
															<p>
																<span><?php echo $first_slider_first_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_first_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_first_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_first_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_first_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_first_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $first_slider_first_pop_up['text_3_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_3']; ?>
															</p>
															<p>
																<span><?php echo $first_slider_first_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_first_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_first_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_first_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_first_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_first_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $first_slider_first_pop_up['text_4_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_4']; ?>
															</p>
															<p>
																<span><?php echo $first_slider_first_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_first_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_first_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_first_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_first_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_first_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $first_slider_first_pop_up['text_5_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_5']; ?>
															</p>
															<p>
																<span><?php echo $first_slider_first_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $first_slider_first_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_first_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--tenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img bozo1"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in bozo1"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--tenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img bozo1"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in bozo1"
									/>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--eleventh"
							>
								<div class="swiper-wrapper">
									<?php if ( $second_slider_first_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_first_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_first_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_first_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $second_slider_first_pop_up['text_1_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_1']; ?>
															</p>
															<p>
																<span><?php echo $second_slider_first_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_first_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_first_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_first_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_first_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_first_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $second_slider_first_pop_up['text_2_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_2']; ?>
															</p>
															<p>
																<span><?php echo $second_slider_first_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_first_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_first_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_first_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_first_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_first_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $second_slider_first_pop_up['text_3_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_3']; ?>
															</p>
															<p>
																<span><?php echo $second_slider_first_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_first_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_first_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_first_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_first_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_first_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $second_slider_first_pop_up['text_4_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_4']; ?>
															</p>
															<p>
																<span><?php echo $second_slider_first_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_first_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_first_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_first_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_first_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_first_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span><?php echo $second_slider_first_pop_up['text_5_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_5']; ?>
															</p>
															<p>
																<span><?php echo $second_slider_first_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $second_slider_first_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_first_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--eleventh"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--eleventh"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--twelvth"
							>
								<div class="swiper-wrapper">
									<?php if ( $third_slider_first_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $third_slider_first_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $third_slider_first_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $third_slider_first_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_1_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $third_slider_first_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $third_slider_first_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $third_slider_first_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $third_slider_first_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $third_slider_first_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_2_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $third_slider_first_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $third_slider_first_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $third_slider_first_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $third_slider_first_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $third_slider_first_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_3_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $third_slider_first_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $third_slider_first_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $third_slider_first_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $third_slider_first_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $third_slider_first_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_4_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $third_slider_first_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $third_slider_first_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $third_slider_first_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $third_slider_first_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $third_slider_first_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_5_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $third_slider_first_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $third_slider_first_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $third_slider_first_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--twelvth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--twelvth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>

							</div>
						</div>
					</div>

				</div>
				<div class="tabs__section">
					<?php $fourth_slider_first_pop_up = get_field( 'fourth_slider_first_pop_up' ); ?>

					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--thirteenth"
							>
								<div class="swiper-wrapper">
									<?php if ( $fourth_slider_first_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fourth_slider_first_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fourth_slider_first_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fourth_slider_first_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_1_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fourth_slider_first_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fourth_slider_first_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fourth_slider_first_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fourth_slider_first_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fourth_slider_first_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_2_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fourth_slider_first_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fourth_slider_first_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fourth_slider_first_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fourth_slider_first_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fourth_slider_first_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_3_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fourth_slider_first_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fourth_slider_first_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fourth_slider_first_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fourth_slider_first_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fourth_slider_first_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_4_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fourth_slider_first_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fourth_slider_first_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fourth_slider_first_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fourth_slider_first_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fourth_slider_first_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_5_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $fourth_slider_first_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $fourth_slider_first_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fourth_slider_first_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--thirteenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirteenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--fourteenth"
							>
								<div class="swiper-wrapper">
									<?php if ( $fifth_slider_first_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fifth_slider_first_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fifth_slider_first_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fifth_slider_first_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_1_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fifth_slider_first_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fifth_slider_first_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fifth_slider_first_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fifth_slider_first_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fifth_slider_first_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_2_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fifth_slider_first_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fifth_slider_first_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fifth_slider_first_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fifth_slider_first_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fifth_slider_first_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_3_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fifth_slider_first_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fifth_slider_first_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fifth_slider_first_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fifth_slider_first_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fifth_slider_first_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_4_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fifth_slider_first_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $fifth_slider_first_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $fifth_slider_first_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $fifth_slider_first_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $fifth_slider_first_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_5_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $fifth_slider_first_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $fifth_slider_first_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $fifth_slider_first_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--fourteenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fourteenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END -->

	</div>


	<?php $second_block = get_field( 'second_block' ); ?>
	<div class="pop-up js_pop-up" data-id="second">
		<button class="pop-up_close js_pop-up_close">
			<img
					src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png"
					alt=""
			/>
		</button>
		<p class="pop-up_title"><?php echo $second_block['block_title']; ?></p>


		<ul class="pop-up_list">
			<?php $first_slider_second_pop_up = get_field( 'first_slider_second_pop_up' ); ?>
			<li class="pop-up_item">
				<div class="pop-up_box">
					<div class="swiper-object">
						<div
								class="swiper-container swiper-container__pop-up swiper-container--fifteenth"
						>
							<div class="swiper-wrapper">
								<?php if ( $first_slider_second_pop_up['image_1'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_second_pop_up['top_text_1'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_second_pop_up['top_text_1']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_second_pop_up['text_1'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span><?php echo $first_slider_second_pop_up['text_1_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_1']; ?>
														</p>
														<p>
															<span><?php echo $first_slider_second_pop_up['text_1_2_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_1_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_second_pop_up['image_1']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_second_pop_up['image_2'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_second_pop_up['top_text_2'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_second_pop_up['top_text_2']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_second_pop_up['text_2'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span><?php echo $first_slider_second_pop_up['text_2_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_2']; ?>
														</p>
														<p>
															<span><?php echo $first_slider_second_pop_up['text_2_2_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_2_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_second_pop_up['image_2']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_second_pop_up['image_3'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_second_pop_up['top_text_3'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_second_pop_up['top_text_3']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_second_pop_up['text_3'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span><?php echo $first_slider_second_pop_up['text_3_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_3']; ?>
														</p>
														<p>
															<span><?php echo $first_slider_second_pop_up['text_3_2_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_3_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_second_pop_up['image_3']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_second_pop_up['image_4'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_second_pop_up['top_text_4'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_second_pop_up['top_text_4']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_second_pop_up['text_4'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span><?php echo $first_slider_second_pop_up['text_4_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_4']; ?>
														</p>
														<p>
															<span><?php echo $first_slider_second_pop_up['text_4_2_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_4_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_second_pop_up['image_4']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_second_pop_up['image_5'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_second_pop_up['top_text_5'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_second_pop_up['top_text_5']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_second_pop_up['text_5'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span><?php echo $first_slider_second_pop_up['text_5_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_5']; ?>
														</p>
														<p>
															<span><?php echo $first_slider_second_pop_up['text_5_2_highlited']; ?></span>
															<?php echo $first_slider_second_pop_up['text_5_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_second_pop_up['image_5']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<div
									class="swiper-button-next swiper-button-next-pos swiper-button-next--fifteenth"
							>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
										alt=""
										class="swiper-button-next_img"
								/>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
										alt=""
										class="swiper-button-next_img swiper-button-next_img-in"
								/>
							</div>
							<div
									class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fifteenth"
							>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
										alt=""
										class="swiper-button-next_img"
								/>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
										alt=""
										class="swiper-button-next_img swiper-button-next_img-in"
								/>
							</div>
						</div>
					</div>
				</div>
			</li>

		</ul>
	</div>


	<?php $third_block = get_field( 'third_block' ); ?>
	<div class="pop-up js_pop-up" data-id="third">
		<button class="pop-up_close js_pop-up_close">
			<img
					src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png"
					alt=""
			/>
		</button>
		<p class="pop-up_title"><?php echo $third_block['block_title']; ?></p>


		<!-- START -->


		<div class="services-tabs tabs tabs-third">
			<div class="tabs__bar-wrap">
				<div class="tabs__bar">
					<?php $first_slider_third_pop_up = get_field( 'first_slider_third_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $first_slider_third_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $first_slider_third_pop_up['tab_image']; ?>" alt="">
					</div>
					<?php $second_slider_third_pop_up = get_field( 'second_slider_third_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $second_slider_third_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $second_slider_third_pop_up['tab_image']; ?>" alt="">
					</div>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--sixteenth"
							>
								<div class="swiper-wrapper">
									<?php if ( $first_slider_third_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_third_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_third_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_third_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $first_slider_third_pop_up['text_1_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_third_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_third_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_third_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_third_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_third_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_third_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $first_slider_third_pop_up['text_2_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_third_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_third_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_third_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_third_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_third_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_third_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $first_slider_third_pop_up['text_3_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_third_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_third_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_third_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_third_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_third_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_third_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $first_slider_third_pop_up['text_4_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_third_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_third_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_third_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_third_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_third_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_third_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $first_slider_third_pop_up['text_5_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_third_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $first_slider_third_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $first_slider_third_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--sixteenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--sixteenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>

						</div>
					</div>

				</div>
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--seventeenth"
							>
								<div class="swiper-wrapper">
									<?php if ( $second_slider_third_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_third_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_third_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_third_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $second_slider_third_pop_up['text_1_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_third_pop_up['image_1']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_third_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_third_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_third_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_third_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_2_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_third_pop_up['image_2']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_third_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_third_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_third_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_third_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_3_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_third_pop_up['image_3']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_third_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_third_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_third_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_third_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_4_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_third_pop_up['image_4']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_third_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_third_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_third_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_third_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_5_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_third_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $second_slider_third_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<img
																src="<?php echo $second_slider_third_pop_up['image_5']; ?>"
																alt=""
																class="swiper-slide_img"
														/>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--seventeenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--seventeenth"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		<!-- END -->

	</div>


	<?php $fourth_block = get_field( 'fourth_block' ); ?>
	<div class="pop-up js_pop-up" data-id="fourth">
		<button class="pop-up_close js_pop-up_close">
			<img
					src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png"
					alt=""
			/>
		</button>
		<p class="pop-up_title"><?php echo $fourth_block['block_title']; ?></p>
		<ul class="pop-up_list">
			<?php $first_slider_fourth_pop_up = get_field( 'first_slider_fourth_pop_up' ); ?>
			<li class="pop-up_item">
				<div class="pop-up_box">
					<div class="swiper-object">
						<div
								class="swiper-container swiper-container__pop-up swiper-container--ninteenth"
						>
							<div class="swiper-wrapper">
								<?php if ( $first_slider_fourth_pop_up['image_1'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_fourth_pop_up['top_text_1'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_fourth_pop_up['top_text_1']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_fourth_pop_up['text_1'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">

														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_1_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_1']; ?>
														</p>
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_1_2_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_1_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_fourth_pop_up['image_1']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_fourth_pop_up['image_2'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_fourth_pop_up['top_text_2'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_fourth_pop_up['top_text_2']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_fourth_pop_up['text_2'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_2_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_2']; ?>
														</p>
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_2_2_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_2_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_fourth_pop_up['image_2']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_fourth_pop_up['image_3'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_fourth_pop_up['top_text_3'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_fourth_pop_up['top_text_3']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_fourth_pop_up['text_3'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_3_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_3']; ?>
														</p>
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_3_2_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_3_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_fourth_pop_up['image_3']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_fourth_pop_up['image_4'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_fourth_pop_up['top_text_4'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_fourth_pop_up['top_text_4']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_fourth_pop_up['text_4'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_4_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_4']; ?>
														</p>
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_4_2_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_4_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_fourth_pop_up['image_4']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
								<?php if ( $first_slider_fourth_pop_up['image_5'] ): ?>
									<div class="swiper-slide">
										<?php if ( $first_slider_fourth_pop_up['top_text_5'] ): ?>
											<p class="swiper-slide_text">
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
														alt=""
												/>
												<span
												><?php echo $first_slider_fourth_pop_up['top_text_5']; ?></span
												>
												<img
														src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
														alt=""
												/>
											</p>
										<?php endif; ?>
										<div class="swiper-slide_box-wrap">
											<?php if ( $first_slider_fourth_pop_up['text_5'] ): ?>
												<div class="swiper-slide_text-block">
													<div class="wrap">
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_5_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_5']; ?>
														</p>
														<p>
															<span> <?php echo $first_slider_fourth_pop_up['text_5_2_highlited']; ?></span>
															<?php echo $first_slider_fourth_pop_up['text_5_2']; ?>
														</p>
													</div>
												</div>
											<?php endif; ?>
											<div class="swiper-slide_box_wrap">
												<div class="swiper-slide_box">
													<img
															src="<?php echo $first_slider_fourth_pop_up['image_5']; ?>"
															alt=""
															class="swiper-slide_img"
													/>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<div
									class="swiper-button-next swiper-button-next-pos swiper-button-next--ninteenth"
							>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
										alt=""
										class="swiper-button-next_img"
								/>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
										alt=""
										class="swiper-button-next_img swiper-button-next_img-in"
								/>
							</div>
							<div
									class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--ninteenth"
							>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
										alt=""
										class="swiper-button-next_img"
								/>
								<img
										src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
										alt=""
										class="swiper-button-next_img swiper-button-next_img-in"
								/>
							</div>
						</div>
					</div>
				</div>
			</li>

		</ul>
	</div>


	<?php $fifth_block = get_field( 'fifth_block' ); ?>
	<div class="pop-up js_pop-up" data-id="fifth">
		<button class="pop-up_close js_pop-up_close">
			<img
					src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png"
					alt=""
			/>
		</button>
		<p class="pop-up_title"><?php echo $fifth_block['block_title']; ?></p>


		<!-- START -->

		<div class="services-tabs tabs tabs-fifth">
			<div class="tabs__bar-wrap">
				<div class="tabs__bar">
					<?php $first_slider_fifth_pop_up = get_field( 'first_slider_fifth_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $first_slider_fifth_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $first_slider_fifth_pop_up['tab_image']; ?>" alt="">
					</div>
					<?php $second_slider_fifth_pop_up = get_field( 'second_slider_fifth_pop_up' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls-top">
							<span><?php echo $second_slider_fifth_pop_up['tab_text']; ?></span>
						</div>
						<img src="<?php echo $second_slider_fifth_pop_up['tab_image']; ?>" alt="">
					</div>

				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--twenty-three"
							>
								<div class="swiper-wrapper">
									<?php if ( $first_slider_fifth_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_fifth_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_fifth_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_fifth_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_1_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">


														<?php if ( $first_slider_fifth_pop_up['image_1']['type'] == 'image' ): ?>
															<img src="<?php echo $first_slider_fifth_pop_up['image_1']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $first_slider_fifth_pop_up['image_1']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>


													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_fifth_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_fifth_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_fifth_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_fifth_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_2_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">


														<?php if ( $first_slider_fifth_pop_up['image_2']['type'] == 'image' ): ?>
															<img src="<?php echo $first_slider_fifth_pop_up['image_2']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $first_slider_fifth_pop_up['image_2']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>


													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_fifth_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_fifth_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_fifth_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_fifth_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_3_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">


														<?php if ( $first_slider_fifth_pop_up['image_3']['type'] == 'image' ): ?>
															<img src="<?php echo $first_slider_fifth_pop_up['image_3']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $first_slider_fifth_pop_up['image_3']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>


													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_fifth_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_fifth_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_fifth_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_fifth_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_4_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">


														<?php if ( $first_slider_fifth_pop_up['image_4']['type'] == 'image' ): ?>
															<img src="<?php echo $first_slider_fifth_pop_up['image_4']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $first_slider_fifth_pop_up['image_4']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>


													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $first_slider_fifth_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $first_slider_fifth_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $first_slider_fifth_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $first_slider_fifth_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_5_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $first_slider_fifth_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $first_slider_fifth_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">


														<?php if ( $first_slider_fifth_pop_up['image_5']['type'] == 'image' ): ?>
															<img src="<?php echo $first_slider_fifth_pop_up['image_5']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $first_slider_fifth_pop_up['image_5']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--twenty-three"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--twenty-three"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="tabs__section">


					<div class="pop-up_box">
						<div class="swiper-object">
							<div
									class="swiper-container swiper-container__pop-up swiper-container--twenty-four"
							>
								<div class="swiper-wrapper">
									<?php if ( $second_slider_fifth_pop_up['image_1'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_fifth_pop_up['top_text_1'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_fifth_pop_up['top_text_1']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_fifth_pop_up['text_1'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">

															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_1_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_1']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_1_2_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_1_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">


														<?php if ( $second_slider_fifth_pop_up['image_1']['type'] == 'image' ): ?>
															<img src="<?php echo $second_slider_fifth_pop_up['image_1']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $second_slider_fifth_pop_up['image_1']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>


													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_fifth_pop_up['image_2'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_fifth_pop_up['top_text_2'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_fifth_pop_up['top_text_2']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_fifth_pop_up['text_2'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_2_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_2']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_2_2_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_2_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<?php if ( $second_slider_fifth_pop_up['image_2']['type'] == 'image' ): ?>
															<img src="<?php echo $second_slider_fifth_pop_up['image_2']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $second_slider_fifth_pop_up['image_2']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_fifth_pop_up['image_3'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_fifth_pop_up['top_text_3'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_fifth_pop_up['top_text_3']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_fifth_pop_up['text_3'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_3_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_3']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_3_2_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_3_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<?php if ( $second_slider_fifth_pop_up['image_3']['type'] == 'image' ): ?>
															<img src="<?php echo $second_slider_fifth_pop_up['image_3']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $second_slider_fifth_pop_up['image_3']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_fifth_pop_up['image_4'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_fifth_pop_up['top_text_4'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_fifth_pop_up['top_text_4']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_fifth_pop_up['text_4'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_4_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_4']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_4_2_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_4_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<?php if ( $second_slider_fifth_pop_up['image_4']['type'] == 'image' ): ?>
															<img src="<?php echo $second_slider_fifth_pop_up['image_4']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $second_slider_fifth_pop_up['image_4']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
									<?php if ( $second_slider_fifth_pop_up['image_5'] ): ?>
										<div class="swiper-slide">
											<?php if ( $second_slider_fifth_pop_up['top_text_5'] ): ?>
												<p class="swiper-slide_text">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-before.png"
															alt=""
													/>
													<span
													><?php echo $second_slider_fifth_pop_up['top_text_5']; ?></span
													>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-sub-after.png"
															alt=""
													/>
												</p>
											<?php endif; ?>
											<div class="swiper-slide_box-wrap">
												<?php if ( $second_slider_fifth_pop_up['text_5'] ): ?>
													<div class="swiper-slide_text-block">
														<div class="wrap">
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_5_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_5']; ?>
															</p>
															<p>
																<span> <?php echo $second_slider_fifth_pop_up['text_5_2_highlited']; ?></span>
																<?php echo $second_slider_fifth_pop_up['text_5_2']; ?>
															</p>
														</div>
													</div>
												<?php endif; ?>
												<div class="swiper-slide_box_wrap">
													<div class="swiper-slide_box">
														<?php if ( $second_slider_fifth_pop_up['image_5']['type'] == 'image' ): ?>
															<img src="<?php echo $second_slider_fifth_pop_up['image_5']['url']; ?>" alt="" class="swiper-slide_img">
														<?php else: ?>
															<div class="swiper-slide_img">
																<video controls class="mapanalyst_box__img js_video  video-wd">
																	<source src="<?php echo $second_slider_fifth_pop_up['image_5']['url']; ?>" type="video/mp4"/>
																</video>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									<?php endif; ?>
								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--twenty-four"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--twenty-four"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- END -->

	</div>
</div>


<?php $left_text_block = get_field( 'left_text_block' ); ?>
<div class="hero-section_wrapper">
	<section class="section hero-section">

		<?php $before_after_images = get_field( 'before_after_images' ); ?>


		<div id="slider" class="beer-slider" data-beer-label="before">
			<?php
			if ( wp_is_mobile() ) : ?>
				<img src="http://uaisolutions.com/wp-content/uploads/2021/06/before-mobile.jpg" class="bozo1" alt="before">
			<?php else : ?>
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/before.jpeg" class="bozo1" alt="before">
			<?php endif; ?>

			<div class="beer-reveal" data-beer-label="after">
				<?php
				if ( wp_is_mobile() ) : ?>
					<img src="http://uaisolutions.com/wp-content/uploads/2021/06/after-mobile.jpg" class="bozo1" alt="after">
				<?php else : ?>
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/after.png" class="bozo1" alt="after">
				<?php endif; ?>
			</div>
		</div>


		<div class="hero-section_box js_hero-section_box">
			<div class="hero-section_box__content">
				<p class="hero-section_box__title">
					<span><?php echo $left_text_block['visible_title_first']; ?></span>
					<span><?php echo $left_text_block['visible_title_second']; ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
<path style="fill:#ffffff;" d="M466.219,237.781L231.552,3.115C229.548,1.115,226.831-0.005,224,0H32
	c-5.891-0.011-10.675,4.757-10.686,10.648c-0.005,2.84,1.123,5.565,3.134,7.571l227.136,227.115L24.448,472.448
	c-4.171,4.16-4.179,10.914-0.019,15.085c2.006,2.011,4.731,3.139,7.571,3.134h192c2.831,0.005,5.548-1.115,7.552-3.115
	l234.667-234.667c4.171-4.16,4.179-10.914,0.019-15.085C466.231,237.794,466.225,237.788,466.219,237.781z"/>
</svg>
				</p>
				<ul class="hero-section_box__list">
					<?php $first_sentence = get_field( 'first_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $first_sentence['text_before_highlighted_text']; ?>
							<span><?php echo $first_sentence['highlighted_text']; ?> </span>
							<?php echo $first_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $second_sentence = get_field( 'second_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $second_sentence['text_before_highlighted_text']; ?>
							<span><?php echo $second_sentence['highlighted_text']; ?> </span
							><?php echo $second_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $third_sentence = get_field( 'third_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $third_sentence['text_before_highlighted_text']; ?>
							<span><?php echo $third_sentence['highlighted_text']; ?> </span
							><?php echo $third_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $fourth_sentence = get_field( 'fourth_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $fourth_sentence['text_before_highlighted_text']; ?>
							<span><?php echo $fourth_sentence['highlighted_text']; ?> </span
							><?php echo $fourth_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $fifth_sentence = get_field( 'fifth_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $fifth_sentence['text_before_highlighted_text']; ?><span
							><?php echo $fifth_sentence['highlighted_text']; ?> </span
							><?php echo $fifth_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $sixth_sentence = get_field( 'sixth_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $sixth_sentence['text_before_highlighted_text']; ?><span
							><?php echo $sixth_sentence['highlighted_text']; ?> </span
							><?php echo $sixth_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $seventh_sentence = get_field( 'seventh_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $seventh_sentence['text_before_highlighted_text']; ?><span
							><?php echo $seventh_sentence['highlighted_text']; ?> </span
							><?php echo $seventh_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
					<?php $eighth_sentence = get_field( 'eighth_sentence' ); ?>
					<li class="hero-section_box__item">
						<p class="hero-section_box__text">
							<?php echo $eighth_sentence['text_before_highlighted_text']; ?><span
							><?php echo $eighth_sentence['highlighted_text']; ?> </span
							><?php echo $eighth_sentence['text_after_highlighted_text']; ?>
						</p>
					</li>
				</ul>
			</div>
		</div>

	</section>
</div>
<?php $services = get_field( 'services' ); ?>
<div class="services_wrapper ">
	<section class="section services js_section" id="services">
		<?php if ( $services['section_title'] ): ?>
			<h2 class="main-title services_title">
				<?php echo $services['section_title']; ?>
			</h2>
		<?php endif; ?>

		<!-- START -->
		<a href="http://uaisolutions.com/wp-content/uploads/2022/03/UAI-Services_Brochure_2022_FINAL-1.pdf" target="_blank">
			<div style="color:white; font-size:20px; margin: 23px; border: 1px solid #0b4e4d; background: rgb(2 29 47 / 49%); padding:10px;" class="brochure">
				UAI Services Brochure 2022
			</div>
		</a>


		<!-- END -->
		<div class="services_list">
			<?php if ( $first_block['block_image'] ): ?>
				<div class="services_item__box">
					<div class="services_item">
						<div class="services_item__block">
							<button class="services_btn js_services_btn" id="first">
								<img
										src="<?php echo $first_block['block_image']; ?>"
										alt=""
								/>
							</button>
						</div>
					</div>
					<div class="services_text__box">
						<p class="services_text">
							<?php echo $first_block['block_title']; ?>
						</p>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( $second_block['block_image'] ): ?>
				<div class="services_item__box">
					<div class="services_item">
						<div class="services_item__block">
							<button class="services_btn js_services_btn" id="second">
								<img
										src="<?php echo $second_block['block_image']; ?>"
										alt=""
								/>
							</button>
						</div>
					</div>
					<div class="services_text__box">
						<p class="services_text">
							<?php echo $second_block['block_title']; ?>
						</p>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( $third_block['block_image'] ): ?>
				<div class="services_item__box">
					<div class="services_item">
						<div class="services_item__block">
							<button class="services_btn js_services_btn" id="third">
								<img
										src="<?php echo $third_block['block_image']; ?>"
										alt=""
								/>
							</button>
						</div>
					</div>
					<div class="services_text__box">
						<p class="services_text">
							<?php echo $third_block['block_title']; ?>
						</p>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( $fourth_block['block_image'] ): ?>
				<div class="services_item__box">
					<div class="services_item">
						<div class="services_item__block">
							<button class="services_btn js_services_btn" id="fourth">
								<img
										src="<?php echo $fourth_block['block_image']; ?>"
										alt=""
								/>
							</button>
						</div>
					</div>
					<div class="services_text__box">
						<p class="services_text">
							<?php echo $fourth_block['block_title']; ?>
						</p>
					</div>
				</div>
			<?php endif; ?>
			<?php $fifth_block = get_field( 'fifth_block' ); ?>
			<?php if ( $fifth_block['block_image'] ): ?>
			<div class="services_item__box">
				<div class="services_item">
					<div class="services_item__block">
						<button class="services_btn js_services_btn" id="fifth">
							<img
									src="<?php echo $fifth_block['block_image']; ?>"
									alt=""
							/>
						</button>
					</div>
				</div>
				<div class="services_text__box">
					<p class="services_text">
						<?php echo $fifth_block['block_title']; ?>
					</p>
				</div>
			</div>
		</div>
	<?php endif; ?>
	</section>
</div>
<?php $measuring_section = get_field( 'measuring_section' ); ?>
<div class="technology_wrapper top-border">
	<section class="section technology js_section" id="measuring-changes">
		<h2 class="main-title measure_title">
			<?php echo $measuring_section['section_title']; ?>
		</h2>

		<img
				src="<?php echo $measuring_section['section_image']; ?>"
				alt=""
				class="measure_img"
		/>
	</section>
</div>


<?php $technology = get_field( 'technology' ); ?>
<div class="technology_wrapper top-border">
	<section class="section technology js_section" id="technology">
		<h2 class="main-title technology_title">
			<?php echo $technology['section_title']; ?>
		</h2>
		<div class="tabs tabs1">
			<div class="tabs__bar-wrap">
				<div class="tabs__bar">
					<?php $first_tab = get_field( 'first_tab' ); ?>
					<?php $first_tab_2 = get_field( 'first_tab_2' ); ?>
					<?php $first_tab_3 = get_field( 'first_tab_3' ); ?>
					<?php $first_tab_4 = get_field( 'first_tab_4' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls_box">
							<img
									src="<?php echo $first_tab['tab_icon']; ?>"
									alt=""
									class="tabs__controls-img"
							/>
							<p class="tabs__controls-text">
								<?php echo $first_tab['tab_title']; ?>
							</p>
						</div>
					</div>
					<?php $second_tab = get_field( 'second_tab' ); ?>
					<?php $second_tab_2 = get_field( 'second_tab_2' ); ?>
					<?php $second_tab_3 = get_field( 'second_tab_3' ); ?>
					<?php $second_tab_4 = get_field( 'second_tab_4' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls_box">
							<img
									src="<?php echo $second_tab['tab_icon']; ?>"
									alt=""
									class="tabs__controls-img"
							/>
							<p class="tabs__controls-text">
								<?php echo $second_tab['tab_title']; ?>
							</p>
						</div>
					</div>
					<?php $third_tab = get_field( 'third_tab' ); ?>
					<?php $third_tab_2 = get_field( 'third_tab_2' ); ?>
					<?php $third_tab_3 = get_field( 'third_tab_3' ); ?>
					<?php $third_tab_4 = get_field( 'third_tab_4' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls_box">
							<img
									src="<?php echo $third_tab['tab_icon']; ?>"
									alt=""
									class="tabs__controls-img"
							/>
							<p class="tabs__controls-text">
								<?php echo $third_tab['tab_title']; ?>
							</p>
						</div>
					</div>
					<?php $fourth_tab = get_field( 'fourth_tab' ); ?>
					<?php $fourth_tab_2 = get_field( 'fourth_tab_2' ); ?>
					<?php $fourth_tab_3 = get_field( 'fourth_tab_3' ); ?>
					<?php $fourth_tab_4 = get_field( 'fourth_tab_4' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls_box">
							<img
									src="<?php echo $fourth_tab['tab_icon']; ?>"
									class="tabs__controls-img"
							/>
							<p class="tabs__controls-text">
								<?php echo $fourth_tab['tab_title']; ?>
							</p>
						</div>
					</div>
					<?php $fifth_tab = get_field( 'fifth_tab' ); ?>
					<?php $fifth_tab_2 = get_field( 'fifth_tab_2' ); ?>
					<?php $fifth_tab_3 = get_field( 'fifth_tab_3' ); ?>
					<?php $fifth_tab_4 = get_field( 'fifth_tab_4' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls_box">
							<img
									src="<?php echo $fifth_tab['tab_icon']; ?>"
									alt=""
									class="tabs__controls-img tabs__controls-img--sm"
							/>
							<p class="tabs__controls-text">
								<?php echo $fifth_tab['tab_title']; ?>
							</p>
						</div>
					</div>
					<?php $sixth_tab = get_field( 'sixth_tab' ); ?>
					<?php $sixth_tab_2 = get_field( 'sixth_tab_2' ); ?>
					<?php $sixth_tab_3 = get_field( 'sixth_tab_3' ); ?>
					<?php $sixth_tab_4 = get_field( 'sixth_tab_4' ); ?>
					<div class="tabs__controls">
						<div class="tabs__controls_box">
							<img
									src="<?php echo $sixth_tab['tab_icon']; ?>"
									alt=""
									class="tabs__controls-img"
							/>
							<p class="tabs__controls-text">
								<?php echo $sixth_tab['tab_title']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="tabs__content">
				<div class="tabs__section js_tabs__section">
					<!-- START OF CHANGES -->
					<div class="subtabs-wrapper">
						<?php if ( $first_tab['tab_subtitle'] ): ?>
							<input class="radio" id="one" name="group" type="radio" checked>
						<?php endif; ?>
						<?php if ( $first_tab_2['tab_subtitle'] ): ?>
							<input class="radio" id="two" name="group" type="radio">
						<?php endif; ?>
						<?php if ( $first_tab_3['tab_subtitle'] ): ?>
							<input class="radio" id="three" name="group" type="radio">
						<?php endif; ?>
						<?php if ( $first_tab_4['tab_subtitle'] ): ?>
							<input class="radio" id="four" name="group" type="radio">
						<?php endif; ?>
						<div class="subtabs-tabs">
							<?php if ( $first_tab['tab_subtitle'] ): ?>
								<label class="tab" id="one-tab" for="one"><?php echo $first_tab['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $first_tab_2['tab_subtitle'] ): ?>
								<label class="tab" id="two-tab" for="two"><?php echo $first_tab_2['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $first_tab_3['tab_subtitle'] ): ?>
								<label class="tab" id="three-tab" for="three"><?php echo $first_tab_3['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $first_tab_4['tab_subtitle'] ): ?>
								<label class="tab" id="four-tab" for="four"><?php echo $first_tab_4['tab_subtitle']; ?></label>
							<?php endif; ?>
						</div>
						<div class="panels">
							<!-- 1 SUBTAB START -->
							<?php if ( $first_tab['tab_subtitle'] ): ?>
								<div class="panel" id="one-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $first_tab['tab_title']; ?>
											</p>
											<?php if ( $first_tab['tab_subtitle'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $first_tab['tab_subtitle']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $first_tab['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $first_tab['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $first_tab['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $first_tab['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_sensor_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_sensor_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_sensor_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_6']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab['tab_sensor_7'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab['tab_sensor_7']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--first">
												<div class="swiper-wrapper">
													<?php if ( $first_tab['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img bozo1"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div class="swiper-button-next swiper-button-next-pos swiper-button-next--first swiper-button-next-tech">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--first swiper-button-prev-tech">
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>

											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 1 SUBTAB END -->
							<!-- 2 SUBTAB START -->
							<?php if ( $first_tab_2['tab_subtitle'] ): ?>
								<div class="panel" id="two-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $first_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $first_tab_2['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $first_tab_2['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_2['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $first_tab_2['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $first_tab_2['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $first_tab_2['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_2['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_2['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_2['tab_sensor_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_sensor_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_2['tab_sensor_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_sensor_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_2['tab_sensor_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_2['tab_sensor_6']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--twenty-nine">
												<div class="swiper-wrapper">
													<?php if ( $first_tab_2['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_2['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_2['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_2['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_2['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_2['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_2['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_2['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_2['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_2['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--twenty-nine swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--twenty-nine swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 2 SUBTAB START -->

							<!-- 3 SUBTAB START -->
							<?php if ( $first_tab_3['tab_subtitle'] ): ?>
								<div class="panel" id="three-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $first_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $first_tab_3['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $first_tab_3['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_3['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_3['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_3['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $first_tab_3['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $first_tab_3['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $first_tab_3['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_3['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_3['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_3['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty">
												<div class="swiper-wrapper">
													<?php if ( $first_tab_3['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_3['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_3['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_3['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_3['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_3['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_3['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_3['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_3['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_3['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 3 SUBTAB START -->

							<!-- 4 SUBTAB START -->
							<?php if ( $first_tab_4['tab_subtitle'] ): ?>
								<div class="panel" id="four-panel">
									<div class="block test11">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $first_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $first_tab_4['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $first_tab_4['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_4['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_4['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_4['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $first_tab_4['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $first_tab_4['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $first_tab_4['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_4['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_4['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_4['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_4['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_4['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $first_tab_4['tab_sensor_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $first_tab_4['tab_sensor_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<li class="tabs__section--item"><p class="tabs__section--item-text"> UNDERWATER GPS TRACKING</p></li>
												<li class="tabs__section--item"><p class="tabs__section--item-text"> ULTRASONIC THICKNESS GAUGE</p></li>
												<li class="tabs__section--item"><p class="tabs__section--item-text"> THREE JAW GRABBER</p></li>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-one">
												<div class="swiper-wrapper">
													<?php if ( $first_tab_4['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_4['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_4['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_4['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_4['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_4['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_4['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_4['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $first_tab_4['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $first_tab_4['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-one swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-one swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 4 SUBTAB START -->
						</div>
						<!-- END OF CHANGES -->
					</div>
					<!-- END OF OLD CODE -->
				</div>

				<div class="tabs__section js_tabs__section">
					<!-- START OF CHANGES -->
					<div class="subtabs-wrapper">
						<?php if ( $second_tab['tab_subtitle'] ): ?>
							<input class="radio" id="fife" name="second" type="radio" checked>
						<?php endif; ?>
						<?php if ( $second_tab_2['tab_subtitle'] ): ?>
							<input class="radio" id="six" name="second" type="radio">
						<?php endif; ?>
						<?php if ( $second_tab_3['tab_subtitle'] ): ?>
							<input class="radio" id="seven" name="second" type="radio">
						<?php endif; ?>
						<?php if ( $second_tab_4['tab_subtitle'] ): ?>
							<input class="radio" id="eight" name="second" type="radio">
						<?php endif; ?>
						<div class="subtabs-tabs">
							<?php if ( $second_tab['tab_subtitle'] ): ?>
								<label class="tab" id="fife-tab" for="fife"><?php echo $second_tab['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $second_tab_2['tab_subtitle'] ): ?>
								<label class="tab" id="six-tab" for="six"><?php echo $second_tab_2['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $second_tab_3['tab_subtitle'] ): ?>
								<label class="tab" id="seven-tab" for="seven"><?php echo $second_tab_3['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $second_tab_4['tab_subtitle'] ): ?>
								<label class="tab" id="eight-tab" for="eight"><?php echo $second_tab_4['tab_subtitle']; ?></label>
							<?php endif; ?>
						</div>


						<div class="panels">
							<!-- 1 SUBTAB START -->
							<?php if ( $second_tab['tab_subtitle'] ): ?>
								<div class="panel" id="fife-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $second_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $second_tab['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $second_tab['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $second_tab['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $second_tab['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $second_tab['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_sensor_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_sensor_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_sensor_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_sensor_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab['tab_sensor_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab['tab_sensor_6']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--second">
												<div class="swiper-wrapper">


													<?php if ( $second_tab['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab['tab_slide_image_1']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab['tab_slide_image_1']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab['tab_slide_image_1']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab['tab_slide_image_2']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab['tab_slide_image_2']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab['tab_slide_image_2']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab['tab_slide_image_3']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab['tab_slide_image_3']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab['tab_slide_image_3']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab['tab_slide_image_4']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab['tab_slide_image_4']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab['tab_slide_image_4']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab['tab_slide_image_5']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab['tab_slide_image_5']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab['tab_slide_image_5']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--second swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--second swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 1 SUBTAB END -->
							<!-- 2 SUBTAB START -->
							<?php if ( $second_tab_2['tab_subtitle'] ): ?>
								<div class="panel" id="six-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $second_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $second_tab_2['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $second_tab_2['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_2['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_2['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_2['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $second_tab_2['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $second_tab_2['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $second_tab_2['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_2['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_2['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_2['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_2['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_2['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-two">
												<div class="swiper-wrapper">

													<?php if ( $second_tab_2['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_2['tab_slide_image_1']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_2['tab_slide_image_1']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_2['tab_slide_image_1']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_2['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_2['tab_slide_image_2']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_2['tab_slide_image_2']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_2['tab_slide_image_2']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_2['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_2['tab_slide_image_3']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_2['tab_slide_image_3']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_2['tab_slide_image_3']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_2['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_2['tab_slide_image_4']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_2['tab_slide_image_4']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_2['tab_slide_image_4']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_2['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_2['tab_slide_image_5']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_2['tab_slide_image_5']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_2['tab_slide_image_5']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-two swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-two swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 2 SUBTAB END -->
							<!-- 3 SUBTAB START -->
							<?php if ( $second_tab_3['tab_subtitle'] ): ?>
								<div class="panel" id="seven-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $second_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $second_tab_3['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $second_tab_3['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_3['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_3['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_3['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_3['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_3['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_3['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_3['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_3['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_3['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-three">
												<div class="swiper-wrapper">


													<?php if ( $second_tab_3['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_3['tab_slide_image_1']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_3['tab_slide_image_1']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_3['tab_slide_image_1']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_3['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_3['tab_slide_image_2']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_3['tab_slide_image_2']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_3['tab_slide_image_2']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_3['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_3['tab_slide_image_3']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_3['tab_slide_image_3']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_3['tab_slide_image_3']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_3['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_3['tab_slide_image_4']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_3['tab_slide_image_4']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_3['tab_slide_image_4']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_3['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_3['tab_slide_image_5']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_3['tab_slide_image_5']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_3['tab_slide_image_5']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-three swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-three swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 3 SUBTAB END -->
							<!-- 4 SUBTAB START -->
							<?php if ( $second_tab_4['tab_subtitle'] ): ?>
								<div class="panel" id="eight-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $second_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $second_tab_4['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $second_tab_4['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_4['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_4['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_4['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_4['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_4['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_4['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_4['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $second_tab_4['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $second_tab_4['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-four">
												<div class="swiper-wrapper">


													<?php if ( $second_tab_4['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_4['tab_slide_image_1']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_4['tab_slide_image_1']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_4['tab_slide_image_1']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_4['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_4['tab_slide_image_2']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_4['tab_slide_image_2']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_4['tab_slide_image_2']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_4['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_4['tab_slide_image_3']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_4['tab_slide_image_3']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_4['tab_slide_image_3']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_4['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_4['tab_slide_image_4']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_4['tab_slide_image_4']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_4['tab_slide_image_4']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<?php if ( $second_tab_4['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<?php if ( $second_tab_4['tab_slide_image_5']['type'] == 'image' ): ?>
																<img src="<?php echo $second_tab_4['tab_slide_image_5']['url']; ?>" alt="" class="swiper-slide_img">
															<?php else: ?>
																<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
																	<source src="<?php echo $second_tab_4['tab_slide_image_5']['url']; ?>" type="video/mp4"/>
																</video>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-four swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-four swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 4 SUBTAB END -->
						</div>
					</div>
					<!-- END -->

					<!-- END OF CHANGES -->
				</div>


				<div class="tabs__section js_tabs__section">
					<!-- START OF CHANGES -->
					<div class="subtabs-wrapper">

						<?php if ( $third_tab['tab_subtitle'] ): ?>
							<input class="radio" id="nine" name="third" type="radio" checked>
						<?php endif; ?>
						<?php if ( $third_tab_2['tab_subtitle'] ): ?>
							<input class="radio" id="ten" name="third" type="radio">
						<?php endif; ?>
						<?php if ( $third_tab_3['tab_subtitle'] ): ?>
							<input class="radio" id="eleven" name="third" type="radio">
						<?php endif; ?>
						<?php if ( $third_tab_4['tab_subtitle'] ): ?>
							<input class="radio" id="twelve" name="third" type="radio">
						<?php endif; ?>
						<div class="subtabs-tabs">
							<?php if ( $third_tab['tab_subtitle'] ): ?>
								<label class="tab" id="nine-tab" for="nine"><?php echo $third_tab['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $third_tab_2['tab_subtitle'] ): ?>
								<label class="tab" id="ten-tab" for="ten"><?php echo $third_tab_2['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $third_tab_3['tab_subtitle'] ): ?>
								<label class="tab" id="eleven-tab" for="eleven"><?php echo $third_tab_3['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $third_tab_4['tab_subtitle'] ): ?>
								<label class="tab" id="twelve-tab" for="twelve"><?php echo $third_tab_4['tab_subtitle']; ?></label>
							<?php endif; ?>
						</div>
						<div class="panels">

							<!-- 1 SUBTAB START -->
							<?php if ( $third_tab['tab_subtitle'] ): ?>
								<div class="panel" id="nine-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $third_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $third_tab['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $third_tab['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_specification_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_specification_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_specification_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_specification_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_specification_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_specification_6']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $third_tab['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $third_tab['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $third_tab['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_sensor_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_sensor_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_sensor_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_6']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab['tab_sensor_7'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab['tab_sensor_7']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--third">
												<div class="swiper-wrapper">
													<?php if ( $third_tab['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--third swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--third swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 1 SUBTAB END -->

							<!-- 2 SUBTAB START -->
							<?php if ( $third_tab['tab_subtitle'] ): ?>
								<div class="panel" id="ten-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $third_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $third_tab_2['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $third_tab_2['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_2['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_2['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_2['tab_specification_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_specification_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_2['tab_specification_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_specification_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $third_tab_2['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $third_tab_2['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $third_tab_2['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_2['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_2['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_2['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-fife">
												<div class="swiper-wrapper">
													<?php if ( $third_tab_2['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_2['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_2['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_2['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_2['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_2['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_2['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_2['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_2['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_2['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-fife swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-fife swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 2 SUBTAB END -->

							<!-- 3 SUBTAB START -->
							<?php if ( $third_tab['tab_subtitle'] ): ?>
								<div class="panel" id="eleven-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $third_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $third_tab_3['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $third_tab_3['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_3['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_3['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_3['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_3['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_3['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_3['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_3['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_3['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_3['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-six">
												<div class="swiper-wrapper">
													<?php if ( $third_tab_3['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_3['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_3['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_3['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_3['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_3['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_3['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_3['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_3['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_3['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-six swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-six swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 3 SUBTAB END -->


							<!-- 4 SUBTAB START -->
							<?php if ( $third_tab['tab_subtitle'] ): ?>
								<div class="panel" id="twelve-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $third_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $third_tab_4['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $third_tab_4['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_4['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_4['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_4['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_4['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_4['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_4['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_4['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $third_tab_4['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $third_tab_4['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-seven">
												<div class="swiper-wrapper">
													<?php if ( $third_tab_4['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_4['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_4['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_4['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_4['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_4['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_4['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_4['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $third_tab_4['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $third_tab_4['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-seven swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-seven swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 4 SUBTAB END -->

						</div>
					</div>

					<!-- END -->

					<!-- END OF CHANGES -->
				</div>


				<div class="tabs__section js_tabs__section">
					<!-- START OF CHANGES -->
					<div class="subtabs-wrapper">


						<?php if ( $fourth_tab['tab_subtitle'] ): ?>
							<input class="radio" id="thirteen" name="fourth" type="radio" checked>
						<?php endif; ?>
						<?php if ( $fourth_tab_2['tab_subtitle'] ): ?>
							<input class="radio" id="fourteen" name="fourth" type="radio">
						<?php endif; ?>
						<?php if ( $fourth_tab_3['tab_subtitle'] ): ?>
							<input class="radio" id="fifteen" name="fourth" type="radio">
						<?php endif; ?>
						<?php if ( $fourth_tab_4['tab_subtitle'] ): ?>
							<input class="radio" id="sixteen" name="fourth" type="radio">
						<?php endif; ?>
						<div class="subtabs-tabs">
							<?php if ( $fourth_tab['tab_subtitle'] ): ?>
								<label class="tab" id="thirteen-tab" for="thirteen"><?php echo $fourth_tab['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $fourth_tab_2['tab_subtitle'] ): ?>
								<label class="tab" id="fourteen-tab" for="fourteen"><?php echo $fourth_tab_2['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $fourth_tab_3['tab_subtitle'] ): ?>
								<label class="tab" id="fifteen-tab" for="fifteen"><?php echo $fourth_tab_3['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $fourth_tab_4['tab_subtitle'] ): ?>
								<label class="tab" id="sixteen-tab" for="sixteen"><?php echo $fourth_tab_4['tab_subtitle']; ?></label>
							<?php endif; ?>
						</div>
						<div class="panels">

							<!-- 1 SUBTAB START -->
							<?php if ( $fourth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="thirteen-panel">

									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fourth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fourth_tab['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $fourth_tab['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab['tab_specification_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_specification_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab['tab_specification_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_specification_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $fourth_tab['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $fourth_tab['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $fourth_tab['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--fourth">
												<div class="swiper-wrapper">
													<?php if ( $fourth_tab['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--fourth swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fourth swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 1 SUBTAB END -->
							<!-- 2 SUBTAB START -->
							<?php if ( $fourth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="fourteen-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fourth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fourth_tab_2['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list tabs__section--list--mb">
												<?php if ( $fourth_tab_2['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_specification_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_specification_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_specification_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_specification_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_specification_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_specification_6']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
											<?php if ( $fourth_tab_2['tab_subtitle_2'] ): ?>
												<p class="tabs__section--desc">
													<?php echo $fourth_tab_2['tab_subtitle_2']; ?>
												</p>
											<?php endif; ?>
											<ul class="tabs__section--list">
												<?php if ( $fourth_tab_2['tab_sensor_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_sensor_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_sensor_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_sensor_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_sensor_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_sensor_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_6']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_2['tab_sensor_7'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_2['tab_sensor_7']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-eight">
												<div class="swiper-wrapper">
													<?php if ( $fourth_tab_2['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_2['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_2['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_2['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_2['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_2['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_2['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_2['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_2['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_2['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-eight swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-eight swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 2 SUBTAB END -->
							<!-- 3 SUBTAB START -->
							<?php if ( $fourth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="fifteen-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fourth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fourth_tab_3['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $fourth_tab_3['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_3['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_3['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_3['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_3['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_3['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_3['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_3['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_3['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_3['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--thirty-nine">
												<div class="swiper-wrapper">
													<?php if ( $fourth_tab_3['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_3['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_3['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_3['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_3['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_3['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_3['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_3['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_3['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_3['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--thirty-nine swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--thirty-nine swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 3 SUBTAB END -->

							<!-- 4 SUBTAB START -->
							<?php if ( $fourth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="sixteen-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fourth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fourth_tab_4['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $fourth_tab_4['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_4['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_4['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_4['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_4['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_4['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_4['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_4['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fourth_tab_4['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fourth_tab_4['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--fourty">
												<div class="swiper-wrapper">
													<?php if ( $fourth_tab_4['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_4['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_4['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_4['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_4['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_4['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_4['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_4['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fourth_tab_4['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fourth_tab_4['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--fourty swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fourty swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 4 SUBTAB END -->
						</div>


					</div>

					<!-- END -->

					<!-- END OF CHANGES -->
				</div>


				<div class="tabs__section js_tabs__section">
					<!-- START OF CHANGES -->

					<div class="subtabs-wrapper">

						<?php if ( $fifth_tab['tab_subtitle'] ): ?>
							<input class="radio" id="seventeen" name="fifth" type="radio" checked>
						<?php endif; ?>
						<?php if ( $fifth_tab_2['tab_subtitle'] ): ?>
							<input class="radio" id="eighteen" name="fifth" type="radio">
						<?php endif; ?>
						<?php if ( $fifth_tab_3['tab_subtitle'] ): ?>
							<input class="radio" id="nineteen" name="fifth" type="radio">
						<?php endif; ?>
						<?php if ( $fifth_tab_4['tab_subtitle'] ): ?>
							<input class="radio" id="twenty" name="fifth" type="radio">
						<?php endif; ?>
						<div class="subtabs-tabs">
							<?php if ( $fifth_tab['tab_subtitle'] ): ?>
								<label class="tab" id="seventeen-tab" for="seventeen"><?php echo $fifth_tab['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $fifth_tab_2['tab_subtitle'] ): ?>
								<label class="tab" id="eighteen-tab" for="eighteen"><?php echo $fifth_tab_2['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $fifth_tab_3['tab_subtitle'] ): ?>
								<label class="tab" id="nineteen-tab" for="nineteen"><?php echo $fifth_tab_3['tab_subtitle']; ?></label>
							<?php endif; ?>
							<?php if ( $fifth_tab_4['tab_subtitle'] ): ?>
								<label class="tab" id="twenty-tab" for="twenty"><?php echo $fifth_tab_4['tab_subtitle']; ?></label>
							<?php endif; ?>
						</div>
						<div class="panels">

							<!-- 1 SUBTAB START -->
							<?php if ( $fifth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="seventeen-panel">

									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fifth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fifth_tab['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $fifth_tab['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_5']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_6']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_7'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_7']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_8'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_8']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_9'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_9']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_10'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_10']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_11'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_11']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_12'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_12']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_13'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_13']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_14'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_14']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_15'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_15']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_16'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_16']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_17'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_17']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_18'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_18']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_19'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_19']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_20'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_20']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab['tab_specification_21'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab['tab_specification_21']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--fifth">
												<div class="swiper-wrapper">
													<?php if ( $fifth_tab['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--fifth swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fifth swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 1 SUBTAB END -->
							<!-- 2 SUBTAB START -->
							<?php if ( $fifth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="eighteen-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fifth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fifth_tab_2['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $fifth_tab_2['tab_specification_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_5']; ?>
														</p>
													</li>
												<?php endif; ?>

												<?php if ( $fifth_tab_2['tab_specification_6'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_6']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_7'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_7']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_8'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_8']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_2['tab_specification_9'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_2['tab_specification_9']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--fourty-one">
												<div class="swiper-wrapper">
													<?php if ( $fifth_tab_2['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_2['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_2['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_2['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_2['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_2['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_2['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_2['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_2['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_2['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--fourty-one swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fourty-one swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 2 SUBTAB END -->
							<!-- 3 SUBTAB START -->
							<?php if ( $fifth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="nineteen-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fifth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fifth_tab_3['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $fifth_tab_3['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_3['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_3['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_3['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_3['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_3['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_3['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_3['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_3['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_3['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--fourty-two">
												<div class="swiper-wrapper">
													<?php if ( $fifth_tab_3['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_3['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_3['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_3['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_3['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_3['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_3['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_3['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_3['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_3['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--fourty-two swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fourty-two swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 3 SUBTAB END -->
							<!-- 4 SUBTAB START -->
							<?php if ( $fifth_tab['tab_subtitle'] ): ?>
								<div class="panel" id="twenty-panel">
									<div class="block">
										<div class="tabs__section--left">
											<p class="tabs__section--title">
												<?php echo $fifth_tab['tab_title']; ?>
											</p>
											<p class="tabs__section--desc">
												<?php echo $fifth_tab_4['tab_subtitle']; ?>
											</p>
											<ul class="tabs__section--list">
												<?php if ( $fifth_tab_4['tab_description_1'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_4['tab_description_1']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_4['tab_description_2'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_4['tab_description_2']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_4['tab_description_3'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_4['tab_description_3']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_4['tab_description_4'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_4['tab_description_4']; ?>
														</p>
													</li>
												<?php endif; ?>
												<?php if ( $fifth_tab_4['tab_description_5'] ): ?>
													<li class="tabs__section--item">
														<p class="tabs__section--item-text">
															<?php echo $fifth_tab_4['tab_description_5']; ?>
														</p>
													</li>
												<?php endif; ?>
											</ul>
										</div>
										<div class="tabs__section--right">
											<div class="swiper-container swiper-container--fourty-three">
												<div class="swiper-wrapper">
													<?php if ( $fifth_tab_4['tab_slide_image_1'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_4['tab_slide_image_1']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_4['tab_slide_image_2'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_4['tab_slide_image_2']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_4['tab_slide_image_3'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_4['tab_slide_image_3']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_4['tab_slide_image_4'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_4['tab_slide_image_4']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
													<?php if ( $fifth_tab_4['tab_slide_image_5'] ): ?>
														<div class="swiper-slide">
															<img
																	src="<?php echo $fifth_tab_4['tab_slide_image_5']; ?>"
																	alt=""
																	class="swiper-slide_img"
															/>
														</div>
													<?php endif; ?>
												</div>
												<div
														class="swiper-button-next swiper-button-next-pos swiper-button-next--fourty-three swiper-button-next-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
												<div
														class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--fourty-three swiper-button-prev-tech"
												>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img"
													/>
													<img
															src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
															alt=""
															class="swiper-button-next_img swiper-button-next_img-in"
													/>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							<!-- 4 SUBTAB END -->
						</div>
					</div>
					<!-- END -->

					<!-- END OF CHANGES -->
				</div>


				<div class="tabs__section js_tabs__section--last">
					<div class="tabs__section-box tabs__section-box--single">
						<div class="tabs__section--left">
							<p class="tabs__section--title">
								<?php echo $sixth_tab['tab_title']; ?>
							</p>
							<p class="tabs__section--desc">
								<?php echo $sixth_tab['tab_subtitle']; ?>
							</p>
							<ul class="tabs__section--list tabs__section--list--invisible">
								<?php if ( $sixth_tab['tab_description_1'] ): ?>
									<li class="tabs__section--item js_tabs__section--item" data-id="first-slide">
										<p class="tabs__section--item-text">
											<?php echo $sixth_tab['tab_description_1']; ?>
										</p>
									</li>
								<?php endif; ?>
								<?php if ( $sixth_tab['tab_description_2'] ): ?>
									<li class="tabs__section--item js_tabs__section--item" data-id="second-slide">
										<p class="tabs__section--item-text">
											<?php echo $sixth_tab['tab_description_2']; ?>
										</p>
									</li>
								<?php endif; ?>
								<?php if ( $sixth_tab['tab_description_3'] ): ?>
									<li class="tabs__section--item js_tabs__section--item" data-id="third-slide">
										<p class="tabs__section--item-text">
											<?php echo $sixth_tab['tab_description_3']; ?>
										</p>
									</li>
								<?php endif; ?>
								<?php if ( $sixth_tab['tab_description_4'] ): ?>
									<li class="tabs__section--item js_tabs__section--item" data-id="fourth-slide">
										<p class="tabs__section--item-text">
											<?php echo $sixth_tab['tab_description_4']; ?>
										</p>
									</li>
								<?php endif; ?>
								<?php if ( $sixth_tab['tab_description_5'] ): ?>
									<li class="tabs__section--item js_tabs__section--item" data-id="fifth-slide">
										<p class="tabs__section--item-text">
											<?php echo $sixth_tab['tab_description_5']; ?>
										</p>
									</li>
								<?php endif; ?>
								<?php $sixth_tab['tab_description_6'] = 'ARIS EXPLORER 3000 ACOUSTIC CAMERA' ?>
								<li class="tabs__section--item js_tabs__section--item" data-id="sixth-slide">
									<p class="tabs__section--item-text">
										<?php echo $sixth_tab['tab_description_6']; ?>
									</p>
								</li>

							</ul>
							<div class="swiper-pagination"></div>
						</div>
						<div class="tabs__section--right">
							<div class="swiper-container swiper-container--sixth">
								<div class="swiper-wrapper">
									<?php if ( $sixth_tab['tab_slide_image_1'] ): ?>
										<div class="swiper-slide" id="first-slide">
											<img
													src="<?php echo $sixth_tab['tab_slide_image_1']; ?>"

													alt=""
													class="swiper-slide_img bozo1"
											/>
										</div>
									<?php endif; ?>
									<?php if ( $sixth_tab['tab_slide_image_2'] ): ?>
										<div class="swiper-slide" id="second-slide">
											<img
													src="<?php echo $sixth_tab['tab_slide_image_2']; ?>"
													alt=""
													class="swiper-slide_img bozo1"
											/>
										</div>
									<?php endif; ?>
									<?php if ( $sixth_tab['tab_slide_image_3'] ): ?>
										<div class="swiper-slide" id="third-slide">
											<img
													src="<?php echo $sixth_tab['tab_slide_image_3']; ?>"
													alt=""
													class="swiper-slide_img bozo1"
											/>
										</div>
									<?php endif; ?>
									<?php if ( $sixth_tab['tab_slide_image_4'] ): ?>
										<div class="swiper-slide" id="fourth-slide">
											<img
													src="<?php echo $sixth_tab['tab_slide_image_4']; ?>"
													alt=""
													class="swiper-slide_img bozo1"
											/>
										</div>
									<?php endif; ?>
									<?php if ( $sixth_tab['tab_slide_image_5'] ): ?>
										<div class="swiper-slide" id="fifth-slide">
											<img
													src="<?php echo $sixth_tab['tab_slide_image_5']; ?>"
													alt=""
													class="swiper-slide_img bozo1"
											/>
										</div>
									<?php endif; ?>

									<div class="swiper-slide" id="sixth-slide">
										<img
												src="http://uaisolutions.com/wp-content/uploads/2021/07/BottomDebris2Fish.gif"
												alt=""
												class="swiper-slide_img bozo1"
										/>
									</div>

								</div>
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--sixth swiper-button-next-tech"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--sixth swiper-button-prev-tech"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</div>
<?php $projects = get_field( 'projects' ); ?>
<div class="projects_wrapper top-border">
	<section class="section projects js_section" id="projects">
		<h2 class="main-title projects_title">
			<?php echo $projects['section_title']; ?>
		</h2>
		<div class="accordion">
			<ul class="accordion_list">
				<?php $block_1 = get_field( 'block_1' ); ?>
				<li class="accordion_item">
					<button class="accordion_btn js_acc-btn" id="acc-first"></button>
					<div class="accordion_box js_project" data-id="first-project">
						<div class="accordion_box__content">
							<div class="accordion_btn__shadow js_acc-btn__shadow"></div>
							<div class="accordion_box__top">
								<p class="accordion_box__title">
									<?php echo $block_1['block_title']; ?>
								</p>
								<div class="accordion_box__block">
									<?php if ( $block_1['block_preview_image'] ): ?>
										<img
												src="<?php echo $block_1['block_preview_image']; ?>"
												alt=""
										/>
									<?php endif; ?>
									<p class="accordion_box__text js-accordion_box__text">
										<?php echo $block_1['block_main_text_before_highlighted_text']; ?><span>
                    <?php echo $block_1['highlighted_text']; ?> </span
										><?php echo $block_1['block_main_text_after_highlighted_text']; ?>
									</p>
								</div>
							</div>
							<div
									class="accordion_box__bottom js_hidden-block"
									data-id="acc-first"
							>

								<div class="swiper-container swiper-container--seventh">
									<div class="swiper-wrapper">
										<?php if ( $block_1['slide_1'] ): ?>
											<div class="swiper-slide">


												<?php if ( $block_1['slide_1']['type'] == 'image' ): ?>
													<img src="<?php echo $block_1['slide_1']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_1['slide_1']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>


											</div>
										<?php endif; ?>
										<?php if ( $block_1['slide_2'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_1['slide_2']['type'] == 'image' ): ?>
													<img src="<?php echo $block_1['slide_2']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_1['slide_2']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ( $block_1['slide_3'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_1['slide_3']['type'] == 'image' ): ?>
													<img src="<?php echo $block_1['slide_3']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_1['slide_3']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ( $block_1['slide_4'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_1['slide_4']['type'] == 'image' ): ?>
													<img src="<?php echo $block_1['slide_4']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_1['slide_4']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ( $block_1['slide_5'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_1['slide_5']['type'] == 'image' ): ?>
													<img src="<?php echo $block_1['slide_5']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_1['slide_5']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>
									<div
											class="swiper-button-next swiper-button-next-pos swiper-button-next--seventh swiper-button-next-tech"
									>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
												alt=""
												class="swiper-button-next_img"
										/>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
												alt=""
												class="swiper-button-next_img swiper-button-next_img-in"
										/>
									</div>
									<div
											class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--seventh swiper-button-prev-tech"
									>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
												alt=""
												class="swiper-button-next_img"
										/>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
												alt=""
												class="swiper-button-next_img swiper-button-next_img-in"
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<?php $block_2 = get_field( 'block_2' ); ?>
				<li class="accordion_item">
					<button class="accordion_btn js_acc-btn" id="acc-second"></button>
					<div class="accordion_box js_project" data-id="second-project">
						<div class="accordion_box__content">
							<div class="accordion_btn__shadow js_acc-btn__shadow"></div>
							<div class="accordion_box__top">
								<p class="accordion_box__title">
									<?php echo $block_2['block_title']; ?>
								</p>
								<div class="accordion_box__block">
									<?php if ( $block_2['block_preview_image'] ): ?>
										<img
												src="<?php echo $block_2['block_preview_image']; ?>"
												alt=""
										/>
									<?php endif; ?>
									<p class="accordion_box__text js-accordion_box__text">
										<?php echo $block_2['block_main_text_before_highlighted_text']; ?><span>
                    <?php echo $block_2['highlighted_text']; ?> </span
										><?php echo $block_2['block_main_text_after_highlighted_text']; ?>
									</p>
								</div>
							</div>
							<div
									class="accordion_box__bottom js_hidden-block"
									data-id="acc-second"
							>

								<div class="swiper-container swiper-container--eighth">
									<div class="swiper-wrapper">
										<?php if ( $block_2['slide_1'] ): ?>
											<div class="swiper-slide">
												<img
														src="<?php echo $block_2['slide_1']; ?>"
														alt=""
														class="swiper-slide_img"
												/>
											</div>
										<?php endif; ?>
										<?php if ( $block_2['slide_2'] ): ?>
											<div class="swiper-slide">
												<img
														src="<?php echo $block_2['slide_2']; ?>"
														alt=""
														class="swiper-slide_img"
												/>
											</div>
										<?php endif; ?>
										<?php if ( $block_2['slide_3'] ): ?>
											<div class="swiper-slide">
												<img
														src="<?php echo $block_2['slide_3']; ?>"
														alt=""
														class="swiper-slide_img"
												/>
											</div>
										<?php endif; ?>
										<?php if ( $block_2['slide_4'] ): ?>
											<div class="swiper-slide">
												<img
														src="<?php echo $block_2['slide_4']; ?>"
														alt=""
														class="swiper-slide_img"
												/>
											</div>
										<?php endif; ?>
										<?php if ( $block_2['slide_5'] ): ?>
											<div class="swiper-slide">
												<img
														src="<?php echo $block_2['slide_5']; ?>"
														alt=""
														class="swiper-slide_img"
												/>
											</div>
										<?php endif; ?>
									</div>
									<div
											class="swiper-button-next swiper-button-next-pos swiper-button-next--eighth swiper-button-next-tech"
									>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
												alt=""
												class="swiper-button-next_img"
										/>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
												alt=""
												class="swiper-button-next_img swiper-button-next_img-in"
										/>
									</div>
									<div
											class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--eighth swiper-button-prev-tech"
									>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
												alt=""
												class="swiper-button-next_img"
										/>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
												alt=""
												class="swiper-button-next_img swiper-button-next_img-in"
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<?php $block_3 = get_field( 'block_3' ); ?>
				<li class="accordion_item">
					<button class="accordion_btn js_acc-btn" id="acc-third"></button>
					<div class="accordion_box js_project" data-id="third-project">
						<div class="accordion_box__content">
							<div class="accordion_btn__shadow js_acc-btn__shadow"></div>
							<div class="accordion_box__top">
								<p class="accordion_box__title">
									<?php echo $block_3['block_title']; ?>
								</p>
								<div class="accordion_box__block">
									<?php if ( $block_3['block_preview_image'] ): ?>
										<img
												src="<?php echo $block_3['block_preview_image']; ?>"
												alt=""
										/>
									<?php endif; ?>
									<p class="accordion_box__text js-accordion_box__text">
										<?php echo $block_3['block_main_text_before_highlighted_text']; ?><span>
                    <?php echo $block_3['highlighted_text']; ?> </span
										><?php echo $block_3['block_main_text_after_highlighted_text']; ?>
									</p>
								</div>
							</div>
							<div
									class="accordion_box__bottom js_hidden-block"
									data-id="acc-third"
							>

								<div class="swiper-container swiper-container--ninth">
									<div class="swiper-wrapper">
										<?php if ( $block_3['slide_1'] ): ?>
											<div class="swiper-slide">


												<?php if ( $block_3['slide_1']['type'] == 'image' ): ?>
													<img src="<?php echo $block_3['slide_1']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_3['slide_1']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>


											</div>
										<?php endif; ?>
										<?php if ( $block_3['slide_2'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_3['slide_2']['type'] == 'image' ): ?>
													<img src="<?php echo $block_3['slide_2']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_3['slide_2']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ( $block_3['slide_3'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_3['slide_3']['type'] == 'image' ): ?>
													<img src="<?php echo $block_3['slide_3']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_3['slide_3']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ( $block_3['slide_4'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_3['slide_4']['type'] == 'image' ): ?>
													<img src="<?php echo $block_3['slide_4']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_3['slide_4']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<?php if ( $block_3['slide_5'] ): ?>
											<div class="swiper-slide">
												<?php if ( $block_3['slide_5']['type'] == 'image' ): ?>
													<img src="<?php echo $block_3['slide_5']['url']; ?>" alt="" class="swiper-slide_img">
												<?php else: ?>
													<video controls class="mapanalyst_box__img js_video" class="swiper-slide_img">
														<source src="<?php echo $block_3['slide_5']['url']; ?>" type="video/mp4"/>
													</video>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>
									<div
											class="swiper-button-next swiper-button-next-pos swiper-button-next--ninth swiper-button-next-tech"
									>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
												alt=""
												class="swiper-button-next_img"
										/>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
												alt=""
												class="swiper-button-next_img swiper-button-next_img-in"
										/>
									</div>
									<div
											class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--ninth swiper-button-prev-tech"
									>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
												alt=""
												class="swiper-button-next_img"
										/>
										<img
												src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
												alt=""
												class="swiper-button-next_img swiper-button-next_img-in"
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<!-- <div class="mapanalyst_block__visible video-wrapper">
      <input type="checkbox"/>
      <?php $visible_block = get_field( 'visible_block' ); ?>

        <div class="mapanalyst_box">
        <video class="mapanalyst_block__visible-video" autoplay="autoplay" loop="true" muted="muted" >
                        <source src="<?php echo $visible_block['video']; ?>" type="video/mp4"/>
        </video>

</div>


          <?php if ( $visible_block['text'] ): ?>
          <div class="mapanalyst_box__bottom">
            <p>
              <?php echo $visible_block['text']; ?>
            </p>
          </div>
          <?php endif; ?>
          <div class="text">
              <span data-text="Watch the video"></span>
            </div>
            <div class="video-wrapper-color"></div>


      </div> -->
	</section>
</div>
<?php $mapanalyst = get_field( 'mapanalyst' ); ?>
<div class="mapanalyst_wrapper top-border">
	<section class="section mapanalyst js_section" id="map-analyst">
		<h2 class="main-title mapanalyst_title">
			<?php echo $mapanalyst['section_title']; ?>
			<sup><?php echo $mapanalyst['section_title_end']; ?></sup>
		</h2>


		<div class="mapanalyst_block">


			<div>
				<ul class="mapanalyst_block__list">
					<?php $hidden_block_1 = get_field( 'hidden_block_1' ); ?>
					<li class="mapanalyst_block__item mapanalyst_block__box">
						<div class="mapanalyst_block__box-pos">
							<p><?php echo $hidden_block_1['title']; ?></p>
						</div>
						<div class="mapanalyst_block__box-main">

							<!-- HERE VIDEO START -->

							<video class="mapanalyst_block__video" controls="controls" loop="true" muted="muted">
								<source src="<?php echo $hidden_block_1['video']; ?>" type="video/mp4"/>
							</video>

							<!-- HERE VIDEO END -->

						</div>
					</li>
					<?php $hidden_block_2 = get_field( 'hidden_block_2' ); ?>
					<li class="mapanalyst_block__item mapanalyst_block__box">
						<div class="mapanalyst_block__box-pos">
							<p><?php echo $hidden_block_2['title']; ?></p>
						</div>
						<div class="mapanalyst_block__box-main">

							<div
									class="swiper-container swiper-container-map swiper-container--twenty-seven"
							>
								<div class="swiper-wrapper">
									<?php if ( $hidden_block_2['slide_1'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_1']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
									<?php if ( $hidden_block_2['slide_2'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_2']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
									<?php if ( $hidden_block_2['slide_3'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_3']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
									<?php if ( $hidden_block_2['slide_4'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_4']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
									<?php if ( $hidden_block_2['slide_5'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_5']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
									<?php if ( $hidden_block_2['slide_6'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_6']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
									<?php if ( $hidden_block_2['slide_7'] ): ?>
										<div class="swiper-slide">
											<img
													src="<?php echo $hidden_block_2['slide_7']; ?>"
													class="bozo1"
													alt=""
											/>
										</div>
									<?php endif; ?>
								</div>
								<!-- Add Arrows -->
								<div
										class="swiper-button-next swiper-button-next-pos swiper-button-next--twenty-seven"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/right-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
								<div
										class="swiper-button-prev swiper-button-prev-pos swiper-button-prev--twenty-seven"
								>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img"
									/>
									<img
											src="<?php bloginfo( 'template_directory' ); ?>/img/left-big.png"
											alt=""
											class="swiper-button-next_img swiper-button-next_img-in"
									/>
								</div>
							</div>
							<div class="mapanalyst_block__box-right">
								<p class="mb">
									<?php echo $hidden_block_2['main_text']; ?>
								</p>
								<div class="swiper-pagination"></div>
								<ul class="mapanalyst_block__list mapanalyst_block__list--invis">
									<?php if ( $hidden_block_2['sentence_1'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_1']; ?></p>
										</li>
									<?php endif; ?>
									<?php if ( $hidden_block_2['sentence_2'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_2']; ?></p>
										</li>
									<?php endif; ?>
									<?php if ( $hidden_block_2['sentence_3'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_3']; ?></p>
										</li>
									<?php endif; ?>
									<?php if ( $hidden_block_2['sentence_4'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_4']; ?></p>
										</li>
									<?php endif; ?>
									<?php if ( $hidden_block_2['sentence_5'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_5']; ?></p>
										</li>
									<?php endif; ?>
									<?php if ( $hidden_block_2['sentence_6'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_6']; ?></p>
										</li>
									<?php endif; ?>
									<?php if ( $hidden_block_2['sentence_7'] ): ?>
										<li class="tabs__section--item">
											<p class="mapanalyst_block__list-text"><?php echo $hidden_block_2['sentence_7']; ?></p>
										</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</li>
					<?php $hidden_block_3 = get_field( 'hidden_block_3' ); ?>
					<li class="mapanalyst_block__item mapanalyst_block__box mapanalyst_block__item--threed">
						<div class="mapanalyst_block__box-pos">
							<p><?php echo $hidden_block_3['title']; ?></p>
						</div>
						<div class="mapanalyst_block__box-main mapanalyst_block__box-main--fl js_mapanalyst_block__box">
							<div class="js_mapanalyst_box">
								<p>Please visit our website on desktop computer to experience the Interactive 3D Viewer</p>
							</div>
							<svg class="mapanalyst_block__svg" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="m256.002 242.913 210.412-121.43-210.412-121.483-210.416 121.483z"/>
									<path d="m240.949 268.986-210.415-121.429v242.96l210.415 121.483z"/>
									<path d="m271.056 268.986v243.014l210.41-121.483v-242.96z"/>
								</g>
							</svg>
							<div class="iframe-box">
								<iframe class="mapanalyst_block__iframe" src="<?php echo $hidden_block_3['iframe_path']; ?>">
								</iframe>
								<button class="iframe-close js_iframe-close">
									<img src="<?php bloginfo( 'template_directory' ); ?>/img/pop-up-close.png" alt="">
								</button>
							</div>
							<ul class="mapanalyst_block__box-list">
								<li class="mapanalyst_block__box-item">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="356.572px" height="356.572px" viewBox="0 0 356.572 356.572" style="enable-background:new 0 0 356.572 356.572;"
										 xml:space="preserve">
<g>
	<path d="M181.563,0C120.762,0,59.215,30.525,59.215,88.873V237.5c0,65.658,53.412,119.071,119.071,119.071
		c65.658,0,119.07-53.413,119.07-119.071V88.873C297.356,27.809,237.336,0,181.563,0z M274.945,237.5
		c0,53.303-43.362,96.657-96.659,96.657c-53.299,0-96.657-43.354-96.657-96.657v-69.513c20.014,6.055,57.685,15.215,102.221,15.215
		c28.515,0,59.831-3.809,91.095-14.567V237.5z M274.945,144.794c-81.683,31.233-168.353,7.716-193.316-0.364V88.873
		c0-43.168,51.489-66.46,99.934-66.46c46.481,0,93.382,20.547,93.382,66.46V144.794z M190.893,48.389v81.248
		c0,6.187-5.023,11.208-11.206,11.208c-6.185,0-11.207-5.021-11.207-11.208V48.389c0-6.186,5.021-11.207,11.207-11.207
		C185.869,37.182,190.893,42.203,190.893,48.389z M154.938,40.068V143.73c-15.879,2.802-62.566-10.271-62.566-10.271
		C80.233,41.004,154.938,40.068,154.938,40.068z"/>
</g>
</svg>
									<span>Left Click: Pan &#38; Zoom</span>
								</li>
								<li class="mapanalyst_block__box-item">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="356.572px" height="356.572px" viewBox="0 0 356.572 356.572" style="enable-background:new 0 0 356.572 356.572;"
										 xml:space="preserve">
<g>
	<path d="M181.563,0C120.762,0,59.215,30.525,59.215,88.873V237.5c0,65.658,53.412,119.071,119.071,119.071
		c65.658,0,119.07-53.413,119.07-119.071V88.873C297.356,27.809,237.336,0,181.563,0z M274.945,237.5
		c0,53.303-43.362,96.657-96.659,96.657c-53.299,0-96.657-43.354-96.657-96.657v-69.513c20.014,6.055,57.685,15.215,102.221,15.215
		c28.515,0,59.831-3.809,91.095-14.567V237.5z M274.945,144.794c-81.683,31.233-168.353,7.716-193.316-0.364V88.873
		c0-43.168,51.489-66.46,99.934-66.46c46.481,0,93.382,20.547,93.382,66.46V144.794z M190.893,48.389v81.248
		c0,6.187-5.023,11.208-11.206,11.208c-6.185,0-11.207-5.021-11.207-11.208V48.389c0-6.186,5.021-11.207,11.207-11.207
		C185.869,37.182,190.893,42.203,190.893,48.389z M264.272,130.378c0,0-46.687,13.072-62.566,10.271V36.988
		C201.706,36.988,276.412,37.923,264.272,130.378z"/>
</g>
</svg>
									<span>Right Click: Rotate</span>
								</li>
								<li class="mapanalyst_block__box-item">
									<svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
										<g>
											<path d="m272 104h-32a88.1 88.1 0 0 0 -88 88v128a88.127 88.127 0 0 0 76.57 87.26 7.868 7.868 0 0 0 3.36.74h40.07a88.1 88.1 0 0 0 88-88v-128a88.1 88.1 0 0 0 -88-88zm72 216a72.083 72.083 0 0 1 -72 72h-32a72.083 72.083 0 0 1 -72-72v-72h176zm0-88h-176v-40a72.083 72.083 0 0 1 72-72h32a72.083 72.083 0 0 1 72 72z"/>
											<path d="m240 216h32a8 8 0 0 0 8-8v-64a8 8 0 0 0 -8-8h-32a8 8 0 0 0 -8 8v64a8 8 0 0 0 8 8zm8-64h16v48h-16z"/>
											<path d="m208 88h96a8 8 0 0 0 6.4-12.8l-48-64a8 8 0 0 0 -12.8 0l-48 64a8 8 0 0 0 6.4 12.8zm48-58.667 32 42.667h-64z"/>
											<path d="m304 424h-96a8 8 0 0 0 -6.4 12.8l48 64a8 8 0 0 0 12.8 0l48-64a8 8 0 0 0 -6.4-12.8zm-48 58.667-32-42.667h64z"/>
										</g>
									</svg>
									<span>Scroll: Zoom in &#38; Out</span>
								</li>
							</ul>
							<button class="mapanalyst_block__box-btn js_mapanalyst-btn">Full screen</button>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
</div>

<?php $gallery = get_field( 'gallery' ); ?>
<div class="projects_wrapper top-border">
	<section class="section mapanalyst js_section" id="gallery">
		<h2 class="main-title projects_title">
			<?php echo $gallery['section_title']; ?>
		</h2>
		<div class="mapanalyst_block">
			<div class="dmodel mapanalyst_block__box-main mapanalyst_block__box-main--fl js_mapanalyst_block__box">
				<iframe width="100%" height="100%" frameborder="0" allowfullscreen allow="accelerometer;autoplay;fullscreen;gyroscope;magnetometer;xr-spatial-tracking" src="https://visit.virtualartgallery.com/039a52ee-c6a5-4987-b814-6997ba020e9c/"></iframe>
			</div>
		</div>

	</section>
</div>


<?php $about = get_field( 'about' ); ?>
<div class="about_wrapper top-border">
	<section class="section about js_section" id="contact-us">
		<h2 class="main-title about_title">
			<?php echo $about['section_title']; ?>
		</h2>
		<div class="about_list-box">
			<ul class="about_list">
				<?php $first_person = get_field( 'first_person' ); ?>
				<?php if ( $first_person['avatar'] ): ?>
					<li class="about_item">
						<div class="about_block">
							<div class="about_block__top">
								<img src="<?php echo $first_person['avatar']; ?>" alt=""/>
							</div>
							<div class="about_block__bottom">
								<div class="about_block__bottom-box">
									<p class="about_block__name">
										<?php echo $first_person['name']; ?>
									</p>
									<p class="about_block__position">
										<?php echo $first_person['position']; ?>
									</p>
								</div>
							</div>
							<ul class="about_block__social-list">
								<?php if ( $first_person['email'] ): ?>
									<li class="about_block__social-item">
										<a
												href="mailto:<?php echo $first_person['email']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/mail.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $first_person['phone'] ): ?>
									<li class="about_block__social-item about_block__social-item--z">
										<p><?php echo $first_person['phone']; ?></p>
										<a
												href="tel:<?php echo $first_person['phone']; ?>"
												class="about_block__social-link"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/phone.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $first_person['linkedin'] ): ?>
									<li class="about_block__social-item">
										<a
												href="<?php echo $first_person['linkedin']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/linkedin.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</li>
				<?php endif; ?>
				<?php $second_person = get_field( 'second_person' ); ?>
				<?php if ( $second_person['avatar'] ): ?>
					<li class="about_item">
						<div class="about_block">
							<div class="about_block__top">
								<img src="<?php echo $second_person['avatar']; ?>" alt=""/>
							</div>
							<div class="about_block__bottom">
								<div class="about_block__bottom-box">
									<p class="about_block__name">
										<?php echo $second_person['name']; ?>
									</p>
									<p class="about_block__position">
										<?php echo $second_person['position']; ?>
									</p>
								</div>
							</div>
							<ul class="about_block__social-list">
								<?php if ( $second_person['email'] ): ?>
									<li class="about_block__social-item">
										<a
												href="mailto:<?php echo $second_person['email']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/mail.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $second_person['phone'] ): ?>
									<li class="about_block__social-item about_block__social-item--z">
										<p><?php echo $second_person['phone']; ?></p>
										<a
												href="tel:<?php echo $second_person['phone']; ?>"
												class="about_block__social-link"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/phone.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $second_person['linkedin'] ): ?>
									<li class="about_block__social-item">
										<a
												href="<?php echo $second_person['linkedin']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/linkedin.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</li>
				<?php endif; ?>
				<?php $third_person = get_field( 'third_person' ); ?>
				<?php if ( $third_person['avatar'] ): ?>
					<li class="about_item">
						<div class="about_block">
							<div class="about_block__top">
								<img src="<?php echo $third_person['avatar']; ?>" alt=""/>
							</div>
							<div class="about_block__bottom">
								<div class="about_block__bottom-box">
									<p class="about_block__name">
										<?php echo $third_person['name']; ?>
									</p>
									<p class="about_block__position">
										<?php echo $third_person['position']; ?>
									</p>
								</div>
							</div>
							<ul class="about_block__social-list">
								<?php if ( $third_person['email'] ): ?>
									<li class="about_block__social-item">
										<a
												href="mailto:<?php echo $third_person['email']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/mail.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $third_person['phone'] ): ?>
									<li class="about_block__social-item about_block__social-item--z">
										<p><?php echo $third_person['phone']; ?></p>
										<a
												href="tel:<?php echo $third_person['phone']; ?>"
												class="about_block__social-link"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/phone.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $third_person['linkedin'] ): ?>
									<li class="about_block__social-item">
										<a
												href="<?php echo $third_person['linkedin']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/linkedin.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</li>
				<?php endif; ?>
				<?php $fourth_person = get_field( 'fourth_person' ); ?>
				<?php if ( $fourth_person['avatar'] ): ?>
					<li class="about_item">
						<div class="about_block">
							<div class="about_block__top">
								<img src="<?php echo $fourth_person['avatar']; ?>" alt=""/>
							</div>
							<div class="about_block__bottom">
								<div class="about_block__bottom-box">
									<p class="about_block__name">
										<?php echo $fourth_person['name']; ?>
									</p>
									<p class="about_block__position">
										<?php echo $fourth_person['position']; ?>
									</p>
								</div>
							</div>
							<ul class="about_block__social-list">
								<?php if ( $fourth_person['email'] ): ?>
									<li class="about_block__social-item">
										<a
												href="mailto:<?php echo $fourth_person['email']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/mail.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $fourth_person['phone'] ): ?>
									<li class="about_block__social-item about_block__social-item--z">
										<p><?php echo $fourth_person['phone']; ?></p>
										<a
												href="tel:<?php echo $fourth_person['phone']; ?>"
												class="about_block__social-link"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/phone.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $fourth_person['linkedin'] ): ?>
									<li class="about_block__social-item">
										<a
												href="<?php echo $fourth_person['linkedin']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/linkedin.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
							</ul>

						</div>
					</li>
				<?php endif; ?>
				<?php $fifth_person = get_field( 'fifth_person' ); ?>
				<?php if ( $fifth_person['avatar'] ): ?>
					<li class="about_item">
						<div class="about_block">
							<div class="about_block__top">
								<img src="<?php echo $fifth_person['avatar']; ?>" alt=""/>
							</div>
							<div class="about_block__bottom">
								<div class="about_block__bottom-box">
									<p class="about_block__name">
										<?php echo $fifth_person['name']; ?>
									</p>
									<p class="about_block__position">
										<?php echo $fifth_person['position']; ?>
									</p>
								</div>
							</div>
							<ul class="about_block__social-list">
								<?php if ( $fifth_person['email'] ): ?>
									<li class="about_block__social-item">
										<a
												href="mailto:<?php echo $fifth_person['email']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/mail.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $fifth_person['phone'] ): ?>
									<li class="about_block__social-item about_block__social-item--z">
										<p><?php echo $fifth_person['phone']; ?></p>
										<a
												href="tel:<?php echo $fifth_person['phone']; ?>"
												class="about_block__social-link"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/phone.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $fifth_person['linkedin'] ): ?>
									<li class="about_block__social-item">
										<a
												href="<?php echo $fifth_person['linkedin']; ?>"
												class="about_block__social-link"
												target="_blank"
										>
											<img
													src="<?php bloginfo( 'template_directory' ); ?>/img/linkedin.png"
													alt=""
											/>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</div>
					</li>
				<?php endif; ?>
			</ul>
			<?php $footer = get_field( 'footer' ); ?>
			<div class="about_bottom-subbox" style="position:relative!important; text-align:center!important;">
				<?php if ( $footer['map_text_1'] ): ?>
					<p class="about_bottom-subbox_title"><?php echo $footer['map_text_1']; ?></p>
				<?php endif; ?>
				<?php if ( $footer['map_text_2'] ): ?>
					<p class="about_bottom-subbox_text"><?php echo $footer['map_text_2']; ?></p>

				<?php endif; ?>
				<?php if ( $footer['map_text_3'] ): ?>
					<a class="about_bottom-subbox_text" style="font-size: 4rem !important;" href="tel:<?php echo $footer['map_text_3']; ?>"><?php echo $footer['map_text_3']; ?></a>

				<?php endif; ?>
				<?php if ( $footer['map_text_4'] ): ?>
					<a class="about_bottom-subbox_text about_bottom-subbox_text--mb" href="tel:<?php echo $footer['map_text_4']; ?>"><?php echo $footer['map_text_4']; ?></a>

				<?php endif; ?>
				<?php if ( $footer['contact_us_link'] ): ?>
					<li class="footer_item__right_item">
						<button class="footer_item__link" onclick="Calendly.showPopupWidget('<?php echo $footer['contact_us_link']; ?>');return false;">Schedule a Consultation</button>
					</li>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
