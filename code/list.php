<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>アカウント一覧</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style4.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=regist;host=localhost;","root","renta1216");
        $stmt = $pdo ->query("select * from spi");
        $stmt = $pdo ->query("select * from spi order by id desc")
        ?>
            <header>ナビゲーションバー</header>
            <main>
                <h3>アカウント一覧画面</h3>
                <table border="1" cellspacing="0">
                    <tr>
                        <td>ID</td>
                        <td>名前（姓）</td><td>名前（名）</td><td>カナ（姓）</td><td>カナ（名）</td><td>メールアドレス</td><td>性別</td><td>アカウント権限</td><td>削除フラグ</td><td>登録日時</td><td>更新日時</td><td colspan="2">操作</td>
                    </tr>
                   
                    <?php
                    
                    $row['registered_time']=date('Y/m/d');
                    
                    
                     if($row['id']=""){
                        
                    }else{
                         
                    foreach($stmt as $row){
                        
                        if($row['gender'] == 0){
                            $seibetsu = "男";
                        }else{
                            $seibetsu = "女";
                        }
                        
                        if($row['authority'] == 0){
                            $kengen = "一般";
                        }else{
                            $kengen = "管理者";
                        }
                   
                        echo"<tr>";
                            echo"<td>".$row['id']."</td>";
                            echo"<td>".$row['family_name']."</td>";
                            echo"<td>".$row['last_name']."</td>";
                            echo"<td>".$row['family_name_kana']."</td>";
                            echo"<td>".$row['last_name_kana']."</td>";
                            echo"<td>".$row['mail']."</td>";
                            echo"<td>".$seibetsu."</td>";
                            echo"<td>".$kengen."</td>";
                            echo"<td>".$row['delete_flag']."</td>";
                            echo"<td>".date('Y/m/d', strtotime($row['registered_time']))."</td>";
                            echo"<td>".date('Y/m/d', strtotime($row['update_time']))."</td>";
                            echo"<td><a href='update.php'>更新</a></td>";
                            echo"<td><a href='delete.php'>削除</a></td>";
                            
                        echo "</tr>";
                     }}
                    ?>
                    
                </table>
            </main>
        <footer>フッター</footer>
    </body>
</html>