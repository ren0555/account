<?php
session_start();
try{
    if($_SESSION['login'] == "0"){
        header("Location: error4.php");
    }else if ($_SESSION['login']==""){
                header("Location: error2.php");
    }else if($_SESSION['name1']==""){
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
                    <input type="hidden" value="<?php echo $_SESSION['name1'];?>" name="name1">
                    <input type="hidden" value="<?php echo $_SESSION['name2'];?>" name="name2">
                    <input type="hidden" value="<?php echo $_SESSION['name3'];?>" name="name3">
                    <input type="hidden" value="<?php echo $_SESSION['name4'];?>" name="name4">
                    <input type="hidden" value="<?php echo $_SESSION['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo $_SESSION['password'];?>" name="password">
                    <input type="hidden" value="<?php echo $_SESSION['gender'];?>" name="gender">
                    <input type="hidden" value="<?php echo $_SESSION['yubin'];?>" name="yubin">
                    <input type="hidden" value="<?php echo $_SESSION['prefecture'];?>" name="prefecture">
                    <input type="hidden" value="<?php echo $_SESSION['address1'];?>" name="address1">
                    <input type="hidden" value="<?php echo $_SESSION['address2'];?>" name="address2">
                    <input type="hidden" value="<?php echo $_SESSION['authority'];?>" name="authority">
                    <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="id">
                </form>

                <form action="delete_complete.php" method="post" class="button2">
                    <input type="submit" value="削除する" class="go" onclick="location.href='delete_complete.php'">
                    <input type="hidden" value="<?php echo $_SESSION['name1'];?>" name="name1">
                    <input type="hidden" value="<?php echo $_SESSION['name2'];?>" name="name2">
                    <input type="hidden" value="<?php echo $_SESSION['name3'];?>" name="name3">
                    <input type="hidden" value="<?php echo $_SESSION['name4'];?>" name="name4">
                    <input type="hidden" value="<?php echo $_SESSION['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo $_SESSION['password'];?>" name="password">
                    <input type="hidden" value="<?php echo $_SESSION['gender'];?>" name="gender">
                    <input type="hidden" value="<?php echo $_SESSION['yubin'];?>" name="yubin">
                    <input type="hidden" value="<?php echo $_SESSION['prefecture'];?>" name="prefecture">
                    <input type="hidden" value="<?php echo $_SESSION['address1'];?>" name="address1">
                    <input type="hidden" value="<?php echo $_SESSION['address2'];?>" name="address2">
                    <input type="hidden" value="<?php echo $_SESSION['authority'];?>" name="authority">
                    <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="id">
                </form>
                
            </div>
        </main>
    </body>
    <footer>フッター</footer>
</html>