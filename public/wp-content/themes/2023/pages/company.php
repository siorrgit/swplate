<?php
/**
 * 会社案内
 */
get_header();
?>

<!-- Page Title -->
<?php get_template_part('parts/pageTitle', null, array(
  'title' => '会社案内',
  'bg_sm' => img('company/page-title/bg-sm.jpg'),
  'bg_lg' => img('company/page-title/bg-lg.jpg'),
  'label' => img('company/page-title/label.svg'),
))?>

<!-- Greeting -->
<section class="greeting" id="greeting">
  <h2 class="greeting-title">代表挨拶</h2>
  <div class="greeting-img">
    <picture>
      <source media="(max-width: 767px)" srcset="<?=img('company/greeting/img-sm.jpg')?>">
      <img src="<?=img('company/greeting/img-lg.jpg')?>" alt="">
    </picture>
    <p class="greeting-img-copy">ありがとうを創造・提案し<br>全社一丸となって<br>地域No.1企業を目指す</p>
  </div>
  <p class="greeting-president"><small>秋印株式会社</small><span>代表取締役　三浦 征善</span></p>
  <div class="greeting-main">
    <h3>コロナ禍の中で</h3>
    <p>
      平素より格別なご高配を賜り、厚く御礼申し上げます。<br>
      当社は、2020年初頭からの新型コロナウィルス感染症拡大の影響を受け、運送貨物需要の減少とその後の原油価格の急騰に見舞われておりますが、全社一丸となって安全を堅持し、各営業所における感染防止に向けた対策を講じながら、日夜業務に邁進しております。
    </p>
    <h3>さらなる発展を</h3>
    <p>
      2021年度は新中期経営計画の初年度として、「持続可能な共生と共益の地域社会づくり」、「既存事業の深耕」、「地域に根差した新たな事業創造」、「物流不動産及び情報の有効活用」、「先端技術導入による業務改革」、「企業文化・風土の醸成」、そして、SDGsへの取組みを通じて環境問題への対応と地方創生などの地域社会の発展に取組んでまいりました。<br>
      今後も新型コロナがもたらす人々の行動変容により、物流需要の「構造変化」が予想されることから、事業の抜本的な改革転換にスピード感を持って取り組み、感染症の再来や原油価格の高騰にも耐え得る企業に生まれ変わってまいります。
    </p>
    <h3>努力と挑戦の成長</h3>
    <p>
      創業は僅か一台のトラックでスタートし、以来、努力と挑戦を続けながら成長を遂げてきました。<br>
      「常にお客様の繁栄に寄与する」ことをモットーに、社員の健康と幸福を願い企業の発展をもとに地域社会へ貢献することにこだわり、これまでも幾度となく困難に直面してきましたが、その度に危機を切り抜け、強く生まれ変わってきました。
    </p>
    <h3>地域とともに</h3>
    <p>
      秋印は、今回のコロナ禍・原油の急騰高止まりも、グループ関連企業との一層の連携をはかり、挑戦し乗り越えて、地域社会に必要とされる企業を目指してまいります。<br>
      経営スローガンである“ありがとうを創造・提案し　全社一丸となって　地域No１企業を目指そう！”の実現に向け、進化し続ける秋印に、どうぞご期待ください。
    </p>
  </div>
</section>

