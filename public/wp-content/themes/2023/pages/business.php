<?php
/**
 * 事業案内
 */
get_header();
?>

<!-- Transportation Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'title' => '運　送',
  'id' => 'transportation',
  'adding_class' => 'transportation',
  'bg_sm' => img('business/transportation/page-title/bg-sm.jpg'),
  'bg_lg' => img('business/transportation/page-title/bg-lg.jpg'),
  'label' => img('business/transportation/page-title/label.svg'),
))?>

<!-- Transportation Introduction -->
<div class="tIntro">
  <div class="tIntro-top">
    <p class="tIntro-top-lead">荷物と思いをつなぐ。</p>
    <p class="tIntro-top-text">お預かりした荷物を最適な方法で「安全・確実・迅速」にお届けします。<br>取扱品目に合った車両を各種保有、多様なニーズに柔軟に対応します。</p>
    <ul class="tIntro-top-nav">
      <li><a href="<?=url('office/#akita')?>"><span>秋田営業所</span></a></li>
      <li><a href="<?=url('office/#kazuno')?>"><span>鹿角営業所</span></a></li>
      <li><a href="<?=url('office/#sendaihigashi-ic')?>"><span>仙台東IC営業所</span></a></li>
    </ul>
    <div class="tIntro-top-img">
      <img src="<?=img('business/transportation/intro/img.png')?>" alt="" loading="lazy">
    </div>
  </div>
  <div class="tIntro-block -items">
    <p class="tIntro-block-label">主な取扱品目</p>
    <p class="tIntro-block-text">
      輸入食品・青果物・鮮魚・精肉・県内産玄米<span class="md lg">・</span><br class="sm">産地精白米<br class="md lg">
      生鮮食品・一般雑貨・住宅資材<span class="md lg">・</span><br class="sm">自動車部品・花卉<br>
      冷菓（アイスクリームなど）・冷凍食品<span class="md lg">・</span><br class="sm">鉄道貨物コンテナ<br class="md lg">
      海上貨物コンテナ<span class="md lg">・</span><br class="sm">石油製品　その他
    </p>
  </div>
  <div class="tIntro-block -trucks">
    <p class="tIntro-block-label">保有車両</p>
    <p class="tIntro-block-text">
      <span class="sm">■</span>大型車<br class="sm">　冷凍箱、冷凍冷蔵ウイング、ウイング、平<br>
      <span class="sm">■</span>中型車<br class="sm">　冷凍箱、冷凍冷蔵ウイング、箱、ウイング<br>
      <span class="sm">■</span>小型車<br class="sm">　冷凍箱、箱、平<br>
      <span class="sm">■</span>その他<br class="sm">　大型トレーラー、大型トラクタ<span class="md lg">、</span><br class="sm"><span class="sm">　</span>タンクローリー、ダンプ
    </p>
  </div>
</div>

<!-- Transportation Suisan -->
<section class="tSuisan">
  <h2 class="tSuisan-title">水産荷役センター</h2>
  <p class="tSuisan-text">各種水産品の荷役業務や全国の中継輸送などを行なっています。</p>
  <div class="tSuisan-img">
    <div class="tSuisan-img-1">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('business/transportation/suisan/img-1-sm.jpg')?>">
        <img src="<?=img('business/transportation/suisan/img-1-lg.jpg')?>" alt="" loading="lazy">
      </picture>
    </div>
    <div class="tSuisan-img-2">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('business/transportation/suisan/img-2-sm.jpg')?>">
        <img src="<?=img('business/transportation/suisan/img-2-lg.jpg')?>" alt="" loading="lazy">
      </picture>
    </div>
  </div>
</section>

<!-- Transportation Gallery -->
<div class="tGallery">
  <picture>
    <source media="(max-width: 767px)" srcset="<?=img('business/transportation/gallery/sm.jpg')?>">
    <img src="<?=img('business/transportation/gallery/lg.jpg')?>" alt="" loading="lazy">
  </picture>
</div>

<!-- Transportation Trucks -->
<div class="tTrucks">
  <p class="tTrucks-text">取扱品目に合わせた車両を各種保有しています。</p>
  <div class="tTrucks-img tTrucks-img-1 lg">
    <img src="<?=img('business/transportation/trucks/1.png')?>" alt="" loading="lazy">
  </div>
  <div class="tTrucks-img tTrucks-img-2 lg">
    <img src="<?=img('business/transportation/trucks/2.png')?>" alt="" loading="lazy">
  </div>
</div>

