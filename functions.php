<?php

define('THEME_DIR', 'wp-content/themes/wp_hgskis_2013');

register_nav_menus(array(
	'main_nav_left' => 'Main Navigation Menu (left)',
	'main_nav_right' => 'Main Navigation Menu (right)',
	'guts_nav' => 'Guts Landing Navigation 2017'
));

add_theme_support('post-thumbnails', array('post', 'page', 'team_member', 'product'));

//name, width, height
//last param: true = hard; false = soft, proportional
add_image_size('gallery-crop', 100, 100, true);

function new_excerpt_more( $more ) {
	return ' <small><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Continue reading <span class="meta-nav">&rarr;</span></a></small>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

wp_enqueue_style('styles', get_template_directory_uri() . '/css/master.css', array('wspsc-style'));

function get_nav_menu($target) {
    $menus = wp_get_nav_menus();
    $menu_locations = get_nav_menu_locations();

    if (isset($menu_locations[$target])) {
        foreach ($menus as $menu) {
            if ($menu->term_id == $menu_locations[$target]) {
                return array (
                    'object' => wp_get_nav_menu_object($menu_locations[$target]),
                    'items' => wp_get_nav_menu_items($menu)
                );
            }
        }
    }

    return;
}

//custom post types
// include('includes/custom-post-types.php');

// //load meta classes
// include('includes/custom-meta-classes/skis-meta.php');
// include('includes/custom-meta-classes/post-meta.php');
// include('includes/custom-meta-classes/product-meta.php');
// include('includes/custom-meta-classes/team-member-meta.php');

// //utility for adding meta actions onload
// function loadMetaClass($class){
// 	add_action('load-post.php', 'call_'.trim($class));
// 	add_action('load-post-new.php', 'call_'.trim($class));
// }

//loading different meta fields depending on template
//first get post id
// $post_id = ($_GET['post']) ? $_GET['post'] : $_POST['post_ID'];
// //determine template
// $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);

// function homePageQuery($query){
// 	if($query->is_home() && $query->is_main_query()){
// 		$videoCat = get_category_by_slug('video');
// 		$query->set('posts_per_page', 5);
// 		$query->set('cat', $videoCat->term_id);
// 	}
// }

// function mediaPageQuery($query){
// 	if($query->is_main_query()){
// 		$query->set('posts_per_page', 2);
// 	}
// }
// // add_action('pre_get_posts', 'homePageQuery');

// switch ($template_file){
// 	case 'home.php':
// 		break;
// 	case 'family.php':
// 		break;
// 	case 'goods.php':
// 		break;
// 	case 'media.php':
// 		break;
// 	case 'skis.php':
// 		loadMetaClass('SkisMeta');
// 		break;
// 	case 'about.php':
// 		break;
// 	default:
// }

// //load on every page
// loadMetaClass('PostMeta');
// loadMetaClass('ProductMeta');
// loadMetaClass('MemberMeta');
