<?php
/*
Plugin Name: Movie
Plugin URI:
Description: Declares a plugin that will create a custom post type displaying movie
Version: 1.0
Author: Wilson Javier Ariza
Author URI:
License: GPLv2
*/
add_action( 'init', 'create_movie' );
function create_movie_review() {
  register_post_type( 'movie',
        array(
            'labels' => array(
                'name' => 'Movies',
                'singular_name' => 'Movie',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Movie',
                'edit' => 'Edit',
                'edit_item' => 'Edit Movie',
                'new_item' => 'New Movie ',
                'view' => 'View',
                'view_item' => 'View Movie ',
                'search_items' => 'Search Movie ',
                'not_found' => 'No Movie found',
                'not_found_in_trash' => 'No Movie found in Trash',
                'parent' => 'Parent Movie '
            ),

            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
?>
