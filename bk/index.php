<?php get_header(); ?>



<?php if ( is_mobile() ) : ?>
<!--SP-->
<div class="main_v wideslider">
<ul>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_sp_01.jpg" width="980" height="450" alt="メインスライド"></li>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_sp_02.jpg" width="980" height="450" alt="メインスライド"></li>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_sp_03.jpg" width="980" height="450" alt="メインスライド"></li>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_sp_04.jpg" width="980" height="450" alt="メインスライド"></li>
</ul>

<div class="caption">
<div class="inner">
<img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj.png" alt="沼津市・三島市" width="734" height="587" />
</div>
</div>

</div>
<!--//SP-->
<?php else: ?>
<!--PC-->
<div class="main_v wideslider">
<ul>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_01.jpg" alt="メインスライド"></li>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_02.jpg" alt="メインスライド"></li>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_03.jpg" alt="メインスライド"></li>
<li class="slide"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bg_04.jpg" alt="メインスライド"></li>
</ul>

<div class="caption">
<div class="inner">
<div class="keyvj_bnr">
<a href="<?php bloginfo('url'); ?>/raiten"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bnr01.png" alt="来店予約キャンペーン" width="259" height="209" /></a>
<a href="<?php bloginfo('url'); ?>/event"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bnr02.png" alt="イベント情報" width="259" height="209" /></a>
<a href="http://www.iwasakihome.jp/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj_bnr03.png" alt="イワサキホーム" width="259" height="209" /></a>
</div>
<img src="<?php bloginfo('template_directory'); ?>/image_top/keyvj.png" alt="沼津市・三島市" width="734" height="587" class="f-l" />
</div>
</div>

</div>
<!--//PC-->
<?php endif; ?>

<?php if ( is_mobile() ) : ?>
<div id="sp_top_bnr_area">
<a href="<?php bloginfo('url'); ?>/event"><img src="<?php bloginfo('template_directory'); ?>/image_top/sp_top_bnr01.png" alt="イベント情報" width="375" height="299" class="harf f-l" /></a>
<a href="http://www.iwasakihome.jp/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/image_top/sp_top_bnr02.png" alt="お問い合わせ" width="375" height="299" class="harf f-l" /></a>
<a href="<?php bloginfo('url'); ?>/raiten"><img src="<?php bloginfo('template_directory'); ?>/image_top/sp_top_bnr03.png" alt="来店予約" width="750" height="239" /></a>
</div>
<br clear="all">
<?php else: ?>
<?php endif; ?>

<div id="<?php if ( is_mobile() ) : ?>sp_<?php else: ?><?php endif; ?>main_contents">

<?php if ( is_mobile() ) : ?>
<?php sp_contact_banner(); ?>
<?php else: ?>
<?php endif; ?>


<!-- ===== イベント情報 ===== -->
<div class="event_arc">
<div class="inner">
<h2><img src="<?php bloginfo('template_directory'); ?>/image_top/event_tit.png" alt="イベント情報" width="420" height="40" />
<?php if ( is_mobile() ) : ?>
<?php else: ?>
<a href="<?php bloginfo('url'); ?>/event" class="arc_btn">イベント一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
<?php endif; ?></h2>

<?php
	$args = array(
	'post_type' => 'event', /* 投稿タイプを指定 */
	'paged' => $paged,		/* ページ番号を指定 */
	'posts_per_page' => 1,		/* 最大表示数 */
);
query_posts( $args );
?>

<?php
$i = 0;
$x = 0;
while ( have_posts() ): the_post();
?>

<!-- ループ開始 -->
<div class="one_box">

<?php if(post_custom( 'event_img00' )){ ?>

<div class="pict">
<a href="<?php the_permalink(); ?>">
<?php
echo gr_get_image(
'event_img00',
array( 'width' => '375', 'alt' => esc_attr( post_custom( 'event_img_alt01' ) ) ));?><? } ?>
</a>
<a href="<?php the_permalink(); ?>" class="more_btn">詳しく見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
</div>

<div class="jyoho">
<ul>
<li class="event_title"><?php the_title(); ?></li>
<li class="event_data">
開&nbsp;&nbsp;催&nbsp;&nbsp;日：<?php echo post_custom( 'event_date' ); ?><br />
時　　間：<?php echo post_custom( 'event_time' ); ?>
</li>
<li class="event_gairyaku"><?php echo mb_substr(nl2br(post_custom( 'event_summary' )),0,70); ?>...</li>
</ul>
</div>