<!-- Philosophy -->
<section class="philosophy" id="philosophy">
  <div class="philosophy-main">
    <h2 class="philosophy-main-title">経営理念</h2>
    <div class="philosophy-main-img">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('company/philosophy/img-sm.png')?>">
        <img src="<?=img('company/philosophy/img-lg.png')?>" alt="" loading="lazy">
      </picture>
    </div>
    <p class="philosophy-main-text">当社は新ロジスティクスシステムを構築し、<br class="md">「常にお客様の繁栄に寄与する」ことをモットーに、<br class="md lg">社員の健康と幸福を願い、企業の発展を基に地域社会に貢献する。</p>
    <div class="philosophy-main-bg">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('company/philosophy/bg-sm.jpg')?>">
        <img src="<?=img('company/philosophy/bg-lg.jpg')?>" alt="" loading="lazy">
      </picture>
    </div>
  </div>
  <ul class="philosophy-list">
    <li class="philosophy-list-i">
      <p class="philosophy-list-i-title">一、お客様とともに繁栄する</p>
      <p class="philosophy-list-i-body">
        当社の経営理念の根本は、お客様あっての当社であるということです。<br>
        急激なる環境変化の中にあって、お客様のニーズもまた高度になっておりますが、当社は新ロジスティクスシステムによって、お客様の物流部門としてともに繁栄していきます。
      </p>
    </li>
    <li class="philosophy-list-i">
      <p class="philosophy-list-i-title">一、社員とともに成長する</p>
      <p class="philosophy-list-i-body">
        当社は会社を支えてくれる社員とともに成長していく会社です。<br>
        そのためには教育訓練を通じ、社員一人一人の能力開発を行い、同時に健康と家庭の幸福のために全員で知恵を出し合う会社です。
      </p>
    </li>
    <li class="philosophy-list-i">
      <p class="philosophy-list-i-title">一、地域社会に貢献する</p>
      <p class="philosophy-list-i-body">
        会社の発展は同時に地域社会に対する貢献です。<br>
        「地域社会の発展のために秋印に入りたい」私たちはそんな会社作りに邁進しています。
      </p>
    </li>
  </ul>
</section>

