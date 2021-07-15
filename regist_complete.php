<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");

$pdo ->exec("insert into spi(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)values('".$_POST['name1']."','".$_POST['name2']."','".$_POST['name3']."','".$_POST['name4']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['seibetu']."','".$_POST['yubin']."','".$_POST['prefecture']."','".$_POST['sikutyouson']."','".$_POST['banti']."','".$_POST['kengen']."');");
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録確認</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
    <body>
        <header>ナビゲーションバー</header>
        <main>
            <div　class="a">アカウント登録完了画面</div>
            <form>
                <div class="touroku">登録完了しました</div>
                <button class="top" onclick="location.href='../D.I.Blog/D.I.Blog.html'">TOPページへ戻る</button>
            </form>
        </main>
    </body>
    <footer>フッター</footer>
</html>