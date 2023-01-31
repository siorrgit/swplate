<?php
/**
 * News Single
 */
get_header();
the_post();
$category = get_the_terms(get_the_ID(), 'news_category')[0];
?>

<!-- Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'ja' => 'お知らせ',
  'en' => 'NEWS',
))?>

<!-- Breadcrumb -->
<div class="breadcrumb">
  <ul class="breadcrumb-list">
    <li><a href="<?=front()?>">TOP</a></li>
    <li><a href="<?=url('news')?>">お知らせ一覧</a></li>
    <li><span><?php the_title_attribute()?></span></li>
  </ul>
</div>

<!-- Article -->
<article class="article">
  <div class="article-head">
    <p class="article-head-category"><?=$category->name?></p>
    <p class="article-head-date"><?php the_time('Y.m.d')?></p>
  </div>
  <h1 class="article-title"><?php the_title(); ?></h1>
  <div class="article-content articleContent">
    <?php the_content(); ?>
  </div>

  <!-- Back -->
  <div class="article-back">
    <a href="<?=url('news')?>" class="article-back-link"><span>一覧に戻る</span></a>
  </div>

</article>

<?php
get_footer();
