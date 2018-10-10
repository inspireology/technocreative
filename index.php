<?php get_header(); ?>
<div id="gallery-container">
    <div id="featured-posts" class="column">
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/14.jpg"><div class="featured-title">CG &amp;<br>Design Gallery</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/02.jpg"><div class="featured-title">User Interface<br>Design Gallery</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/03.jpg"><div class="featured-title">PHP Development</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/04.jpg"><div class="featured-title">Installing Bootcamp<br>on a Mac Mini</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/05.jpg"><div class="featured-title">My CS193P Answers</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/06.jpg"><div class="featured-title">Tokyo Event Scraper</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/07.jpg"><div class="featured-title">Physically Based Rendering in Blender</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/08.jpg"><div class="featured-title">SuperKotoba</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/09.jpg"><div class="featured-title">Affinity Designer</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/10.jpg"><div class="featured-title">Affinity Photo &amp; HDRI</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/15.jpg"><div class="featured-title">Ye Olde inspireology</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/01.jpg"><div class="featured-title">Affinity Designer &amp;<br>Affinity Photo</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/11.jpg"><div class="featured-title">Affinity Photo &amp; HDRI</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/12.jpg"><div class="featured-title">Ye Olde inspireology</div></a></div>
        <div class="featured-post"><a href="#"><img src="<?= bloginfo('template_url') ?>/images/thumbnails/13.jpg"><div class="featured-title-see-more"><span>See More<br>Featured<br>Posts<br><img src="<?= bloginfo('template_url') ?>/images/down-double-arrow.png"></span></div></a></div>
    </div>
</div>
<div id="page-content" class="column regular-text">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><a href="<?= get_post_permalink()?>"><?php the_title() ?></a></h1>
    <? the_excerpt() ?>
<?php endwhile; else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
