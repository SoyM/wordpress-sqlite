<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
if (is_page('微信互动')):
    ?>
    <link href="<?php bloginfo('template_url'); ?>/css/weixin.css" type="text/css" rel="stylesheet">
    <div id="main-div" class="container">
        <div class="main-top">
            <span style="white-space:pre;">  </span><span class="line"></span>
            <span style="white-space:pre;">  </span><span class="txt">微信互动</span>
            <span style="white-space:pre;">  </span><span class="line"></span>
        </div>
        <div class="contain-div">
            <div class="row">
                <div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/images/weixin1.png" alt="微信约"></div>
                <div class="col-md-8 contain-text">
                    <span>微信约</span>
                    <p class="margin-top">微信预约身边的消防站</p>
                    <p>方便快捷的操作方式。</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 contain-text margin-right">
                    <span>随手拍</span>
                    <p class="margin-top">随手拍下身边的火灾险情，让消防队员们</p>
                    <p>能第一时间地知晓和到达火灾现场。</p>
                </div>
                <div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/images/weixin1.png" alt="随手拍"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/images/weixin1.png" alt="指尖查"></div>
                <div class="col-md-8 contain-text">
                    <span>指尖查</span>
                    <p class="margin-top">方便快捷查询业务的审批情况，</p>
                    <p>随时随地知晓业务情况。</p>
                </div>
            </div>
            <div class="row QR-row">
                <div class="QR-div">
                    <img src="<?php bloginfo('template_url'); ?>/images/weixin1.png" alt="二维码">
                </div>
                <p>快来扫码关注我们吧</p>
            </div>
        </div>
    </div>
<?php elseif (is_page('服务导航')): ?>
    <link href="<?php bloginfo('template_url'); ?>/css/serviceNavigation.css" type="text/css" rel="stylesheet">
    <!--主要内容-->
    <div id="Navigation-container">
        <div class="container">
            <div class="row">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="http://210.76.69.38:82/JDGG/WWGAListSS.aspx"
                       class="btn btn-default col-md-2 col-sm-6 col-xs-6" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/message.png" alt=""><br>消防监督信息</a>
                    <a href="http://wsbs.gdfire.gov.cn/(X(1)S(3vuglg45wwliwjmue5dwlp55))/ywslindex/accepted.html"
                       class="btn btn-default col-md-2 col-sm-6 col-xs-6" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/work.png" alt=""><br>消防监督业务</a>
                    <a href="http://210.76.69.37/xiaofang/" class="btn btn-default col-md-2 col-sm-6 col-xs-6"
                       target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/report.png" alt=""><br>咨询举报投诉</a>
                    <a href="http://wsbs.gdfire.gov.cn/(X(1)S(3vuglg45wwliwjmue5dwlp55))/ztc/frmtrain.aspx"
                       class="btn btn-default col-md-2 col-sm-6 col-xs-6" target="_blank"><img
                                src="<?php bloginfo('template_url'); ?>/images/project.png" alt=""><br>重点工程项目</a>
                    <a href="http://210.76.69.37/xiaofang/" class="btn btn-default col-md-2 col-sm-6 col-xs-6"
                       target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bulid.png" alt=""><br>社会单位消防</a>
                    <a href="http://px.gdfire.gov.cn/" class="btn btn-default col-md-2 col-sm-6 col-xs-6"
                       target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/knowledge.png" alt=""><br>消防知识技能</a>
                </div>
            </div>
        </div>
    </div>
<?php elseif (is_page('微信约')): ?>
    <link href="<?php bloginfo('template_url'); ?>/css/fireDating.css" type="text/css" rel="stylesheet">
    <div id="main-div" class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-xs-4 row-img">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin01.png" alt="">
            </div>
            <div class="col-md-2 col-xs-4 row-img">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin02.png" alt="">
            </div>
            <div class="col-md-2 col-xs-4 row-img">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin03.png" alt="">
            </div>
            <div class="col-md-6 col-xs-12 row-text">
                <div class="row">
                    <p class="row-text-header">微信约</p>
                    <p>WeChat Reservation</p>
                    <p class="row-text-th"></p>
                </div>
                <div class="row">
                    <img src="<?php bloginfo('template_url'); ?>/images/weixin-QR.jpeg" alt=""><br>
                    <span>扫码关注我们</span>
                </div>
            </div>
        </div>
    </div>

<?php elseif (is_page('随手拍')): ?>
    <link href="<?php bloginfo('template_url'); ?>/css/takeVideo.css" type="text/css" rel="stylesheet">
    <div id="main-div" class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12 row-text">
                <p class="row-text-header">随手拍</p>
                <p>Readily Take Photo</p>
                <div class="row-text-th"></div>
            </div>
            <div class="col-md-2 col-xs-6 row-img">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin04.png" alt="">
            </div>
            <div class="col-md-2 col-xs-6 row-img">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin05.png" alt="">
            </div>
            <div class="col-md-4 col-xs-12  row-QR">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin-QR.jpeg" alt="">
            </div>
        </div>
    </div>
<?php elseif (is_page('指尖查')): ?>
    <link href="<?php bloginfo('template_url'); ?>/css/fireSearch.css" type="text/css" rel="stylesheet">
    <div id="main-div" class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12 row-QR">
                <div class="row-QR-div">
                    <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin-QR.jpeg" alt=""><br>
                    <span>扫码关注我们</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 row-img">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/weixin06.png" alt="">
            </div>
            <div class="col-md-4 col-xs-12 row-text">
                <p class="row-text-header">指尖查</p>
                <p>Fingertip Examination</p>
                <p class="row-text-th"></p>
            </div>
        </div>
    </div>
<?php elseif (is_page('留言板')): ?>
    <div id="main-div" class="container-fluid">
    <?php comments_template(); ?>

    </div>

<?php endif;
echo is_page();
echo wp_title();
?>
<h1>111111</h1>
<!--        --><?php //if ( have_posts() ) : ?>
<!---->
<!--            --><?php
//            // Start the Loop.
//            while ( have_posts() ) : the_post();
//
//                /*
//                 * Include the Post-Format-specific template for the content.
//                 * If you want to override this in a child theme, then include a file
//                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
//                 */
//                get_template_part( 'template-parts/content', get_post_format() );
//
//                // End the loop.
//            endwhile;
//
//            // Previous/next page navigation.
//            the_posts_pagination( array(
//                'prev_text'          => __( 'Previous page', 'twentysixteen' ),
//                'next_text'          => __( 'Next page', 'twentysixteen' ),
//                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
//            ) );
//        endif;
//        ?>


<!--		--><?php
//		// Start the loop.
//		while ( have_posts() ) : the_post();
//
//			// Include the page content template.
//			get_template_part( 'template-parts/content', 'page' );
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) {
//				comments_template();
//			}
//
//			// End of the loop.
//		endwhile;
//		?>

</main><!-- .site-main -->

<!--	--><?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
