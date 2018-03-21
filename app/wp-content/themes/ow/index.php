<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if (is_home() || is_front_page()) : ?>
<link href="<?php bloginfo('template_url'); ?>/css/index.css" type="text/css" rel="stylesheet">
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="flicker-example banner-top" data-block-text="false">
            <ul>
                <li data-background="http://p2hg1e59p.bkt.clouddn.com/dg119/banner.jpg"></li>
                <li data-background="http://p2hg1e59p.bkt.clouddn.com/dg119/banner1.jpg"></li>
                <li data-background="http://p2hg1e59p.bkt.clouddn.com/dg119/banner2.jpg"></li>
            </ul>
        </div>
        <div style="display: none" class="flicker-example" data-block-text="false"></div>
        <!--主要内容-->
        <div id="main-div" class="container-fluid">
            <!-- 消防咨询 -->
            <div class="row">
                <div class="col-md-6 banner-news-div">
                    <div class="flicker-example banner-news" data-block-text="false">
                        <ul>
                            <li data-background="<?php bloginfo('template_url'); ?>/images/banner-news.png">
                                <!--<div class="flick-title">Flickerplate Is Working</div>-->
                                <!--<div class="flick-sub-text">Heaven forbid this package you downloaded is broken. That wouldn't be embarrassing at all.</div>-->
                            </li>
<!--                            <li data-background="http://p2hg1e59p.bkt.clouddn.com/dg119/banner.jpg"></li>-->
<!--                            <li data-background="--><?php //bloginfo('template_url'); ?><!--/images/banner.jpg"></li>-->
                        </ul>
                    </div>
                    <div class="row">
                        <div class="btn-group banner-news-btn" role="group" aria-label="...">
                            <a href="http://210.76.69.38:82/JDGG/WWGAListSS.aspx"
                               class="btn btn-default col-md-2 col-sm-2 col-xs-4"
                               target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/message.png" alt=""><br>消防监督信息
                            </a>
                            <a href="http://wsbs.gdfire.gov.cn/(X(1)S(3vuglg45wwliwjmue5dwlp55))/ywslindex/accepted.html"
                               class="btn btn-default col-md-2 col-sm-2 col-xs-4" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/work.png" alt=""><br>消防监督业务
                            </a>
                            <a href="http://210.76.69.37/xiaofang/" class="btn btn-default col-md-2 col-sm-2 col-xs-4"
                               target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/report.png" alt=""><br>咨询举报投诉
                            </a>
                            <a href="http://wsbs.gdfire.gov.cn/(X(1)S(3vuglg45wwliwjmue5dwlp55))/ztc/frmtrain.aspx"
                               class="btn btn-default col-md-2 col-sm-2 col-xs-4" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/project.png" alt=""><br>重点工程项目
                            </a>
                            <a href="http://210.76.69.37/xiaofang/" class="btn btn-default col-md-2 col-sm-2 col-xs-4"
                               target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/bulid.png" alt=""><br>社会单位消防
                            </a>
                            <a href="http://px.gdfire.gov.cn/" class="btn btn-default col-md-2 col-sm-2 col-xs-4"
                               target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/knowledge.png" alt=""><br>消防知识技能
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tab-news">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tab-news-ul" role="tablist">
                        <li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab"
                                                                  data-toggle="tab">火灾警示</a></li>
                        <li role="presentation"><a href="#today" aria-controls="today" role="tab"
                                                   data-toggle="tab">今日头条</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                   data-toggle="tab">公示公告</a></li>
<!--                        <li role="presentation"><a href="#warning" aria-controls="warning" role="tab" data-toggle="tab">实时火警</a>-->
<!--                        </li>-->
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tab-news-content">
                        <div role="tabpanel" class="tab-pane active" id="news">
                            <ul class="list-group">
                                <?php query_posts('cat=7&showposts=8'); ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <li class="list-group-item">
                                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                                            <span class="badge">
                                                <?php the_time('Y-m-d') ?>
                                            </span>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="today">
                            <ul class="list-group">
                                <?php query_posts('cat=15&showposts=7'); ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <li class="list-group-item">
                                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                                            <span class="badge">
                                                <?php the_time('Y-m-d') ?>
                                            </span>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <ul class="list-group">
                                <?php query_posts('cat=18&showposts=6'); ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <li class="list-group-item">
                                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                                            <span class="badge">
                                                <?php the_time('Y-m-d') ?>
                                            </span>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
