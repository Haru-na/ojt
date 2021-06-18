$(function(){
    console.log($('.img-wrap picture:nth-child(n+2)'));
    $('.img-wrap picture:nth-child(n+2)').hide();
    setInterval(function() {
    $(".img-wrap picture:first-child").fadeOut(3000);
    $(".img-wrap picture:nth-child(2)").fadeIn(3000);
    $(".img-wrap picture:first-child").appendTo(".img-wrap");
    }, 3000);

    // もっと見る
    $(document) .ready(function() {
        $('.more_btn a').html("もっと見る");
    });
	
});