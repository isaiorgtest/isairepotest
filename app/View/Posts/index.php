<!DOCTYPE html>
<html lang="ja">
<head>
<title>オンライン英会話のネイティブキャンプ | 英会話<?php echo Configure::read('Free period'); ?>無料トライアル開催中</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
  
<meta name="viewport" content="width=960">  
<meta name="description" content="オンライン英会話ネイティブキャンプでは、スマホアプリ、PCから予約なしで英会話レッスンが受講可能です。今なら初回限定<?php echo Configure::read('Free period'); ?>無料体験を実施中！初心者向け、子供向け、TOEIC®L&R TEST、英検対策に加え、カランメソッドやビジネス教材等、英会話学習に効果的なコースを多数設けており、ネットで英語留学が体感できます。">
<meta name="keywords" content="オンライン英会話,ネイティブキャンプ,レッスン回数無制限,英語学習">
<meta name="application-name" content="オンライン英会話ならskype（スカイプ）不要のネイティブキャンプ"> 
<meta name="google-site-verification" content="FfrIYMK3Mo3WbWe05Wi4hSkFZ2WncJyDTma0x42JljE">
<meta property="og:title" content="オンライン英会話のネイティブキャンプ | 英会話<?php echo Configure::read('Free period'); ?>無料トライアル開催中" />
<meta property="og:description" content="オンライン英会話ネイティブキャンプでは、スマホアプリ、PCから予約なしで英会話レッスンが受講可能です。今なら初回限定<?php echo Configure::read('Free period'); ?>無料体験を実施中！初心者向け、子供向け、TOEIC®L&R TEST、英検対策に加え、カランメソッドやビジネス教材等、英会話学習に効果的なコースを多数設けており、ネットで英語留学が体感できます。" />
<meta property="og:image" content="https://nativecamp.net/images/logo_ogp.png?ver=4" />
<meta property="og:url" content="https://nativecamp.net" />  
<meta property="og:type" content="website" /> 
<meta property="fb:admins" content="419071474906535" />
<meta property="og:site_name" content="オンライン英会話のネイティブキャンプ | 英会話<?php echo Configure::read('Free period'); ?>無料トライアル開催中" />
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@NativeCamp"/>
<meta http-equiv="Expires" content="86400">
<?php if(in_array(strtolower($this->name),array('cakeerror','maintenance','accountdeactivation'))):?>
<meta name="robots" content="noindex">
<?php endif;?>   
<?php 
echo $this->Html->meta(
    'favicon.ico',
    '/favicon.ico?v=1',
    array('type' => 'icon')
);
$ver = Configure::read('user.version');
?>
<?php
    if (!isset($_COOKIE['layout_id'])) {
        $layout_id = '4';
    }else{
        $layout_id = $_COOKIE['layout_id'];
    }
?>
<link rel="manifest" href="/manifest.json">
<?php
    echo $this->Html->css(array(
        'html5reset.css?v='.$ver,
        'common.css?v='.$ver,
        'font-awesome.min.css?v='.$ver,
        'jquery-ui-1.12.1.css',
        'details_index_ver_3.css?v='.$ver,
    ));
?> 
<script type="text/javascript">
    // forcely refresh page if back btn is clicked.
    var login=<?php echo ($this->Session->read('Auth.User.id'))?1:0; ?>;
    var controllerName = "<?php echo $this->name; ?>";
    var protocolDomain = window.location.protocol + "//" + window.location.host;
    var currentHref = window.location.href;
    var activeFullUrlPath = (currentHref == protocolDomain + '/appointment') ? protocolDomain + '/appointment' : ( currentHref == protocolDomain + '/waiting') ? protocolDomain + '/waiting' : (currentHref == protocolDomain + '/waiting') ? protocolDomain + '/waiting' : protocolDomain + '/mypage';
    
    if(currentHref == activeFullUrlPath) {
        if(window.performance && window.performance.navigation.type === 2) {
            window.location.reload();
        }
    }
</script>
<!-- Begin Mieruca Embed Code -->
<script type="text/javascript" id="mierucajs">
window.__fid = window.__fid || [];__fid.push([741960509]);
(function() {
function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
})();
</script>
<!-- End Mieruca Embed Code -->
<?php if (($_GET['cc'] == 'afb' || $cm_code == 'afb')) : ?>
<!-- Begin afb embed code -->
<script>
if (!window.afblpcvLpConf) {
  window.afblpcvLpConf = [];
}
window.afblpcvLpConf.push({
  siteId: "76e0e6c0"
});
</script>
<script src="https://t.afi-b.com/jslib/lpcv.js?cid=76e0e6c0&pid=P11023w" async="async"></script>
<!-- End afb embed code -->
<?php endif; ?>
<?php if (1==0): ?>
<!-- LINE Tag Base Code -->
<!-- Do Not Modify -->
<script>
(function(g,d,o){
  g._ltq=g._ltq||[];g._lt=g._lt||function(){g._ltq.push(arguments)};
  var h=location.protocol==='https:'?'https://d.line-scdn.net':'http://d.line-cdn.net';
  var s=d.createElement('script');s.async=1;
  s.src=o||h+'/n/line_tag/public/release/v1/lt.js';
  var t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);
    })(window, document);
