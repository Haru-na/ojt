<?php get_header(); ?>
    <main>
        <div class="mainbox">
            <!-- <picture class="main-img">
                <source media="(min-width: 768px)" srcset="./img/visual_1_pc.png">
                <img src="./img/visual_1_sp.png" alt="">          
            </picture> -->
             <!-- スライダー -->
             <div class="slider_pc">
                <?php echo do_shortcode('[smartslider3 slider="4"]');?>
             </div>
             <div class="slider_sp">
                <?php echo do_shortcode('[smartslider3 slider="5"]');?>
             </div>

            <!-- <div class="img-wrap">
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<hp echo get_template_directory_uri();?>/img/visual_1_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_1_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<hp echo get_template_directory_uri();?>/img/visual_2_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_2_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<hp echo get_template_directory_uri();?>/img/visual_3_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_3_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<p echo get_template_directory_uri();?>/img/visual_4_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_4_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<hp echo get_template_directory_uri();?>/img/visual_5_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_5_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<hp echo get_template_directory_uri();?>/img/visual_6_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_6_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<hp echo get_template_directory_uri();?>/img/visual_7_pc.png">
                    <img src="<hp echo get_template_directory_uri();?>/img/visual_7_sp.png" alt=""> 
                </picture>
            </div> -->

            <picture class="main-text">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png">          
                <img src="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" alt="">         
            </picture>
        </div>
        
        <div class="comment-box">
            <p>進化し続ける「街」<br>アメリカンビレッジマガジン</p>
        </div>

    </main>

    <h2>Latest Articles</h2>
    
        <div class="post-blogBox">
        <?php
             if( have_posts() ) :
            while( have_posts() ) :
            the_post(); ?> <!--この下からendwhile;までがループ処理中-->
            <div class="post-blogBox">
                <ul class="post-blogs__meta">
                    <li class="post-blog__meta__item">
                        <div class="gallery1" data-title="グループ1キャプション">
                        <?php the_post_thumbnail(); ?>
                        <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                        <p class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        </div>
                        <div class="rm">
                        <a class="underline" href="/">Read More</a>
                        </div>
                    </li>
                </ul>
            </div>
<!-- ここからもっと見る対応したい -->


        <?php endwhile;
    else:
        ?><p>表示する記事がありません</p><?php
    endif;
    ?></div>
</div><!--class=bodyの閉じタグ-->
<?php get_footer(); ?>