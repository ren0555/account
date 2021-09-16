<?php    
mb_internal_encoding("utf8");

session_start();

$errorMessage1 = "";
$errorMessage2 = "";
$errorMessage3 = "";

unset($_SESSION["login"]);

if(isset($_POST['login'])){
     $mail = $_POST['mail'];
     $password = $_POST['pass'];
        
    try{
        $pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
        $stmt = $pdo->query("select * from spi ");
        
        while ($row = $stmt->fetch()){
            if(password_verify($password, $row['password']) && $mail== $row['mail']){
                if($row['delete_flag']==0){
                    session_regenerate_id(TRUE);
                    $_SESSION["login"] = $row['authority'];
                    header('Location: http://localhost/account/D.I.Blog/index.php',true,307);

                    exit();
                }else if($row['delete_flag']==1){
                    $errorMessage1="存在しないアカウントです。";
                }
            }else{
                if($_POST['mail']=="" || $_POST['pass']=="" ){
                    $errorMessage1="";
                }else{           
                $errorMessage1="メールアドレスまたはパスワードが間違っています。";
                }
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
$br="<br>"

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
            <div class="logo">ログイン画面</div>
            
            <form action="" method="post">
                
                <div class="form1">
                    <div class="left">
                        <div>メールアドレス</div>
                        <div><br></div>
                        <div>パスワード</div>
                        <div><br></div>
                    </div>
                    <div class="right">
                        <div><input class="mail" type="text" maxlength="100" name="mail"value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];}?>"></div>
                        <div id="error1" ><?php
                            if(isset($_POST['login'])){
                                if($_POST['mail']==""){
                                    echo "メールアドレスが未入力です";
                                }
                            }
                            echo $br;
                            ?></div>
                        <div><input 　class="password" type="password" maxlength="10" name="pass"></div>
                        <div id="error2"><?php
                            if(isset($_POST['login'])){
                                if($_POST['pass']==""){
                                    echo "パスワードが未入力です";
                                }
                            }
                            echo $br;
                            ?></div>
                    </div>
                 </div>
                    <br>
                <div>
                    <p class="error"><?php echo $errorMessage1; ?><br></p>
                    <input  id="login" type="submit" value="ログイン" name="login">
                </div>
                </form>
            <script src="script2.js"></script>
           
        </main>
    </body>
    <footer>フッター</footer>
</html>