<?php
    echo $_POST['authority'];
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>実習2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                mode: 'horizontal',
                auto:true,
                speed:2000,
                infiniteLoop: false,
                slideWidth: 600,
            });
        });
    </script>
  </head>
  <body>
    <p><img class="diw" src="diblog_logo.jpg"></p>
      <header>
        <ul class="list">
          <li>トップ</li>
          <li>プロフィール</li> 
          <li>D.I.Blogについて</li>
          <a href="http://localhost/account/code/regist.php"><li>登録フォーム</li></a>
            <a href="http://localhost/account/code/list.php"><li>アカウント一覧</li></a>
          <li>問い合わせ</li>
          <li>その他</li>
        </ul>
    </header>
    
    <main>
      <div class="main-container">
        <div class="left">
          <h1>プログラミングに役立つ書籍</h1>  
            2017年1月15日
            <div class="slider">
                <div><img src="jQuery_image1.jpg"></div>
                <div><img src="jQuery_image2.jpg"></div>
                <div><img src="jQuery_image3.jpg"></div>
                <div><img src="jQuery_image4.jpg"></div>
                <div><img src="jQuery_image5.jpg"></div>
            </div>
            
            <p><img class="book" src="bookstore.jpg"></p>
            
             <div class="a">
              <p>D.I.BlogはD.I.Wroksが提供する演習課題です。</p>
              <p>記事中身</p>
             </div>
            
             <div class="kizi">
               <div class="box1">
                 <div class="box1_pic">
                   <img src="pic1.jpg">
                   <p>ドメイン取得</p>
                 </div>
                 <div class="box1_pic">
                   <img src="pic2.jpg">
                   <p>快適な職場環境</p>
                 </div>
                 <div class="box1_pic">
                   <img src="pic3.jpg">
                   <p>Linuxの基礎</p>
                 </div>
                 <div class="box1_pic">
                   <img src="pic4.jpg">
                   <p>マーケティング入門</p>
                 </div>
               </div>
               <div class="box2">
                 <div class="box2_pic">
                   <img src="pic5.jpg">
                   <p>アクティブラーニング</p>
                 </div>
                 <div class="box2_pic">
                   <img src="pic6.jpg">
                   <p>CSSの効率的な勉強方法</p>
                 </div>
                 <div class="box2_pic">
                   <img src="pic7.jpg">
                   <p>リーダブルコードとは</p>
                 </div>
                 <div class="box2_pic">
                   <img src="pic8.jpg">
                   <p>HTML5の可能性</p>
                 </div>
               </div>
                 
             </div>
        </div>
        <div class="right">
          <h2>人気の記事</h2>
            <ul class="list2">
              <li>PHPオススメ本</li>
              <li>PHP MyAdminの使い方</li>
              <li>いま人気のエディタTops</li>
              <li>HTMLの基礎</li>
            </ul>
          <h2>オススメのリンク</h2>
             <ul class="list2">
               <li>ディーアイワークス株式会社</li>
               <li>XAMPPのダウンロード</li>
               <li>Eclipseのダウンロード</li>
               <li>Braketsのダウンロード</li>
             </ul>
          <h2>カテゴリ</h2>
             <ul class="list2">
               <li>HTML</li>
               <li>PHP</li>
               <li>MySQL</li>
               <li>JavaScript</li>
             </ul>
        </div>
      </div>
    </main>
    <footer>
      Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
    </footer>
  </body>
</html>