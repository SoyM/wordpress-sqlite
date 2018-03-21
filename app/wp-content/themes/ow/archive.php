<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
global $cat;
$c = get_category($cat); //获取当前分类
//var_dump($c);
$fam_id = $c->category_parent; //返回父级分类或最顶级分类的id
if (is_category(urldecode('消防资讯'))):
    ?>
    <link href="<?php bloginfo('template_url'); ?>/css/fireInformation.css" type="text/css" rel="stylesheet">
    <div class="container-fluid" id="main-div">
        <div class="row">
            <div class="col-md-6 banner-news-div">
                <div class="flicker-example banner-news" data-block-text="false">
                    <ul>
                        <li data-background="<?php bloginfo('template_url'); ?>/images/banner-news.png">
                            <!--<div class="flick-title">Flickerplate Is Working</div>-->
                            <!--<div class="flick-sub-text">Heaven forbid this package you downloaded is broken. That wouldn't be embarrassing at all.</div>-->
                        </li>
                    </ul>
                </div>
                <div class="btn-group banner-news-btn" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">
                        <a href="http://210.76.69.38:82/JDGG/WWGAListSS.aspx">
                            <img src="<?php bloginfo('template_url'); ?>/images/message.png" alt="">
                        </a><br>消防监督信息
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href="http://wsbs.gdfire.gov.cn/(X(1)S(3vuglg45wwliwjmue5dwlp55))/ywslindex/accepted.html">
                            <img src="<?php bloginfo('template_url'); ?>/images/work.png" alt=""></a><br>消防监督业务
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href="http://210.76.69.37/xiaofang/">
                            <img src="<?php bloginfo('template_url'); ?>/images/report.png" alt=""></a><br>咨询举报投诉
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href="http://wsbs.gdfire.gov.cn/(X(1)S(3vuglg45wwliwjmue5dwlp55))/ztc/frmtrain.aspx">
                            <img src="<?php bloginfo('template_url'); ?>/images/project.png" alt="">
                        </a><br>重点工程项目
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href="http://210.76.69.37/xiaofang/">
                            <img src="<?php bloginfo('template_url'); ?>/images/bulid.png" alt="">
                        </a><br>社会单位消防
                    </button>
                    <button type="button" class="btn btn-default">
                        <a href="http://px.gdfire.gov.cn/">
                            <img src="<?php bloginfo('template_url'); ?>/images/knowledge.png" alt="">
                        </a><br>消防知识技能
                    </button>
                </div>
            </div>
            <div class="col-md-6 tab-news">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-news-ul" role="tablist">
<!--                    <li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab"-->
<!--                                                              data-toggle="tab">实时火警</a></li>-->
                    <li role="presentation" class="active"><a href="#warning" aria-controls="warning" role="tab"
                                               data-toggle="tab">火灾警示</a>
                    </li>
                    <li role="presentation"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">今日头条</a>
                    </li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                               data-toggle="tab">公示公告</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tab-news-content">
                    <div role="tabpanel" class="tab-pane active" id="news">
                        <ul class="list-group">
                            <?php query_posts('cat=7&showposts=9'); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group-item">
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><span
                                                class="badge"><?php the_time('Y-m-d') ?></span>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="today">
                        <ul class="list-group">
                            <?php query_posts('cat=15&showposts=9'); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group-item">
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><span
                                                class="badge"><?php the_time('Y-m-d') ?></span>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <ul class="list-group">
                            <?php query_posts('cat=18&showposts=9'); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <li class="list-group-item">
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><span
                                                class="badge"><?php the_time('Y-m-d') ?></span>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
<!--                    <div role="tabpanel" class="tab-pane" id="warning">-->
<!--                        <ul class="list-group">-->
<!--                            --><?php //query_posts('cat=24&showposts=9'); ?>
<!--                            --><?php //if (have_posts()) : ?>
<!--                                --><?php //while (have_posts()) : the_post(); ?>
<!--                                    <li class="list-group-item">-->
<!--                                        <a href="--><?php //the_permalink() ?><!--" rel="bookmark">--><?php //the_title(); ?><!--</a><span-->
<!--                                                class="badge">--><?php //the_time('Y-m-d') ?><!--</span>-->
<!--                                    </li>-->
<!--                                --><?php //endwhile; ?>
<!--                            --><?php //endif; ?>
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <div style="padding: 20px" class="row">
            <?php query_posts('cat=22&showposts=4'); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail tab-class-img">
                            <a href="<?php the_permalink() ?>">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="';
                                    bloginfo('template_url');
                                    echo '/images/law.png" class="img-responsive"/>';
                                }
                                ?></a>
                            <div class="caption">
                                <h3><?php the_title(); ?></h3>
                                <!--                                <p>我们一起学消防</p>-->
                                <!--                                <p>我们一起学消防<span class="pull-right glyphicon glyphicon-eye-open"></span></p>-->
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    </div>

    <?php