_lt('init', {
  customerType: 'lap',
  tagId: '1e11feb8-0b70-4f0b-b0b2-826a83b5721d'
});
_lt('send', 'pv', ['1e11feb8-0b70-4f0b-b0b2-826a83b5721d']);
</script>
<noscript> 
  <img height="1" width="1" style="display:none"
       src="https://tr.line.me/tag.gif?c_t=lap&t_id=1e11feb8-0b70-4f0b-b0b2-826a83b5721d&e=pv&noscript=1" />
</noscript>
<!-- End LINE Tag Base Code -->
<?php endif; ?> 
<!--[if lt IE 9]>
<script src="<?php echo $this->Html->webroot; ?>js/html5shiv.js"></script>
<![endif]-->
<!-- START Rakuten Marketing Tracking -->
<!-- 「注意／削除する場合はリンクシェアジャパンへ連絡下さい」「ATTENTION／Please contact LINKSHARE Japan when you delete」 -->
<script type="text/javascript">
    (function (url) {
            /*Tracking Bootstrap
            Set Up DataLayer objects/properties here*/
            if(!window.DataLayer){
                window.DataLayer = {};
            }
            if(!DataLayer.events){
                DataLayer.events = {};
            }
            DataLayer.events.SiteSection = "1";
        var loc, ct = document.createElement("script"); 
        ct.type = "text/javascript"; 
        ct.async = true;
        ct.src = url;
        loc = document.getElementsByTagName('script')[0];
        loc.parentNode.insertBefore(ct, loc);
    }(document.location.protocol + "//intljs.rmtag.com/116386.ct.js"));
</script>
<!-- END Rakuten Marketing Tracking -->
</head>
<body <?php echo (isset($showLink) && $showLink)? 'class="is-mobile"': ''; ?> ng-app="userApp" ng-cloak>
<?php $ua = $_SERVER['HTTP_USER_AGENT']


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TD5C6H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TD5C6H');</script>
<!-- End Google Tag Manager -->

<div class="header_wrap">
<?php if ($this->params['controller'] !== "TestConnect"): ?>
<?php if(isset($maintenance)) : ?>
    <?php $this->assign('header','header_maintenance'); ?>
<?php elseif($this->params['controller'] === "TestConnect"): ?>
<?php else: ?>  
    <?php if($this->Session->read('Auth.User.id')): ?>
        <?php if (isset($lessons)) : ?> 
            <?php //$this->assign('header','headerLesson'); ?>
        <?php else : ?>
            <?php $this->assign('header','header1'); ?>
        <?php endif ?>: ?>
        <?php $this->assign('header','header1'); ?>
    <?php endif; ?>
<?php endif; ?>
<?php
    $headerElement = $this->fetch('header');
    if (!empty($headerElement)) {
        echo $this->element($headerElement); 
    }
?>
<?php endif; ?>
</div>

