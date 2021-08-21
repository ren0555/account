<?php
mb_internal_encoding("utf8");

date_default_timezone_set("Asia/Tokyo");
if ($_POST['name1']==""){
    header("Location: error.php");
}else{
    $pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
    $_POST['password']= password_hash($_POST['password'],PASSWORD_DEFAULT);
    $_POST['registered_time']= date('Y/m/d H;i;s');
    $_POST['update_time']= date('Y/m/d H;i;s');
    $_POST['delete_flag'] = 0;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_POST['kengen']=="一般"){
        $kengen = 0;
    }else{
        $kengen = 1;
    }
    
    
    $pdo ->exec("insert into spi(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time,update_time)values('".$_POST['name1']."','".$_POST['name2']."','".$_POST['name3']."','".$_POST['name4']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['seibetu']."','".$_POST['yubin']."','".$_POST['prefecture']."','".$_POST['sikutyouson']."','".$_POST['banti']."','".$kengen."','".$_POST['delete_flag']."','".$_POST['registered_time']."','".$_POST['update_time']."');");
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
                <button class="top" onclick="location.href='http://localhost/account/D.I.Blog/index.php'">TOPページへ戻る</button>
        </main>
    </body>
    <footer>フッター</footer>
</html>
