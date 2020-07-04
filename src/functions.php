<?php

// Include bundle
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_script('theme-js', get_template_directory_uri() . '/dist/bundle.js', array(), true, true);
  wp_enqueue_style('theme-css', get_template_directory_uri() . '/dist/theme.css');
});

// Basic theme features
add_action('after_setup_theme', function() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
});
