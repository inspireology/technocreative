<?php get_header(); ?>
<div id="gallery-container">
    <div id="featured-posts" class="column">
        <img src="<?= bloginfo('template_url') ?>/images/wranglers_cover.jpg" id="cover-image">
        <div class="single-post-title"> <h1><? the_title() ?></h1> </div>
    </div>
</div>
<div id="page-content" class="column blog-post">
    <?php

    while ( have_posts() ) : the_post();

        /*
         * Include the post format-specific template for the content. If you want to
         * use this in a child theme, then include a file called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */

        //TODO: get_template_part( 'template-parts/post/content', get_post_format() );

        //TODO: get_template_part( 'content', get_post_format() );
        the_content(null, true);
        // If comments are open or we have at least one comment, load up the comment template.
        /*
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        -->

        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );
        */

        // End the loop.
    endwhile;

    //TODO:List based navigation of posts
    //List relevant posts
    /*
    the_post_navigation( array(
        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
        'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
    ) );
    */

    ?>
<?php get_footer(); ?>
