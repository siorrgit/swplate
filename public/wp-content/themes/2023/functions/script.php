<?php
/**
 * CSS・JavaScriptの読み込み
 *
 * CSS:
 * 1ページ2CSSを割り当て
 *
 * JavaScript:
 * 全ページ共通global.js + ページ別JS
 */
add_action('wp_enqueue_scripts', function() {
  define('THEME_URI', get_theme_file_uri());
  define('THEME_PATH', get_theme_file_path());
  function add_css($handle, $file) {
    if (file_exists(THEME_PATH.$file)) {
      wp_enqueue_style($handle, THEME_URI.$file, array(), date('YmdHis', filemtime(THEME_PATH.$file)));
    } else {
      wp_enqueue_style('default', THEME_URI.'/assets/css/default.css', array(), date('YmdHis', filemtime(THEME_PATH.'/assets/css/default.css')));
    }
  }
  function add_js($handle, $file, $deps = array()) {
    if (!file_exists(THEME_PATH.$file)) return;
    wp_enqueue_script($handle, THEME_URI.$file, $deps, date('YmdHis', filemtime(THEME_PATH.$file)));
  }

  // global
  add_css('global', '/assets/css/global.css');
  add_js('global', '/assets/js/global.js');

  if (is_front_page()) {
    add_css('front', '/assets/css/front.css');
    add_js('front', '/assets/js/front.js', array('global'));
  }

  elseif (is_page()) {
    global $wp_query;
    $pagename = $wp_query->query['pagename'];
    $handle = 'page-' . str_replace('/', '-', $pagename);
    add_css($handle, "/assets/css/{$pagename}.css");
    add_js($handle, "/assets/js/{$pagename}.js", array('global'));
  }

  // elseif ( is_post_type_archive('news') || is_tax('news_category') ) {
  //   add_css('news', '/assets/css/news-archive.css');
  //   add_js('news', '/assets/js/news-archive.js', array('global'));
  // }

  // elseif ( is_single() && get_post_type() == 'news' ) {
  //   add_css('news', '/assets/css/news-single.css');
  //   add_js('news', '/assets/js/news-single.js', array('global'));
  // }

  elseif (is_404()) {
    add_css('error', '/assets/css/error.css');
  }
});

/**
 * JavaScriptをdefer化
 */
add_filter('script_loader_tag', function($tag, $handle) {
  if (is_admin()) return $tag;
  return str_replace(' src=', ' defer src=', $tag);
}, 10, 2);
