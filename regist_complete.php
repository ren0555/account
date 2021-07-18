<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");

date_default_timezone_set("Asia/Tokyo");

$_POST['password']= password_hash($_POST['password'],PASSWORD_DEFAULT);
$_POST['registered_time']= date('Y-m-d H:i:s');

$pdo ->exec("insert into spi(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,registered_time)values('".$_POST['name1']."','".$_POST['name2']."','".$_POST['name3']."','".$_POST['name4']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['seibetu']."','".$_POST['yubin']."','".$_POST['prefecture']."','".$_POST['sikutyouson']."','".$_POST['banti']."','".$_POST['kengen']."','".$_POST['registered_time']."');");
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録確認</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script> console.log($password);</script>
    </head>
    
    <body>
        <header>ナビゲーションバー</header>
        <main>
            <div class="abc">アカウント登録完了画面</div>
                <div class="touroku">登録完了しました</div>
                <button class="top" onclick="location.href='http://localhost/D.I.Blog/index.html'">TOPページへ戻る</button>
        </main>
    </body>
    <footer>フッター</footer>
</html>