<!--                        <div role="tabpanel" class="tab-pane" id="warning">-->
<!--                            <ul class="list-group">-->
<!--                                --><?php //query_posts('cat=24&showposts=7'); ?>
<!--                                --><?php //if (have_posts()) : ?>
<!--                                    --><?php //while (have_posts()) : the_post(); ?>
<!--                                        <li class="list-group-item">-->
<!--                                            <a href="--><?php //the_permalink() ?><!--" rel="bookmark">--><?php //the_title(); ?><!--</a>-->
<!--                                            <span class="badge">-->
<!--                                                --><?php //the_time('Y-m-d') ?>
<!--                                            </span>-->
<!--                                        </li>-->
<!--                                    --><?php //endwhile; ?>
<!--                                --><?php //endif; ?>
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div style="background-color:#E04439;" class="row">
                <div style="padding: 0;" class="col-md-8">
                    <img width="100%" src="http://p2hg1e59p.bkt.clouddn.com/dg119/index01.png" alt="">
                </div>
                <div class="col-md-4 tip-right">
                    <div class="hr"></div>
                    <h1>消防知识</h1>
                    <h1>.FIRE PROTECTION </h1>
                    <h1>KNOWLEDGE</h1>
                    <br>
                    <div class="btn-group tip-right-btngroup" role="group" aria-label="...">
                        <button type="button"
                                onclick="window.location='<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防法律规范'); ?>'"
                                class="btn btn-default">消防法律规范
                        </button>
                        <button type="button"
                                onclick="window.location='<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('公众消防知识'); ?>'"
                                class="btn btn-default">公众消防知识
                        </button>
                        <button type="button"
                                onclick="window.location='<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('行业消防知识'); ?>'"
                                class="btn btn-default">行业消防知识
                        </button>
                    </div>
                    <br>
                    <a href="/archives/category/<?php echo urldecode('消防知识'); ?>">
                        <img src="http://p2hg1e59p.bkt.clouddn.com/dg119/arrow.png" alt="">
                    </a>
                </div>
            </div>
            <div style="padding: 30px;" class="row">
                <p class="tab-class-header">网络课堂</p>
                <div class="tab-class">
                    <div class="tab-content tab-class-content">
                        <div role="tabpanel" class="tab-pane active" id="class-all">
                            <div class="row">
                                <?php query_posts('cat=22&showposts=3'); ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail tab-class-img">
                                                <a href="<?php the_permalink() ?>">
                                                    <?php if (has_post_thumbnail()) {
                                                        the_post_thumbnail(array(260, 160));
                                                    } else {
                                                        echo '<img src="';
                                                        bloginfo('template_url');
                                                        echo '/images/law.png" class="img-responsive"/>';
                                                    }
                                                    ?></a>
                                                <div class="caption">
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color:#E04439;" class="row">
                <div class="col-md-4 tip-right">
                    <div class="hr"></div>
                    <h1>消防社区</h1>
                    <h1>.FIRE FIGHTING </h1>
                    <h1>COMMUNITY</h1>
                    <br>
                    <div class="btn-group tip-right-btngroup" role="group" aria-label="...">
                        <button type="button" class="btn btn-default">隐患举报</button>
                        <button type="button" class="btn btn-default">有问必答</button>
                        <button type="button" class="btn btn-default">体验中心</button>
                        <button type="button" class="btn btn-default">体验中心</button>
                    </div>
                    <br>
                    <a href="/archives/category/%e6%b6%88%e9%98%b2%e7%a4%be%e5%8c%ba">
                        <img src="http://p2hg1e59p.bkt.clouddn.com/dg119/arrow.png" alt="">
                    </a>
                </div>
                <div style="padding: 0;" class="col-md-8">
                    <img width="100%" src="http://p2hg1e59p.bkt.clouddn.com/dg119/index02.png" alt="">
                </div>
            </div>
            <div style="padding: 30px;" class="row">
                <p class="tab-class-header">重点单位</p>
                <div class="tab-class-hr"></div>
                <div class="row">
                    <?php query_posts('cat=13&showposts=3'); ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail tab-class-img">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail(array(260, 160));
                                        } else {
                                            echo '<img src="';
                                            bloginfo('template_url');
                                            echo '/images/law.png" class="img-responsive"/>';
                                        }
                                        ?></a>
                                    <div class="caption">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div style="background-color:#E04439;" class="row">
                <div style="padding: 0;" class="col-md-8">
                    <img width="100%" src="http://p2hg1e59p.bkt.clouddn.com/dg119/index03.jpg" alt="">
                </div>
                <div class="col-md-4 tip-right">
                    <div class="hr"></div>
                    <h1>消防风采</h1>
                    <h1>.FIRE</h1>
                    <h1>DEMEANOR</h1>
                    <h3>每个消防员都是超级英雄</h3>
                    <br>
                    <a href="/archives/category/%e6%b6%88%e9%98%b2%e9%a3%8e%e9%87%87"><img
                                src="http://p2hg1e59p.bkt.clouddn.com/dg119/arrow.png" alt=""></a>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <!--	<div id="primary" class="content-area">-->
        <!--		<main id="main" class="site-main" role="main">-->
        <!---->
        <!--		--><?php //if ( have_posts() ) : ?>
        <!---->
        <!--			--><?php //if ( is_home() && ! is_front_page() ) : ?>
        <!--				<header>-->
        <!--					<h1 class="page-title screen-reader-text">--><?php //single_post_title(); ?><!--</h1>-->
        <!--				</header>-->
        <!--			--><?php //endif; ?>
        <!---->
        <!--			--><?php
        //			// Start the loop.
        //			while ( have_posts() ) : the_post();
        //
        //				/*
        //				 * Include the Post-Format-specific template for the content.
        //				 * If you want to override this in a child theme, then include a file
        //				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        //				 */
        //				get_template_part( 'template-parts/content', get_post_format() );
        //
        //			// End the loop.
        //			endwhile;
        //
        //			// Previous/next page navigation.
        //			the_posts_pagination( array(
        //				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
        //				'next_text'          => __( 'Next page', 'twentysixteen' ),
        //				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
        //			) );
        //
        //		// If no content, include the "No posts found" template.
        //		else :
        //			get_template_part( 'template-parts/content', 'none' );
        //
        //		endif;
        //		?>
        <!---->
        <!--		</main><!-- .site-main -->
        <!--	</div><!-- .content-area -->
        <!---->
        <?php //get_sidebar(); ?>
        <?php get_footer(); ?>