<br clear="all">

</div>
<!-- //ループ終了 -->

<?php
$i++;
endwhile;
?>

<?php if ( is_mobile() ) : ?>
<a href="<?php bloginfo('url'); ?>/event" class="sp_arc_btn">イベント一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a><br clear="all">
<?php else: ?>
<?php endif; ?>

<div class="two_box">
<a href="<?php bloginfo('url'); ?>/iecafe"><img src="<?php bloginfo('template_directory'); ?>/image_page/iecafe/cafe_tit.jpg" alt="家カフェ" width="720" height="414" /></a>
</div>

</div>
</div>
<!-- ===== //イベント情報 ===== -->


<!-- ===== 施工事例 ===== -->
<div class="seko_arc">
<div class="inner">
<h2><img src="<?php bloginfo('template_directory'); ?>/image_top/seko_tit.png" alt="リノベーション施工事例" width="590" height="40" />
<?php if ( is_mobile() ) : ?>
<?php else: ?>
<a href="<?php bloginfo('url'); ?>/renov" class="arc_btn">施工事例一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
<?php endif; ?></h2>
<h3><img src="<?php bloginfo('template_directory'); ?>/image_top/seko_sub_tit.png" alt="大規模リフォーム・リノベーション" width="413" height="31" /></h3>

<?php
	$args = array(
	'post_type' => 'renov', /* 投稿タイプを指定 */
	'paged' => $paged,		/* ページ番号を指定 */
	'posts_per_page' => 3,		/* 最大表示数 */
);
query_posts( $args );
?>

<?php
$i = 0;
$x = 0;
while ( have_posts() ): the_post();
?>


