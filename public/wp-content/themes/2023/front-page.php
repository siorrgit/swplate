<?php
/**
 * トップページ
 */
get_header();
?>

<?php if (is_front_page()) : ?>
<!-- Front Logo -->
<div class="logo md lg">
	<svg viewBox="0 0 158 140"><use xlink:href="#svg-logo-lg"></use></svg>
</div>
<?php endif; ?>

<!-- Main Visual -->
<div class="mv" id="mv">
	<div class="mv-slide" id="mv-slide">
		<div class="swiper-wrapper">
			<!-- Slide 1 -->
			<div class="swiper-slide mv-slide-i">
				<div class="mv-slide-i-img slide-1">
					<picture>
						<source media="(max-width: 767px)" srcset="<?=img('front/mv/slide-1-img-sm.jpg')?>">
						<img src="<?=img('front/mv/slide-1-img-lg.jpg')?>" alt="">
					</picture>
				</div>
				<div class="mv-slide-i-text slide-1">
					<picture>
						<source media="(max-width: 767px)" srcset="<?=img('front/mv/slide-1-text-sm.svg')?>">
						<img src="<?=img('front/mv/slide-1-text-lg.svg')?>" alt="">
					</picture>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="swiper-slide mv-slide-i">
				<div class="mv-slide-i-img slide-2">
					<picture>
						<source media="(max-width: 767px)" srcset="<?=img('front/mv/slide-2-img-sm.jpg')?>">
						<img src="<?=img('front/mv/slide-2-img-lg.jpg')?>" alt="">
					</picture>
				</div>
				<div class="mv-slide-i-text slide-2">
					<picture>
						<source media="(max-width: 767px)" srcset="<?=img('front/mv/slide-2-text-sm.svg')?>">
						<img src="<?=img('front/mv/slide-2-text-lg.svg')?>" alt="">
					</picture>
				</div>
			</div>

			<!-- Slide 3 -->
			<div class="swiper-slide mv-slide-i">
				<div class="mv-slide-i-img slide-3">
					<picture>
						<source media="(max-width: 767px)" srcset="<?=img('front/mv/slide-3-img-sm.jpg')?>">
						<img src="<?=img('front/mv/slide-3-img-lg.jpg')?>" alt="">
					</picture>
				</div>
				<div class="mv-slide-i-text slide-3">
					<picture>
						<source media="(max-width: 767px)" srcset="<?=img('front/mv/slide-3-text-sm.svg')?>">
						<img src="<?=img('front/mv/slide-3-text-lg.svg')?>" alt="">
					</picture>
				</div>
			</div>
		</div>
	</div>
	<ul class="mv-thumbnail" id="mv-thumbnail">
		<li class="-active"><img src="<?=img('front/mv/thumbnail-1.jpg')?>" alt=""></li>
		<li><img src="<?=img('front/mv/thumbnail-2.jpg')?>" alt=""></li>
		<li><img src="<?=img('front/mv/thumbnail-3.jpg')?>" alt=""></li>
	</ul>
	<div class="mv-scrollDown md lg">
		<img src="<?=img('front/mv/scroll-down.svg')?>" alt="">
	</div>
</div>

<!-- News -->
<?php
$query = new WP_Query( array(
	'post_type' => 'news',
	'posts_per_page' => 3,
));
?>
<section class="news">
	<div class="news-head">
		<h2 class="news-head-title">お知らせ</h2>
		<p class="news-head-label">NEWS</p>
	</div>
	<?php if ($query->have_posts()) : ?>
		<ul class="news-list newsList">
			<?php while ($query->have_posts()) : $query->the_post(); ?>
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
	<a href="<?=url('news')?>" class="news-more">
		<span>MORE</span>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 7"><polygon points="28.9,3.5 19.9,0 19.9,2.5 0,2.5 0,4.5 19.9,4.5 19.9,7 "/></svg>
	</a>
</section>

