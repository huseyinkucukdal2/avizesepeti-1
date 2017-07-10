<?php
/**
 * @var int $slider_id Slider ID.
 * @var int $show_loading_icon 1 for show, otherwise 0.
 * @var string $loading_icon_type
 * @var Hugeit_Slider_Slide[] $slides
 * @var Hugeit_Slider_Slider $slider
 */
?>

<div class="slider_<?php echo $slider_id; ?>" data-id="<?php echo $slider_id; ?>">
	<?php
	if($show_loading_icon) {
		echo '<div class="slider-loader-' . $slider_id . '"></div>';
	}
	?>
	<ul id="slider_<?php echo $slider_id; ?>" class="<?php if($slider->get_lightbox()) { echo 'slider_lightbox_' . $slider_id; } ?> huge-it-slider" data-autoplay="<?php echo $slider->get_video_autoplay(); ?>">
		<?php
		foreach ( $slides as $key => $slide ) {
			$slide_type = $slides[ $key ]->get_type();
			$i = 0;
			switch($slide_type) {
				case 'image': ?>
					<li class="group"
						data-thumb="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>">
						<?php if ($slider->get_lightbox()) { ?>
							<a href="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>">
								<img src="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>" alt="<?php echo $slides[$key]->get_title(); ?>" />
							</a>
						<?php } else {
							if ($slides[$key]->get_url()) {
								$target = ($slides[$key]->get_in_new_tab()) ? "_blank" : "";
								echo '<a href="' . $slides[$key]->get_url() . '" target="' . $target . '">';
							} ?>
							<img src="<?php echo wp_get_attachment_url($slides[$key]->get_attachment_id()); ?>"
								 alt="<?php echo $slides[$key]->get_title(); ?>"/>
							<?php if ($slides[$key]->get_url()) {
								echo '</a>';
							}
						} ?>

						<?php if ($slider->get_lightbox()) {
							if ($slider->get_view() !== 'carousel1' && $slides[$key]->get_title()) {
								if ($slides[$key]->get_url()) {
									$target = ($slides[$key]->get_in_new_tab()) ? "_blank" : "";
									echo '<a href="' . $slides[$key]->get_url() . '" class="title_url" target="' . $target . '">';
								} ?>
								<div class="huge-it-caption slider-title">
									<div><?php echo $slides[$key]->get_title(); ?></div>
								</div>
								<?php if ($slides[$key]->get_url()) {
									echo '</a>';
								}
							}
						} else {
							if ($slider->get_view() !== 'carousel1' && $slides[$key]->get_title()) { ?>
								<div class="huge-it-caption slider-title">
									<div><?php echo $slides[$key]->get_title(); ?></div>
								</div>
							<?php }
						} ?>
						
						<?php if ($slider->get_view() !== 'carousel1' && $slides[$key]->get_description()) { ?>
							<div class="huge-it-caption slider-description">
								<div><?php echo $slides[$key]->get_description(); ?></div>
							</div>
						<?php } ?>
					</li>
					<?php
					break;
				case 'video':
					if($slider->get_view() !== 'carousel1'){
						if ($slides[$key]->get_site() === 'youtube') { ?>
							<li class="group video_iframe"
								data-thumb="<?php echo 'https://img.youtube.com/vi/' . $slides[$key]->get_video_id() . '/mqdefault.jpg'; ?>">
								<?php if ($slider->get_lightbox()) { ?>
									<a href="<?php echo '//www.youtube.com/embed/' . $slides[$key]->get_video_id(); ?>">
										<div class="lightbox_iframe_cover"></div>
										<iframe width="100%" height="100%" src="<?php echo '//www.youtube.com/embed/' . $slides[$key]->get_video_id(); ?>"></iframe>
									</a>
								<?php } else { ?>
									<img
										src="<?php echo 'https://img.youtube.com/vi/' . $slides[$key]->get_video_id() . '/mqdefault.jpg'; ?>"
										class="video_cover"/>
									<div id="huge_it_youtube_iframe<?php echo $slider_id . '_' . $slides[$key]->get_id(); ?>"
										 data-id="<?php echo $slides[$key]->get_video_id(); ?>"
										 class="huge_it_youtube_iframe"
										 data-controls="<?php echo $slides[$key]->get_show_controls(); ?>"
										 data-showinfo="<?php echo $slides[$key]->get_show_info(); ?>"
										 data-volume="<?php echo $slides[$key]->get_volume(); ?>"
										 data-quality="<?php echo $slides[$key]->get_quality(); ?>" data-rel="0"
										 data-width="<?php echo $slider->get_width(); ?>"
										 data-height="<?php echo $slider->get_height(); ?>"
										 data-delay="<?php echo $slider->get_pause_time(); ?>" data-autoplay="0"></div>
									<div class="playSlider"></div>
									<div class="pauseSlider"></div>
									<div class="playButton"></div>
								<?php } ?>
							</li>
						<?php } else if ($slides[$key]->get_site() === 'vimeo') {
							$vimeo = $slides[$key]->get_url();
							$temp_var = explode("/", $vimeo);
							$imgid = end($temp_var);
							?>
							<li class="group video_iframe" data-thumb="<?php echo $slides[$key]->get_thumbnail_url(); ?>">
								<?php if ($slider->get_lightbox()) { ?>
									<a href="<?php echo '//player.vimeo.com/video/' . $imgid; ?>">
										<div class="lightbox_iframe_cover"></div>
										<iframe width="100%" height="100%" src="<?php echo '//player.vimeo.com/video/' . $imgid; ?>"></iframe>
									</a>
								<?php } else { ?>
									<img src="<?php echo $slides[$key]->get_thumbnail_url(); ?>'" class="video_cover"/>
									<iframe width="100%" height="100%"
											src="//player.vimeo.com/video/<?php echo $imgid; ?>?api=1&player_id=huge_it_vimeo_iframe<?php echo $slider_id . '_' . $slides[$key]->get_id(); ?>"
											id="huge_it_vimeo_iframe<?php echo $slider_id . '_' . $slides[$key]->get_id(); ?>"
											data-element-id="<?php echo $slides[$key]->get_id(); ?>"
											data-volume="<?php echo $slides[$key]->get_volume(); ?>"
											data-controlColor="<?php echo $slides[$key]->get_control_color(); ?>"
											class="huge_it_vimeo_iframe" frameborder="0" allowfullscreen=""></iframe>
									<div class="playSlider"></div>
									<div class="pauseSlider"></div>
									<div class="playButton"></div>
								<?php } ?>
							</li>
						<?php }
					}
					break;
				case 'post':
					$args = array(
						'numberposts' => $slides[ $key ]->get_max_post_count(),
						'offset' => 0,
						'category' => $slides[ $key ]->get_term_id(),
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish, future, pending, private',
						'suppress_filters' => true );
					$posts = wp_get_recent_posts( $args, ARRAY_A );
					foreach($posts as $_key => $last_posts){
						$imagethumb = wp_get_attachment_image_src( get_post_thumbnail_id($last_posts["ID"]), 'thumbnail-size', true );
						if(get_post_thumbnail_id( $last_posts["ID"]) ){
							?>
							<li class="group" data-thumb="<?php if(get_the_post_thumbnail($last_posts["ID"], 'thumbnail')){ echo $imagethumb[0]; }; ?>">
								<?php if ($slider->get_lightbox()) { ?>
									<a href="<?php if(get_the_post_thumbnail($last_posts["ID"], 'thumbnail')){ echo $imagethumb[0]; }; ?>">
										<img src="<?php if(get_the_post_thumbnail($last_posts["ID"], 'thumbnail')){ echo $imagethumb[0]; }; ?>" alt="<?php echo $last_posts["post_title"]; ?>"/>
									</a>
								<?php } else {
									if($last_posts["guid"]){
										$target = ($slides[ $key ]->get_in_new_tab()) ? "_blank" : "";
										echo '<a href="'. $last_posts["guid"] .'" target="'. $target .'">';
									} ?>
									<img src="<?php if(get_the_post_thumbnail($last_posts["ID"], 'thumbnail')){ echo $imagethumb[0]; }; ?>" alt="<?php echo $last_posts["post_title"]; ?>"/>
									<?php if($last_posts["guid"]){
										echo '</a>';
									}
								} ?>
								<?php if($slider->get_view() !== 'carousel1' && $slides[ $key ]->get_show_title() && $last_posts["post_title"]){ ?>
									<div class="huge-it-caption slider-title">
										<div><?php echo $last_posts["post_title"]; ?></div>
									</div>
								<?php } ?>
								<?php if($slider->get_view() !== 'carousel1' && $slides[ $key ]->get_show_description() && wp_strip_all_tags($last_posts["post_excerpt"])){ ?>
									<div class="huge-it-caption slider-description">
										<div><?php echo wp_strip_all_tags($last_posts["post_excerpt"]); ?></div>
									</div>
								<?php } ?>
							</li>
							<?php
						}
						$i++;
					}
					break;
			}
		}
		?>
	</ul>
	<?php if(Hugeit_Slider_Options::get_share_buttons() == 1){
		switch(Hugeit_Slider_Options::get_share_buttons_hover_style()){
			case '0':
				$class = 'icon-link_' . $slider_id . ' fill';
				break;
		}
		?>
		<div class="share_buttons_<?php echo $slider_id; ?>">
			<?php if(Hugeit_Slider_Options::get_share_buttons_facebook() == 1){ ?>
				<a class="<?php echo $class; ?> share_buttons_facebook_<?php echo $slider_id; ?>" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq" title="Share on Facebook">
					<i class="fa fa-facebook"></i>
				</a>
			<?php } ?>
			<?php if(Hugeit_Slider_Options::get_share_buttons_twitter() == 1){ ?>
				<a class="<?php echo $class; ?> share_buttons_twitter_<?php echo $slider_id; ?>" href="https://twitter.com/share?url=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq&text=Share Buttons Demo&via=sunnyismoi" title="Share on Twitter">
					<i class="fa fa-twitter"></i>
				</a>
			<?php } ?>
			<?php if(Hugeit_Slider_Options::get_share_buttons_gp() == 1){ ?>
				<a class="<?php echo $class; ?> share_buttons_gp_<?php echo $slider_id; ?>" href="https://plus.google.com/share?url=http%3A%2F%2Fcodepen.io%2Fsunnysingh%2Fpen%2FOPxbgq" title="Share on Google+">
					<i class="fa fa-google-plus"></i>
				</a>
			<?php } ?>
		</div>
	<?php } ?>