<!-- ループ開始 -->
<div class="one_box">
<a href="<?php the_permalink(); ?>" >
<?php
if(post_custom('renov_after_image')){
echo gr_get_image( 'renov_after_image', array( 'width' => 340, 'alt' => get_the_title() ) );
}
?>
</a>
<div class="one_con">
<?php if ( is_mobile() ) : ?>
<p class="title">
<?php if(mb_strlen($post->post_title)>16) { $title= mb_substr($post->post_title,0,16) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
</p>
<?php else: ?>
<p class="title">
<?php if(mb_strlen($post->post_title)>40) { $title= mb_substr($post->post_title,0,46) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
</p>
<?php endif; ?>

<?php if ( is_mobile() ) : ?>
<?php if(post_custom( 'renov_name' )){ ?>
<p class="place">
<?php
    $pattern = '/(^.{14})(.+)/u';
    $subject = post_custom('renov_name');
    $matches = array();
    preg_match($pattern, $subject , $matches);
    if ($matches[2] != '') {
        $out = $matches[1] . '…';
    } else {
        $out = $subject;
    }
    echo($out);
?>
</p>
<? } ?>

<?php else: ?>
<?php if(post_custom( 'renov_name' )){ ?>
<p class="place">
<?php
    $pattern = '/(^.{46})(.+)/u';
    $subject = post_custom('renov_name');
    $matches = array();
    preg_match($pattern, $subject , $matches);
    if ($matches[2] != '') {
        $out = $matches[1] . '…';
    } else {
        $out = $subject;
    }
    echo($out);
?>
</p>
<? } ?>

<?php endif; ?>

<?php if ( is_mobile() ) : ?>
<?php if(post_custom( 'renov_comment' )){ ?>
<p class="comment">
<?php
    $pattern = '/(^.{22})(.+)/u';
    $subject = post_custom('renov_comment');
    $matches = array();
    preg_match($pattern, $subject , $matches);
    if ($matches[2] != '') {
        $out = $matches[1] . '…';
    } else {
        $out = $subject;
    }
    echo($out);
?>
</p>
<? } ?>

<?php else: ?>
<?php if(post_custom( 'renov_comment' )){ ?>
<p class="place">
<?php
    $pattern = '/(^.{37})(.+)/u';
    $subject = post_custom('renov_comment');
    $matches = array();
    preg_match($pattern, $subject , $matches);
    if ($matches[2] != '') {
        $out = $matches[1] . '…';
    } else {
        $out = $subject;
    }
    echo($out);
?>
</p>
<? } ?>

<?php endif; ?>
</div>
<div class="more_btn_box">
<a href="<?php the_permalink(); ?>" class="more_btn">詳しく見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
</div>
</div>
<!-- //ループ終了 -->

<?php
$i++;
endwhile;
?>

<?php if ( is_mobile() ) : ?>
<a href="<?php bloginfo('url'); ?>/renov" class="sp_arc_btn">施工事例一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a><br clear="all">
<?php else: ?>
<?php endif; ?>
</div>
</div>
<!-- ===== //施工事例 ===== -->


<!-- ===== リノベーションを検討中の方へ ===== -->
<div class="renovation_top">
<div class="inner">
<h2>リノベーションを検討中の方へ</h2>
<p class="sub_title">Renovation</p>
<a href="<?php bloginfo('url'); ?>/merit"><img src="<?php bloginfo('template_directory'); ?>/image_top/renovation_btn01.png" alt="新築と中古リノベ　どっちが良いの？" width="358" height="362" /></a>
<a href="<?php bloginfo('url'); ?>/onestop"><img src="<?php bloginfo('template_directory'); ?>/image_top/renovation_btn02.png" alt="物件探しからはじめたい！" width="358" height="362" /></a>
<?php if ( is_mobile() ) : ?>
<br clear="all">
<?php else: ?>
<?php endif; ?>
<a href="<?php bloginfo('url'); ?>/#"><img src="<?php bloginfo('template_directory'); ?>/image_top/renovation_btn03.png" alt="インスぺクション" width="358" height="444" /></a>
<a href="<?php bloginfo('url'); ?>/cyuko_renov"><img src="<?php bloginfo('template_directory'); ?>/image_top/renovation_btn04.png" alt="中古住宅リノベーションって？" width="358" height="362" /></a>
<br clear="all">
</div>
</div>
<!-- ===== //リノベーションを検討中の方へ ===== -->

<?php if ( is_mobile() ) : ?>
<?php sp_contact_banner(); ?>
<?php else: ?>
<?php endif; ?>

<!-- ===== バナー群 ===== -->
<div class="bnr_group">
<a href="<?php bloginfo('url'); ?>/pet_renov"><img src="<?php bloginfo('template_directory'); ?>/image_top/bnr_pet.jpg" alt="ペットリノベーション" width="710" height="200" /></a>
<a href="<?php bloginfo('url'); ?>/nagare"><img src="<?php bloginfo('template_directory'); ?>/image_top/bnr_nagare.jpg" alt="リノベーションの流れ" width="710" height="200" /></a>
</div>
<p class="top_bnr">
<?php if ( is_mobile() ) : ?>
	<a href="<?php bloginfo('url'); ?>/line"><img src="<?php bloginfo('template_directory'); ?>/image_top/line_bnr_sp.png" alt="ラインでお問い合わせ" width="640" height="235"/></a>
<?php else: ?>
	<a href="<?php bloginfo('url'); ?>/line"><img src="<?php bloginfo('template_directory'); ?>/image_top/line_bnr_pc.png" alt="ラインでお問い合わせ" width="1020" height="165"/></a>
<?php endif; ?>
</p>
<!-- //===== バナー群 ===== -->



<!-- ===== 社長コラム ===== -->
<div class="top_colum">

<div class="inner">
<?php
	$args = array(
	'post_type' => 'colum', /* 投稿タイプを指定 */
	'paged' => $paged,		/* ページ番号を指定 */
	'posts_per_page' => 3,		/* 最大表示数 */
);
query_posts( $args );
?>

<?php
$i = 0;
$x = 0;
while ( have_posts() ): the_post();
?>

<!-- ループ開始 -->
<?php if ( is_mobile() ) : ?>
<a href="<?php the_permalink(); ?>" >
<div class="box">
	<div class="pict"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="60" /></div>
	<p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
	<h3>
	<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>&nbsp;<?php if(mb_strlen($post->post_title)>6) { $title= mb_substr($post->post_title,0,6) ; echo $title. ･･･ ;
	} else {echo $post->post_title;}?>
	</h3>
	<p>
	<?php echo mb_substr(strip_tags($post-> post_content),0,10) . '...'; ?>
	</p>
	<div class="more_btn_box_02">
	<a href="<?php the_permalink(); ?>" class="more_btn">詳しく見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
	</div>
	<br clear="all">
</a>
</div>
<br clear="all">
<?php else: ?>
<a href="<?php the_permalink(); ?>">
<div class="box">
	<div class="pict"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="140" /></div>
	<p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
	<h3>
	<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>&nbsp;<?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,22) ; echo $title. ･･･ ;
	} else {echo $post->post_title;}?>
	</h3>
	<p class="f-r mr2">
	<?php echo mb_substr(strip_tags($post-> post_content),0,80) . '...'; ?>
	</p>
	<div class="more_btn_box_02">
	<a href="<?php the_permalink(); ?>" class="more_btn">詳しく見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
	</div>
	<br clear="all">
