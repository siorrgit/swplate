<?php
get_template_part( 'functions/support' );
get_template_part( 'functions/posttype' );
// get_template_part( 'functions/query' );
get_template_part( 'functions/template' );
get_template_part( 'functions/script' );
get_template_part( 'functions/etc' );
get_template_part( 'functions/admin' );
get_template_part( 'functions/utils' );

/**
 * Contact Form 7 関連
 */
// add_action('wp_enqueue_scripts', function() {
//   if (is_page('contact') || is_page('inquiries-to-recruit')) return;
//   wp_dequeue_style('contact-form-7');
//   wp_deregister_script('contact-form-7');
//   wp_deregister_script('google-recaptcha');
// }, 100);

/*
子テーマを使わない前提でオリジナルテーマをコーディングしてるので、
get_template_part()で読み込む必要性は無い。
*/
