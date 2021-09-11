<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>アカウント登録確認画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <?php
        session_start();
            if($_SESSION['login']==1){
               echo ""; 
            }else if($_SESSION['login']==0){
                header("Location: error2.php");
            }else{
                header("Location: error4.php");
            }
        ?>
        <header>ナビゲーションバー</header>
        
        <main>
            <div class="a">アカウント登録確認画面</div>
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
                            <?php echo $_SESSION['regist_name1'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_name2'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_name3'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_name4'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_mail'];?>
                    </div>

                    <div class="insert">●●●●●●</div>

                    <div class="insert">
                            <?php if($_SESSION['regist_gender']=="0"){echo "男";}else if($_SESSION['regist_gender']=="1"){echo "女";}?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_yubin'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_prefecture'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_address1'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_address2'];?>
                    </div>

                    <div class="insert">
                            <?php echo $_SESSION['regist_authority'];?>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <form action="regist.php" class="button1" method="post">
                    <input type="submit" class="back" value="前に戻る">
                    
                </form>
                
                <form action="regist_complete.php" method="post" class="button2">
                    <input type="submit" value="登録する" class="touroku">
                  
                </form>
            </div>
        </main>
        <footer>フッター</footer>
    </body>
</html>