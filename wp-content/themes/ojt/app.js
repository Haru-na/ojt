$(function(){
    console.log($('.img-wrap picture:nth-child(n+2)'));
    $('.img-wrap picture:nth-child(n+2)').hide();
    setInterval(function() {
    $(".img-wrap picture:first-child").fadeOut(3000);
    $(".img-wrap picture:nth-child(2)").fadeIn(3000);
    $(".img-wrap picture:first-child").appendTo(".img-wrap");
    }, 3000);



    // もっと見る
    /* 表示させる要素の総数をlengthメソッドで取得*/
    var $numberLisetLen = $(".post-blogBox li").length;
    // console.log($numberLisetLen);

    /*デフォルトの表示数*/
    var defaultNum = 6;
    /*ボタンクリックで追加表示させる数*/
    var addNum = 3;
    /* 現在の表示数*/
    var currentNum = 6;

    $(".post-blogBox").each(function() {
        // moreボタンを表示
        $(this).find(".list-btn").show();
    
        // defaultNumの数だけ要素を表示
        // defaultNumよりインデックスが大きい要素は隠す
        $(this).find("li:not(:lt("+defaultNum+"))").hide();
    
        // 初期表示ではデフォルト値が現在の表示数となる
        currentNum = defaultNum;
    
        // moreボタンがクリックされた時の処理
        $(".list-btn").click(function() {
          // 現在の表示数に追加表示数を加えていく
          currentNum += addNum;
    
          // 現在の表示数に追加表示数を加えた数の要素を表示する
          $(this).parent().find("li:lt("+currentNum+")").show();
    
          // 表示数の総数よりcurrentNumが多い=全て表示された時の処理
          if($numberListLen <= currentNum) {
            // 現在の表示数をデフォルト表示数へ戻す
            currentNum = defaultNum;
            // インデックス用の値をセット
            indexNum = currentNum - 1;
    
            // moreボタンを隠し、closeボタンを表示する
            $(".list-btnbtn").hide();
    
          }
        });
      });

	
});