<?php
session_start();
try{

date_default_timezone_set("Asia/Tokyo");
$_POST['update_time']= date('Y/m/d H;i;s');


if($_SESSION['login'] == "0"){
        header("Location: error4.php");
    }else if ($_SESSION['login']==""){
                header("Location: error2.php");
    }else if($_SESSION['name1']==""){
        header("Location: error5.php");
    }
if($_SESSION['gender']==="男"){
    $gender = "0";
}else{
    $gender = "1";
}



if($_SESSION['authority']==="一般"){
    $authority="0";
}else{
    $authority="1";
}

$update_time = $_POST['update_time'];

$pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
$pdo -> exec("update spi set family_name='".$_SESSION['name1']."', last_name='".$_SESSION['name2']."',family_name_kana='".$_SESSION['name3']."',last_name_kana='".$_SESSION['name4']."', mail='".$_SESSION['mail']."',gender='$gender',postal_code='".$_SESSION['yubin']."',prefecture='".$_SESSION['prefecture']."',address_1='".$_SESSION['address1']."',address_2='".$_SESSION['address2']."',authority='$authority' where id = '".$_SESSION['id']."'");
$pdo -> exec("update spi set update_time='$update_time' where id = '".$_SESSION['id']."'");
}catch(PDOException $e){
    echo "データベースの接続に失敗しました:";
    echo $e->getMessage();
    
    exit;
}


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
                <form action="http://localhost/account/D.I.Blog/index.php" method="post">
                    <input type="submit"  value="TOPページへ戻る" class="top">
                    <input type="hidden" name="return" value="1">
                </form>
        </main>
    </body>
    <footer>フッター</footer>
</html>
