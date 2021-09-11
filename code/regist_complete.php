<?php
mb_internal_encoding("utf8");

date_default_timezone_set("Asia/Tokyo");
session_start();
if($_SESSION['login']==0){
    header("Location: error2.php");
}else if($_SESSION['login']==""){
    header("Location: error4.php");
}else if($_SESSION['login']==1){
    try{
        $pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
        $_SESSION['regist_password']= password_hash($_SESSION['regist_password'],PASSWORD_DEFAULT);
        $_POST['registered_time']= date('Y/m/d H;i;s');
        $_POST['update_time']= date('Y/m/d H;i;s');
        $_POST['delete_flag'] = 0;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SESSION['regist_authority']=="一般"){
            $kengen = 0;
        }else{
            $kengen = 1;
        }
    
    
    $pdo ->exec("insert into spi(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time)values('".$_SESSION['regist_name1']."','".$_SESSION['regist_name2']."','".$_SESSION['regist_name3']."','".$_SESSION['regist_name4']."','".$_SESSION['regist_mail']."','".$_SESSION['regist_password']."','".$_SESSION['regist_gender']."','".$_SESSION['regist_yubin']."','".$_SESSION['regist_prefecture']."','".$_SESSION['regist_address1']."','".$_SESSION['regist_address2']."','".$kengen."','".$_POST['delete_flag']."','".$_POST['registered_time']."','".$_POST['update_time']."');");
    }catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        echo "<br>このメールアドレスは登録済みの可能性があります";
        exit;
    }
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
            <div class="abc">アカウント登録完了画面</div>
                <div class="touroku">登録完了しました</div>
                <form action="http://localhost/account/D.I.Blog/index.php" method="post">
                    <input type="submit"  value="TOPページへ戻る" class="top">
                    <input type="hidden" name="return" value="1">
                </form>
        </main>
    </body>
    <footer>フッター</footer>
</html>
