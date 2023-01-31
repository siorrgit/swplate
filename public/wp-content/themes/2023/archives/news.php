<?php
/**
 * News Archive
 */
get_header();
?>

<!-- Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'ja' => 'お知らせ一覧',
  'en' => 'NEWS',
))?>

<!-- Breadcrumb -->
<div class="breadcrumb">
  <ul class="breadcrumb-list">
    <li><a href="<?=front()?>">TOP</a></li>
    <li><span>お知らせ一覧</span></li>
  </ul>
</div>

<!-- Index -->
<section class="index">
  <?php if (have_posts()) : ?>
  <ul class="index-list newsList">
    <?php while (have_posts()) : the_post(); ?>
    <?php $category = get_the_terms(get_the_ID(), 'news_category')[0]; ?>
    <li class="newsList-i">
      <div class="newsList-i-head">
        <p class="newsList-i-head-date"><?php the_time('Y.m.d')?></p>
        <p class="newsList-i-head-category"><?=$category->name?></p>
      </div>
      <a href="<?php the_permalink()?>" class="newsList-i-title"><?php the_title_attribute()?></a>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php the_pager($wp_query->max_num_pages, get_query_var('paged'), 2); ?>
  <?php endif; ?>
</section>

<?php
get_footer();
