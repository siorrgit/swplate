<?php

/**
 * 固定ページのテンプレートファイルを階層管理する
 */
add_filter( 'page_template_hierarchy', function( $templates ) {
  if ( is_front_page() ) {
    return $templates;
  }
  global $wp_query;
  $pagename = $wp_query->query['pagename'];
  array_unshift($templates, "pages/default.php");
  array_unshift($templates, "pages/{$pagename}.php");
  return $templates;
});

/**
 * アーカイブのテンプレートファイルを階層管理する
 */
add_filter( 'archive_template_hierarchy', function( $templates ) {
  global $wp_query;
  $post_type = $wp_query->query['post_type'];
  array_unshift($templates, "archives/{$post_type}.php");
  return $templates;
});

/**
 * カテゴリーのテンプレートファイルを階層管理する
 */
add_filter( 'category_template_hierarchy', function( $templates ) {
  array_unshift($templates, "taxonomies/category.php");
  return $templates;
});

/**
 * タグのテンプレートファイルを階層管理する
 */
add_filter( 'tag_template_hierarchy', function( $templates ) {
  array_unshift($templates, "taxonomies/tag.php");
  return $templates;
});

/**
 * タクソノミーのテンプレートファイルを階層管理する
 */
add_filter( 'taxonomy_template_hierarchy', function( $templates ) {
  global $wp_query;
  $taxonomy = get_query_var('taxonomy');
  array_unshift($templates, "taxonomies/{$taxonomy}.php");
  return $templates;
});

/**
 * 投稿のテンプレートファイルを階層管理する
 */
add_filter( 'single_template_hierarchy', function( $templates ) {
  global $wp_query;
  $post_type = $wp_query->query['post_type'] ?? 'post';
  array_unshift($templates, "singles/{$post_type}.php");
  return $templates;
});
