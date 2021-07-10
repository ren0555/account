<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=regist;host;","root","renta1216");

$pdo ->exec("insert into spi (id,family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time)value('".$_POST['name1']."','".$_POST['name2']."','".$_POST['name3']."','".$_POST['name4']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['seibetu']."','".$_POST['yubin']."','".$_POST['prefecture']."','".$_POST['sikutyouson']."','".$_POST['banti']."');");
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録確認</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <header>ナビゲーションバー</header>
    <body>
        <h1>登録完了しました。</h1>
    </body>
    <footer>フッター</footer>
</html>