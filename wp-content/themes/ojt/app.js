$(function(){
    $('.img-wrap img:nth-child(n+2)').hide();
    setInterval(function() {
    $(".img-wrap img:first-child").fadeOut(3000);
    $(".img-wrap img:nth-child(2)").fadeIn(3000);
    $(".img-wrap img:first-child").appendTo(".img-wrap");
    }, 3000);
});