</a>
</div>
<?php endif; ?>
<!-- //ループ終了 -->
<?php
$i++;
endwhile;
?>
</div>





<div class="more_btn_box">
<a href="/colum" class="more_btn"><img src="<?php bloginfo('template_directory'); ?>/image_page/colum/colum_bnr_morebtn.png" alt="もっとコラムを見る" width="634" height="43"/></a>
</div>
<br clear="all">

<div class="count">
<?php
$numposts = $wpdb->get_var("SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'colum'");
?>
<p><?php if (0 < $numposts){
    $numposts = number_format($numposts);
    echo '<span class="read">鋭意執筆中</span><span class="num">' . $numposts . '</span><span class="unit">件</span>';
}
?>
</p>
</div>

</div>
<!-- ===== //社長コラム ===== -->



<!-- ===== お客様の声 ===== -->
<div class="voice_arc">
<div class="inner">
<h2><img src="<?php bloginfo('template_directory'); ?>/image_top/voice_tit.png" alt="お客様の声" width="360" height="40" />
<?php if ( is_mobile() ) : ?>
<?php else: ?>
<a href="<?php bloginfo('url'); ?>/voice" class="arc_btn">お客様の声一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
<?php endif; ?></h2>

<?php
	$args = array(
	'post_type' => 'voice', /* 投稿タイプを指定 */
	'paged' => $paged,		/* ページ番号を指定 */
	'posts_per_page' => 6,		/* 最大表示数 */
);
query_posts( $args );
?>

<?php
$i = 0;
$x = 0;
while ( have_posts() ): the_post();
?>

<!-- ループ開始 -->
<div class="one_box">

<div class="pict">
<a href="<?php the_permalink(); ?>">
<?php
if(post_custom('voice_main_img')){
echo gr_get_image( 'voice_main_img', array( 'width' => 340, 'alt' => get_the_title() ) );
}
?>
</a>
</div>

