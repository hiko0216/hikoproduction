<?php get_header(); ?>

<div id="main_visual">
  <div class="wrap">
    <h2><?php echo nl2br(get_option('top_catchcopy'));?></h2>
    <p><?php echo nl2br(get_option('top_description'));?></p>
  </div><!-- .wrap -->
</div>

<div id="content" class="front-main-cont">
<header class="category_title main_title front-cont-header profileheader">
    <div class="cont-icon"><i class="fas fa-user-alt"></i></div>
    <h2 class="cont-title">プロフィール</h2>
    <p class="cont-ruby">Profile</p>
    <div class="tri-border"><span></span></div>
  </header>
  <div class="profilecontent">
    <div class="left">
      <div class="leftimageicon">
        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/myimage.png" alt="">
      </div>
      <div class="leftconetnt">
        <div class="snsicon">
          <ul>
            <li><a href="https://twitter.com/Hiko_Pro" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/hikoskashinichi" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="https://www.instagram.com/hiko_pro/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li><br>
            <li><a href="https://hikopro.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-blog"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCry6cY70xg1LkI3OcuuPpWw" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://github.com/hiko0216" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="rightcontent">
       <p class="name">彦坂 真一（HikoPro）</p>
       <p class="opacity">フリーランスWebディレクター兼エンジニア</p>
       <p class="dispc">バンコク不動産でWebマーケティング→インドでIT留学<br>→ベトナムのWeb制作会社でディレクター兼エンジニア→フリーランス独立</p>
       <p class="dissp">バンコク不動産でWebマーケティング<br>↓<br>インドでIT留学<br>↓<br>ベトナムのWeb制作会社でディレクター兼エンジニア<br>↓<br>フリーランス独立</p>
       <p>WordPressでのWebサイト制作が得意。<br>自身のブログ運営ノウハウを活かしSEOに強いサイト作りをいたします。</p>
       <p>写真撮影、動画編集も得意で、フルコーディネートでの制作も承っております。</p>
       <a href="https://hikopro.com/profile/" target="_blank" class="detailbotton">詳しい経歴プロフィールはこちら</a>
       <div class="hobytable">
         <table>
           <tr>
             <th>出身</th>
             <td>大阪</td>
             <th>年齢</th>
             <td>21歳（1998年生まれ）</td>
           </tr>
           <tr>
             <th>趣味</th>
             <td>カメラ・１人旅・ブログ</td>
             <th>学歴</th>
             <td>近畿大学 国際経済学科</td>
           </tr><tr>
             <th>海外渡航歴</th>
             <td>13ヵ国</td>
             <th>将来の夢</th>
             <td>東南アジアでゆるく家族と生活</td>
           </tr>
         </table>
       </div>
      </div>
    </div>
  </div>

<div id="main">
  <div class="main-inner">

<div id="popular_post_content" class="front-loop front-main-cont">
<header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="fas fa-laptop-code"></i></div>
    <h2 class="cont-title">制作実績・作ったもの</h2>
    <p class="cont-ruby">Works</p>
    <div class="tri-border"><span></span></div>
  </header>

<div class="wrap">
  <div class="front-loop-cont">
<?php
      $i = 1;
      if ( have_posts() ) :
        // wp_reset_query();

        // $args=array(
        //     'meta_query'=>
        //     array(
        //       array(  'key'=>'bzb_show_toppage_flag',
        //                  'compare' => 'NOT EXISTS'
        //       ),
        //       array(  'key'=>'bzb_show_toppage_flag',
        //                 'value'=>'none',
        //                 'compare'=>'!='
        //       ),
        //      'relation'=>'OR'
        //   ),
        //     'showposts'=>5,
        //     'meta_key'=>'views',
        //     'orderby'=>'meta_value_num',
        //     'order'=>'DESC'
        //   );
        // query_posts($args);
        // query_posts('showposts=5&meta_key=views&orderby=meta_value_num&order=DESC');
        while ( have_posts() ) : the_post();

        $cf = get_post_meta($post->ID);
        $rank_class = 'popular_post_box rank-'.$i;
        // print_r($cf);
