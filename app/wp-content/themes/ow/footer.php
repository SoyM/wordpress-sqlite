<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div><!-- .site-content -->

<!--<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--    --><?php //if (has_nav_menu('primary')) : ?>
<!--        <nav class="main-navigation" role="navigation"-->
<!--             aria-label="--><?php //esc_attr_e('Footer Primary Menu', 'twentysixteen'); ?><!--">-->
<!--            --><?php
//            wp_nav_menu(array(
//                'theme_location' => 'primary',
//                'menu_class' => 'primary-menu',
//            ));
//            ?>
<!--        </nav><!-- .main-navigation -->
<!--    --><?php //endif; ?>
<!---->
<!--</footer><!-- .site-footer -->
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

<!--底部栏-->
<div id="footer" class="container-fluid">
    <div class="row row-footer">
        <div class="col-md-2 img-footer">
            <div class="img-footer-div">
                <img src="http://p3nrt4fwm.bkt.clouddn.com/dg119/logo.png" alt="">
            </div>
        </div>
        <div class="col-md-8 center-footer">
            <p class="center-footer-header">友情链接</p>
            <p class="center-footer-a">
                <a href="http://www.119.gov.cn">公安部消防局</a>&nbsp;&nbsp;
                <a href="http://119.china.com.cn/">中国消防在线</a>&nbsp;&nbsp;
                <a href="http://epaper.cpd.com.cn/xfzk/">人民公安部消防周刊</a>&nbsp;&nbsp;
                <a href="http://tv.cntv.cn/videoset/C12492">中国消防网络电视</a>&nbsp;&nbsp;
                <a href="http://www.gdfire.gov.cn/">广东消防局</a>
            </p>
            <br>
            <p class="p-footer-header">©2015-2018 广东东莞消防大本营 All Rights Reserved. 版权所有 广东省东莞市公安消防局</p>
            <p class="p-footer-header">广东省东莞市公安消防局承办 <a
                        href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44190002000258">粤ICP备13011560号-18</a>
            </p>
        </div>
        <div class="col-md-2 us-footer">
            <div class="us-footer-div">
                <span>关注我们：</span><br>
                <a><img src="<?php bloginfo('template_url'); ?>/images/weixin.png" data-toggle="modal" data-target="#weixinModal" alt="东莞消防局微信"></a>
                <a><img src="<?php bloginfo('template_url'); ?>/images/weibo.png" data-toggle="modal" data-target="#weiboModal" alt="东莞消防局微博"></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="weixinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">东莞消防局微信</h4>
            </div>
            <div class="modal-body">
                <img style="width: 100%" src="<?php bloginfo('template_url'); ?>/images/dg119wexin.png" alt="东莞消防局微信">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="weiboModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">东莞消防局微博</h4>
            </div>
            <div class="modal-body">
                <img style="width: 100%" src="<?php bloginfo('template_url'); ?>/images/dg119weibo.png" alt="东莞消防局微博">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php bloginfo('template_url'); ?>/script/menuSlide.js"></script>
<script src="<?php bloginfo('template_url'); ?>/script/jquery-v1.10.2.min.js" type="text/javascript"></script><!--轮播图-->
<script src="<?php bloginfo('template_url'); ?>/script/modernizr-custom-v2.7.1.min.js"
        type="text/javascript"></script><!--轮播图-->
<script src="<?php bloginfo('template_url'); ?>/script/jquery-finger-v0.1.0.min.js"
        type="text/javascript"></script><!--轮播图-->
<script src="<?php bloginfo('template_url'); ?>/script/flickerplate.min.js" type="text/javascript"></script><!--轮播图-->
<script>
    $(document).ready(function () {
        $('.flicker-example').flicker();
    });
</script>
</html>


