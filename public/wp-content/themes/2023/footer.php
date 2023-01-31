</main>

<!-- Page Top -->
<div class="pageTop" id="pageTop">
  <button class="pageTop-button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
      <polygon points="30,23.4 25,10.5 20,23.4 24,23.4 24,39.1 26,39.1 26,23.4 "/>
    </svg>
  </button>
</div>

<!-- Footer -->
<footer class="footer" id="footer">
  <a href="<?=front()?>" class="footer-logo">
    <img src="<?=img('footer/logo.svg')?>" alt="株式会社県南プレスセンター" loading="lazy">
  </a>
  <ul class="footer-nav">
    <li><a href="<?=url('policy')?>">私たちについて</a></li>
    <li><a href="<?=url('business')?>">事業内容</a></li>
    <li><a href="<?=url('service')?>">鉄・非鉄金属類の買取</a></li>
    <li><a href="<?=is_page('business') ? '#home-appliances' : url('business#home-appliances')?>">家電の引取</a></li>
    <li><a href="<?=url('sdgs')?>">SDGｓへの取り組み</a></li>
    <li><a href="<?=url('recruit')?>">採用情報</a></li>
    <li><a href="<?=is_front_page() ? '#contact' : url('#contact')?>">お問合せ</a></li>
    <li><a href="<?=url('privacy-policy')?>">プライバシーポリシー</a></li>
  </ul>
  <p class="footer-copyright">&copy; KENNAN PRESS CENTER Co., Ltd. All Rights Reserved.</p>
</footer>

<?php get_template_part('parts/byeIE')?>
<?php wp_footer()?>
</body>
</html>
