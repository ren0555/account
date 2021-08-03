<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>アカウント削除確認画面</title>
        <meta charset="utf-8">
        <link href="">
    </head>
    <body>
        <header>ナビゲーションバー</header>
        <main>
            <h3>アカウント削除確認画面</h3>
            <div>本当に削除してよろしいですか？</div>
            <form action="delete.php" method="post">
                <input type="submit" value="前に戻る" onclick="location.href='delete.php'">
                <input type="hidden" value="<?php echo $_POST['name1'];?>" name="name1">
                <input type="hidden" value="<?php echo $_POST['name2'];?>" name="name2">
                <input type="hidden" value="<?php echo $_POST['name3'];?>" name="name3">
                <input type="hidden" value="<?php echo $_POST['name4'];?>" name="name4">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
                <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
                <input type="hidden" value="<?php echo $_POST['yubin'];?>" name="yubin">
                <input type="hidden" value="<?php echo $_POST['prefecture'];?>" name="prefecture">
                <input type="hidden" value="<?php echo $_POST['address1'];?>" name="address1">
                <input type="hidden" value="<?php echo $_POST['address2'];?>" name="address2">
                <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">
            </form>
            <form action="delete_complete.php" method="post">
                <input type="submit" value="削除する" onclick="location.href='delete_complete.php'">
                <input type="hidden" value="<?php echo $_POST['name1'];?>" name="name1">
                <input type="hidden" value="<?php echo $_POST['name2'];?>" name="name2">
                <input type="hidden" value="<?php echo $_POST['name3'];?>" name="name3">
                <input type="hidden" value="<?php echo $_POST['name4'];?>" name="name4">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
                <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
                <input type="hidden" value="<?php echo $_POST['yubin'];?>" name="yubin">
                <input type="hidden" value="<?php echo $_POST['prefecture'];?>" name="prefecture">
                <input type="hidden" value="<?php echo $_POST['address1'];?>" name="address1">
                <input type="hidden" value="<?php echo $_POST['address2'];?>" name="address2">
                <input type="hidden" value="<?php echo $_POST['authority'];?>" name="authority">
            </form>
        </main>
    </body>
</html>