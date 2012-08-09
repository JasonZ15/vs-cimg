<?php get_header(); ?>
<?php get_template_part('includes/breadcrumbs', 'page'); ?>
<?php if ( 'on' == et_get_option('flexible_featured', 'on') && is_home() ) get_template_part( 'includes/featured', 'home' ); ?>

<?php if ( 'on' == et_get_option('flexible_quote','on') ) { ?>
	<div id="quote">
		<h2><?php echo et_get_option('flexible_quote_heading'); ?></h2>
		<p><?php echo esc_html( et_get_option('flexible_quote_text') ); ?></p>
	</div> <!-- end #quote -->
<?php } ?>

<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-5.6.1-packed.js"></script>
<script type="text/javascript" language="javascript">
			$(function() {

				//	Fuild layout example 2, centering the items
				$("#foo3").carouFredSel({
	auto		: 6000,
	height: 70,
	width: '100%',
	
	pagination	: "#foo3_pag"
});


			});
		</script>
		<style type="text/css" media="all">
.image_carousel {
	padding: 15px 0 0px 0px; 
	background: #e5e5e5 url(<?php echo get_template_directory_uri(); ?>/images/control_panel/body-bg17.png) repeat 0 0; bottom: 0; position: fixed; z-index: 99999999;
	width: 100%; left:0;
	-moz-box-shadow:    inset 0px 0px 8px #4c4c4c;
   -webkit-box-shadow: inset 0px 0px 8px #4c4c4c;
   box-shadow:         inset 0px 0px 8px #4c4c4c;
}
.image_carousel img {
	border: 1px solid #c7c7c7;
	background-color: white;
	padding: 9px;
	margin: 7px;
	display: block;
	float: left;
}
.pagination {
	text-align: center;
	padding-top: 4px;
	margin: 0 auto;
}
.image_carousel .pagination a {
	background: url(<?php echo get_template_directory_uri(); ?>/images/nav-dot.png) 2px 0 no-repeat transparent;
	width: 15px;
	height: 15px;
	padding: 0 2px 0 2px;
	display: inline-block; float: none;
}
.pagination a.selected {
	background-position: -15px 0px;
	cursor: default;
}
.pagination a span {
	display: none;
}
.image_carousel a {
	display: block;
	float: left;
}
.clearfix {
	float: none;
	clear: both;
}
img.title-tab {position: fixed; bottom: 97px; z-index: 99999999999999999; padding-left: 16px; left: 80px;}

		</style>
		<img class="title-tab" src="<?php echo get_template_directory_uri(); ?>/images/sponsors-tab.png" />
<div class="image_carousel">	
	<div id="foo3">
  <a href="http://www.gmic-sv.com/wip/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/wip-partner-promo-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/hysta/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/hysta-partner-event-1.jpg" width="77" height="40" /></a> 
  <a href="#"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/cbnweekly-partner-promo-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/99people/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/99people-partner-event-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/sipa"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/sipa-partner-event-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/bnb/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/BNB-partner-blog_1.jpg" width="77" height="40" /></a> 
  <a href="http://www.mobisights.com"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/mobisights-partner-blog-1.png" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/mobile-monday-seoul/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/MoMoSeoul-partner-promo-200-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/mobiad-org/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/mobiAD-partner-promo-2.jpg" width="77" height="40" /></a> 
  <a href="http://convergenceindia.org/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/convergence-partner-promo-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/svcwireless/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/svc-wireless-partner-promo-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/svforum/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/svforum-partner-promo-1.jpg" width="77" height="40" /></a> 
  <a href="http://www.gmic-sv.com/sventrepreneurs/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/SV-entrepreneuers-partner-event-1.jpg" width="77" height="40" /></a>
	</div>
	<div class="clearfix"></div>
	<div class="pagination" id="foo3_pag"></div>
</div>