<?php if ( is_mobile() ) : ?>
<p class="title">
<?php if(mb_strlen($post->post_title)>16) { $title= mb_substr($post->post_title,0,16) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
</p>
<?php else: ?>
<p class="title">
<?php if(mb_strlen($post->post_title)>40) { $title= mb_substr($post->post_title,0,46) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
</p>
<?php endif; ?>

<?php if ( is_mobile() ) : ?>
<?php if(post_custom( 'voice_name' )){ ?>
<p class="place">
<?php
    $pattern = '/(^.{6})(.+)/u';
    $subject = post_custom('voice_name');
    $matches = array();
    preg_match($pattern, $subject , $matches);
    if ($matches[2] != '') {
        $out = $matches[1] . '…';
    } else {
        $out = $subject;
    }
    echo($out);
?>
</p>
<? } ?>

<?php else: ?>
<?php if(post_custom( 'voice_name' )){ ?>
<p class="place">
<?php
    $pattern = '/(^.{46})(.+)/u';
    $subject = post_custom('voice_name');
    $matches = array();
    preg_match($pattern, $subject , $matches);
    if ($matches[2] != '') {
        $out = $matches[1] . '…';
    } else {
        $out = $subject;
    }
    echo($out);
?>
</p>
<? } ?>

<?php endif; ?>
<p class="comment">


<?php if ( is_mobile() ) : ?>
<?php echo mb_substr(nl2br(post_custom( 'voice_comment' )),0,15); ?>...
<?php else: ?>
<?php echo mb_substr(nl2br(post_custom( 'voice_comment' )),0,38); ?>...
<?php endif; ?>

</p>
<div class="more_btn_box">
<a href="<?php the_permalink(); ?>" class="more_btn">詳しく見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
</div>
</div>
<!-- //ループ終了 -->

<?php
$i++;
endwhile;
?>
<?php wp_reset_query(); ?>

<?php if ( is_mobile() ) : ?>
<a href="<?php bloginfo('url'); ?>/voice" class="sp_arc_btn">お客様の声一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a><br clear="all">
<?php else: ?>
<?php endif; ?>
</div>
</div>
<!-- ===== //お客様の声 ===== -->

<!-- ===== ブログとインスタ ===== -->
<div class="b_and_i">
<!-- ===== ブログ ===== -->
<div class="top_blog">

<?php if ( is_mobile() ) : ?>
<h2><img src="<?php bloginfo('template_directory'); ?>/image_top/blog_tit.png" alt="スタッフブログ" width="710" height="90" /></h2>
<?php else: ?>
<h2><img src="<?php bloginfo('template_directory'); ?>/image_top/blog_tit_top.png" alt="スタッフブログ" width="1040" height="90" /></h2>
<?php endif; ?>

<?php
	$args = array(
	'post_type' => 'staff_blog', /* 投稿タイプを指定 */
	'paged' => $paged,		/* ページ番号を指定 */
	'posts_per_page' => 8,		/* 最大表示数 */
);
query_posts( $args );
?>
<div class="inner">
<?php
$i = 0;
$x = 0;
while ( have_posts() ): the_post();
?>

<!-- ループ開始 -->

<div class="box">
<a href="<?php the_permalink(); ?>">
<span class="pic"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" width="250"></span>
<span class="tit">
<?php if ( is_mobile() ) : ?>
<?php if(mb_strlen($post->post_title)>16) { $title= mb_substr($post->post_title,0,16) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
<?php else: ?>
<?php if(mb_strlen($post->post_title)>40) { $title= mb_substr($post->post_title,0,46) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
</a>
<?php endif; ?>
</span>
</div>

<!-- //ループ終了 -->

<?php
$i++;
endwhile;
?>
</div>
<div class="pc_top_blog_kari">
<a href="<?php bloginfo('url'); ?>/staff_blog" class="arc_btn_revers">ブログ一覧を見る&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
</div>

<br clear="all">

</div>
<!-- ===== //ブログ ===== -->
<!-- ===== インスタ ===== -->
<!--
<div class="top_instagram">
<h2><img src="<?php bloginfo('template_directory'); ?>/image_top/instagram_tit.png" alt="インスタグラム" width="710" height="90" />
-->

<?php if ( is_mobile() ) : ?>
<!-- InstaWidget -->
<!--
<a href="https://instawidget.net/v/user/zoukacom" id="link-d0e32133beb1fd86bc066ccc8ad776bdb00efe8aa7d678e07fd2db9dad495b88">@zoukacom</a>
<script src="https://instawidget.net/js/instawidget.js?u=d0e32133beb1fd86bc066ccc8ad776bdb00efe8aa7d678e07fd2db9dad495b88&width=310px"></script>
-->
<?php else: ?>
<!-- InstaWidget -->
<!--
<a href="https://instawidget.net/v/user/zoukacom" id="link-e03a25d96cadab746e2ea28afd4a09a3db8c6da0f1d23ca9c155ce708d913d83">@zoukacom</a>
<script src="https://instawidget.net/js/instawidget.js?u=e03a25d96cadab746e2ea28afd4a09a3db8c6da0f1d23ca9c155ce708d913d83&width=450px"></script>
-->
<?php endif; ?>

<!--
<a href="" class="arc_btn_revers"><i>Instagram</i>をフォローする&nbsp;&nbsp;<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></a>
-->

<!--
</div>
-->
<!-- ===== //インスタ ===== -->

</div>
<!-- ===== //ブログとインスタ ===== -->

<!-- ===== ABOUT US ===== -->
<div class="aboutus_box">
<h2>ABOUT US<br /><span>イワサキホームについて</span></h2>
<div class="inner">
<p>
イワサキホームでは、細かなリフォームから大型リフォーム・リノベーションまで対応しております。イワサキホームは「お客様の理想を叶えるために」、そして常にお客様目線を忘れないスタッフが集まった会社です。
</p>
<p>
例えば、「こだわりを沢山考えているけど、難しいと他社で断られてしまった」という方、イワサキホームにご相談下さい！お客様のご希望・ご要望をとことんお伺いし、可能な方法をご提案いたします！それができるのは、それぞれが知識と経験を持ち、純和風建築から現代モダンな建築・洋風などどんな家にも対応し、お客様の理想を叶えることができる柔軟な思考と豊富なアイデアを持っているイワサキホームだから。だからこそ、世界に１つだけのお客様の家が出来、新しい暮らしをご提案できるのです。
</p>
<p>
イワサキホームに、あなたの住まいを任せてみませんか？
</p>
</div>
</div>
<!-- ===== //ABOUT US ===== -->

</div>

<?php get_footer(); ?>
