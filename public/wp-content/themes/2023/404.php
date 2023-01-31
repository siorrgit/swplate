<?php
/**
 * 404
 */
get_header();
?>

<div class="error">
  <h1 class="error-msg">お探しのページは見つかりませんでした</h1>
  <a href="<?=front()?>" class="error-back"><span>トップページへ</span></a>
</div>

<?php
get_footer();
