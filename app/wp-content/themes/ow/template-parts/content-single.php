<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/infodetail.css">
<div class="infodetail-main">
    <div class="container">
        <div class="infodetail-container">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                </header><!-- .entry-header -->

                <?php //twentysixteen_excerpt(); ?>
                <?php //twentysixteen_post_thumbnail(); ?>

                <footer class="entry-footer">
                    <?php //twentysixteen_entry_meta(); ?>
                    <?php
                    edit_post_link(
                        sprintf(
                        /* translators: %s: Name of current post */
                            __('Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen'),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer><!-- .entry-footer -->


                <!-- 若资讯内容为文章 -->
                <div class="infodetail-article">
                    <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages(array(
                                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentysixteen') . '</span>',
                                'after' => '</div>',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>%',
                                'separator' => '<span class="screen-reader-text">, </span>',
                            ));

//                            if ('' !== get_the_author_meta('description')) {
//                                get_template_part('template-parts/biography');
//                            }
                            ?>
                    </div><!-- .entry-content -->
                </div>
            </article><!-- #post-## -->
        </div>