elseif (is_category(urldecode('消防知识')) || in_array($fam_id, [2, 17, 32, 9])):
    ?>
    <link href="<?php bloginfo('template_url'); ?>/css/knowledgebase.css" type="text/css" rel="stylesheet">
    <div class="konwledgebase-main">
        <div class="container">
            <img src="http://p3nrt4fwm.bkt.clouddn.com/knowledgebase.png" class="img-responsive"
                 alt="Responsive image" style="margin:20px 0 10px 0;">
            <div class="knowledge-container">
                <div class="knowledge-title">
                    <ul class="row knowledge-choose-ul">
                        <li class="col-xs-12 col-sm-4">
                            <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防法律规范'); ?>"
                                <?php if (is_category('消防法律规范') || is_category(urldecode('法律法规')) || is_category(urldecode('行政法规')) || is_category(urldecode('规范标准'))) {
                                    echo 'class="selected"';
                                } ?>>消防法律规范</a>

                            <ul>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('法律法规'); ?>">法律法规</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('行政法规'); ?>">行政法规</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('规范标准'); ?>">规范标准</a>
                                </li>
                            </ul>
                        </li>
                        <li class="col-xs-12 col-sm-4">
                            <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('公众消防知识'); ?>"
                                <?php if ((is_category('公众消防知识')) || is_category(urldecode('消防常识')) || is_category(urldecode('消防视频')) || is_category(urldecode('消防动漫'))) {
                                    echo 'class="selected"';
                                } ?>>公众消防知识</a>
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防常识'); ?>">消防常识</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防视频'); ?>">消防视频</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防动漫'); ?>">消防动漫</a>
                                </li>
                            </ul>
                        </li>
                        <li class="col-xs-12 col-sm-4">
                            <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('行业消防知识'); ?>"
                                <?php if ((is_category('行业消防知识')) || is_category(urldecode('学校')) || is_category(urldecode('宾馆')) || is_category(urldecode('医院'))
                                    || is_category(urldecode('商场')) || is_category(urldecode('其他'))) {
                                    echo 'class="selected"';
                                }
                                ?>>行业消防知识</a>
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('学校'); ?>">学校</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('宾馆'); ?>">宾馆</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('医院'); ?>">医院</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('商场'); ?>">商场</a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('其他'); ?>">其他</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="knowledge-list">
                    <div class="row">
                        <?php if (is_category(urldecode('重点单位'))) {
                            query_posts('cat=22&showposts=8');
                        } else {
                            query_posts('cat=' . get_query_var('cat') . '&showposts=8');
                        }
                        ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-xs-12 col-sm-3 mb-20">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail(array(260, 160));
                                        } else {
                                            echo '<img width="260" height="160" src="';
                                            bloginfo('template_url');
                                            echo '/images/law.png" class="img-responsive" class="attachment-260x160 size-260x160 wp-post-image" />';
                                        }
                                        ?>
                                    </a>
                                    <h5><?php the_title(); ?></h5>
                                    <div class="date-view">
                                        <p>2015-12-26</p>
                                        <div class="view-people">
                                            <img src="<?php bloginfo('template_url'); ?>/images/view.png"/>
                                            <p>4545</p>
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
    <script>
        $(document).ready(function () {
            $('.knowledge-choose-ul li').mouseover(function () {
                $(this).children("ul").show();
            });
            $(".knowledge-choose-ul li").mouseout(function () {
                $(this).children("ul").hide();
            });
        });
    </script>

    <?php