<?php if ( 'on' == et_get_option('flexible_display_recentwork_section','on') ) { ?>
	<section id="portfolio" class="clearfix">
		<h1 class="section-title"><?php esc_html_e( 'Design', 'Flexible' ); ?></h1>
		<span class="section-tagline"><?php esc_html_e( 'Recent work', 'Flexible' ); ?></span>
		
		<a href="<?php echo esc_url( et_get_option( 'flexible_more_work_url', '#' ) ); ?>" class="more"><?php esc_html_e( 'More work &raquo;', 'Flexible' ); ?></a>
		
		<?php
			$portfolio_args = array(
				'post_type' => 'project',
				'showposts' => (int) et_get_option('flexible_homepage_numposts_projects'),
				'tax_query' => array(
					array(
						'taxonomy' => 'project_category',
						'field' => 'id',
						'terms' => (array) et_get_option('flexible_homepage_exlcats_projects'),
						'operator' => 'NOT IN'
					)
				)
			);
		
			$categories = get_terms( 'project_category', array( 'exclude' => array( et_get_option('flexible_homepage_exlcats_projects') ) ) );
			if ( $categories ){
				echo '<ul id="et_portfolio_sort_links">';
					echo '<li class="active">' . '<a href="#" data-categories_id="all">' . __( 'All', 'Flexible' ) . '</a>' . '</li>';
					foreach ( $categories as $category ){
						echo '<li>' . '<a href="#" data-categories_id="' . esc_attr( 'project_cat_' . $category->term_taxonomy_id ) . '">' . esc_html( $category->name ) . '</a>' . '</li>';
					}
				echo '</ul>';
			}
		?>
		
		<div id="portfolio-grid" class="clearfix">
		<?php
			$portfolio_query = new WP_Query( apply_filters( 'et_home_portfolio_args', $portfolio_args ) );
			while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();			
				get_template_part( 'includes/entry', 'portfolio' );
			endwhile; 
			wp_reset_postdata(); 
		?>
		</div> <!-- end #portfolio-grid -->
	</section> <!-- end #portfolio -->
<?php } ?>

<?php if ( 'on' == et_get_option('flexible_display_fromblog_section','on') && ( 'false' == et_get_option('flexible_blog_style','false') ) ) { ?>
	<section id="blog" class="clearfix">
		<h1 class="section-title"><a href="http://www.gmic-sv.com/category/recent-news/"><?php esc_html_e( 'Recent News', 'Flexible' ); ?></a></h1>
		<!--<span class="section-tagline"><?php esc_html_e( 'Recent news', 'Flexible' ); ?></span>-->
		
		<a href="<?php echo esc_url( et_get_option( 'flexible_more_posts_url', '#' ) ); ?>" class="more"><?php esc_html_e( 'Read more &raquo;', 'Flexible' ); ?></a>
		
		<div id="blog-grid">
			<?php $i = 0; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
					$i++;
					$last_class = ( $i % 3 == 0 ) ? ' last' : '';
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('blog-item' . $last_class); ?>>
					<span class="date"><?php echo get_the_time( 'M' ); ?><strong><?php echo get_the_time( 'd' ); ?></strong></span>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta-info"><?php printf( __('Posted on %1$s by %2$s', 'Flexible'), get_the_time( apply_filters( 'et_home_post_date_format', 'M j' ) ), et_get_the_author_posts_link() ); ?></p>
					<p><?php truncate_post(180); ?></p>
				</article> <!-- end .blog-item -->
			<?php endwhile; else : ?>
				<article id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'Flexible' ); ?></h1>
				</article><!-- end #post-0 -->
			<?php endif; ?>
		</div> <!-- end #blog-grid -->
	</section> <!-- end #blog -->
<?php } ?>

<?php if ( 'on' == et_get_option('flexible_blog_style') ) { ?>
	<div id="content-area" class="clearfix">
		<div id="left-area">		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('includes/entry', 'index'); ?>
			<?php
			endwhile;
				if (function_exists('wp_pagenavi')) { wp_pagenavi(); }
				else { get_template_part('includes/navigation','entry'); }
			else:
				get_template_part('includes/no-results','entry');
			endif; ?>
		</div> 	<!-- end #left-area -->
		<?php get_sidebar(); ?>
	</div> 	<!-- end #content-area -->
<?php } ?>
	
<?php get_footer(); ?>