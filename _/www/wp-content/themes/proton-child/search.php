<?php get_header(); ?>
<div class="page-title">
	<div class="row">
		<div class="col-md-9 col-xs-12">
			<!--영어이름변경 20170524 eley-->
			<!--<h1><?php //echo esc_attr__("All search results in this critea.","proton") ?></h1>-->
			<h3><span style="color: #999999;">Search Results By SELVI :)</span><h3>
		</div>
	</div>
</div>
<div class="portfolio">
	<div class="row portfolio-masonry">
		<?php
			$args = array_merge( $wp_query->query_vars, array(
				'post_type' => 'post'
			));
			$query = new WP_Query($args);
			if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
		?>
		<div class="col-md-4 col-sm-6 col-xs-12 selector">
			<div class="item-holder">
				<div class="item">
					<div class="overlay-background"></div>
					<div class="overlay">
						<div class="inner-overlay">
							<?php $proton_post_type = get_field("proton_post_type"); ?>
							<!--<h3><a href="<?php //echo esc_attr($proton_post_type) ? excerpt(50) : the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
							
							<!--검색시 href오류 수정 url변수추가 20170523 eley-->
							<?php $proton_post_url = get_field("proton_post_url"); ?>
							<h3><a href="<?php echo esc_attr($proton_post_url) ? excerpt(50) : the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<span><?php the_category(', ') ?></span>
						</div>
					</div>
				</div>
				<?php
					if(has_post_thumbnail()){
						the_post_thumbnail();
					}
					else {
						echo '<img src="' . get_template_directory_uri() . '/assets/images/default.png" />';
					}
				?>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); else: ?>
		<div class="page-title error">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<!--<h1><?php //echo esc_attr__("404", "proton"); ?></h1>
					<h2><?php //echo esc_attr__("Not Found", "proton"); ?></h2>-->
					<h3><span style="color: #999999;">Not Found</span><h3>
					<a href="javascript:history.go(-1)">[Back]</a>
		</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>