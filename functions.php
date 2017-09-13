<?php

function theme_name_scripts() {
    wp_enqueue_script( 'jquery-3.2.1', get_template_directory_uri() . '/js/jquery-3.2.1.js');
    wp_enqueue_script( 'jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style( 'jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );



add_theme_support( 'post-thumbnails', array( 'post' ) );


register_nav_menu('menu',  'меню в шапке');
register_nav_menu('sub-menu',  'sub-menu');




$args = array (
    'name' => 'Виджет sidebar',
    'id'   => 'sidebar',
    'description' => 'Здесь добавляем виджеты сайдебара',
    'before_widget' => '<li id="%1" class=""widget %2',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="main-title">',
    'after_title' => '</h2>'
    

);


 


function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

register_sidebar($args);



// фильтр передает переменную $template - путь до файла шаблона.
// Изменяя этот путь мы изменяем файл шаблона.
add_filter( 'template_include', 'portfolio_page_template', 99 );

function portfolio_page_template( $template ) {

    if ( is_page( 'portfolio' )  ) {
        $new_template = locate_template( array( 'portfolio-page-template.php' ) );
        if ( '' != $new_template ) {
            return $new_template;
        }
    }

    return $template;
}



// add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );
// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
    $root_id = 0;
    
    // find the current menu item
    foreach ( $sorted_menu_items as $menu_item ) {
      if ( $menu_item->current ) {
        // set the root id based on whether the current menu item has a parent or not
        $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
        break;
      }
    }
    
    // find the top level parent
    if ( ! isset( $args->direct_parent ) ) {
      $prev_root_id = $root_id;
      while ( $prev_root_id != 0 ) {
        foreach ( $sorted_menu_items as $menu_item ) {
          if ( $menu_item->ID == $prev_root_id ) {
            $prev_root_id = $menu_item->menu_item_parent;
            // don't set the root_id to 0 if we've reached the top of the menu
            if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
            break;
          } 
        }
      }
    }
    $menu_item_parents = array();
    foreach ( $sorted_menu_items as $key => $item ) {
      // init menu_item_parents
      if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;
      if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
        // part of sub-tree: keep!
        $menu_item_parents[] = $item->ID;
      } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
        // not part of sub-tree: away with it!
        unset( $sorted_menu_items[$key] );
      }
    }
    
    return $sorted_menu_items;
  } else {
    return $sorted_menu_items;
  }
}


function true_apply_categories_for_pages(){
    add_meta_box( 'categorydiv', 'Категории', 'post_categories_meta_box', 'page', 'side', 'normal'); // добавляем метабокс категорий для страниц
    register_taxonomy_for_object_type('category', 'page'); // регистрируем рубрики для страниц
}
// обязательно вешаем на admin_init
add_action('admin_init','true_apply_categories_for_pages');
 
function true_expanded_request_category($q) {
    if (isset($q['category_name'])) // если в запросе присутствует параметр рубрики
        $q['post_type'] = array('post', 'page'); // то, помимо записей, выводим также и страницы
    return $q;
}
 
add_filter('request', 'true_expanded_request_category');



?>