elseif (is_category('%e7%bd%91%e7%bb%9c%e8%af%be%e5%ae%a4') || $fam_id == 8):
    ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/searchresult.css">
    <!-- 搜索结果主要内容 -->
    <div class="searchresult-main">
        <div class="container">
            <div class="flicker-example" data-block-text="false">
                <ul>
                    <li data-background="http://p3nrt4fwm.bkt.clouddn.com/dg119/banner.jpg"></li>
                    <li data-background="http://p3nrt4fwm.bkt.clouddn.com/dg119/banner.jpg"></li>
                    <li data-background="http://p3nrt4fwm.bkt.clouddn.com/dg119/banner.jpg"></li>
                </ul>
            </div>
            <div class="searchresult-container">
                <!-- 搜索结果选择 -->
                <div class="searchresult-choice">
                    <div class="partition">
                        <p>分区：</p>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('网络课室'); ?>" <?php if (is_category(urldecode('网络课室'))) {
                                    echo 'class="selected"';
                                } ?>>全部</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('视频资源'); ?>" <?php if (is_category(urldecode('视频资源'))) {
                                    echo 'class="selected"';
                                } ?>>视频资源</a></li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('图文教程'); ?>" <?php if (is_category(urldecode('图文教程'))) {
                                    echo 'class="selected"';
                                } ?>>图文教育</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('宣传动漫'); ?>" <?php if (is_category(urldecode('宣传动漫'))) {
                                    echo 'class="selected"';
                                } ?>>宣传动漫</a>
                            </li>
                        </ul>
                    </div>
                    <!--                    <div class="classify">-->
                    <!--                        <p>行业：</p>-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#" class="selected">全部</a></li>-->
                    <!--                            <li><a href="#">学校</a></li>-->
                    <!--                            <li><a href="#">酒店</a></li>-->
                    <!--                            <li><a href="#">商店</a></li>-->
                    <!--                            <li><a href="#">企业</a></li>-->
                    <!--                            <li><a href="#">医院</a></li>-->
                    <!--                            <li><a href="#">三小场所</a></li>-->
                    <!--                            <li><a href="#">生产企业</a></li>-->
                    <!--                            <li><a href="#">住宅</a></li>-->
                    <!--                            <li><a href="#">其他</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                    <div class="time">-->
                    <!--                        <p>时间：</p>-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#" class="selected">全部</a></li>-->
                    <!--                            <li><a href="#">一天内</a></li>-->
                    <!--                            <li><a href="#">一周内</a></li>-->
                    <!--                            <li><a href="#">一月内</a></li>-->
                    <!--                            <li><a href="#">三个月内</a></li>-->
                    <!--                            <li><a href="#">一年内</a></li>-->
                    <!--                            <li><a href="#">更早</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>
                <!-- 搜索结果显示 -->

                <div style="padding: 20px" class="row">
                    <?php if (is_category(urldecode('网络课室'))) {
                        query_posts('cat=38&showposts=8');
                    } else {
                        query_posts('cat=' . get_query_var('cat') . '&showposts=8');
                    }
                    ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-sm-3 col-xs-12">
                                <div class="thumbnail tab-class-img">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
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


    <?php
elseif (is_category('消防社区')):
    ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/community.css">
    <div class="community-main">
        <div class="container">
            <img src="http://p3nrt4fwm.bkt.clouddn.com/community.png" class="img-responsive"
                 alt="Responsive image" style="margin:20px 0 10px 0;">
            <div class="community-container">
                <!-- 体验中心 -->
                <div class="community-container-title mb-20">
                    <h4>体验中心</h4>
                    <a href="#" class="community-container-more">
                        <img src="<?php bloginfo('template_url'); ?>/images/more.png" class="img-responsive"/>
                        <p>更多</p>
                    </a>
                </div>
                <div class="row">
                    <?php query_posts('cat=16&showposts=4'); ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) :
                            the_post(); ?>
                            <div class="col-xs-12 col-sm-3 mb-20">
                                <a href="<?php the_permalink() ?>">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail(array(260, 160));
                                    } else {
                                        echo '<img src="';
                                        bloginfo('template_url');
                                        echo '/images/law.png" class="img-responsive"/>';
                                    }
                                    ?></a>
                                <h5><?php the_title(); ?></h5>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- 游戏中心 -->
                <div class="community-container-title mb-20">
                    <h4>游戏中心</h4>
                    <a href="#" class="community-container-more">
                        <img src="<?php bloginfo('template_url'); ?>/images/more.png" class="img-responsive"/>
                        <p>更多</p>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 mb-20">
                        <img src="<?php bloginfo('template_url'); ?>/images/law.png" class="img-responsive"/>
                        <h5>厚街消防教育培训基地</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3 mb-20">
                        <img src="<?php bloginfo('template_url'); ?>/images/law.png" class="img-responsive"/>
                        <h5>厚街消防教育培训基地</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3 mb-20">
                        <img src="<?php bloginfo('template_url'); ?>/images/law.png" class="img-responsive"/>
                        <h5>厚街消防教育培训基地</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3 mb-20">
                        <img src="<?php bloginfo('template_url'); ?>/images/law.png" class="img-responsive"/>
                        <h5>厚街消防教育培训基地</h5>
                    </div>
                </div>
                <!-- 互动问答&有问有答 -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="community-container-title mb-20">
                            <h4>互动问答</h4>
                        </div>
                        <?php query_posts('cat=14&showposts=5'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) :
                                the_post(); ?>
                                <a href="<?php the_permalink() ?>">
                                    <div class="community-answer">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="community-container-title mb-20">
                            <h4>有问有答</h4>
                            <!--                            <a href="#" class="community-container-more">-->
                            <!--                                <img src="--><?php //bloginfo('template_url');
                            ?><!--/images/more.png" class="img-responsive"/>-->
                            <!--                                <p>更多</p>-->
                            <!--                            </a>-->
                        </div>
                        <?php query_posts('cat=28&showposts=5'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) :
                                the_post(); ?>
                                <a href="<?php the_permalink() ?>">
                                    <div class="community-answer">
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
elseif ($fam_id == 11 || is_category('重点单位')):?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/keyunit.css">
    <div class="keyunit-main">
        <div class="container">
            <img src="http://p3nrt4fwm.bkt.clouddn.com/mien.png" class="img-responsive"
                 alt="Responsive image"
                 style="margin:20px 0 10px 0;">
            <div class="keyunit-container">
                <div class="row keyunit-title">
                    <div class="col-xs-12 col-sm-3">
                        <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('重点单位管理规定'); ?>"
                           <?php if (is_category('重点单位管理规定') || is_category('重点单位')): ?>class="selected"<?php endif; ?>>重点单位管理规定</a>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('建筑消防设施检查视频'); ?>"
                           <?php if (is_category('建筑消防设施检查视频')): ?>class="selected"<?php endif; ?>>建筑消防设施检查视频</a>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('精品重点单位示范'); ?>"
                           <?php if (is_category('精品重点单位示范')): ?>class="selected"<?php endif; ?>>精品重点单位示范</a>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('重点单位消防工作状态'); ?>"
                           <?php if (is_category('重点单位消防工作状态')): ?>class="selected"<?php endif; ?>>重点单位消防工作状态</a>
                    </div>
                </div>

                <div class="keyunit-list">
                    <div class="row">
                        <?php if (is_category(urldecode('重点单位'))) {
                            query_posts('cat=13&showposts=8');
                        } else {
                            query_posts('cat=' . get_query_var('cat') . '&showposts=8');
                        }
                        ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-xs-12 col-sm-3 mb-20">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail(array(260, 160));
                                        } else {
                                            echo '<img src="';
                                            bloginfo('template_url');
                                            echo '/images/law.png" class="img-responsive"/>';
                                        }
                                        ?></a>
                                    <h5><?php the_title(); ?></h5>
                                    <div class="date-view">
                                        <p><?php the_time('Y-m-d') ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
