<?php
session_start();
try{
    if($_SESSION['login'] == "0"){
        header("Location: error4.php");
    }else if ($_SESSION['login']==""){
                header("Location: error2.php");
    }else if($_SESSION['update_name1']==""){
        header("Location: error5.php");
    }
        
}catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        exit;
}
unset($_SESSION['pass0']);

if(isset($_POST['submit'])){
    $_SESSION['pass0']=5;
}
?>


<!DOChtml>
<html lang="ja">
    <head>
        <title>パスワード更新画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style3.css">
        <script type="text/javascript">
             function check(){
                 if(form.password.value == ""){
                        return false;
                     <?php
                        $_SESSION['pass0']=5;
                     ?>
                    }
             };
        </script>
    </head>
    <header>ナビゲーションバー</header>
    <body>
        <main>
            <h3>パスワード更新画面</h3>
            <form action="password_complete.php" method="post" name="form">
                <div class="pass" name>
                    <label>新しいパスワード:</label>
                    <input type="password" name="password" maxlength="10" class="password">
                    <div id ="error6"><br></div>
                </div>
                <div class="pass2">
                      <input name="submit" class="update" type="submit" value="更新する" id="update"  onclick="return check()">
                </div> 
            </form>
        </main>
        <script src="script1.js"></script>
    </body>
    <footer>フッター</footer>
</html>