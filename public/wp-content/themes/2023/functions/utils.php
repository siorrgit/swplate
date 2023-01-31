<?php
/**
 * Utilities
 */
function front() {
  return home_url();
}

function url($path) {
  return home_url($path);
}

function theme($path) {
  return get_theme_file_uri($path);
}

function assets($path) {
  return get_theme_file_uri('assets/' . $path);
}

function img($path) {
  return get_theme_file_uri('assets/img/' . $path);
}

function getHashRoot() {
  return is_front_page() ? '' : home_url();
}

/**
 * ページャ出力関数
 * @param int $pages 全ページ数
 * @param int $paged 現在のページ
 * @param int $range 左右に表示するページ数
 * @param bool $required 1ページでも表示する
 */
function the_pager($pages, $paged, $range = 2, $required = false) {
  $pages = (int) $pages;
  $paged = $paged ?: 1;
  $first = '';
  $last = '';
  $prev = '〈';
  $next = '〉';

  if ($pages === 1) return;

  if ($pages > 1) {
    echo '<div class="pager">';
    if ($paged > 1) {
      echo '<a href="', get_pagenum_link($paged - 1) ,'" class="pager-prev">', $prev, '</a>';
    } else {
      echo '<span class="pager-prev -disabled">', $prev, '</span>';
    }
    for ($i = 1; $i <= $pages; $i++) {
      if ($i <= $paged + $range && $i >= $paged - $range) {
        if ( $paged === $i ) {
          echo '<span class="pager-page -current">', $i ,'</span>';
        } else {
          echo '<a href="', get_pagenum_link($i) ,'" class="pager-page">', $i ,'</a>';
        }
      }
    }
    if ($paged < $pages) {
      echo '<a href="', get_pagenum_link($paged + 1) ,'" class="pager-next">', $next, '</a>';
    } else {
      echo '<span class="pager-next -disabled">', $next, '</span>';
    }
    echo '</div>';
  }
}

/**
 * 前の投稿のURLを取得する
 */
function get_prev_post_url() {
  $post = get_previous_post();
  $url = '';

  if ( !empty( $post ) ) {
    $url = get_permalink( $post->ID );
  }

  return $url;
}

/**
 * 次の投稿のURLを取得する
 */
function get_next_post_url() {
  $post = get_next_post();
  $url = '';

  if ( !empty( $post ) ) {
    $url = get_permalink( $post->ID );
  }

  return $url;
}
