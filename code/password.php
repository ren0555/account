<?php
if ($_POST['name1']==""){
                header("Location: error.php");
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
                    <input type="hidden" value="<?php echo$_POST['id'];?>" name="id">
                    
                </div>
                <div class="pass2">
                      <input  class="update" type="submit" value="更新する" id="update" onclick="return check()">
                </div> 
            </form>
        </main>
        <script src="script1.js"></script>
    </body>
    <footer>フッター</footer>
</html>