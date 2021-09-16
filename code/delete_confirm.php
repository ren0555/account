<?php
session_start();
try{
    if($_SESSION['login'] == "0"){
        header("Location: error4.php");
    }else if ($_SESSION['login']==""){
                header("Location: error2.php");
    }else if($_SESSION['delete_name1']==""){
        header("Location: error5.php");
    }
        
}catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>アカウント削除確認画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style5.css" type="text/css">
    </head>
    <body>
        <header>ナビゲーションバー</header>
         
        <main>
            <h3>アカウント削除確認画面</h3>
            <h1>本当に削除してよろしいでしょうか？</h1>
            <div class="buttons">
                
                <form action="delete.php" method="post" class="button1">
                    <input type="submit" value="前に戻る" class="back" onclick="location.href='delete.php'">
                </form>

                <form action="delete_complete.php" method="post" class="button2">
                    <input type="submit" value="削除する" class="go" onclick="location.href='delete_complete.php'">
                </form>
                
            </div>
        </main>
    </body>
    <footer>フッター</footer>
</html>