<?php
mb_internal_encoding("utf8");
date_default_timezone_set("Asia/Tokyo");

$id = $_POST['id'];
$_POST['update_time']= date('Y/m/d H;i;s');
$update_time = $_POST['update_time'];


    if ($_POST['id']==""){
                header("Location: error.php");
}else{      
        $pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
        $_POST['password']= password_hash($_POST['password'],PASSWORD_DEFAULT);      
        $_POST['update_time']= date('Y/m/d H;i;s');
        $pass=$_POST['password'];
        $pdo ->exec("update spi set password='$pass' where id ='$id'");
        $pdo -> exec("update spi set update_time='$update_time' where id = $id");
    }
?>

<!DOCTYPE>
<html lang="ja">
    <head>
        <title>パスワード更新完了画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style5.css">
    </head>
    <body>
        <header>ナビゲーションバー</header>
        <main>
            <h3>パスワード更新完了画面</h3>
            <h1>更新完了しました。</h1>
            <div>
                <input type="button" value="アカウント一覧へ戻る" class="button" onclick="location.href='http://localhost/account/code/list.php'">
            </div>
        </main>
    </body>
    <footer>フッター</footer>
</html>