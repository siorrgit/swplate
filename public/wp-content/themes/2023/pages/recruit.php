<?php
/**
 * 採用情報
 */
get_header();
?>

<!-- Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'ja' => '採用情報',
  'en' => 'RECRUIT',
))?>

<!-- Breadcrumb -->
<div class="breadcrumb">
  <ul class="breadcrumb-list">
    <li><a href="<?=front()?>">TOP</a></li>
    <li><span>採用情報</span></li>
  </ul>
</div>

<!-- Requirement -->
<?php $req = get_field('募集要項'); ?>
<section class="req">
  <div class="req-inner">
    <?php if ( count($req) === 0 ) : ?>
    <div class="req-empty">
      <p class="req-empty-message">現在、募集は行なっておりません。</p>
    </div>
    <?php else : ?>
    <h2 class="req-title">募集要項</h2>
    <?php endif; ?>
  </div>
</section>

<?php
get_footer();
