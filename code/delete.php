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
<!DOCTYPE>
<html lang="ja">
    <head>
        <title>アカウント削除画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        
        <header>ナビゲーションバー</header>
        
        <main>
            <div class="a">アカウント削除画面</div>
            <div class="back">
                   <input type="button"  value="アカウント一覧に戻る" class="bottun1" onclick="location.href='http://localhost/account/code/list.php'">
            </div>
            <div class="confirm">
                <div class="confirm_left">
                    <div class="contents">名前（姓）</div>

                    <div class="contents">名前（名）</div>

                    <div class="contents">カナ（姓）</div>

                    <div class="contents">カナ（名）</div>

                    <div class="contents">メールアドレス</div>

                    <div class="contents">パスワード</div>

                    <div class="contents">性別</div>

                    <div class="contents">郵便番号</div>

                    <div class="contents">住所（都道府県）</div>

                    <div class="contents">住所（市区町村）</div>

                    <div class="contents">住所（番地）</div>

                    <div class="contents">アカウント権限</div>
                </div>
                
                <div class="confirm_right">
                    <div class="insert">
                            <?php echo $_SESSION['name1'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['name2'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['name3'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['name4'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['mail'];?>
                    </div>

                    <div class="insert">●●●●●●</div>

                    <div class="insert">
                            <?php if( $_SESSION['gender']=="0"){echo "男";}else if( $_SESSION['gender']=="1"){echo "女";}?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['yubin'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['prefecture'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['address1'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['address2'];?>
                    </div>

                    <div class="insert">
                            <?php if( $_SESSION['authority']=="0"){echo "一般";}else{echo "管理者";}?>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <form  method="post" action="delete_confirm.php">
                    <input type="submit" value="確認する" class="button3" onclick="location.href='delete_confirm.php'">
                    
                </form>
            </div>
        </main>
        <footer>フッター</footer>
    </body>
</html>