<?php    
mb_internal_encoding("utf8");

$errorMessage1 = "";
$errorMessage2 = "";
$errorMessage3 = "";

if(isset($_POST['login'])){
     $mail = $_POST['mail'];
     $password = $_POST['pass'];
        
    try{
        $pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
        $stmt = $pdo->query("select * from spi ");
        
        while ($row = $stmt->fetch()){
            if(password_verify($password, $row['password']) && $mail== $row['mail']){
                header('Location: http://localhost/D.I.Blog/index.php');
                echo "<form method='post'>";
                echo "<input type='hidden' value=" .$row['authority']. ">";
                echo "</form>";
            }
        }
        
        
    }catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        exit;
}
   /* try{
        $db=new PDO('mysql:host=localhost; dbname=regist','root','renta1216');
        $sql ='select count(*) from spi where mail=? and password=?';
        $stmt = $db->prepare($sql);
        $stmt ->execute(array($mail,$password));
        $result = $stmt->fetch();
        $stmt = null;
        $db = null;
        
        
        if($result[0] != 0){
            header('Location: http://localhost/D.I.Blog/index.html');
        }else{
            $errorMessage3="ユーザー名またはパスワードが違います。";
        }
    }catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        exit;
    }
    */
 }

?>


<!DOChtml>
<html lang="ja">
    <head>
        <title>ログイン画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style7.css">
    </head>
    <header>ナビゲーションバー</header>
    <body>
        <main>
            <div>ログイン画面</div>
            
            <form action="" method="post">
                <?php if ($errorMessage3 !==null && !$errorMessage3 ==""){
                            echo $errorMessage3;}
                        
                ?>
                <div class="form1">
                    <div class="left">
                        <div>メールアドレス</div>
                        <div><br></div>
                        <div>パスワード</div>
                        <div><br></div>
                    </div>
                    <div class="right">
                        <div><input class="mail" type="text" maxlength="100" name="mail"></div>
                        <div id="error1"><br></div>
                        <div><input 　class="password" type="password" maxlength="10" name="pass"></div>
                        <div id="error2"><br></div>
                    </div>
                 </div>
                    <br>
                <div　class="login">
                    <input type="submit" value="ログイン" name="login" id="login"　class="login-button">
                </div>
                </form>
            <script src="script2.js"></script>
           
        </main>
    </body>
    <footer>フッター</footer>
</html>