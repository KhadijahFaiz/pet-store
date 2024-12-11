<?php
/*
Plugin Name: My Custom API
Description: A custom API for fetching data.
Version: 1.0
Author: root
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
add_action('rest_api_init', function () {
    // Register a custom endpoint for products
    register_rest_route('myapi/v1', '/products', array(
        'methods' => 'GET',
        'callback' => 'get_products',
    ));

    // Register another custom endpoint for discounts
    register_rest_route('myapi/v1', '/discounts', array(
        'methods' => 'GET',
        'callback' => 'get_discounts',
    ));
});

function get_products($data) {
    // Fetch products from the database
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    );
    $products = new WP_Query($args);
    $result = array();

    while ($products->have_posts()) {
        $products->the_post();
        $result[] = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'price' => get_post_meta(get_the_ID(), '_price', true),
            'description' => get_the_content(),
        );
    }

    return rest_ensure_response($result);
}

function get_discounts($data) {
    // Fetch discounted products from the database
    $args = array(
        'post_type' => 'product',
        'meta_query' => array(
            array(
                'key' => '_sale_price',
                'value' => 0,
                'compare' => '>',
            ),
        ),
    );
    $discounts = new WP_Query($args);
    $result = array();

    while ($discounts->have_posts()) {
        $discounts->the_post();
        $result[] = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'sale_price' => get_post_meta(get_the_ID(), '_sale_price', true),
            'regular_price' => get_post_meta(get_the_ID(), '_regular_price', true),
        );
    }

    return rest_ensure_response($result);
}
