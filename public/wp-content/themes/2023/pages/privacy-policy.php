<?php
/**
 * プライバシーポリシー
 */
get_header();
the_post();
?>

<!-- Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'ja' => 'プライバシー<br>ポリシー',
  'en' => 'PRIVACY　POLICY',
))?>

<!-- Breadcrumb -->
<div class="breadcrumb">
  <ul class="breadcrumb-list">
    <li><a href="<?=front()?>">TOP</a></li>
    <li><span>プライバシーポリシー</span></li>
  </ul>
</div>

<!-- Privacy Policy -->
<section class="pp">
  <div class="pp-inner">
    <div class="pp-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php
get_footer();