<!-- Policy -->
<section class="policy">
	<div class="policy-bg">
		<picture>
			<source media="(max-width: 767px)" srcset="<?=img('front/policy/bg-sm.svg')?>">
			<img src="<?=img('front/policy/bg-lg.svg')?>" alt="" loading="lazy">
		</picture>
	</div>
	<div class="policy-head">
		<h2 class="policy-head-title">私たちについて</h2>
		<p class="policy-head-label">OUR POLICY</p>
		<a href="<?=url('policy')?>" class="policy-outline-more sm">
			<span>MORE</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 7"><polygon points="28.9,3.5 19.9,0 19.9,2.5 0,2.5 0,4.5 19.9,4.5 19.9,7 "/></svg>
		</a>
	</div>
	<div class="policy-outline">
		<p class="policy-outline-lead">
			リサイクル事業を通じて<br>
			地球環境の保護を持続的に実行できる<br>
			環境共存企業を目指しています。
		</p>
		<p class="policy-outline-body">
			私たち株式会社 県南プレスセンターは、秋田県大仙市で効率的な金属・その他幅広い資源のリサイクル活動を行い顧客のニーズに適合した製品の提供を行っております。<br>
			高水準を維持するための設備づくりや、<br>
			人材の育成に日々邁進しております。
		</p>
		<a href="<?=url('policy')?>" class="policy-outline-more md lg">
			<span>MORE</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 7"><polygon points="28.9,3.5 19.9,0 19.9,2.5 0,2.5 0,4.5 19.9,4.5 19.9,7 "/></svg>
		</a>
		<a href="<?=url('sdgs')?>" class="policy-outline-sdgs">
			<img src="<?=img('front/policy/sdgs.png')?>" alt="" loading="lazy">
		</a>
	</div>
	<div class="policy-slide" id="policy-slide">
		<div class="swiper-wrapper">
			<div class="swiper-slide policy-slide-i">
				<video src="<?=img('front/policy/video-1.mp4?20220802')?>" loop muted></video>
			</div>
			<div class="swiper-slide policy-slide-i">
				<video src="<?=img('front/policy/video-2.mp4?20220802')?>" loop muted></video>
			</div>
			<div class="swiper-slide policy-slide-i">
				<video src="<?=img('front/policy/video-3.mp4?20220802')?>" loop muted></video>
			</div>
			<div class="swiper-slide policy-slide-i">
				<video src="<?=img('front/policy/video-4.mp4?20220802')?>" loop muted></video>
			</div>
			<div class="swiper-slide policy-slide-i">
				<video src="<?=img('front/policy/video-5.mp4?20220802')?>" loop muted></video>
			</div>
		</div>
		<div class="policy-slide-prev"></div>
		<div class="policy-slide-next"></div>
	</div>
</section>

<!-- Business -->
<section class="biz">
	<div class="biz-inner">
		<div class="biz-head">
			<h2 class="biz-head-title">
				<svg viewBox="0 0 43 46"><use xlink:href="#svg-logomark"></use></svg>
				<span>事業内容</span>
			</h2>
			<p class="biz-head-label">OUR BUSINESS</p>
		</div>
		<div class="biz-img">
			<img src="<?=img('front/biz/img.jpg')?>" alt="" loading="lazy">
		</div>
		<a href="<?=url('business')?>" class="biz-more">
			<span>MORE</span>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 7"><polygon points="28.9,3.5 19.9,0 19.9,2.5 0,2.5 0,4.5 19.9,4.5 19.9,7 "/></svg>
		</a>
		<div class="biz-label">
			<img src="<?=img('front/biz/label.svg')?>" alt="OUR BUSINESS" loading="lazy">
		</div>
	</div>
</section>

<!-- Service -->
<section class="service">
	<div class="service-head">
		<h2 class="service-head-title">
			<svg viewBox="0 0 43 46"><use xlink:href="#svg-logomark"></use></svg>
			<span>鉄・非鉄金属類の買取</span>
		</h2>
		<p class="service-head-label">OUR SERVICE</p>
	</div>
	<p class="service-outline">
		県南プレスセンターでは、様々な鉄・非鉄金属の<br class="sm">リサイクル加工処理事業を行っており、<br>
		法人からはもちろんのこと、個人の方からの<br class="sm">買取・引取も承っております。<br>
		お気軽にお問い合わせください。
	</p>
	<a href="<?=url('service')?>" class="service-more">
		<img src="<?=img('front/service/more.svg')?>" alt="" loading="lazy">
	</a>
</section>

<!-- Contact -->
<section class="contact" id="contact">
	<h2 class="contact-title">お問合せはこちらから</h2>
	<a href="tel:0187-62-1439" class="contact-tel">TEL. 0187-62-1439</a>
	<p class="contact-hours">
		午前8:00～12:00　午後13:00～17:00<br>
		<small>（日曜祝日休み）</small>
	</p>
</section>

<?php
get_footer();
