<?php
/**
 * 管理画面のカスタマイズ
 * メニュー項目を非表示にする
 */
add_action( 'admin_menu', function() {
  // remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category'); //投稿>カテゴリー
  // remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); //投稿>タグ
  remove_menu_page( 'edit-comments.php' );       // コメント
  // remove_menu_page('themes.php');              // 外観
  // remove_menu_page('profile.php');             // プロフィール
  // remove_menu_page('tools.php');               // ツール
  // remove_menu_page('index.php');               // ダッシュボード
  remove_menu_page( 'edit.php' );                // 投稿
  // remove_menu_page('upload.php');              // メディア
  // remove_menu_page('edit.php?post_type=page'); // 固定ページ
  // remove_menu_page('plugins.php');             // プラグイン
  // remove_menu_page('options-general.php');     // 設定

  if ( current_user_can( 'editor' ) ) {
    // remove_menu_page('upload.php');              // メディア
    remove_menu_page('edit.php?post_type=page'); // 固定ページ
    remove_menu_page('tools.php');               // ツール
}
} );

// https://www.nxworld.net/wp-gutenberg-remove-block-editor-options.html
add_action( 'init', function() {
  // remove_post_type_support( 'page', 'editor' );              // エディター
  // remove_post_type_support( 'post', 'author' );              // 投稿者
  // remove_post_type_support( 'post', 'post-formats' );        // 投稿フォーマット
  // remove_post_type_support( 'post', 'revisions' );           // リビジョン
  // remove_post_type_support( 'post', 'thumbnail' );           // アイキャッチ
  // remove_post_type_support( 'post', 'excerpt' );             // 抜粋
  // remove_post_type_support( 'post', 'comments' );            // コメント
  // remove_post_type_support( 'post', 'trackbacks' );          // トラックバック
  // remove_post_type_support( 'post', 'custom-fields' );       // カスタムフィールド
  // unregister_taxonomy_for_object_type( 'category', 'post' ); // カテゴリー
  // unregister_taxonomy_for_object_type( 'post_tag', 'post' ); // タグ
} );

/* 送信元メールアドレスを変更 */
add_filter( 'wp_mail_from', function( $email ) {
  $email = 'noreply@example.com';
  return $email;
} );

/* 送信者名を変更*/
add_filter( 'wp_mail_from_name', function( $name ) {
  $name = 'WPテンプレート';
  return $name;
} );

/**
 * テーマの自動更新を無効化する
 */
add_filter( 'themes_auto_update_enabled', '__return_false' );

/**
 * プラグイン自動更新通知メール停止
 */
add_filter( 'auto_plugin_update_send_email', '__return_false' );

/**
 * Disable XML-RPC
 */
add_filter( 'xmlrpc_enabled', '__return_false' );
