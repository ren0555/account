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
                        if($row['delete_flag'] == 0){
                            $delete = "有効";
                        }else{
                            $delete = "無効";
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
                            echo"<td>".$delete."</td>";
                            echo"<td>".date('Y/m/d', strtotime($row['registered_time']))."</td>";
                            echo"<td>".date('Y/m/d', strtotime($row['update_time']))."</td>";
                        
                            echo"<form action='update.php' method='post'>";
                            echo"<td><input type='submit' value='更新'></td>";
                            echo"<input type='hidden' value=".$row['family_name']." name='name1'>";
                            echo"<input type='hidden' value=".$row['last_name']." name='name2'>";        
                            echo"<input type='hidden' value=".$row['family_name_kana']." name='name3'>";
                            echo"<input type='hidden' value=".$row['last_name_kana']." name='name4'>";
                            echo"<input type='hidden' value=".$row['mail']." name='mail'>";
                            echo"<input type='hidden' value=".$row['gender']." name='gender'>";
                            echo"<input type='hidden' value=".$row['postal_code']." name='yubin'>";
                            echo"<input type='hidden' value=".$row['password']." name='password'>";
                            echo"<input type='hidden' value=".$row['prefecture']." name='prefecture'>";
                            echo"<input type='hidden' value=".$row['address_1']." name='address1'>";
                            echo"<input type='hidden' value=".$row['address_2']." name='address2'>";
                            echo"<input type='hidden' value=".$kengen." name='authority'>";
                            echo"<input type='hidden' value=".$row['id']." name='id'></form>";
                        
                            echo"<form action='delete.php' method='post'>";
                            echo"<td><input type='submit' value='削除'></td>";
                            echo"<input type='hidden' value=".$row['family_name']." name='name1'>";
                            echo"<input type='hidden' value=".$row['last_name']." name='name2'>";        
                            echo"<input type='hidden' value=".$row['family_name_kana']." name='name3'>";
                            echo"<input type='hidden' value=".$row['last_name_kana']." name='name4'>";
                            echo"<input type='hidden' value=".$row['mail']." name='mail'>";
                            echo"<input type='hidden' value=".$row['gender']." name='gender'>";
                            echo"<input type='hidden' value=".$row['postal_code']." name='yubin'>";
                            echo"<input type='hidden' value=".$row['password']." name='password'>";
                            echo"<input type='hidden' value=".$row['prefecture']." name='prefecture'>";
                            echo"<input type='hidden' value=".$row['address_1']." name='address1'>";
                            echo"<input type='hidden' value=".$row['address_2']." name='address2'>";
                            echo"<input type='hidden' value=".$kengen." name='authority'>";
                            echo"<input type='hidden' value=".$row['id']." name='id'></form>";
                            
                        echo "</tr>";
                     }}
                    ?>
                    
                </table>
            </main>
        <footer>フッター</footer>
    </body>
</html>