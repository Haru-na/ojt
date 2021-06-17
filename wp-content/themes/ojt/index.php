<?php get_header(); ?>
    <main>
        <div class="mainbox">
            <!-- <picture class="main-img">
                <source media="(min-width: 768px)" srcset="./img/visual_1_pc.png">
                <img src="./img/visual_1_sp.png" alt="">          
            </picture> -->
             <!-- スライダー -->
            <?php
             echo do_shortcode('[smartslider3 slider="4"]');
            ?>
            <!-- <div class="img-wrap">
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_1_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_1_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_2_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_2_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_3_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_3_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_4_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_4_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_5_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_5_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_6_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_6_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_7_pc.png">
                    <img src="<?php echo get_template_directory_uri();?>/img/visual_7_sp.png" alt=""> 
                </picture>
            </div> -->

            <picture class="main-text">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png">          
                <img src="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" alt="">         
            </picture>
            <div class="comment-box">
                <p>進化し続ける「街」<br>アメリカンビレッジマガジン</p>
            </div>
        </div>
            

    </main>

    <div class="Articles"></div>
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
        <?php endwhile;
    else :
        ?><p>もっと見る</p><?php
    endif;
?></div>
                <!-- <li class="post-blog">
                    <div class="gallery1" data-title="グループ1キャプション">
                        <img src="< echo get_template_directory_uri();?>/img/post_img_2.png" alt="">
                        <p>2018/5/19</p>
                        <p class="subtitle">あのネオンはいつ交換するのか！？観覧<br>車の謎に迫る！</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="グループ1キャプション">
                        <img src="< echo get_template_directory_uri();?>/img/post_img_3.png" alt="">
                        <p>2018/5/18</p>
                        <p class="subtitle">ラソナの社内はこんなのよ</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="グループ1キャプション">
                        <img src="< echo get_template_directory_uri();?>/img/post_img_4.png" alt="">
                        <p>2018/5/17</p>
                        <p class="subtitle">お隣のアラハはハワイ？</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="グループ1キャプション">
                        <img src="< echo get_template_directory_uri();?>/img/post_img_5.png" alt="">
                        <p>2018/5/16</p>
                        <p class="subtitle">なぜテント？ラソナの人に聞いてみた</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="グループ1キャプション">
                        <img src="< echo get_template_directory_uri();?>/img/post_img_6.png" alt="">
                        <p>2018/5/15</p>
                        <p class="subtitle">ベイエリアおしゃれすぎる問題</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>

            </ul>
        </div> -->
</div>
<?php get_footer(); ?>