<!DOCTYPE>
<html lang="ja">
    <head>
        <title>アカウント登録確認画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <header>ナビゲーションバー</header>
        
        <main>
            <div class="confirm">
                <div class="contents">名前（姓）
                    <div class="insert">
                        <?php echo$_POST['name1'];?>
                    </div>
                </div>
                
                <div class="contents">名前（名）
                    <div class="insert">
                        <?php echo$_POST['name2'];?>
                    </div>
                </div>
                
                <div class="contents">カナ（姓）
                    <div class="insert">
                        <?php echo$_POST['name3'];?>
                    </div>
                </div>
                
                <div class="contents">カナ（名）
                    <div class="insert">
                        <?php echo$_POST['name4'];?>
                    </div>
                </div>
                
                <div class="contents">メールアドレス
                    <div class="insert">
                        <?php echo$_POST['mail'];?>
                    </div>
                </div>
                
                <div class="contents">パスワード
                    <div class="insert">
                        <?php echo$_POST['password'];?>
                    </div>
                </div>
                
                <div class="contents">性別
                    <div class="insert">
                        <?php echo$_POST['seibetu'];?>
                    </div>
                </div>
                
                <div class="contents">郵便番号
                    <div class="insert">
                        <?php echo$_POST['yubin'];?>
                    </div>
                </div>
                
                <div class="contents">住所（都道府県）
                    <div class="insert">
                        <?php echo$_POST['prefecture'];?>
                    </div>
                </div>
                
                <div class="contents">住所（市区町村）
                    <div class="insert">
                        <?php echo$_POST['sikutyouson'];?>
                    </div>
                </div>
                
                <div class="contents">住所（番地）
                    <div class="insert">
                        <?php echo$_POST['banti'];?>
                    </div>
                </div>
                
                <div class="contents">アカウント権限
                    <div class="insert">
                        <?php echo$_POST['kengen'];?>
                    </div>
                </div>
            
                <form action="regist.php">
                    <input type="submit" value="前に戻る">
                </form>
                <form action="XXX" method="post">
                    <input type="button" value="登録する">
                </form>
            </div>
        </main>
    </body>
</html>