<!-- Profile -->
<section class="profile" id="profile">
  <h2 class="profile-title">会社概要</h2>
  <div class="profile-table">
    <div class="profile-table-row">
      <div class="profile-table-row-head -small">商号</div>
      <div class="profile-table-row-body">秋印株式会社</div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -small">URL</div>
      <div class="profile-table-row-body">https://www.akijirushi.jp　　<br class="sm">mail:info@akijirushi.jp</div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">拠点</div>
      <div class="profile-table-row-body">
        <div class="profile-table-row-body-officeRow">
          <p>
            <span class="-name">【本社】</span><br>
            〒010-0802　秋田県秋田市外旭川字一本木80-4<br>
            <a href="tel:018-869-7890">TEL（018）869-7890㈹</a>　FAX（018）869-7310<br>
            <br>
            <span class="-name">【秋田北IC営業所　定温・冷蔵物流センター】</span><br>
            <a href="tel:018-869-7301">TEL（018）869-7301㈹</a>　FAX（018）869-7302<br>
            <small>※本社と同住所 １階</small>
          </p>
          <a href="<?=url('office#head-akitakita-ic-map')?>"><span>MAP</span></a>
        </div>
        <div class="profile-table-row-body-officeRow">
          <p>
            <span class="-name">【秋田営業所】</span><br>
            〒010-0802　秋田県秋田市外旭川字待合28番地 <br class="md">（秋田市公設地方卸売市場内）<br>
            <a href="tel:018-869-5131">TEL（018）869-5131㈹</a>　FAX（018）868-4794
          </p>
          <a href="<?=url('office#akita-map')?>"><span>MAP</span></a>
        </div>
        <div class="profile-table-row-body-officeRow">
          <p>
            <span class="-name">【秋田港営業所 C-PROT（シープロット）】</span><br>
            〒011-0911　秋田県秋田市飯島字古道下川端220-11<br>
            <a href="tel:018-838-5808">TEL（018）838-5808㈹</a>　FAX（018）838-5809
          </p>
          <a href="<?=url('office#akitaminato-map')?>"><span>MAP</span></a>
        </div>
        <div class="profile-table-row-body-officeRow">
          <p>
            <span class="-name -narrow">【昭和・男鹿IC営業所　定温・定湿物流センター】</span><br>
            〒018-1401　秋田県潟上市昭和大久保字北野蓮沼前山1-2<br>
            <a href="tel:018-855-5810">TEL（018）855-5810㈹</a>　FAX（018）855-5811
          </p>
          <a href="<?=url('office#showa-oga-ic-map')?>"><span>MAP</span></a>
        </div>
        <div class="profile-table-row-body-officeRow">
          <p>
            <span class="-name">【鹿角営業所】</span><br>
            〒018-5141　秋田県鹿角市八幡平字川部内川原63-1<br>
            <a href="tel:0186-32-3610">TEL（0186）32-3610</a>　FAX（0186)）32-3612
          </p>
          <a href="<?=url('office#kazuno-map')?>"><span>MAP</span></a>
        </div>
        <div class="profile-table-row-body-officeRow">
          <p>
            <span class="-name">【仙台東IC営業所】</span><br>
            〒984-0002　宮城県仙台市若林区卸町東5丁目6-50<br>
            <a href="tel:022-288-7752">TEL（022）288-7752㈹</a>　FAX（022）288-7753
          </p>
          <a href="<?=url('office#sendaihigashi-ic-map')?>"><span>MAP</span></a>
        </div>
        <div class="profile-table-row-body-officeImg">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/profile/office-sm.jpg')?>">
            <img src="<?=img('company/profile/office-lg.jpg')?>" alt="" loading="lazy">
          </picture>
        </div>
      </div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -middle">会社設立</div>
      <div class="profile-table-row-body">
        1965年（昭和40）　創業<br>
        1975年（昭和50）　設立
      </div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -middle">資本金</div>
      <div class="profile-table-row-body">5,000万円</div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">役員</div>
      <div class="profile-table-row-body">
        代表取締役　　三浦　征善<br>
        取締役　　　　三浦　善寛、浅野　義喜<span class="md lg">、</span><br class="sm"><span class="sm">　　　　　　　</span>佐々木　浩、三浦　善徳<br>
        非常勤取締役　辻　良之、渋谷　重春<span class="md lg">、</span><br class="sm"><span class="sm">　　　　　　　</span>近藤　哲泰、樋渡　賢<br>
        監査役　　　　米澤　光男<br>
        会計参与　　　税理士法人MIRAI
      </div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">取引銀行</div>
      <div class="profile-table-row-body">商工組合中央金庫　秋田銀行　秋田信用金庫　北都銀行　JAあきた湖東</div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">業務内容</div>
      <div class="profile-table-row-body">
        ○運送業<br>
        （一般貨物自動車運送事業／第一・二種貨物運送事業／自動車運送取扱事業／産業廃棄物収集運搬事業）<br>
        ○倉庫業・保管(常温・定温・定湿・冷蔵・冷凍)・流通加工等総合物流業務／らくだ蔵(セルフストレージ)<br>
        ○物流センター・物流不動産業務（貸倉庫・会議室・事務所）／押入産業・北ICインターデポ<br>
        ○物流全般に関わる改善・提案業務
      </div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">従業員数</div>
      <div class="profile-table-row-body">129名（役員を除く　2022年3月31日現在）</div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">保有車輌</div>
      <div class="profile-table-row-body">
        <div class="profile-table-row-body-truck">
          <p>
            大型トラクタ<br>
            大型トレーラー【40f ・ 20ｆ （３軸）】<br>
            タンクローリー　　大型ダンプ<br>
            大型車【冷凍箱・冷凍冷蔵ウィング・ウィング・平】<br>
            中型車【冷凍箱・冷凍冷蔵ウィング・箱・ウィング】<br>
            小型車【冷凍箱・箱・平】<br>
            荷役機器【フォークリフト】
          </p>
          <div class="profile-table-row-body-truck-img">
            <picture>
              <source media="(max-width: 767px)" srcset="<?=img('company/profile/truck-sm.jpg')?>">
              <img src="<?=img('company/profile/truck-lg.jpg')?>" alt="" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">取扱品目</div>
      <div class="profile-table-row-body">輸入食品、青果物、鮮魚、精肉、県内産玄米、産地精白米、鉄道貨物コンテナ、海上貨物コンテナ、一般雑貨、アパレル、住宅資材、生鮮食品、自動車部品、花き、冷凍・冷蔵品、冷菓、医薬品、石油製品、電子部品、その他一般貨物</div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">加入団体</div>
      <div class="profile-table-row-body">
        <ul class="profile-table-row-body-group">
          <li>秋田商工会議所</li>
          <li>（一社）日本創造経営協会</li>
          <li>秋田雇用開発協会</li>
          <li>（公社）全日本トラック協会</li>
          <li>（公社）秋田県トラック協会</li>
          <li>秋田県高速道路交通安全協議会</li>
          <li>秋田県中央トラック事業協同組合</li>
          <li>広域運送事業協同組合</li>
          <li>新潟地方交通共済協同組合</li>
          <li>（一社）日本倉庫協会</li>
          <li>秋田県倉庫協会</li>
          <li>東北倉庫協会連合会</li>
          <li>（一社）全国食糧保管協会</li>
          <li>秋田県食糧保管協会</li>
          <li>秋田県産米改良協会</li>
          <li>全国定温倉庫協同組合</li>
          <li>秋田定温倉庫事業協同組合</li>
          <li>倉庫業青年経営者協議会</li>
          <li>（一社）日本冷蔵倉庫協会</li>
          <li>秋田県冷蔵協会</li>
          <li>秋田県冷凍設備保安協会</li>
          <li>（公社）秋田北法人会</li>
          <li>（一社）秋田県貿易促進協会</li>
          <li>秋田農産物流懇話会</li>
          <li>秋田県港湾協会</li>
          <li>海上保安協会秋田県支部</li>
          <li>秋田救難隊後援会</li>
          <li>協同組合秋田市卸売市場協会</li>
          <li>みちのくデリバリー協同組合</li>
          <li>秋田県警察官友の会</li>
          <li>秋田RPA協会</li>
          <li>秋田風力発電コンソーシアム</li>
          <li>秋田・フィジー共和国友好協会</li>
        </ul>
      </div>
    </div>
    <div class="profile-table-row">
      <div class="profile-table-row-head -large">関連会社</div>
      <div class="profile-table-row-body">
        株式会社ロジリンクス【物流不動産情報の運営】<br>
        六郷小型貨物自動車運送株式会社<br>
        IPP株式会社<br>
        有限会社サトウ保研
      </div>
    </div>
  </div>
  <div class="profile-copy">
    <p class="profile-copy-text md lg">
      「運ぶ」だけじゃない<br>
      人と荷物と“ありがとう”を「つなぐ」<br>
      総合物流企業へ
    </p>
    <div class="profile-copy-img">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('company/profile/img-sm.jpg')?>">
        <img src="<?=img('company/profile/img-lg.jpg')?>" alt="" loading="lazy">
      </picture>
    </div>
  </div>
