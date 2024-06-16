<?php get_header(); ?>
<main>
    <section id="work-archive">
        <div class="sec-t sec-t-anime">
            <h3><span class="line">WORKS ARCHIVE</span></h3>
        </div>
        <div class="works-content">
            <?php
            $args = array(
                'post_type' => 'work',
                'posts_per_page' => -1
            );
            $work_query = new WP_Query($args);
            if ($work_query->have_posts()) :
                while ($work_query->have_posts()) : $work_query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                    <article class="original">
                        <div class="content">
                            <div class="original-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                                <?php endif; ?>
                            </div>
                            <p class="title"><?php the_title(); ?></p>
                        </div>
                    </article>
                </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No works found</p>';
            endif;
            ?>
        </div>
        <div class="button">
            <a href="<?php echo get_post_type_archive_link('work'); ?>" class="btn btn-green"><span class="btn-t">VIEW MORE</span></a>
            <div class="line-01"></div>
            <div class="line-02"></div>
        </div>
    </section>
</main>
<?php get_footer(); ?>