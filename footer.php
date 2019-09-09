<footer id="footer">
  <div class="footer-01">
    <div class="wrap">

      <div id="footer-brand-area" class="row">
        <div class="footer-logo gr6">
        <?php
        $logo_image = get_option('footer-logo');
          if( isset($logo_image) && $logo_image !== '' ){
        ?>
          <img src="<?php echo get_option('footer-logo');?>" alt="<?php echo get_bloginfo('name'); ?>" />
        <?php
          }else{
            echo get_bloginfo('name');
          }
        ?>
        </div>
        <div class="footer-address gr6">
          <?php echo get_option('footer-address');?>
        </div>
      </div><!-- /footer-brand-area -->

      <div id="footer-content-area" class="row">
        <div id="footer-list-area" class="gr6">
          <div class="row">

      <?php if( has_nav_menu( 'footer_nav' ) ){
      //bzb_get_nav_menu_name();
        echo '<div id="footer-cont-about" class="gr4">';
        echo "<h4>" . get_option('footer_menu_title') . "</ph4>";
        wp_nav_menu(
          array(
            'theme_location'  => 'footer_nav',
            'menu_class'      => '',
            'menu_id'         => 'fnav',
            'container'       => 'nav',
            'items_wrap'      => '<ul id="footer-nav" class="%2$s">%3$s</ul>'
          )
        );
        echo '</div>';
      } //if footer_nav
      ?>

    <?php if( has_nav_menu( 'global_nav' ) ){ ?>

            <div id="footer-cont-content" class="gr4">
              <h4>メニュー</h4>
      <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'global_nav',
            'menu_class'      => 'clearfix',
            'menu_id'         => 'footer-gnav-ul',
            'container'       => 'div',
            'container_id'    => 'footer-gnav-container',
            'container_class' => 'gnav-container'
          )
        );?>
    </div>
    <?php } ?>

            <div id="footer-cont-sns" class="gr4">
              <h4>ソーシャルメディア</h4>
              <?php footer_social_buttons();?>
            </div>
          </div>
        </div>
        <div class="gr6">
          <div class="row">
        <?php
         $facebook_page_url = get_option('facebook_page_url');
         if(isset($facebook_page_url) && $facebook_page_url !== ''){
        ?>
        <div id="footer-facebook" class="gr12 text-right">
            <div class="fb-page" data-href="<?php echo $facebook_page_url;?>" data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $facebook_page_url;?>"><a href="<?php echo $facebook_page_url;?>"><?php echo get_option('site_name');?></a></blockquote></div></div>
        </div>
        <?php } ?>
          </div>
        </div>
      </div>



    </div><!-- /wrap -->
  </div><!-- /footer-01 -->
  <div class="footer-02">
    <div class="wrap">
      <p class="footer-copy">
        © Copyright <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.
      </p>
    </div><!-- /wrap -->
  </div><!-- /footer-02 -->
  <?php
  // }
  ?>
</footer>

<a href="#" class="pagetop"><span><i class="fa fa-angle-up"></i></span></a>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/setting.js"></script>

<script>
(function($){

  jQuery(function() {
    jQuery("#header-fnav").hide();
    jQuery("#header-fnav-area").hover(function(){
      jQuery("#header-fnav").fadeIn('fast');
  }, function(){
    jQuery("#header-fnav").fadeOut('fast');
  });
});


// グローバルナビ-サブメニュー
jQuery(function(){
  jQuery(".sub-menu").css('display', 'none');
  jQuery("#gnav-ul li").hover(function(){
    jQuery(this).children('ul').fadeIn('fast');
  }, function(){
    jQuery(this).children('ul').fadeOut('fast');
  });
});

// トップページメインビジュアル
jQuery(function(){
  h = $(window).height();
  hp = h * .3;
  jQuery('#main_visual').css('height', h + 'px');
  jQuery('#main_visual .wrap').css('padding-top', hp + 'px');
});

jQuery(function(){
	if(window.innerWidth < 768) {
  h = $(window).height();
  hp = h * .2;
  jQuery('#main_visual').css('height', h + 'px');
  jQuery('#main_visual .wrap').css('padding-top', hp + 'px');
	}
});

// sp-nav
jQuery(function(){
  var header_h = $('#header').height();
  jQuery('#gnav-sp').hide();

  jQuery(window).resize(function(){
      var w = $(window).width();
      var x = 991;
      if (w >= x) {
        jQuery('#gnav-sp').hide();
      }
  });

  jQuery('#gnav-sp').css('top', header_h);
  jQuery('#header-nav-btn a').click(function(){
    jQuery('#gnav-sp').slideToggle();
    jQuery('body').append('<p class="dummy"></p>');
  });
  jQuery('body').on('click touchend', '.dummy', function() {
    jQuery('#gnav-sp').slideUp();
    jQuery('p.dummy').remove();
    return false;
  });
});

})(jQuery);

jQuery(document).ready(function(){
		jQuery('.skillbar').each(function(){
			jQuery(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent')
			},7000);
		});
	});

</script>



</body>
</html>
