<?php

require get_theme_file_path('inc/search-route.php');

function university_custom_rest() {
	register_rest_field('post', 'authorName', array (
		'get_callback' => function() {
			return get_the_author();
		}
	) );
}	

add_action('rest_api_init', 'university_custom_rest');

function university_files() {
	wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDhBiQ6tU3cSikkas5vgpSnpo5IcZ2sAtU', NULL, '1.0', true);
	wp_enqueue_script('university-main-js', get_theme_file_uri('/js/scripts-bundled.js'), 'NULL', '1.0', true);
	wp_enqueue_style('university_custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('university_font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
	wp_localize_script('university-main-js', 'universityData', array(
		'root_url' => get_site_url()
	)); // this function let us to output little bit data js to html in webpage source 
}


function university_features() {

	register_nav_menu('headerMenuLocation', 'Header Menu Location');
	register_nav_menu('footerMenuLocationOne', 'Footer Menu One');
	register_nav_menu('footerMenuLocationTwo', 'Footer Menu Two');
	add_theme_support('title-tag');
	//add_post_type_support( 'event', 'excerpt' );

	add_theme_support('post-thumbnails');
	add_image_size('professorLandscape', 400, 260, true);
	add_image_size('professorPortrait', 480, 650, true);
	add_image_size('pageBanner', 1500, 300, true);

}

add_action('wp_enqueue_scripts', 'university_files');
add_action('after_setup_theme', 'university_features');

//manipulating default URL
function university_adjust_queries($query) {

	if(!is_admin() AND is_post_type_archive('campus') AND $query->is_main_query()) {
		$query->set('posts_per_page', -1);
	}

	if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
		$today = date('Ymd');
		$query->set('meta_key', 'event_date');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
		$query->set('meta_query', array(
			array(
				'key' 	  => 'event_date',
				'compare' => '>=',
				'value'	  => $today,
				'type'	  => 'numeric'
			)
		));
	}

	if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
		$query->set('orderby', 'title');
		$query->set('order', 'ASC');
		$query->set('posts_per_page', -1);
	}
}
add_action('pre_get_posts', 'university_adjust_queries');




function pageBanner($args = null) {
	if(!$args['title']) {
		$args['title'] = get_the_title();
	}

	if(!$args['subtitle']) {
		$args['subtitle'] = get_field('page_banner_subtitle');
	}

	if(!$args['photo']) {
		if(get_field('page_banner_background_image')) {
			$args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
		} else {
			$args['photo'] = get_theme_file_uri('images/ocean.jpg');
		}
	}


?>
	<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
        <div class="page-banner__intro">
          <p><?php echo $args['subtitle']; ?></p>
        </div>
      </div>  
    </div>


<?php

}

function universityMapKey($api) {
	$api['key']	= 'AIzaSyDhBiQ6tU3cSikkas5vgpSnpo5IcZ2sAtU';
	return $api;
}

add_filter('acf/fields/google_map/api', 'universityMapKey'); 


?>


