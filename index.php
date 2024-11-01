<?php
/*
Plugin Name: WP - Fix search function [search only pages]
Description: Make sure that only pages are searched by the Wordpress's search function.
Author: Hervé Yvis
Version: 1.4.9
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

function wpb_search_filter_only_pages($query) 
{
    if ($query->is_search) 
    {
        $query->set('post_type', 'page');
    }

    return $query;
}

add_filter('pre_get_posts', 'wpb_search_filter_only_pages');