</section>

<!-- History -->
<section class="history" id="history">
  <h2 class="history-title">沿　革</h2>
  <div class="history-table">
    <div class="history-table-row">
      <p class="history-table-row-year1">1965年</p>
      <p class="history-table-row-year2">（昭和40）</p>
      <p class="history-table-row-month"></p>
      <p class="history-table-row-title">創業</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">1966年</p>
      <p class="history-table-row-year2">（昭和41）</p>
      <p class="history-table-row-month"></p>
      <p class="history-table-row-title">商号を秋印商事として県内青果物の集荷業務を開始</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">1975年</p>
      <p class="history-table-row-year2">（昭和50）</p>
      <p class="history-table-row-month">12月</p>
      <p class="history-table-row-title">本社営業所を設置（秋田市外旭川字神宮田42-1）</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">1976年</p>
      <p class="history-table-row-year2">（昭和51）</p>
      <p class="history-table-row-month">3月</p>
      <p class="history-table-row-title">秋田秋印運輸株式会社に社名を変更</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">1976年</p>
      <p class="history-table-row-year2">（昭和51）</p>
      <p class="history-table-row-month">11月</p>
      <p class="history-table-row-title">三浦善美 代表取締役社長に就任</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">1979年</p>
      <p class="history-table-row-year2">（昭和54）</p>
      <p class="history-table-row-month">2月</p>
      <p class="history-table-row-title">秋田市中央卸売市場に本社営業所を移転（秋田市外旭川字待合28）</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">1996年</p>
      <p class="history-table-row-year2">（平成８）</p>
      <p class="history-table-row-month">11月</p>
      <p class="history-table-row-title">鹿角営業所を設置（鹿角市八幡平）</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2001年</p>
      <p class="history-table-row-year2">（平成13）</p>
      <p class="history-table-row-month">8月</p>
      <p class="history-table-row-title">秋田北IC営業所（定温・冷蔵物流センター）設置</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2005年</p>
      <p class="history-table-row-year2">（平成17）</p>
      <p class="history-table-row-month">2月</p>
      <p class="history-table-row-title">関連会社 株式会社ロジリンクス 経営参画</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2006年</p>
      <p class="history-table-row-year2">（平成18）</p>
      <p class="history-table-row-month">1月</p>
      <p class="history-table-row-title">本社営業所（現秋田営業所）Gマーク取得</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2006年</p>
      <p class="history-table-row-year2">（平成18）</p>
      <p class="history-table-row-month">9月</p>
      <p class="history-table-row-title">昭和・男鹿IC営業所（定温・定湿物流センター）設置</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2007年</p>
      <p class="history-table-row-year2">（平成19）</p>
      <p class="history-table-row-month">2月</p>
      <p class="history-table-row-title">グリーン経営認証 運輸・倉庫事業 同時取得</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2007年</p>
      <p class="history-table-row-year2">（平成19）</p>
      <p class="history-table-row-month">10月</p>
      <p class="history-table-row-title">アダプトロードプログラム認定（秋田県第1号）</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2008年</p>
      <p class="history-table-row-year2">（平成20）</p>
      <p class="history-table-row-month">5月</p>
      <p class="history-table-row-title">三浦征善 代表取締役就任</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2010年</p>
      <p class="history-table-row-year2">（平成22）</p>
      <p class="history-table-row-month">4月</p>
      <p class="history-table-row-title">秋印株式会社に社名を変更</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2011年</p>
      <p class="history-table-row-year2">（平成23）</p>
      <p class="history-table-row-month">10月</p>
      <p class="history-table-row-title">仙台東IC営業所設置</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2012年</p>
      <p class="history-table-row-year2">（平成24）</p>
      <p class="history-table-row-month">3月</p>
      <p class="history-table-row-title">秋田北IC営業所（定温・冷蔵物流センター）自家発電装置導入</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2012年</p>
      <p class="history-table-row-year2">（平成24）</p>
      <p class="history-table-row-month">12月</p>
      <p class="history-table-row-title">六郷小型貨物自動車運送株式会社と資本提携</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2015年</p>
      <p class="history-table-row-year2">（平成27）</p>
      <p class="history-table-row-month">6月</p>
      <p class="history-table-row-title">秋田北IC営業所（定温・冷蔵物流センター）に太陽光パネル設置（事業協力）</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2015年</p>
      <p class="history-table-row-year2">（平成27）</p>
      <p class="history-table-row-month">7月</p>
      <p class="history-table-row-title">創業50周年・会社設立40周年記念祝賀会を開催</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2015年</p>
      <p class="history-table-row-year2">（平成27）</p>
      <p class="history-table-row-month">12月</p>
      <p class="history-table-row-title">鹿角営業所 Gマーク取得</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2016年</p>
      <p class="history-table-row-year2">（平成28）</p>
      <p class="history-table-row-month">4月</p>
      <p class="history-table-row-title">関連会社　IPP株式会社設立</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2018年</p>
      <p class="history-table-row-year2">（平成30）</p>
      <p class="history-table-row-month">12月</p>
      <p class="history-table-row-title">秋田港営業所 C-PROT（シープロット）を設置<br>｢改正物流総合効率化法」認定</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2019年</p>
      <p class="history-table-row-year2">（平成31）</p>
      <p class="history-table-row-month">2月</p>
      <p class="history-table-row-title">秋田市公設地方卸売市場の構内に自家給油所設置</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2019年</p>
      <p class="history-table-row-year2">（令和元）</p>
      <p class="history-table-row-month">5月</p>
      <p class="history-table-row-title">秋田市と災害時の燃料供給に関する協定締結</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2021年</p>
      <p class="history-table-row-year2">（令和３）</p>
      <p class="history-table-row-month">4月</p>
      <p class="history-table-row-title">健康経営優良法人2021認定</p>
    </div>
    <div class="history-table-row">
      <p class="history-table-row-year1">2021年</p>
      <p class="history-table-row-year2">（令和３）</p>
      <p class="history-table-row-month">4月</p>
      <p class="history-table-row-title">働きやすい職場認証制度（一つ星）認定</p>
    </div>
  </div>
