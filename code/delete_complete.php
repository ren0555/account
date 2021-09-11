<?php
session_start();
    if($_SESSION['login'] == "0"){
        header("Location: error4.php");
    }else if ($_SESSION['login']==""){
                header("Location: error2.php");
    }else if($_SESSION['name1']==""){
        header("Location: error5.php");
    }   

try{
$id = $_POST['id'];
date_default_timezone_set("Asia/Tokyo");
$_POST['update_time']= date('Y/m/d H;i;s');
$update_time = $_POST['update_time'];
$pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
$pdo -> exec("update spi set delete_flag='1' where id = $id");
$pdo -> exec("update spi set update_time='$update_time' where id = $id");
}catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        exit;
}



?>

<!DOCTYPE>
<html lang="ja">
    <head>
        <title>アカウント削除確認画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style5.css">
    </head>
    <body>
        <header>ナビゲーションバー</header>
        <main>
            <h3>アカウント削除完了画面</h3>
            <h1>削除完了しました。</h1>
            <div>
                <form action="http://localhost/account/D.I.Blog/index.php" method="post">
                    <input type="submit"  value="TOPページへ戻る" class="button">
                </form>
            </div>
        </main>
    </body>
    <footer>フッター</footer>
</html>