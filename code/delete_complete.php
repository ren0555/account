<?php
if ($_POST['name1']==""){
                header("Location: error.php");
}
$id = $_POST['id'];
date_default_timezone_set("Asia/Tokyo");
$_POST['update_time']= date('Y/m/d H;i;s');
$update_time = $_POST['update_time'];
$pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
$pdo -> exec("update spi set delete_flag='0' where id = $id");
$pdo -> exec("update spi set update_time='$update_time' where id = $id");



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
                <input type="button" value="TOPページへ戻る" class="button" onclick="location.href='http://localhost/D.I.Blog/index.html'">
            </div>
        </main>
    </body>
    <footer>フッター</footer>
</html>