?>

  <article id="post-<?php echo the_ID(); ?>" <?php post_class($rank_class); ?>>
    <a href="<?php the_permalink(); ?>" class="wrap-a">

      <?php if( get_the_post_thumbnail() ) { ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail('loop_thumbnail'); ?>
      </div>
      <?php } else{ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/lib/images/noimage.jpg" alt="noimage" width="800" height="533" />
      <?php } // get_the_post_thumbnail ?>
    <p class="p_category"><?php $cat = get_the_category(); $cat = $cat[0]; {
        echo $cat->cat_name;
      } ?></p>
    <h3><?php the_title(); ?></h3>
    <p class="p_rank">NO.<span><?php echo $i; ?></span></p>
    
    </a>
  </article>

<?php
        $i++;
        endwhile;
      endif;
?>
<p class="more"><a href="https://hikoproduction.com/2019/">もっと見る>>></a></p>
</div><!-- /front-loop-cont -->

</div><!-- /wrap -->
</div><!-- popular_post_content -->


<div class="myskills front-main-cont" id="skillscontent"> 
<header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="fas fa-code"></i></div>
    <h2 class="cont-title">できる事・スキル</h2>
    <p class="cont-ruby">Skills</p>
    <div class="tri-border"><span></span></div>
  </header>
  <div class="container-skillbar">
	<div class="skillbar clearfix " data-percent="90%">
		<div class="skillbar-title" style="background: #DD1E2F;"><span>HTML5</span></div>
		<div class="skillbar-bar" style="background: #DD1E2F;"></div>
    <div class="skill-bar-percent">90%</div>
    <p>Web制作会社での実務経験あり。SEOに配慮し、見やすく、後から編集しやすいコーディングが得意。</p>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="85%">
		<div class="skillbar-title" style="background: #EBB035;"><span>CSS3</span></div>
		<div class="skillbar-bar" style="background: #EBB035;"></div>
    <div class="skill-bar-percent">85%</div>
    <p>Web制作会社での実務経験あり。Sassを使い、後から編集しやすい綺麗なコーディング。</p>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="70%">
		<div class="skillbar-title" style="background: #06A2CB;"><span>WordPrss</span></div>
		<div class="skillbar-bar" style="background: #06A2CB;"></div>
    <div class="skill-bar-percent">70%</div>
    <p>Web制作会社での実務経験あり。独自のブログ運営のノウハウを活かし、SEOに最適なサイトを構築します。</p>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="50%">
		<div class="skillbar-title" style="background: #218559;"><span>jQuery</span></div>
		<div class="skillbar-bar" style="background: #218559;"></div>
    <div class="skill-bar-percent">50%</div>
    <p>Webサイトに動きをつけるアニメーションの実装が可能。</p>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="50%">
		<div class="skillbar-title" style="background: #f4645f;"><span>Laravel</span></div>
		<div class="skillbar-bar" style="background: #f4645f;"></div>
    <div class="skill-bar-percent">50%</div>
    <p>CRUDシステム、マッチングサービスの開発、APIの導入が可能。</p>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="65%">
		<div class="skillbar-title" style="background: #192823;"><span>Writing</span></div>
		<div class="skillbar-bar" style="background: #454545;"></div>
    <div class="skill-bar-percent">65%</div>
    <p>ブログサイト2つ運営のノウハウを活かした、キーワードを意識したライティングが得意。</p>
  </div> 
  <div class="skillbar clearfix " data-percent="95%">
		<div class="skillbar-title" style="background: #47B39D;"><span>Photo</span></div>
		<div class="skillbar-bar" style="background: #47B39D;"></div>
    <div class="skill-bar-percent">95%</div>
    <p>GoProAward受賞。タイ観光庁を初め、各メディアに使用される実績あり。雰囲気に合わせた編集が得意。</p>
  </div>
  <div class="skillbar clearfix " data-percent="65%">
		<div class="skillbar-title" style="background: #d6edff;"><span>Video</span></div>
		<div class="skillbar-bar" style="background: #d6edff;"></div>
    <div class="skill-bar-percent">65%</div>
    <p>30秒〜60秒のイメージ動画プロモーション動画の制作が可能です。</p>
	</div><!-- Ende Skill Bar -->