</section>

<!-- Safety & Environment -->
<section class="se" id="safety-and-environment">
  <?php get_template_part('parts/pageTitle', null, array(
    'title' => '安全・環境',
    'bg_sm' => img('company/se/page-title/bg-sm.jpg'),
    'bg_lg' => img('company/se/page-title/bg-lg.jpg'),
    'label' => img('company/se/page-title/label.svg'),
  ))?>
  <p class="se-outline">
    公の設備を利用し事業を営む我社は、<br class="md">ライフラインを支える重要な役割を担うものと受止め、<br>
    「安全」と「衛生」、更には「環境」について様々な取組を行っております。<br>
    ここでは具体的にどの様な取組を行っているかをご紹介しています。
  </p>
  <div class="se-block1and2">
    <div class="se-block1">
      <h3 class="se-block1-title">社員の教育と啓蒙活動</h3>
      <p class="se-block1-main">省エネ・エコドライブ並びに遵守すべき環境に関わる法規制や行政指導の内容について定期的に環境教育を行い、より高い知識のもとで業務を遂行できるように全社員に対する教育を継続的に実施しております。</p>
    </div>
    <div class="se-block2">
      <h3 class="se-block2-title">グリーン<br class="sm">経営認証</h3>
      <div class="se-block2-img"><img src="<?=img('company/se/green.png')?>" alt="" loading="lazy"></div>
    </div>
  </div>
  <div class="se-block3">
    <div class="se-block3-header">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('company/se/safety-header-sm.png')?>">
        <img src="<?=img('company/se/safety-header-lg.png')?>" alt="" loading="lazy">
      </picture>
    </div>
    <ul class="se-block3-list">
      <li class="se-block3-list-i">
        <div class="se-block3-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/safety-01-title-sm.svg')?>">
            <img src="<?=img('company/se/safety-01-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block3-list-i-body">
          <p>
            安全運転に対する意識を高め、輸送の安全確保におけるプロドライバーの育成を目的として
            常に「誇り」と「責任」を持った運転マナーを植え付ける教育を実施しています。
          </p>
          <ol class="-has-margin-top">
            <li>経営者以下、社員全員の運転記録証明を毎年取得し、個々に指導を行っています。</li>
            <li>我社の中途採用社員は全員が2週間の社内研修に参加し、運転技術や交通法規、仕事の内容について指導を受けます。</li>
            <li>新規乗務員採用者は、我社で作成した指導教育プログラムに従い、約6ヶ月間にわたる長期の社内外の研修を受講し、最終チェックを経て単独運転に切り替えています。</li>
            <li>新規採用者や中途採用者とも、指導乗務員による一定期間の添乗指導を行い、その中から運行管理者による最終チェックに合格した者だけが、単独運転を許されます。</li>
            <li>全社員参加の下、年間を通じて事故防止などの様々なテーマに沿って、小集団活動を展開しています。</li>
          </ol>
        </div>
      </li>
      <li class="se-block3-list-i">
        <div class="se-block3-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/safety-02-title-sm.svg')?>">
            <img src="<?=img('company/se/safety-02-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block3-list-i-body">
          <ol>
            <li>全車両にデジタルタコグラフを搭載しており、速度の抑制をはじめ、安全・安心に配慮した運行に努めております。</li>
            <li>デジタルタコグラフより出力される運行日報の分析結果に基づき管理者による乗務員に対する指導・教育を行っております。</li>
            <li>社内のミーティングを月に2回開催し、全乗務員に対し指導・教育を行っています。</li>
            <li>乗務社員が主体となり「安全衛生対策委員会」を形成し、事故事例やヒヤリ・ハットのデータを参考とし、事故防止活動における様々な計画や対策を協議・検討・実行しています。</li>
          </ol>
        </div>
      </li>
      <li class="se-block3-list-i">
        <div class="se-block3-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/safety-03-title-sm.svg')?>">
            <img src="<?=img('company/se/safety-03-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block3-list-i-body">
          <ol>
            <li>荷役機器（フォークリフト）にドライブレコーダーを搭載しており、速度の抑制をはじめ安全・安心に配慮した荷役作業を行っております。</li>
            <li>ドライブレコーダーより出力された荷役作業の状況を分析し、管理者によるオペレーターに対する指導・教育を行っております。</li>
            <li>施設における老朽化、破損、故障、整備不良を保守点検基準に基づき防止します。日常の細やかなメンテナンスは欠かせません。</li>
          </ol>
        </div>
      </li>
    </ul>
  </div>
  <div class="se-block4">
    <div class="se-block4-header">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('company/se/environment-header-sm.png')?>">
        <img src="<?=img('company/se/environment-header-lg.png')?>" alt="" loading="lazy">
      </picture>
    </div>
    <ul class="se-block4-list">
      <li class="se-block4-list-i">
        <div class="se-block4-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/environment-01-title-sm.svg')?>">
            <img src="<?=img('company/se/environment-01-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block4-list-i-body">
          <p>当社は、安全と誠実をもとに、環境経営を追求するため、環境負荷の低減及び環境保全活動を推進することが企業の社会的責任の一つとして認識し、総合的物流サービスという事業活動から生ずる環境負荷を低減させ、地球環境の保全と社会への貢献を目指して活動します。</p>
          <ol class="-has-margin-top">
            <li>法規制を遵守し、環境保全に努めます。</li>
            <li>3Rの推進と廃棄物の適正処理を実施します。</li>
            <li>環境保全に関する教育、啓蒙活動を実施します。</li>
            <li>低公害車及び最新規制適合車への計画的代替を実施し、排出ガスの低減を図ります。</li>
            <li>エコドライブなど省エネルギー運動を推進します。</li>
            <li>施設・設備の計画的な保守・メンテナンスを実施し、機能の維持管理と省力化を図ります。</li>
            <li>施設・設備の運転など省エネルギー運動を推進します。</li>
          </ol>
        </div>
      </li>
      <li class="se-block4-list-i">
        <div class="se-block4-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/environment-02-title-sm.svg')?>">
            <img src="<?=img('company/se/environment-02-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block4-list-i-body">
          <p>できる事、やらなければならない事から考え、確実に実行します。</p>
          <ol>
            <li>不必要なアイドリングをしません。</li>
            <li>無駄なエンジンの空ふかしをしません。</li>
            <li>経済速度運転を励行します。</li>
            <li>急発進や急加速をしません。</li>
            <li>適正なタイヤ空気圧など、点検整備を徹底します。</li>
          </ol>
        </div>
      </li>
      <li class="se-block4-list-i -align-center">
        <div class="se-block4-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/environment-03-title-sm.svg')?>">
            <img src="<?=img('company/se/environment-03-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block4-list-i-body">
          <p>省エネタイプの環境にやさしい車両構造を考案します。</p>
          <ol>
            <li>省エネルギーにつながる車両構造を考え、改善します。</li>
            <li>車両の軽量化など、多角的な対策を講じていきます。</li>
            <li>排気ガス規制に適合した触媒を、全車両に順次取り付けていきます。</li>
          </ol>
        </div>
      </li>
      <li class="se-block4-list-i">
        <div class="se-block4-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/environment-04-title-sm.svg')?>">
            <img src="<?=img('company/se/environment-04-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block4-list-i-body">
          <p>
            省エネ実行具体策を励行し、日常の運転管理の中で合理的、効率的な運転に心掛け、無駄なエネルギーの消費をいたしません。<br>
            <br>
            <em>フォークリフト作業</em>
          </p>
          <ol>
            <li>無駄なアイドリングはしません。</li>
            <li>無駄な空ふかしはしません。</li>
            <li>急発進・急加速・急ブレーキなど、急のつく運転はしません。</li>
            <li>在庫確認や貨物の積み降ろし手作業などフォークリフトから降りる際には必ずエンジンを切ります。</li>
            <li>フォークリフトは、ガスを優先利用し、ガソリンはガス欠時の緊急避難時に限り使用します。</li>
          </ol>
          <p><br><em>倉庫施設</em></p>
          <ol>
            <li>作業時以外は、全ての場所の照明を消します。</li>
            <li>倉庫内に出入りの際は、作業に応じて扉の開閉を必要最小限にします。（半開・全開）</li>
            <li>倉庫扉を必要以上に開放したまま作業はしません。</li>
          </ol>
          <p><br><em>事務所・廊下・その他</em></p>
          <ol>
            <li>使用場所以外は消灯し、使用場所であっても出来る限り日光を取り入れ、必要最低限の照明とします。</li>
            <li>使用しない機器の電源をオフにします。</li>
          </ol>
        </div>
      </li>
      <li class="se-block4-list-i -align-center">
        <div class="se-block4-list-i-head">
          <picture>
            <source media="(max-width: 767px)" srcset="<?=img('company/se/environment-05-title-sm.svg')?>">
            <img src="<?=img('company/se/environment-05-title-lg.svg')?>" alt="" loading="lazy">
          </picture>
        </div>
        <div class="se-block4-list-i-body">
          <p>環境保全（温暖化・排ガス規制・騒音）に関する問題が大きく取り上げられている現代、当社では省エネに対する取組をはじめとし、様々な環境問題に対し、独自に取組を行っています。</p>
        </div>
      </li>
    </ul>
    <div class="se-block4-ecodrive15">
      <h4 class="se-block4-ecodrive15-title md lg">エコドライブ15ヶ条</h4>
      <div class="se-block4-ecodrive15-img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?=img('company/se/ecodrive15-sm.svg')?>">
          <img src="<?=img('company/se/ecodrive15-lg.svg')?>" alt="" loading="lazy">
        </picture>
      </div>
    </div>
  </div>
  <div class="se-block5">
    <h3 class="se-block5-title">アダプト・プログラムの導入</h3>
    <p class="se-block5-main">
      道路や公園など公共スペースの清掃、美化運動を行政に代わって地域住民や地元企業が行う活動で（※アダプトは「養子にする」という意味の英語）、公共スペースを子供に見立て、団体が”里親”となって、美化活動に励む取り組みです。<br>
      清掃奉仕活動については、経営理念に基づき「クリーンアップ作戦」として従前より実施しており、アダプト・プログラムの対象エリアにも該当することもあり、行政とのタイアップによる事業として取り組んでおります。
    </p>
    <div class="se-block5-img">
      <picture>
        <source media="(max-width: 767px)" srcset="<?=img('company/se/block5-img-sm.jpg')?>">
        <img src="<?=img('company/se/block5-img-lg.jpg')?>" alt="" loading="lazy">
      </picture>
    </div>
  </div>
</section>

<?php
get_footer();
