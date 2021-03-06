<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ojt.css">
    <title>AmericanVillage</title>
</head>

<body>
    <div class="body">
    <header class="top">
        <div class="header-left">
            <a href="">
                <img src="./img/logo.png" alt="" class="logo">
            </a>
        </div>

        <div class="header-right">
            <div class="menu">
                <input type="checkbox" name="hamburger" id="hamburger" class="hamburger">
                <label for="hamburger" class="btn">
                <span class="icon"></span>
                </label>
                <nav class="menu-content">
                    <ul class="menu">
                        <li class="menu-item"><a href="">Menu01</a></li>
                        <li class="menu-item"><a href="">Menu02</a></li>
                        <li class="menu-item"><a href="">Menu03</a></li>
                        <li class="menu-item"><a href="">Menu04</a></li>
                    </ul>   
                </nav>
        </div>
    </header>

    <main>
        <div class="mainbox">
            <!-- <picture class="main-img">
                <source media="(min-width: 768px)" srcset="./img/visual_1_pc.png">
                <img src="./img/visual_1_sp.png" alt="">          
            </picture> -->

            <div class="img-wrap">
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_1_pc.png">
                    <img src="./img/visual_1_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_2_pc.png">
                    <img src="./img/visual_2_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_3_pc.png">
                    <img src="./img/visual_3_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_4_pc.png">
                    <img src="./img/visual_4_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_5_pc.png">
                    <img src="./img/visual_5_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_6_pc.png">
                    <img src="./img/visual_6_sp.png" alt=""> 
                </picture>
                <picture class="main-img">
                    <source media="(min-width: 768px)" srcset="./img/visual_7_pc.png">
                    <img src="./img/visual_7_sp.png" alt=""> 
                </picture>
            </div>

            <picture class="main-text">
                <source media="(min-width: 768px)" srcset="./img/visual_text_pc.png">          
                <img src="./img/visual_text_sp.png" alt="">         
            </picture>
        </div>
            
            <div class="comment-box">
                <p>???????????????????????????<br>???????????????????????????????????????</p>
            </div>

    </main>

    <div class="Articles"></div>
    <h2>Latest Articles</h2>
    
        <div class="post-blogBox">
            <ul class="post-blogs">
                <li class="post-blog">
                    <div class="gallery1" data-title="????????????1??????????????????">
                        <img src="./img/post_img_1.png" alt="">
                        <p>2018/5/20</p>
                        <p class="subtitle">???????????????????????????????????????</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="????????????1??????????????????">
                        <img src="./img/post_img_2.png" alt="">
                        <p>2018/5/19</p>
                        <p class="subtitle">?????????????????????????????????????????????????????????<br>?????????????????????</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="????????????1??????????????????">
                        <img src="./img/post_img_3.png" alt="">
                        <p>2018/5/18</p>
                        <p class="subtitle">????????????????????????????????????</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="????????????1??????????????????">
                        <img src="./img/post_img_4.png" alt="">
                        <p>2018/5/27</p>
                        <p class="subtitle">?????????????????????????????????</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="????????????1??????????????????">
                        <img src="./img/post_img_5.png" alt="">
                        <p>2018/5/16</p>
                        <p class="subtitle">???????????????????????????????????????????????????</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>
                <li class="post-blog">
                    <div class="gallery1" data-title="????????????1??????????????????">
                        <img src="./img/post_img_6.png" alt="">
                        <p>2018/5/15</p>
                        <p class="subtitle">??????????????????????????????????????????</p>
                    </div>
                    <div class="rm">
                        <a class="underline" href="/">Read More</a>
                    </div>
                </li>

            </ul>
        </div>
    
    
</div>
        <footer class="footer">
            <p class="footer__copyright">Copyright <small>&copy; Shinohara. ALL RIGHTS RESERVED.</small></p>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>