</div><!-- Ende container Skill Bar -->
</div>





<!-- クローズアップ -->
<div id="front-contents" class="front-main-cont">
<?php
  $icon = 'none';
  $bzb_ruby = '';
  $bzb_catch = '';
  $title = '';
  $ruby = '';
  $bzb_contents_header_array = get_option('bzb_contents_header');
  if(is_array($bzb_contents_header_array)){
    extract($bzb_contents_header_array) ;
  }
?>
  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>

<?php
  $i = 1;
  $bzb_contents = get_option('bzb_contents');
  if(is_array($bzb_contents)){
    $left_right = "";
  foreach((array)$bzb_contents as $key => $value){
    $left_right = ($i % 2 == 1) ? 'left' : 'right';
    extract(make_info_4top($value));
?>
  <section id="front-contents-1" class="c_box c_box_<?php echo $left_right;?>">
    <div class="wrap">
      <div class="c_box_inner">
        <div class="c_title">
          <p class="c_number"><?php echo $i;?></p>
          <h3><?php echo $title; ?></h3>
          <p class="c_english"><?php echo $bzb_ruby;?></p>
        </div>
        <div class="c_img_box" style="background-image:url(<?php echo $image;?>)">
      </div>
        <div class="c_text">
          <h4><?php echo nl2br($bzb_catch);?></h4>
          <p><?php echo $content;?></p>
          <?php if($button_url != ''){ ?>
          <p class="c_btn"><a href="<?php echo $button_url;?>" class="btn"><?php echo $button_text;?></a></p>
          <?php }else{ ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php 
  $i++;
    }
  } 
?>


</div><!-- /front-contents -->



<!-- サービス紹介 -->
<?php
  $icon = 'none';
  $title = '';
  $ruby = '';
  $bzb_ruby = '';
  $bzb_catch = '';
  $bzb_service_header_array = get_option('bzb_service_header');
  if(is_array($bzb_service_header_array)){
    extract($bzb_service_header_array) ;
  }

?>
<div id="front-service" class="front-main-cont">

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>


  <div class="wrap2">
    <div class="front-service-inner">
        <div class="servicecontent">
          <div class="service service1">
            <h3>WordPress制作・カスタマイズ</h3>
            <span>WordPress</span>
            <div class="servicedetail">
            <p>WordPressのフルコーディネートから、部分的なカスタマイズ、修正、SEO対策までトータルサポートが可能です。</p>
              <ul>
              <li>SEOの最適化を考慮</li>
              <li>初心者の方でも扱えるマニュアル付き</li>
              <li>厳選したテンプレートを使用</li>
              <li>プラグインの導入</li>
              <li>カスタマイズ</li>
              <li>その他ご希望のカスタマイズ</li>
              </ul>
            </div>
            <a href="" class="detailbotton">詳しく見る</a>
          </div>
          <div class="service service2">
            <h3>LP制作</h3>
            <span>Landing page</span>
            <div class="servicedetail2">
            <p>コンバージョンを意識したLP設計、デザインからHTML,CSSコーディング、レスポンシブ対応まで売れるサイトを作成します。 </p>
            <ul>
              <li>SEOの最適化を考慮</li>
              <li>コンバージョン意識した設計</li>
              <li>お問い合わせフォーム込み</li>
              <li>アナリティクスの設置でCV率を計測</li>
              <li>アニメーション（フェードインなど）</li>
              <li>レスポンシブ対応</li>
              </ul>
            </div>
            <a href="" class="detailbotton">詳しく見る</a>
          </div>
        </div>
        <div class="servicecontent service3">
          <div class="service">
            <h3>サイトの保守管理</h3>
            <span>Maintenance</span>
            <div class="servicedetail">
            <p>WordPressコアとプラグインのアップデートやメンテナンス、セキュリティー対策、SEOの改善点などサイト運用に関することはお任せください。</p>
            <ul>
              <li>WordPressのメンテナンス</li>
              <li>プラグインのアップデート</li>
              <li>セキュリティー対策</li>
              <li>データを守るバックアップ</li>
              <li>SEO最適化のご提案</li>
              <li>修正依頼に対応（3箇所/月）</li>
              </ul>
            </div>
            <a href="" class="detailbotton">詳しく見る</a>
          </div>
          <div class="service service4">
            <h3>写真撮影・映像制作</h3>
            <span>Photo&Film</span>
            <div class="servicedetail2">
            <p>Webサイトに使用する写真素材の撮影、プロモーション、イメージ動画の制作が可能です。</p>
            <ul>
              <li>クリエイティブな構図撮影</li>
              <li>Photoshopでの加工</li>
              <li>Lightroomでの編集</li>
              <li>30~60のイメージ動画撮影</li>
              <li>動画をgifに変換しサイト埋め込み</li>
              <li>修正依頼に対応（3箇所/月）</li>
              </ul>
          </div>
            <a href="" class="detailbotton">詳しく見る</a>
          </div>
        </div>

    </div>
  </div>

</div><!-- /front-contents -->

<!-- 会社概要 -->
<div id="front-company" class="front-main-cont">
  <?php 
    $companies = get_option('company');
    $use_company_map = get_option('use_company_map');
    $company_map = "";
    $company_map_class = '';
    
    if(isset($use_company_map) && $use_company_map !== ''){
      $company_map = get_option('company_map');
    }else{
      $company_map_class='no-company-map';
    }

  $icon = 'none';
  $titile = '';
  $ruby = '';
  $bzb_company_header_array = get_option('bzb_company_header');
  if(is_array($bzb_company_header_array)){
    extract($bzb_company_header_array) ;
  }

  ?>

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="far fa-money-bill-alt"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>


  <section id="front-contents-1" class="c_box c_box_left <?php echo $company_map_class; ?>">
    <div class="c_img_box">
      <?php echo $company_map;?>
    </div>

    <div class="wrap">
      <div class="c_box_inner">
        <?php 
        if(isset($companies) && $companies !== ''){
          $i = 1;
          foreach((array)$companies as $key => $company){
            echo '<dl id="front-company-'.$i.'">';
            echo "<dt><span>" . $company['name'] . "</span></dt><dd><span>" . $company['val'] . "</span></dd>";
            echo "</dl>";
            $i++;
          }
        }
        ?>
              <p>※詳しい料金詳細、お見積もりはカウンセリング後にご案内いたします。<br>まずはお問い合わせくださいませ。</p>

      </div>
    </div>
  </section>
</div><!-- front-company -->

<!-- お問い合わせ -->
<div id="front-contact" class="front-main-cont">
  <?php 

  $icon = 0;
  $titile = '';
  $ruby = '';
  $bzb_contact_header_array = get_option('bzb_contact_header');
  if(is_array($bzb_contact_header_array)){
    extract($bzb_contact_header_array) ;
  }

  $bzb_contact_textarea = get_option('bzb_contact_textarea');
  ?>

  <header class="category_title main_title front-cont-header">
    <div class="cont-icon"><i class="<?php echo $icon;?>"></i></div>
    <h2 class="cont-title"><?php echo $title;?></h2>
    <p class="cont-ruby"><?php echo $ruby;?></p>
    <div class="tri-border"><span></span></div>
  </header>

  <section id="front-contents-1" class="c_box c_box_left">
    <div class="wrap">
      <div class="c_box_inner">
        <?php echo $content = apply_filters( 'the_content', $bzb_contact_textarea, 10 ); ?>
      </div>
    </div>
  </section>
</div><!-- front-contact -->


  </div><!-- /main-inner -->
</div><!-- /main -->
  
</div><!-- /content -->
<?php wp_reset_query(); ?>
<?php get_footer(); ?>