<div class="page_wrap index_wrap--ver_3">

    <section class="sec sec_top">
        <div class="sec_inner">
            <div class="top_column">
                <!-- if maintenance -->
                <?php if ( isset($varMaintenance) ) : ?>
                    <div class="top_maintenance_area">
                        <h4 class="ttl fs_18 t_center c_white m_b_10">ただいま定期メンテナンス中です</h4>
                        <p class="desc fs_14 c_white">ネイティブキャンプでは、毎週月曜早朝に定期メンテナンスを実施いたしております。<br>
                        メンテナンス時間帯はサービスをご利用いただけません。<br>お客様にはご不便をおかけいたしますが、何卒ご理解いただきますようお願い申し上げます。</p>
                        <div class="maintenance_time_wrap">
                            <p class="maintenance_time fs_16 fw_b c_white">実施時間：<?php echo ( $varMaintenance->getScheduleDate() != "" )? $varMaintenance->getScheduleDate() : null ;?></p>
                            <p class="note fs_14 c_white">※実施時間は作業状況により変更になる可能性がございます。</p>
                        </div>
                        <div class="ui_notice_list listmark_1 m_t_15 c_white">
                            <ul>
                                <li class="lh_15">メンテナンス中は予約のキャンセルが出来ません。</li>
                                <li class="lh_15 m_t_0">メンテナンス直後のレッスンで予約キャンセルをご希望の方は、メンテナンス終了後にメニュー内のお問い合わせからご連絡ください。</li>
                            </ul>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="top_txt">
                        <h2 class="sec_ttl c_white">いつでもどこでも<br>英会話レッスン</h2>
                    </div>
                <?php endif; ?>
                <div class="video_list">
                    <video autoplay loop muted poster="<?php echo $this->Html->webroot; ?>images/index/ver_3/main.png?v=2">
                        <source src="<?php echo $this->Html->webroot; ?>video/main.mp4?v=3">
                        <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/main.png?v=2">
                    </video>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sec sec_campaign_slider">
        <div class="sec_inner">
            <h2 class="sec_ttl c_orange fw_b m_b_30 m_t_10 t_center">4周年記念キャンペーン 第4弾開催中！</h2>
            <div class="slider slider-banner" id="campaign-slider">
                <ul>
                    <?php if (time() <= strtotime("2019-07-31 13:00:00")): ?>
                    <li class="slider-item"><a href="/campaign/fourth_anniv_4" target="_blank"><img src="<?php echo $this->Html->webroot; ?>images/campaign/fourth_anniv/main4.png" alt="4周年記念キャンペーン 第4弾"></a></li>
                    <?php endif; ?>
                    <li class="slider-item"><img src="<?php echo $this->Html->webroot; ?>images/campaign/fourth_anniv/main1.png" alt="4周年記念キャンペーン 第1弾"></li>
                    <li class="slider-item"><img src="<?php echo $this->Html->webroot; ?>images/campaign/fourth_anniv/main2.png" alt="4周年記念キャンペーン 第2弾"></li>
                    <li class="slider-item"><img src="<?php echo $this->Html->webroot; ?>images/campaign/fourth_anniv/main3.png" alt="4周年記念キャンペーン 第3弾"></li>
                    <!-- <li class="slider-item"><a href="<?php echo $this->Html->url('/e-station'); ?>" target="_blank"><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/e-station.png" alt="読む・聞くコンテンツ"></a></li> -->
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_trial_btn btn_1">
        <div class="sec_inner">
            <div class="btn_trial_area">
                <div class="balloon_wrap t_center">
                    <p class="balloon_ttl fw_b m_b_10">始めるなら今がチャンス！</p>
                </div>
                <div>
                    <ul class="btn_wrap t_center m_b_40">
                        <li> 
                            <?php if(isset($campaign_code) && substr($campaign_code,0,3) === "FR_") : ?>
                            <a href="/register?clk=1" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-referrral');">お友達紹介からのご登録はこちら</a>
                            <?php else : ?>
                            <a href="/register?clk=1" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-signup');"><?php echo Configure::read('Free period'); ?>無料トライアルはこちら</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <p class="fs_20">無料トライアルはご自身のタイミングで開始できます。無料トライアル開始前に講師動画、教材を無料でご確認いただけます。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec_trial">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_30">今だけ <span class="bg_flip"><?php echo Configure::read('Free period'); ?></span> の無料トライアル</h2>
            <div class="desc">
                <p>ネイティブキャンプの英会話レッスンを無料で<?php echo Configure::read('Free period'); ?>お試しいただけます。</p>
                <p>新規登録時にプレゼントしたコインを消費した後で追加でレッスンを予約する場合は、別途料金が発生する場合がございます。無料期間終了日までに退会処理をしていただければ、月額利用料や退会費用は一切発生いたしませんのでご安心下さい。</p>
            </div>
        </div>
    </section>

    <section class="sec sec_video">
        <div class="sec_inner">
            <h2 class="sec_ttl">芸能人によるネイティブキャンプ体験</h2>
            <p class="t_center fs_16 m_t_5 m_b_40">TOKYO MX 放送中 東京オーディション(仮)、ネット配信番組 小力の小部屋 など<br>様々なメディアで紹介されています。</p>
            <div class="video_slider" id="video_slider">
                <?php
                $itemCount = 1;
                $d = 0;
                $counter = 1;
                while($itemCount <= $count ):
                ?>
                    <div class="video_list">
                        <ul>

                        <?php 
                        $counter = 1;
                        while($counter < 7 && $itemCount <= $count): 
                        ?>
                             <li>
                                <a class="link_video" data-youtube_id="<?php echo $data[$d]['EntertainerVideoManagement']['video_id']; ?>">
                                    <figure><img src="<?php echo $data[$d]['EntertainerVideoManagement']['image_url'];?>"  alt="<?php echo __($data[$d]['EntertainerVideoManagement']['video_entertainer']);?>"></figure>
                                    <span class="video_ttl"><?php echo __($data[$d]['EntertainerVideoManagement']['video_entertainer']); ?></span>
                                </a>
                            </li>
                <?php 
                    $d++;
                    $itemCount++;
                    $counter++;
                    endwhile; 
                    echo "</ul>";
                    echo "</div>";
                endwhile;
                ?>
            </div>
            <div class="btn_trial_area">
                <div class="balloon_wrap t_center">
                    <p class="balloon_ttl fw_b m_b_10">始めるなら今がチャンス！</p>
                </div>
                <div class="t_center">
                    <ul class="btn_wrap t_center m_b_40">
                        <li> 
                            <?php if(isset($campaign_code) && substr($campaign_code,0,3) === "FR_") : ?>
                            <a href="/register?clk=1" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-referrral');">お友達紹介からのご登録はこちら</a>
                            <?php else : ?>
                            <a href="/register?clk=1" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-signup');"><?php echo Configure::read('Free period'); ?>無料トライアルはこちら</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <p class="fs_18 d_i_block t_left">無料トライアルはご自身のタイミングで開始できます。無料トライアル開始前に講師動画、教材を<br>無料でご確認いただけます。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec_service">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_30">オンライン英会話「ネイティブキャンプ」とは</h2>
            <p class="fs_24 c_navy t_center lh_20 m_b_60">ネイティブキャンプは、独自のサービスでパソコンや<br>
            スマートフォン・タブレットからいつでもどこでも英会話レッスンが<br>
            受講できる唯一のオンライン英会話スクールです。</p>
            <div class="figure_list">
                <ul class="d_table t_l_fixed">
                    <li class="d_cell v_bottom"><figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/ic_home.png" alt="家" class="m_b_20"></figure><figcaption class="fs_18 lh_10 t_center">自宅で</figcaption></li>
                    <li class="d_cell v_bottom"><figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/ic_company.png" alt="ビル" class="m_b_20"></figure><figcaption class="fs_18 lh_10 t_center">会社で</figcaption></li>
                    <li class="d_cell v_bottom"><figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/ic_cafe.png" alt="コーヒー" class="m_b_20"></figure><figcaption class="fs_18 lh_10 t_center">カフェで</figcaption></li>
                    <li class="d_cell v_bottom"><figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/ic_park.png" alt="噴水" class="m_b_20"></figure><figcaption class="fs_18 lh_10 t_center">公園で</figcaption></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_banner_slider">
        <div class="sec_inner">
            <div class="slider slider-banner" id="slider-banner">
                <ul>
                    <li><a href="/native_speaker" target="_blank"><img src="<?php echo $this->Html->webroot; ?>images/mypage/banner_native_speaker.png" alt="ネイティブスピーカーとの英会話レッスンにチャレンジ"></a></li>
                    <li><a href="/campaign/invite_friends" target="_blank"><img src="<?php echo $this->Html->webroot; ?>images/mypage/banner_invite_friends.png" alt="ネイティブキャンプにお友達を紹介してコインをゲット！"></a></li>
                    <li><a href="/callan" target="_blank"><img src="<?php echo $this->Html->webroot; ?>images/mypage/banner_callan.png" alt="通常の4倍の速度で英会話が学べるカランメソッドをレッスン！"></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_merit">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_40">ネイティブキャンプが選ばれる理由</h2>
            <div class="merit_list">
                <ul>
                    <li class="d_cell v_top">
                        <div class="merit_inner">
                            <h3 class="fs_24 fw_n t_center b_bottom_line">世界中から集う講師陣</h3>
                            <figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/merit_1.png" alt="世界中の講師"></figure>
                            <p>アメリカ・イギリスなどのネイティブスピーカーや、英語運用能力が非常に高いフィリピン・セルビアなど世界100ヶ国以上の様々な国籍の講師が在籍。それぞれの特性や経験を活かした、バラエティ豊かなマンツーマンレッスンが受講できます。</p>
                            <p class="m_t_15 m_b_15 fs_14 t_i_10 c_red">※2018年5月より日本人英会話講師によるレッスンを開始、英会話レッスンが初めての方にも安心して受講いただけるよう日本語でのレッスンにも対応しています。</p>
                            <ul class="btn_wrap t_center">
                                <li><a href="/waiting" class="btn_style btn_lp">講師一覧へ</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="d_cell v_top">
                        <div class="merit_inner">
                            <h3 class="fs_24 fw_n t_center b_bottom_line">今すぐレッスン</h3>
                            <figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/merit_2.png" alt="時計とカレンダー"></figure>
                            <p>講師がリアルタイムでレッスンを提供する「今すぐレッスン」は、24時間365日いつでも<sup>*</sup>思い立った瞬間に英会話レッスンが可能です。<br>
                                混雑時には講師のレッスン終了 (1～25分程度) までお待ちいただくか、ご予約にて受講いただけます。</p>
                            <p class="ui_notice listmark_1 fs_14 m_t_10">毎週月曜日 AM2:00～6:00 (日本時間) の定期メンテナンス時間を省く。</p>
                            <ul class="btn_wrap t_center">
                                <li><a href="/usage/lesson_start" class="btn_style btn_lp p_l_20 p_r_20">今すぐレッスンについて</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="d_cell v_top">
                        <div class="merit_inner">
                            <h3 class="fs_24 fw_n t_center b_bottom_line">レッスン回数無制限</h3>
                            <figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/merit_3.png" alt="スマホで英会話レッスン"></figure>
                            <p>5分という短い時間でも話す、聞くを繰り返していくことで英語は身に付いていきます。ネイティブキャンプでは1レッスン25分という枠にとらわれることなく、「反復学習」を気軽に行なえる環境を作り上げ、確かな英語力を習得するための最適な学習スタイルを提供しています。</p>
                            <ul class="btn_wrap t_center">
                                <li><a href="/about_unlimited" class="btn_style btn_lp p_l_20 p_r_20">レッスン回数無制限について</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_voice">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_40">会員様の声</h2>
            <div class="voice_list">
                <ul>
                    <li>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/voice_w.png" alt="女性会員様のイメージ画像">接客業で外国の方と話す機会があった際、以前は日本語とジェスチャーで乗り切ろうとしていたが、積極的に英語でコミュニケーションを取ろうとチャレンジすることができるようになった。考え事をする際、無意識に英語で考える習慣がついた。無料体験レッスンはサービスを知るのにとても役立った。</p>
                        <p class="t_right m_t_20">20代後半 / 女性</p>
                    </li>
                    <li>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/voice_m.png" alt="男性会員様のイメージ画像">カランレッスンを中心に受講していますが、どの先生もとても熱心で真面目でハズレと感じたことはほとんどありません。講師のトレーニングが行き届いていると感じています。</p>
                        <p class="t_right m_t_20">50代前半 / 男性</p>
                    </li>
                    <li>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/voice_w.png" alt="女性会員様のイメージ画像">他校と違い、何時からと決まっていないので非常にクラスが取りやすく、また、いろんな国の先生が増えて非常にありがたいです。先生も勉強！って感じでなく話しやすいのでとても良いです。<br>子供も英語で話す楽しさを学び、英語が大好きです！</p>
                        <p class="t_right m_t_20">10代 / 女性</p>
                    </li>
                </ul>
            </div>
            <div class="m_t_50">
                <ul class="btn_wrap t_center">
                    <li><a href="/testimonials" class="btn_style btn_lp zero_p">会員様の声について</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_plan">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_40">料金プラン</h2>
            <div class="plan_list t_center">
                <dl class="plan_item">
                    <dt class="fs_24 c_white m_b_20">プレミアムプラン</dt>
                    <dd>
                        <p class="fs_16 c_white m_b_30">ネイティブキャンプの標準プラン</p>
                        <div class="price m_b_45">
                            月額 <b class="fs_35"><?php echo number_format(Configure::read("credit.monthly_payment")); ?></b> 円
                        </div>
                        <p class="fs_20 c_white lh_18">今すぐレッスン (回数無制限)<br>
                        1レッスン : ～25分</p>
                    </dd>
                </dl>
                <dl class="plan_item family">
                    <dt class="fs_24 c_white m_b_20">ファミリープラン</dt>
                    <dd>
                        <p class="fs_16 lh_15 c_white m_b_30">プレミアムプランの会員様の<br>
                        ご家族のみ加入できるお得なプラン</p>
                        <div class="price m_b_45">
                            月額 <b class="fs_35"><?php echo number_format(Configure::read('credit.family_monthly_payment')); ?></b> 円
                        </div>
                        <p class="fs_20 c_white lh_18">今すぐレッスン (回数無制限)<br>
                        1レッスン : ～25分</p>
                    </dd>
                </dl>
                <dl class="plan_item reserve">
                    <dt class="fs_24 m_b_20">予約オプション</dt>
                    <dd>
                        <p class="fs_16 lh_15">ご利用中のプランに関係なく<br>
                        追加で予約レッスンを受講する場合</p>
                        <div class="price m_b_15">
                            <span class="b_bottom_line">1レッスン <b class="fs_35">50</b> コイン～</span>
                        </div>
                        <div>
                            <ul class="check_list d_i_block t_left fs_20">
                                <li>カランメソッド</li>
                                <li>ネイティブ講師の指名</li>
                                <li>お気に入り講師の指名</li>
                            </ul>
                        </div>
                        <p class="t_right m_t_5"><a href="/usage/coin" class="t_link" target="_blank">コイン購入について<i class="fa fa-external-link"></i></a></p>
                    </dd>
                </dl>
            </div>
            <div class="t_left m_t_20 m_l_20">
                <p>今すぐレッスンでは、24時間365日いつでも*思い立った瞬間に英会話レッスンが可能です。<br>
                    混雑時には講師のレッスン終了 (1～25分程度) までお待ちいただくか、ご予約にて受講いただけます。</p>
                <p class="ui_notice listmark_1 fs_14 m_t_5">毎週月曜日 AM2:00～6:00 (日本時間) の定期メンテナンス時間を省く。</p>
            </div>
            <div class="m_t_50">
                <ul class="btn_wrap t_center">
                    <li><a href="/usage/price" class="btn_style btn_lp">料金について</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_trial_btn btn_2 bg_white">
        <div class="sec_inner p_b_0">
            <div class="btn_trial_area">
                <div class="balloon_wrap t_center">
                    <p class="balloon_ttl fw_b m_b_10">始めるなら今がチャンス！</p>
                </div>
                <div>
                    <ul class="btn_wrap t_center m_b_40">
                        <li> 
                            <?php if(isset($campaign_code) && substr($campaign_code,0,3) === "FR_") : ?>
                            <a href="/register?clk=2" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-referrral');">お友達紹介からのご登録はこちら</a>
                            <?php else : ?>
                            <a href="/register?clk=2" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-signup');"><?php echo Configure::read('Free period'); ?>無料トライアルはこちら</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec_feature">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_40">ネイティブキャンプの特徴</h2>
            <div class="feature_list">
                <ul>
                    <li>
                        <div class="feature_item">
                            <figure class="d_cell">
                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/feature_1.png" alt="タブレット、スマホでの英会話レッスン！アプリで可能">
                            </figure>
                            <div class="d_cell p_l_50">
                                <h3 class="fs_24 fw_n c_navy t_center m_b_20">場所を選ばずにどこでもレッスン</h3>
                                <p>パソコン以外にスマートフォンやタブレット端末から専用アプリを通して、いつでもどこでも自分のライフスタイルに合わせた英会話レッスンを受けることができます。</p>
                                <div class="dl_list">
                                    <ul>
                                        <li>
                                            <a href="https://app.adjust.com/<?php echo $tracker ? $tracker : '53fr6g'; ?>?fallback=https%3A%2F%2Fitunes.apple.com/jp/app/id1039733719&<?php echo $a8Url; ?>" target="_blank" rel="noopener" onclick="ga('send', 'event', 'pc', 'click', 'lp-dl');">
                                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/app_btn.png" alt="AppStoreでダウンロード" class="zero_m_a">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://app.adjust.com/<?php echo $tracker ? $tracker : '8tdzlx'; ?>?fallback=https%3A%2F%2Fplay.google.com/store/apps/details%3Fid%3Dcom.nativecamp.nativecamp&<?php echo $a8Url; ?>" target="_blank" rel="noopener" onclick="ga('send', 'event', 'pc', 'click', 'lp-dl');">
                                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/app_btn_google.png" alt="GooglePlayでダウンロード" class="zero_m_a">
                                            </a>
                                        </li>
                                        <li class="d_cell">
                                            <a href="https://app.adjust.com/<?php echo $tracker ? $tracker : '409rdh0'; ?>?fallback=https://www.amazon.co.jp/dp/B078981D3B/&<?php echo $a8Url; ?>" target="_blank" rel="noopener" onclick="ga('send', 'event', 'pc', 'click', 'lp-dl');">
                                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/app_btn_amazon.png" alt="amazon appstoreでダウンロード" class="zero_m_a">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature_item">
                            <div class="d_cell p_r_50">
                                <h3 class="fs_24 fw_n c_navy t_center m_b_20">最速の英語習得法 カランメソッド</h3>
                                <p>イギリスで誕生し世界中で支持されている、通常の4倍の速度で英会話を習得できるという英語教授法です。ネイティブキャンプはオンライン英会話初の正式提携校としてレッスンを提供しています。</p>
                                <div>
                                    <ul class="t_center m_t_40">
                                        <li class="btn_wrap"><a href="/callan" class="btn_style btn_lp p_l_20 p_r_20">カランメソッドについて</a></li>
                                    </ul>
                                </div>
                            </div>
                            <figure class="d_cell">
                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/feature_2.png" alt="カランメソッド">
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div class="feature_item">
                            <figure class="d_cell">
                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/feature_3.png?v=2" alt="豊富な英会話教材">
                            </figure>
                            <div class="d_cell p_l_50">
                                <h3 class="fs_24 fw_n c_navy t_center m_b_20">4,000を超える豊富なコンテンツ</h3>
                                <p>キッズや初心者、旅行英会話からビジネス英語・TOEIC<sup>&reg;</sup>L&amp;R TESTなど幅広いジャンルをカバーする無料の教材や毎月更新される読み放題、聞き放題コンテンツなど魅力あふれるコンテンツを取り揃えています。</p>
                                <ul class="t_center m_t_40">
                                    <li class="btn_wrap"><a href="/usage/lesson_course" class="btn_style btn_lp">教材について</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="feature_item">
                            <div class="d_cell p_r_50">
                                <h3 class="fs_24 fw_n c_navy t_center m_b_20">日本人スタッフのカウンセリング</h3>
                                <p>英語が初心者の方も安心、「進め方がわからない」「自分のレベルってどのくらいだろう」などの不安やお悩みを全力でサポートいたします。</p>
                                <ul class="t_center m_t_40">
                                    <li class="btn_wrap"><a href="/counseling" class="btn_style btn_lp p_l_20 p_r_20">カウンセリングについて</a></li>
                                </ul>
                            </div>
                            <figure class="d_cell">
                                <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/feature_4.png" alt="日本人カウンセラー">
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_step">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_40">レッスンを始めるための3つのステップ</h2>
            <div class="step_list m_b_50">
                <ol class="d_table">
                    <li class="d_cell">
                        <div class="step_ttl step_1">
                            <p class="fs_24 c_white">Step1</p>
                        </div>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/step_1.png" alt="身分証明書" class="m_b_20"></p>
                        <p>会員登録</p>
                    </li>
                    <li class="d_cell">
                        <div class="step_ttl step_2">
                            <p class="fs_24 c_white">Step2</p>
                        </div>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/step_2_1.png" alt="講師を検索" class="m_b_20"></p>
                        <p class="m_b_40">講師選択</p>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/step_2_2.png" alt="カレンダー" class="m_b_20"></p>
                        <p>予約</p>
                    </li>
                    <li class="d_cell">
                        <div class="step_ttl step_3">
                            <p class="fs_24 c_white">Step3</p>
                        </div>
                        <p><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/step_3.png" alt="英会話講師" class="m_b_20"></p>
                        <p>レッスン</p>
                    </li>
                </ol>
            </div>
            <div class="p_l_50">
                <p>ネイティブキャンプではSkypeを使用しない独自のシステムでレッスンを行うため、面倒な手間は一切ありません。<br>
                パソコンにカメラとマイクがあれば、すぐにレッスンが始められます。</p>
            </div>
            <div class="m_t_50">
                <ul class="btn_wrap t_center">
                    <li><a href="/test_connect" rel="popwin" data-width="700" class="btn_style btn_lp zero_p">レッスン環境チェック</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_commercial p_t_40">
        <div class="sec_inner t_center">
            <h2 class="sec_ttl c_white m_b_40">ネイティブキャンプは世界に向けて発信中</h2>
            <h3 class="fs_24 fw_n m_b_30"><span class="b_bottom_line">JAL/ANA 国際線 機内CM放映中！</span></h3>
            <p class="fs_20 m_b_15">JAL 国際線 56ヵ国・571路線</p>
            <p class="fs_20 m_b_25 lh_13">ANA 国際線 世界42都市・65路線・1,142便/週<br>
            <span class="fs_14">【※2017年7月時点】</span></p>
            <div class="video_area m_b_20">
                <iframe src="https://www.youtube.com/embed/4j5446ajQoQ?rel=0" frameborder="0" allowfullscreen width="800" height="450" title="ネイティブキャンプは世界に向けて発信中"></iframe>
            </div>
            <div class="ui_notice_list listmark_1 m_b_25">
                <ul class="d_i_block t_left">
                    <li class="fs_14 c_white">JAL 国際線 映画前CMにて2018年4月より広告掲載</li>
                    <li class="fs_14 c_white">ANA 国際線 映画前SKY CHANNEL CMにて2018年4月より広告掲載</li>
                </ul>
            </div>
            <figure><img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/logo_ana.png" alt="全日本空輸"></figure>
        </div>
    </section>

    <section class="sec sec_media">
        <div class="sec_inner">
            <h2 class="sec_ttl m_b_40">様々なメディアで紹介されています</h2>
            <div class="media_list t_center">
                <figure><img src="<?php echo $this->Html->webroot; ?>images/media/logos.png" alt="メディア掲載会社のロゴ画像"></figure>
            </div>
            <div class="m_t_50">
                <ul class="btn_wrap t_center">
                    <li><a href="/press_release_media" class="btn_style btn_lp zero_p">メディア掲載一覧へ</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sec sec_update">
        <div class="sec_inner fs_0">
            <h2 class="sec_ttl m_b_40">ネイティブキャンプ更新情報</h2>
            <div class="update-forum">
                <h3 class="update_ttl"><a href="/message-board">ネイティブキャンプ広場</a></h3>
                <div class="update_list update_list-forum">
                    <ul>
                        <?php foreach ($messageboardDetail as $content) :?>
                            <?php $message = new MessageBoardTable($content['MessageBoard']) ?>
                            <li class="b_link">
                                <a href="/message-board/detail/<?php echo $content['MessageBoard']['id'];?>">
                                    <p class="update_content"></p>
                                    <div class="topic_list">
                                        <p class="latest"><time datetime="<?php
                                            $dtm = substr($content['MessageBoard']['created'],0,-3);
                                            $dtmS = explode(" ", $dtm);
                                            echo $dtmS[0].'T'.$dtmS[1].'+09:00';
                                            ?>"><?php echo $message->getCreated(); ?></time></p>
                                        <p class="number"><i class="fa fa-comment fa-fw"></i><em><?php echo MessageBoardTable::getTotalReplyValid($content['MessageBoard']['id']) ?></em>件</p>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="update-review m_b_25">
                <h3 class="update_ttl"><a href="/reviews">みんなのレビュー</a></h3>
                <div class="update_list update_list-review">
                    <ul>
                        <?php foreach ($reviewDetail as $review): ?>
                            <li class="b_link">
                                <a href="/waiting/detail/<?php echo $review['UsersClassEvaluation']['teacher_id']; ?>">
                                    <div class="topic_list">
                                        <p class="latest"><time datetime="<?php
                                            $dte = substr($review['UsersClassEvaluation']['created'],0,-3);
                                            $dteS = explode(" ", $dte);
                                            echo $dteS[0].'T'.$dteS[1].'+09:00';
                                            ?>"><?php echo UsersClassEvaluationTable::getCreated($review['UsersClassEvaluation']['created']); ?></time></p>
                                        <p class="name"><i class="fa fa-chevron-right fs_12 v_middle"></i> <?php echo $review['Teacher']['name'] ?></p>
                                    </div>
                                    <p class="update_content"><!-- <?php echo $review['User']['age'].' '.$review['User']['gender']; ?> --></p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec_trial_btn btn_3 bg_white">
        <div class="sec_inner p_t_50 p_b_0">
            <div class="btn_box">
                <div class="btn_trial_area">
                    <div class="balloon_wrap t_center m_b_10">
                        <p class="balloon_ttl fw_b">始めるなら今がチャンス！</p>
                    </div>
                    <ul class="btn_wrap t_center">
                        <li>
                            <?php if(isset($campaign_code) && substr($campaign_code,0,3) === "FR_") : ?>
                            <a href="/register?clk=3" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-referrral_2');">お友達紹介からのご登録はこちら</a>
                            <?php else : ?>
                            <a href="/register?clk=3" class="btn_style btn_orange btn_trial" onclick="ga('send', 'event', 'pc', 'click', 'lp-signup_2');"><?php echo Configure::read('Free period'); ?>無料トライアルはこちら</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec_corporation">
        <div class="sec_inner p_b_0">
            <div class="flex_box">
                <div class="corporation_area corp">
                    <a href="/corporate" target="_blank">
                        <img src="<?php echo $this->Html->webroot;?>images/index/ver_3/link_corp.png?v=2.0" alt="オフィスの画像">
                        <div class="corporation_content corp">
                            <h4>法人向けサービス</h4>
                            <p class="c_white">最速で英語を身につけたい、その思いに応える。</p>
                        </div>
                    </a>
                </div>
                <div class="corporation_area education">
                    <a href="/school" target="_blank">
                        <img src="<?php echo $this->Html->webroot;?>images/index/ver_3/link_school.png?v=2.0" alt="教室の画像">
                        <div class="corporation_content education">
                            <h4>教育機関向けサービス</h4>
                            <p class="c_white">世界への最短距離。<br>
                            最適な環境で英語を学び、習い、鍛える。</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec sec_banner sec_banner_bottom">
        <div class="sec_inner">
            <ul class="banner_bottom_list">
                <li class="item">
                    <a href="https://nativecamp.co.jp/recruit/" target="_blank" class="t_link" rel="noopener">
                        <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/banner_recruitment3.png" alt="ネイティブキャンプの法人カウンセラー（法人営業スタッフ）募集">
                    </a>
                </li>
                <li class="item">
                    <a href="https://nativecamp.co.jp/recruit/teacher-japanese/" target="_blank" class="t_link" rel="noopener">
                        <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/banner_recruitment.png" alt="ネイティブキャンプの日本人英会話講師募集中">
                    </a>
                </li>
                <li class="item">
                    <a href="https://nativecamp.co.jp/recruit/intern-philippines/" target="_blank" class="t_link" rel="noopener">
                        <img src="<?php echo $this->Html->webroot; ?>images/index/ver_3/banner_intern.png" alt="ネイティブキャンプのインターン生募集">
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="sec sec_notice">
        <div class="sec_inner">
            <div class="notice_list">
                <ul>
                    <li class="list_item">
                        <p class="item_ttl">スマートフォン、タブレットからのレッスン受講について</p>
                        <div class="ui_notice_list listmark_2">
                            <ul>
                                <li>モバイル端末 (iOS、Android、Kindle) でネイティブキャンプアプリをインストールしていただくとレッスンが可能です。</li>
                            </ul>
                        </div>
                    </li>
                    <li class="list_item">
                        <p class="item_ttl">対応ブラウザに関して</p>
                        <div class="ui_notice_list listmark_2">
                            <ul>
                                <li>オンライン英会話レッスンの受講にあたりまして「FireFox」または「Google Chrome」が必要となります。</li>
                                <li>対応ブラウザ以外 (Internet Explore, Microsoft Edge, Safari等) をご利用の場合<a href="https://www.google.co.jp/intl/ja/chrome/browser/desktop/index.html" class="t_link" target="_blank" rel="noopener">「Google Chrome」<i class="fa fa-external-link"></i></a>または<a href="https://www.mozilla.org/ja/firefox/new/" class="t_link" target="_blank" rel="noopener">「FireFox」<i class="fa fa-external-link"></i></a>のダウンロードをお願いします。</li>
                                <li>「FireFox」「Google Chrome」のどちらかが既にダウンロード済みの場合は必要ありません。</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <a href="#" class="top_link" id="top_link" data-scroll="pageTop" style="display: block;"><i class="fa fa-arrow-up"></i></a>
</div>
<!-- // .page_wrap -->
<?php if(isset($maintenance)): ?>
    <?php echo $this->element('footer_maintenance') ?>
<?php else: ?>
    <?php if(!isset($lessons)) : ?><?php echo $this->element('footer_2') ?><?php endif ?>
<?php endif; ?>
<?php if($this->params['controller'] != "class"): ?>
    <?php echo $this->element('remarketing') ?>
<?php endif; ?>
<input type="hidden" id="ncUserId" value="<?php echo isset($userData['User']['id']) ? $userData['User']['id'] : 0; ?>">
<?php
    echo $this->Html->script(array(
        'jquery-3.3.1.min.js?v='.$ver,
        'jquery-ui-1.12.1.min.js?v='.$ver,
        'jquery.bxslider.min.js?v='.$ver,
        'jquery.magnific-popup.min.js?v='.$ver,
        'moment-2.22.0.min.js?v='.$ver,
        'jquery.cookie.min.js?v='.$ver,
        'respond.src.js?v='.$ver,
        'jquery.ba-hashchange.min.js?v='.$ver,
        'common.js?v='.$ver,
        'lp.js?v='.$ver,
    ));
?>
</body>
</html>