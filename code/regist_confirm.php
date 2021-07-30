<!DOCTYPE>
<html lang="ja">
    <head>
        <title>アカウント登録確認画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <?php
            if ($_POST['name1']==""){
                header("Location: error.php");
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
                            <?php echo$_POST['name1'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['name2'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['name3'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['name4'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['mail'];?>
                    </div>

                    <div class="insert">●●●●●●</div>

                    <div class="insert">
                            <?php if($_POST['seibetu']=="0"){echo "男";}else if($_POST['seibetu']=="1"){echo "女";}?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['yubin'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['prefecture'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['sikutyouson'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['banti'];?>
                    </div>

                    <div class="insert">
                            <?php echo$_POST['kengen'];?>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <form action="regist.php" class="button1" method="post">
                    <input type="submit" class="back" value="前に戻る">
                    <input type="hidden" value="<?php echo$_POST['name1'];?>" name="name1">
                    <input type="hidden" value="<?php echo$_POST['name2'];?>" name="name2">
                    <input type="hidden" value="<?php echo$_POST['name3'];?>" name="name3">
                    <input type="hidden" value="<?php echo$_POST['name4'];?>" name="name4">
                    <input type="hidden" value="<?php echo$_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo$_POST['password'];?>" name="password">
                    <input type="hidden" value="<?php echo$_POST['seibetu'];?>" name="seibetu">
                    <input type="hidden" value="<?php echo$_POST['yubin'];?>" name="yubin">
                    <input type="hidden" value="<?php echo$_POST['prefecture'];?>" name="prefecture">
                    <input type="hidden" value="<?php echo$_POST['sikutyouson'];?>" name="sikutyouson">
                    <input type="hidden" value="<?php echo$_POST['banti'];?>" name="banti">
                    <input type="hidden" value="<?php echo$_POST['kengen'];?>" name="kengen">
                </form>
                
                <form action="regist_complete.php" method="post" class="button2">
                    <input type="submit" value="登録する" class="touroku">
                    <input type="hidden" value="<?php echo$_POST['name1'];?>" name="name1">
                    <input type="hidden" value="<?php echo$_POST['name2'];?>" name="name2">
                    <input type="hidden" value="<?php echo$_POST['name3'];?>" name="name3">
                    <input type="hidden" value="<?php echo$_POST['name4'];?>" name="name4">
                    <input type="hidden" value="<?php echo$_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo$_POST['password'];?>" name="password">
                    <input type="hidden" value="<?php echo$_POST['seibetu'];?>" name="seibetu">
                    <input type="hidden" value="<?php echo$_POST['yubin'];?>" name="yubin">
                    <input type="hidden" value="<?php echo$_POST['prefecture'];?>" name="prefecture">
                    <input type="hidden" value="<?php echo$_POST['sikutyouson'];?>" name="sikutyouson">
                    <input type="hidden" value="<?php echo$_POST['banti'];?>" name="banti">
                    <input type="hidden" value="<?php echo$_POST['kengen'];?>" name="kengen">
                </form>
            </div>
        </main>
        <footer>フッター</footer>
    </body>
</html>