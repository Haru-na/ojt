<!--もっと見る-->
<?php
if (5< count_user_posttype(get_the_author_meta('ID'),"post")) { ?>
    <p class="more_btn"><?php the_author_posts_link(); ?></p>
<?php }?>