<!-- Transportation Design -->
<section class="tDesign">
  <div class="tDesign-header">
    <picture>
      <source media="(max-width: 767px)" srcset="<?=img('business/transportation/design/header-sm.jpg')?>">
      <img src="<?=img('business/transportation/design/header-lg.jpg')?>" alt="" loading="lazy">
    </picture>
  </div>
  <h2 class="tDesign-title">デザトラ・コレクション</h2>
  <p class="tDesign-titleEn">Design Truck Collection</p>
  <p class="tDesign-text">秋印には、オリジナルのデザイントラックが数台あります。県内外のいろいろな所を走っているため、インパクトや宣伝効果も抜群！荷物を運びながら発信しています。</p>
  <ul class="tDesign-list">
    <li class="tDesign-list-i">
      <div class="tDesign-list-i-img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?=img('business/transportation/design/img-1-sm.jpg')?>">
          <img src="<?=img('business/transportation/design/img-1-lg.jpg')?>" alt="" loading="lazy">
        </picture>
      </div>
      <p class="tDesign-list-i-text">秋田救難隊は「他を生かすために」を理念に日々第一線で活躍されています。その活動に敬意を表し応援しています。</p>
    </li>
    <li class="tDesign-list-i">
      <div class="tDesign-list-i-img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?=img('business/transportation/design/img-2-sm.jpg')?>">
          <img src="<?=img('business/transportation/design/img-2-lg.jpg')?>" alt="" loading="lazy">
        </picture>
      </div>
      <p class="tDesign-list-i-text">大曲の花火が迫力満点！日頃お世話になっている企業PRもさせてもらっています。</p>
    </li>
  </ul>
  <div class="tDesign-more">
    <a href="http://ipp-print.jp/" target="_blank" rel="noopener noreferrer" class="tDesign-more-link">施工  IPP株式会社 ＞</a>
  </div>
</section>

<!-- Transportation Network -->
<div class="tNetwork">
  <picture>
    <source media="(max-width: 767px)" srcset="<?=img('business/transportation/network/sm.png')?>">
    <img src="<?=img('business/transportation/network/lg.png')?>" alt="" loading="lazy">
  </picture>
</div>

<!-- Transportation Contact -->
<div class="contact tContact">
  <p class="contact-lead">運送についてのお問い合わせ</p>
  <a href="tel:018-869-5131" class="contact-tel">
    <img src="<?=img('business/transportation/contact/tel.svg')?>" alt="" loading="lazy">
  </a>
  <p class="contact-office">秋田営業所</p>
  <a href="<?=url('contact')?>" class="contact-form"><span>メールフォームからの<br class="sm">お問い合わせはこちらから</span></a>
</div>

<!-- Storage Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'title' => '保管・荷役・流通加工',
  'id' => 'storage',
  'adding_class' => 'storage',
  'bg_sm' => img('business/storage/page-title/bg-sm.jpg'),
  'bg_lg' => img('business/storage/page-title/bg-lg.jpg'),
  'label' => img('business/storage/page-title/label.svg'),
))?>

<!-- Storage Introduction -->
<div class="sIntro">
  <div class="sIntro-top">
    <p class="sIntro-top-lead">「預かる」だけじゃない</p>
    <p class="sIntro-top-text">様々な製品を的確な品質管理で安全安心に保管、物流に関わる多種多様なニーズに対するサービスを提供しています。<br>全天候型の倉庫とピッキング室でスムーズな積み降ろし作業が可能、自家発電装置の完備により災害時の物資供給も可能です。</p>
    <ul class="sIntro-top-nav">
      <li><a href="<?=url('office/#head-akitakita-ic')?>"><span>秋田北IC営業所</span></a></li>
      <li><a href="<?=url('office/#akitaminato')?>"><span>秋田港営業所</span></a></li>
      <li><a href="<?=url('office/#showa-oga-ic')?>"><span>昭和・男鹿IC営業所</span></a></li>
    </ul>
    <div class="sIntro-top-img">
      <img src="<?=img('business/storage/intro/img.png')?>" alt="" loading="lazy">
    </div>
  </div>
  <div class="sIntro-block">
    <p class="sIntro-block-label">倉庫の分類</p>
    <p class="sIntro-block-text">
      それぞれの物品の特性に適合した温度を保つことが必要です。<br>
      「常温」は温度管理をしない倉庫なので、夏は高温に冬は低温になります。<br>
      「定温」は10〜25度くらいで一定の温度に保たれている倉庫。<br>
      「冷蔵」は0〜10度、「冷凍」は-18度以下です。<br>
      特に食品類の保管は温度管理が重要で、冷蔵と冷凍は保管可能温度によってさらに分類されています。
    </p>
    <div class="sIntro-block-table">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('business/storage/intro/table-sm.svg')?>">
        <img src="<?=img('business/storage/intro/table-lg.svg')?>" alt="" loading="lazy">
      </picture>
    </div>
  </div>
