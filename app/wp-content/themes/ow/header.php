<?php
global $cat;
$c = get_category($cat); //获取当前分类

$fam_id = $c->category_parent; //返回父级分类或最顶级分类的id
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <link href="<?php bloginfo('template_url'); ?>/css/flickerplate.css" type="text/css" rel="stylesheet">
    <!--Include flickerplate(轮播图插件)-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script>
        function search_soym() {
            window.location.href = '/?s=' + $("#search_value").val();
        }

        function search_soym2() {
            window.location.href = '/?s=' + $("#search_value2").val();
        }
    </script>
</head>

<body <?php body_class(); ?>>

<!--导航条-->
<div id="menu-div">
    <nav class="navbar navbar-default" id="header">
        <div class="container-fluid">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header col-md-2" id="menu-logo">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="padding: 0;" class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img id="logo-img" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="东莞消防局">
                    </a>
                </div>
                <div class="container-fluid col-md-8" id="menu-ul">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!--                        <ul class="nav navbar-nav">-->
                        <!--                        --><?php //if (has_nav_menu('primary')) : ?>
                        <!--                            --><?php
                        //                            wp_nav_menu(array(
                        //                                'theme_location' => 'primary',
                        //                                'menu_class' => 'primary-menu',
                        //                            ));
                        //                            ?>
                        <ul class="primary-menu nav navbar-nav">

                            <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-7
                                <?php
                            if (is_front_page() && is_home()) {
                                echo "active";
                            }
                            ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>">首页</a>
                            </li>
                            <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14
                                <?php
                            $c = get_query_var('cat');
                            $slug = get_category($c)->slug;
                            $fam_id = get_category($c)->category_parent;
                            if ($slug == '%e6%b6%88%e9%98%b2%e8%b5%84%e8%ae%af') {
                                echo "active";
                            }
                            ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e8%b5%84%e8%ae%af">消防资讯</a>
                            </li>
                            <li id="menu-item-15"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15
                                <?php
                                if (in_array($fam_id, array(14, 15, 16, 4)) || $slug == '%e6%b6%88%e9%98%b2%e7%9f%a5%e8%af%86') {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e7%9f%a5%e8%af%86">消防知识</a>
                            </li>
                            <li id="menu-item-16"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16 <?php
                                if ($slug == '%e7%bd%91%e7%bb%9c%e8%af%be%e5%ae%a4'||$fam_id == 5) {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e7%bd%91%e7%bb%9c%e8%af%be%e5%ae%a4">网络课室</a>
                            </li>
                            <li id="menu-item-17"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17 <?php
                                if ($slug == '%e6%b6%88%e9%98%b2%e7%a4%be%e5%8c%ba') {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e7%a4%be%e5%8c%ba">消防社区</a>
                            </li>
                            <li id="menu-item-18"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18 <?php
                                if ($slug == '%e9%87%8d%e7%82%b9%e5%8d%95%e4%bd%8d'||is_category(urldecode('重点单位管理规定'))||is_category(urldecode('建筑消防设施检查视频'))
                                    ||is_category(urldecode('精品重点单位示范'))||is_category(urldecode('重点单位消防工作状态'))) {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e9%87%8d%e7%82%b9%e5%8d%95%e4%bd%8d">重点单位</a>
                            </li>
                            <li id="menu-item-26"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26 <?php
                                if ($slug == '%e6%b6%88%e9%98%b2%e9%a3%8e%e9%87%87'||is_category(urldecode('消防员风采'))||is_category(urldecode('消防设备馆'))) {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e9%a3%8e%e9%87%87">消防风采</a>
                            </li>
                            <li id="menu-item-19"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19 <?php
                                if (is_page('服务导航')) {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php //echo esc_url(home_url('/')).urldecode('智网工程'); ?>https://19.104.18.47/mng-web/" target="view_window">智网工程</a>
                            </li>

                            <li id="menu-item-20"
                                class="dropdown <?php
                                if (is_page('微信互动')||is_page('微信约')||is_page('随手拍')||is_page('指尖查')) {
                                    echo "active";
                                }
                                ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>%e5%be%ae%e4%bf%a1%e4%ba%92%e5%8a%a8"
                                   class="dropdown-toggle dropdown-header" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    微信互动
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-li"><a href="<?php echo esc_url(home_url('/')).urldecode('微信约'); ?>">微信约</a></li>
                                    <li class="dropdown-li"><a href="<?php echo esc_url(home_url('/')).urldecode('随手拍'); ?>">随手拍</a></li>
                                    <li class="dropdown-li"><a href="<?php echo esc_url(home_url('/')).urldecode('指尖查'); ?>">指尖查</a></li>
                                </ul>
                            </li>

                            <?php if (is_user_logged_in()): ?>
                                <li id="menu-item-22"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22">
                                    <b>
                                            <span style="color: red">
                                        <?php
                                        global $current_user;
                                        echo $current_user->user_nicename
                                        ?>
                                            </span>
                                    </b>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url(home_url('/')); ?>wp-login.php?action=logout">登出</a>
                                </li>

                            <?php else: ?>
                                <li id="menu-item-21"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
                                    <a href="<?php echo esc_url(home_url('/')); ?>wp-login.php">登陆</a>
                                </li>
                                <li id="menu-item-22"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 ">
                                    <a href="<?php echo esc_url(home_url('/')); ?>wp-login.php?action=register">注册</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <!--                        </ul>-->
                    </div>
                </div>
                <div class="navbar-header col-md-2" id="menu-search">
                    <!--<img src="images/search.png">-->
                    <div class="input-group">
                        <span style="background-color:#fff;" class="input-group-addon" id="basic-addon1"
                              onclick="search_soym()">
                            <span style="color: rgb(224,68,57);" class="glyphicon glyphicon-search"
                                  aria-hidden="true"></span>
                        </span>
                        <input id="search_value" type="text" class="form-control" placeholder="搜索..."
                               aria-describedby="basic-addon1">
                    </div>
                </div>
                <!--                <form role="search" method="get" class="navbar-form navbar-right margin form-hidden"-->
                <!--                      action="--><?php //echo esc_url(home_url('/')); ?><!--">-->
                <!--                    <div class="input-group">-->
                <!--                        <button type="submit" class="search-submit">-->
                <!--                        <span style="background-color:#fff;" class="input-group-addon" id="basic-addon2">-->
                <!--                            <span style="color: rgb(224,68,57);" class="glyphicon glyphicon-search" aria-hidden="true">-->
                <!--                            </span>-->
                <!--                                                    </span>-->
                <!--                        </button>-->
                <!--                        <input type="search" class="form-control search-input-hidden screen-reader-text"-->
                <!--                               placeholder="搜索…" value="" name="s" aria-describedby="basic-addon1">-->
                <!---->
                <!--                    </div>-->
                <!--                </form>-->
            </div>
        </div>
    </nav>
</div>
<!--导航条下面红条-->
<!--<div class="menu-bottom"></div>-->
<!--导航条（当屏幕大小小于770px）-->
<div id="menu-div-hidden">
    <nav class="navbar navbar-default">
        <div style="padding: 10px 0;" class="container-fluid">
            <button type="button" id="button-hidden" class="navbar-toggle collapsed margin">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="margin:0;" class="nav navbar-nav navbar-left">
                <a href="/">
                <img class="logo-img-hidden" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="东莞消防局">
                </a>
            </div>
            <!--            <form class="navbar-form navbar-right margin form-hidden" role="search">-->
            <!--                <div class="input-group">-->
            <!--                        <span style="background-color:#fff;" class="input-group-addon" id="basic-addon2">-->
            <!--                            <span style="color: rgb(224,68,57);" class="glyphicon glyphicon-search" aria-hidden="true">-->
            <!--                            </span>-->
            <!--                        </span>-->
            <!--                    <input type="text" class="form-control search-input-hidden" placeholder="搜索..."-->
            <!--                           aria-describedby="basic-addon1">-->
            <!--                </div>-->
            <!--            </form>-->

            <div class="navbar-header col-md-2" id="menu-search">
                <!--<img src="images/search.png">-->
                <div class="input-group">
                        <span style="background-color:#fff;" class="input-group-addon" id="basic-addon1"
                              onclick="search_soym2()">
                            <span style="color: rgb(224,68,57);" class="glyphicon glyphicon-search"
                                  aria-hidden="true"></span>
                        </span>
                    <input id="search_value2" type="text" class="form-control" placeholder="搜索..."
                           aria-describedby="basic-addon1">
                </div>
            </div>


            <!--                    <button type="submit" class="search-submit input-group-addon">-->
            <!--                                        <span-->
            <!--                                                    class="screen-reader-text">-->
            <!--                    -->
            <?php //echo _x('Search', 'submit button', 'twentysixteen'); ?><!--</span>-->
            <!--                    </button>-->
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="ul-hidden">
            <ul>
                <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-7
                                <?php
                if (is_front_page() && is_home()) {
                    echo "active-hidden";
                }
                ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>">首页</a>
                </li>
                <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14
                                <?php
                $c = get_query_var('cat');
                $slug = get_category($c)->slug;
                $fam_id = get_category($c)->category_parent;
                if ($slug == '%e6%b6%88%e9%98%b2%e8%b5%84%e8%ae%af') {
                    echo "active-hidden";
                }
                ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e8%b5%84%e8%ae%af">消防资讯</a>
                </li>
                <li id="menu-item-15"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15
                                <?php
                    if (in_array($fam_id, array(14, 15, 16, 4)) || $slug == '%e6%b6%88%e9%98%b2%e7%9f%a5%e8%af%86') {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e7%9f%a5%e8%af%86">消防知识</a>
                </li>
                <li id="menu-item-16"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16 <?php
                    if ($slug == '%e7%bd%91%e7%bb%9c%e8%af%be%e5%ae%a4') {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e7%bd%91%e7%bb%9c%e8%af%be%e5%ae%a4">网络课室</a>
                </li>
                <li id="menu-item-17"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17 <?php
                    if ($slug == '%e6%b6%88%e9%98%b2%e7%a4%be%e5%8c%ba') {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e7%a4%be%e5%8c%ba">消防社区</a>
                </li>
                <li id="menu-item-18"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18 <?php
                    if ($slug == '%e9%87%8d%e7%82%b9%e5%8d%95%e4%bd%8d') {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e9%87%8d%e7%82%b9%e5%8d%95%e4%bd%8d">重点单位</a>
                </li>
                <li id="menu-item-26"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26 <?php
                    if ($slug == '%e6%b6%88%e9%98%b2%e9%a3%8e%e9%87%87') {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>archives/category/%e6%b6%88%e9%98%b2%e9%a3%8e%e9%87%87">消防风采</a>
                </li>
                <li id="menu-item-19"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19 <?php
                    if (is_page('服务导航')) {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>%e6%9c%8d%e5%8a%a1%e5%af%bc%e8%88%aa">服务导航</a>
                </li>
                <li id="menu-item-20"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20 <?php
                    if (is_page('微信互动')) {
                        echo "active-hidden";
                    }
                    ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>%e5%be%ae%e4%bf%a1%e4%ba%92%e5%8a%a8">微信互动</a>
                </li>
                <?php if (is_user_logged_in()): ?>
                    <li id="menu-item-22"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22">
                        <b>
                                            <span style="color: red">
                                        <?php
                                        global $current_user;
                                        echo $current_user->user_nicename
                                        ?>
                                            </span>
                        </b>
                    </li>

                <?php else: ?>
                    <li id="menu-item-21"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
                        <a href="<?php echo esc_url(home_url('/')); ?>wp-login.php">登陆</a>
                    </li>
                    <li id="menu-item-22"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 ">
                        <a href="<?php echo esc_url(home_url('/')); ?>wp-login.php?action=register">注册</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>
</div>
<?php if (is_home() || is_front_page()) : ?>
<?php else: ?>
    <div class="topbar"></div>
<?php endif; ?>

<!--<div id="page" class="site">-->
<!--    <div class="site-inner">-->
<!--        <header id="masthead" class="site-header" role="banner">-->
<!--            <div class="site-header-main">-->
<!--                <div class="site-branding">-->
<!---->
<!--                    <!--					--><?php ////if ( is_front_page() && is_home() ) : ?>
<!--                    <!--						<h1 class="site-title"><a href="-->
<!--                    --><?php ////echo esc_url( home_url( '/' ) ); ?><!--<!--" rel="home">-->
<!--                    --><?php ////bloginfo( 'name' ); ?><!--<!--</a></h1>-->
<!--                    <!--					--><?php ////else : ?>
<!--                    <!--						<p class="site-title"><a href="-->
<!--                    --><?php ////echo esc_url( home_url( '/' ) ); ?><!--<!--" rel="home">-->
<!--                    --><?php ////bloginfo( 'name' ); ?><!--<!--</a></p>-->
<!--                    <!--					--><?php ////endif;
//                    //
//                    //					$description = get_bloginfo( 'description', 'display' );
//                    //					if ( $description || is_customize_preview() ) : ?>
<!--                    <!--						<p class="site-description">-->
<?php ////echo $description; ?><!--<!--</p>-->
<!--                    <!--					--><?php ////endif; ?>
<!--                </div><!-- .site-branding -->
<!--            </div><!-- .site-header-main -->
<!--        </header><!-- .site-header -->
<!--        <div id="content" class="site-content">-->
<?php
//$c = get_query_var('cat');
//echo $slug = get_category($c)->slug;
//echo $fam_id = get_category($c)->category_parent;