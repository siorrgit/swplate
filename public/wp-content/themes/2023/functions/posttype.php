<?php
/**
 * Add post type
 */
add_action( 'init', function() {

  // News
  register_post_type( 'news', array(
    'label' => 'お知らせ',
    'labels' => array(
      'all_items' => '一覧',
    ),
    'public' => true,
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-info',
    'supports' => array(
      'title',
      'editor',
      'revisions'
    ),
    'has_archive' => true,
    'capability_type' => array( 'work', 'works' ),
    'map_meta_cap' => true,
  ));

  // News Category
  register_taxonomy( 'news_category', 'news', array(
    'label' => 'カテゴリー',
    'labels' => array(
      'all_items' => '⼀覧',
    ),
    'hierarchical' => true,
    'public' => true,
    'show_in_rest' => true,
  ));
});

/**
 * Rewrite
 */
add_action( 'rewrite_rules_array', function ( $rules ) {
  $new_rules = array();

  // News
  $new_rules['/news$'] = 'index.php?post_type=news';
  $new_rules['/news/[^/]+/page/([0-9]+)/?$'] = 'index.php?post_type=news&paged=$matches[1]';

  return array_merge($new_rules, $rules);
});