</div>

<!-- Storage Gallery -->
<div class="sGallery">
  <picture>
    <source media="(max-width: 767px)" srcset="<?=img('business/storage/gallery/sm.jpg')?>">
    <img src="<?=img('business/storage/gallery/lg.jpg')?>" alt="" loading="lazy">
  </picture>
</div>

<!-- Storage Business -->
<section class="sBiz">
  <h2 class="sBiz-title">業務内容</h2>
  <div class="sBiz-main">
    <h3 class="sBiz-main-title">保　管</h3>
    <p class="sBiz-main-text">
      多様な機能を備えた倉庫でお客様の貨物を最適な温度と保管方法でしっかり管理します。<br>
      保管に不可欠な温度管理を（常温・定温・冷凍・冷蔵）４温度帯で保管し賞味期限管理としての先入れ先出しや出荷製品のトレース環境を整えております。<br>
      また、保管時は、貨物の形状に合わせたマテハン機器・ラックなど使用し、貨物の荷姿に合わせた保管をご提供します。
    </p>
    <h3 class="sBiz-main-title">荷役（入出庫作業）</h3>
    <p class="sBiz-main-text">
      入庫・出庫時の荷役作業を行います。<br>
      安全・安心なオペレーションで作業させていただいております。<br>
      構内又は、倉庫内における製品・資材の入出庫、在庫管理および、構内・倉庫内一貫業務を請負っております。
    </p>
    <h3 class="sBiz-main-title">流通加工</h3>
    <p class="sBiz-main-text">
      ラベル貼り、箱・袋の詰め替え、仕訳、検品作業、保存温度帯変更梱包など流通加工に対応しております。
    </p>
    <ul class="sBiz-main-tags">
      <li>デジタル又は目視検品</li>
      <li>ラベル貼り</li>
      <li>タグ付け</li>
      <li>値付け等</li>
      <li>温度帯変更</li>
    </ul>
    <h3 class="sBiz-main-title">在庫管理</h3>
    <p class="sBiz-main-text">
      お客様の業務をサポートします。各種データ報告、専用帳票・専用伝票発行サポート環境を整えています。
    </p>
    <h3 class="sBiz-main-title">ＥＣ事業</h3>
    <p class="sBiz-main-text">
      少量商品も全国へお届け<br>
      量販センターや卸売問屋、小売業者など納品先ごとの納品条件をクリアし、共同配送にて複数の輸配送ネットワークを駆使して実現致します。
    </p>
  </div>
  <div class="sBiz-img">
    <picture>
      <source media="(max-width: 767px)" srcset="<?=img('business/storage/business/img-sm.jpg')?>">
      <img src="<?=img('business/storage/business/img-lg.jpg')?>" alt="" loading="lazy">
    </picture>
  </div>
</section>

<!-- Storage Contact -->
<div class="contact sContact">
  <p class="contact-lead">倉庫についてのお問い合わせ</p>
  <a href="tel:018-869-7301" class="contact-tel">
    <img src="<?=img('business/storage/contact/tel.svg')?>" alt="" loading="lazy">
  </a>
  <p class="contact-office">秋田北IC営業所</p>
  <a href="<?=url('contact')?>" class="contact-form"><span>メールフォームからの<br class="sm">お問い合わせはこちらから</span></a>
</div>

<!-- Consulting Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'title' => '物流コンサルティング',
  'id' => 'consulting',
  'adding_class' => 'consulting',
  'bg_sm' => img('business/consulting/page-title/bg-sm.jpg'),
  'bg_lg' => img('business/consulting/page-title/bg-lg.jpg'),
  'label' => img('business/consulting/page-title/label.svg'),
))?>

<!-- Consulting Introduction -->
<div class="cIntro">
  <div class="cIntro-top">
    <p class="cIntro-top-lead">「最適物流」を実現。</p>
    <p class="cIntro-top-text">
      当社では、物流に関するコンサルティングを行っております。<br>
      お客様の物流における問題点をヒアリング等で抽出し、<br class="md">その解決に向けて様々な仮説を立て、<br>
      お客様のロジ戦略を長期的な展望のもとに企画・提案し、<br class="md">実施サポートを行います。
    </p>
    <div class="cIntro-top-img">
      <img src="<?=img('business/consulting/intro/img.png')?>" alt="" loading="lazy">
    </div>
  </div>
</div>

<!-- Consulting Process -->
<section class="cProcess">
  <h2 class="cProcess-title">最適化へのプロセス</h2>
  <div class="cProcess-img">
    <picture>
      <source media="(max-width: 767px)" srcset="<?=img('business/consulting/process/sm.png')?>">
      <img src="<?=img('business/consulting/process/lg.png')?>" alt="" loading="lazy">
    </picture>
  </div>
