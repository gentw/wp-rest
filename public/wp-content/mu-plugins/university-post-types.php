<?php
function university_post_types() {
	register_post_type('event', array(
		'supports'		=> array('title', 'editor', 'excerpt'),
		'rewrite'		=> array('slug' => 'events'),
		'has_archive'	=> 	true,
		'public' 		=>	true,
		
		'labels' => array(
			'name' 				=> 'Events',
			'add_new_item'		=> 'Add new Event',
			'edit_item'			=> 'Edit Event',
			'all_items'			=> 'All Events',
		),
		
		'menu_icon'	=> 'dashicons-calendar'
	));
	
	

	
	
	register_post_type('program', array(
		'supports'		=>	array('title'),
		'rewrite'		=>	array('slug' => 'programs'),
		'has_archive'	=> 	true,
		'public'		=>	true,
		//'show_in_menu'	=> 'edit.php?post_type=event',
		'labels'		=> 	array(
			'name'			=> 'Programs',
			'add_new_item'	=> 'Add new Program',
			'edit_item'		=> 'Edit Program',
			'all_items'		=> 'All Programs',
			'singular_name'	=> 'Program'
		),
		
		'menu_icon'=> 'dashicons-awards'
	));

	register_post_type('professor', array(
		'supports'		=>	array('title', 'editor', 'thumbnail'),
		'rewrite'		=>	array('slug' => 'professors'),
		'has_archive'	=> 	true,
		'public'		=>	true,
		'labels'		=> 	array(
			'name'			=> 'Professors',
			'add_new_item'	=> 'Add new Professor',
			'edit_ite'		=> 'Edit Professor',
			'all_items'		=> 'All Professors',
			'singular_name'	=> 'Professor'
		),
		'menu_icon'=> 'dashicons-welcome-learn-more'
	));

	
	register_post_type('professor', array(
		'supports'		=>	array('title', 'editor', 'thumbnail'),
		'rewrite'		=>	array('slug' => 'professors'),
		'has_archive'	=> 	true,
		'public'		=>	true,
		'labels'		=> 	array(
			'name'			=> 'Professors',
			'add_new_item'	=> 'Add new Professor',
			'edit_ite'		=> 'Edit Professor',
			'all_items'		=> 'All Professors',
			'singular_name'	=> 'Professor'
		),
		'menu_icon'=> 'dashicons-welcome-learn-more'
	));

	register_post_type('campus', array(
		'supports'		=>	array('title', 'editor', 'thumbnail'),
		'rewrite'		=>	array('slug' => 'campuses'),
		'has_archive'	=> 	true,
		'public'		=>	true,
		'labels'		=> 	array(
			'name'			=> 'Campuses',
			'add_new_item'	=> 'Add new Campus',
			'edit_ite'		=> 'Edit Campus',
			'all_items'		=> 'All Campuses',
			'singular_name'	=> 'Campus'
		),
		'menu_icon'=> 'dashicons-location-alt'
	));
}

add_action('init', 'university_post_types');
