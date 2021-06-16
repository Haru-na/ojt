$(function () {
    $('.img-wrap img:nth-child(n+2)').hide();
    setInterval(function () {
        $(".img-wrap img:first-child").fadeOut(3000);
        $(".img-wrap img:nth-child(2)").fadeIn(3000);
        $(".img-wrap img:first-child").appendTo(".img-wrap");
    }, 3000);

    // ハンバーガー用
    $('.hamburger').on('click', function(){
        $(".burger-btn").toggleClass("close");　//closeというclassを追加/削除
        $(".menu-content").slideToggle(500);  //0.5秒かけてフェードイン/アウト
    });

});
