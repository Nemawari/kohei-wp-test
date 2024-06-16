<?php get_header(); ?>
    <main>
        <section id="mainvisual">
            <div class="main-img">
                <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/profile-img/IMG_0585.JPG" alt="メイン写真">
                <div class="site-title">
                    <h2 class="name">KOHEI NEMAWARI</h2>
                    <h2 class="site-t">PORTFOLIO SITE</h2>
                </div>
            </div>
            <div class="main-img-r">
                <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/profile-img/profile-r.png" alt="メイン写真">
                    <h2 class="name">KOHEI NEMAWARI</h2>
                    <h2 class="site-t">PORTFOLIO SITE</h2>
            </div>
            <div class="sns">
                <h6>SNS</h6>
                <ul class="sns-black">
                    <li><a href="https://twitter.com/web_kouhei" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/Twitter.png" alt="Twitter"></a></li>
                    <li><a href="https://www.instagram.com/dp_uw1214x/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/insta.png" alt="insta"></a></li>
                </ul>
                <ul class="sns-white">
                    <li><a href="https://twitter.com/web_kouhei" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/Twitter-f.png" alt="Twitter"></a></li>
                    <li><a href="https://www.instagram.com/dp_uw1214x/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/insta-f.png" alt="insta"></a></li>
                </ul>
            </div>
        </section>

        <section id="work">
            <div class="sec-t sec-t-anime">
                <h3><span class="line">WORKS</span></h3>
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
        <section id="about">
            <div class="sec-t">
                <h3><span class="line">ABOUT</span></h3>
            </div>
            <div class="prf-content">
                <div class="prf">
                    <h2>根廻　康平<span class="prf-en"><span class="myou">NEMAWARI</span> <span class="mei">KOHEI</span></span></h2>
                </div>
                <div class="prf-flex">
                    <div class="text1">
                        <p class="p-1">1994年生まれ。宮城県大崎市出身。仙台コミュニケーションアート専門学校 調理師科卒業後、調理師として3年間勤める。その間、趣味の写真撮影からAdobeソフトを触れ始め、次第に画像加工を行うようになり2022年からweb制作の業界に興味が湧き学習を開始。<br>
                        <p class="p-2">過去の職歴にて調理師や製造業での経験から細かい作業を得意とし、デザイン制作の面でも細かい作成・修正作業で活かせています。</p>
                        <p class="p-3">前職にてPHP・JavaScriptを、メンターを使用してのHTML/CSS・jQuery中心としたコーディング学習・Photoshopを使用してのバナー作成・XDを使用してワイヤーフレームからのデザイン作成について学ぶ。</p>
                    </div>
                    <div class="posi">
                        <div class="prf-content2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/IMG_0582.JPG" alt="プロフィール写真">
                        </div>
                    </div>
                </div>
                <div class="button">
                    <a href="about.html" class="btn btn-green btn-width"><span class="btn-t2">VIEW PROFILE</span></a>
                </div>
            </div>
        </section>

        <section id="skill">
            <div class="sec-t">
                <h3><span class="line">SKILL</span></h3>
            </div>
            <div class="skill-flex">
                <div class="skill-content">
                    <h3>Design</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/Online_articles.png" alt="デザイン">
                        <p class="block">
                            お客様からのご要望をしっかりとヒアリングを行い、その想いを形にして行くため実現に向けて対象と同じ業界やテイストが近いデザイン・フォントを調べながら知識として次に活かせるようインプットを行い分析しつつ、デザイン制作を行っています。 
                        </p>
                    <div class="tool-block">
                        <h3 class="tool tool2"><span class="line">使用言語・ツール</span></h3>
                        <p class="code-block">Photoshop / Illustrator / Adobe XD / Figma</p>
                    </div>
                </div>
                <div class="skill-content">
                    <h3 class="skill-t">Coding</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile-img/Programming.png" alt="コーディング">
                    <p class="block block2">
                        HTML/CSS/jQueryでページを作成することが可能です。適宜コメントを残し、後に改修・メンテナンスのしやすいコードを書くように心がけています。 WordPressについては、Cocoon・welcartを使用しての制作を実務で行なっていました。
                    </p>
                    <div class="tool-block">
                        <h3 class="tool"><span class="line">使用言語・ツール</span></h3>
                        <p class="code-block code-block2">HTML / CSS / jQuery / JavaScript / Laravel
                            GitHub / Visual Studio Code / WordPress</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