</div>
<script>
	jQuery(function (){
		if(singleSlider_<?php echo $slider_id; ?>.view !== 'carousel1'){
			jQuery('#slider_<?php echo $slider_id; ?>').sliderPlugin({
				maxWidth: singleSlider_<?php echo $slider_id; ?>.width,
				maxHeight: singleSlider_<?php echo $slider_id; ?>.height,
				transition: singleSlider_<?php echo $slider_id; ?>.effect,
				controls: singleSlider_<?php echo $slider_id; ?>.navigate_by,
				cropImage: hugeitSliderObj.crop_image,
				navigation: hugeitSliderObj.show_arrows,
				delay: +singleSlider_<?php echo $slider_id; ?>.pause_time,
				transitionDuration: +singleSlider_<?php echo $slider_id; ?>.change_speed,
				pauseOnHover: singleSlider_<?php echo $slider_id; ?>.pause_on_hover
			});
		} else {
			var $pager = false,
				$thumb = false;
			switch(singleSlider_<?php echo $slider_id; ?>.navigate_by){
				case 'dot':
					$pager = true;
					$thumb = false;
					break;
				case 'thumbnail':
					$pager = true;
					$thumb = true;
					break;
				case 'none':
					$pager = false;
					$thumb = false;
					break;
			}

			jQuery('#slider_<?php echo $slider_id; ?>').lightSlider({
				item: +singleSlider_<?php echo $slider_id; ?>.itemscount,
				pause: +singleSlider_<?php echo $slider_id; ?>.pause_time,
				speed: +singleSlider_<?php echo $slider_id; ?>.change_speed,
				pager: $pager,
				gallery: $thumb,
				pauseOnHover: +singleSlider_<?php echo $slider_id; ?>.pause_on_hover,
				thumbItem: +hugeitSliderObj.thumb_count_slides,
				controls: +hugeitSliderObj.show_arrows,
				maxWidth: singleSlider_<?php echo $slider_id; ?>.width,
				maxHeight: singleSlider_<?php echo $slider_id; ?>.height,
				dotsPos: hugeitSliderObj.navigation_position
			});
		}
	});

	jQuery(window).load(function(){
		jQuery('.slider_lightbox_<?php echo $slider_id; ?>').lightbox({
			slideAnimationType: singleSlider_<?php echo $slider_id; ?>.slide_effect,
			arrows: singleSlider_<?php echo $slider_id; ?>.arrows_style,
			openCloseType: singleSlider_<?php echo $slider_id; ?>.open_close_effect
		});
	});
</script>