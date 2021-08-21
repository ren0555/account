<?php
$id = $_POST['id'];
date_default_timezone_set("Asia/Tokyo");
$_POST['update_time']= date('Y/m/d H;i;s');

$name1=$_POST['name1'];
$name2=$_POST['name2'];
$name3=$_POST['name3'];
$name4=$_POST['name4'];
$mail=$_POST['mail'];


if ($_POST['name1']==""){
                header("Location: error1.php");
            }
if($_POST['gender']==="男"){
    $gender = "0";
}else{
    $gender = "1";
}

$yubin=$_POST['yubin'];
$prefecture=$_POST['prefecture'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

if($_POST['authority']==="一般"){
    $authority="0";
}else{
    $authority="1";
}

$update_time = $_POST['update_time'];

$pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
$pdo -> exec("update spi set family_name='$name1', last_name='$name2',family_name_kana='$name3',last_name_kana='$name4', mail='$mail',gender='$gender',postal_code='$yubin',prefecture='$prefecture',address_1='$address1',address_2='$address2',authority='$authority' where id = $id");
$pdo -> exec("update spi set update_time='$update_time' where id = $id");


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
            <div class="abc">アカウント更新完了画面</div>
                <div class="touroku">更新完了しました</div>
                <button class="top" onclick="location.href='http://localhost/account/D.I.Blog/index.php'">TOPページへ戻る</button>
        </main>
    </body>
    <footer>フッター</footer>
</html>