elseif (is_category('消防风采') || in_array($fam_id, [5])):
    ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mien.css">
    <div class="mien-main">
        <div class="container">
            <img src="http://p3nrt4fwm.bkt.clouddn.com/mien.png" class="img-responsive"
                 alt="Responsive image"
                 style="margin:20px 0 10px 0;">
            <div class="mien-container">
                <div class="row mien-title">
                    <div class="col-xs-12 col-sm-3"></div>
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防员风采'); ?>">
                        <div class="col-xs-12 col-sm-3 fire-mien">
                            <p <?php if (is_category('消防风采') || is_category('消防员风采')) {
                                echo 'class="selected"';
                            } ?>>消防员风采</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/<?php echo urldecode('消防设备馆'); ?>">
                        <div class="col-xs-12 col-sm-3 fire-device">
                            <p <?php if (is_category('消防设备馆')) {
                                echo 'class="selected"';
                            } ?>>消防设备展馆</p>
                        </div>
                    </a>
                    <div class="col-xs-12 col-sm-3"></div>
                </div>

                <div class="fire-mien-list">
                    <div class="row">
                        <?php
                        if (is_category('消防设备馆')) {
                            query_posts('cat=34&showposts=4');
                        } else
                            query_posts('cat=30&showposts=4'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-sm-3 col-xs-12">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail(array(260, 160));
                                        } else {
                                            echo '<img src="';
                                            bloginfo('template_url');
                                            echo '/images/logo.png" class="img-responsive"/>';
                                        }
                                        ?></a>
                                    <h5><?php the_title(); ?></h5>
                                    <div class="date-view">
                                        <p><?php the_time('Y-m-d') ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php endif; ?>

    <!--	<div id="primary" class="content-area">-->
    <!--		<main id="main" class="site-main" role="main">-->
    <!---->
    <!--		--><?php //if ( have_posts() ) : ?>
    <!---->
    <!--			<header class="page-header">-->
    <!--				--><?php
//					the_archive_title( '<h1 class="page-title">', '</h1>' );
//					the_archive_description( '<div class="taxonomy-description">', '</div>' );
//				?>
    <!--			</header><!-- .page-header -->
    <!---->
    <!--			--><?php
//			// Start the Loop.
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
    <!--		</main><!-- .site-main -->
    <!--	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>