</section>

<!-- Consulting Execution -->
<section class="cExec">
  <h2 class="cExec-title">具体的コンサルティング業務の遂行</h2>
  <div class="cExec-img">
    <picture>
      <source media="(max-width: 767px)" srcset="<?=img('business/consulting/execution/sm.png')?>">
      <img src="<?=img('business/consulting/execution/lg.png')?>" alt="" loading="lazy">
    </picture>
  </div>
  <p class="cExec-text">
    お客様より各種のデータをお預かりし、現状の物流における問題点の分析を行います。<br>
    さらには、当社のサービスをご利用いただいた場合のシミュレーションを行い、お客様における現状の物流コストとの比較などを行います。<br>
    お預かりしたデータは物流全体を把握することに活用され、物流ソリューションの基礎資料とします。<br>
    <br>
    ※分析に必要な期間は、ご依頼の内容・規模・条件やシステムの規模などにより変わりますが、短期間であっても概ね2～3ヶ月程度必要となります。
  </p>
</section>

<!-- Consulting Yorozu -->
<div class="cYorozu" id="yorozu">
  <div class="cYorozu-header">
    <img src="<?=img('business/consulting/yorozu/header.png')?>" alt="" loading="lazy">
  </div>
  <div class="cYorozu-body">
    <p class="cYorozu-body-text">
      <em>物流についての豊富なノウハウ、実績</em><br>
      お客様のニーズに対応する多種・多様な実績や様々な業種とのマッチングが可能です。<br>
      販路拡大、商材情報、新規事業、事業提携など、幅広いビジネスが生まれます。<br>
      秋田県内をカバーする物流拠点や豊富な人材・ご要望に合わせた人材をご提供いたします。<br>
      また、不動産情報・お引越しなどお気軽にご相談ください。<br>
      秋印にまずはご相談ください。
    </p>
  </div>
</div>

<!-- Consulting Contact -->
<div class="contact cContact">
  <p class="contact-lead">物流についてのお問い合わせ</p>
  <a href="tel:018-869-7890" class="contact-tel">
    <img src="<?=img('business/consulting/contact/tel.svg')?>" alt="" loading="lazy">
  </a>
  <p class="contact-office">本社 営業推進企画部</p>
  <a href="<?=url('contact')?>" class="contact-form"><span>メールフォームからの<br class="sm">お問い合わせはこちらから</span></a>
</div>

<!-- Logistics Real Estate Banner -->
<div class="lreBanner">
  <p class="lreBanner-title">物流不動産</p>
  <p class="lreBanner-label sm"><img src="<?=img('business/lre-banner/label.svg')?>" alt="" loading="lazy"></p>
  <p class="lreBanner-text sm">快適にご利用いただけるよう各種設備を取り揃えた研修室・倉庫を、お客様の用途や商品に合わせてレンタルいただけます。</p>
  <p class="lreBanner-text md lg">自分だけのプライベート空間になるセルフストレージや、快適にご利用いただけるよう各種設備を取り揃えた研修室・倉庫を、お客様の用途や商品に合わせてレンタルいただけます。</p>
  <ul class="lreBanner-list">
    <li>
      <a href="<?=url('business/logistics-real-estate#storage')?>">
        <span>セルフストレージ</span>
        <svg viewBox="0 0 15 31"><use xlink:href="#svg-arrow-right"></use></svg>
      </a>
    </li>
    <li>
      <a href="<?=url('business/logistics-real-estate#office')?>">
        <span>貸会議室・事務所</span>
        <svg viewBox="0 0 15 31"><use xlink:href="#svg-arrow-right"></use></svg>
      </a>
    </li>
    <li>
      <a href="<?=url('business/logistics-real-estate#warehouse')?>">
        <span>貸　倉　庫</span>
        <svg viewBox="0 0 15 31"><use xlink:href="#svg-arrow-right"></use></svg>
      </a>
    </li>
  </ul>
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-symbol" style="display: none;">
    <symbol viewBox="0 0 15 31" id="svg-arrow-right">
      <polygon points="1,30.9 0.2,30.3 13.4,15.5 0.2,0.7 1,0.1 14.8,15.5 "/>
    </symbol>
  </svg>
  <div class="lreBanner-bg">
    <picture>
      <source media="(max-width: 767px)" srcset="<?=img('business/lre-banner/bg-sm.jpg')?>">
      <img src="<?=img('business/lre-banner/bg-lg.jpg')?>" alt="" loading="lazy">
    </picture>
  </div>
</div>

<?php
get_footer();
