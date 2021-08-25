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
                <form method="post">
                <table border="1" cellspacing="0" class="table">
                    <tr>
                        <td>名前（姓）</td>
                        <td width="41%"><input type="text" size="60%" name="name_1"></td>
                        <td>名前（名）</td>
                        <td  width="41%"><input type="text" size="60%" name="name_2"></td>
                    </tr>
                    <tr>
                        <td>カナ（姓）</td>
                        <td><input type="text" size="60%" name="name_3"></td>
                        <td>カナ（名）</td>
                        <td><input type="text" size="60%" name="name_4"></td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td><input type="text" size="60%" name="mail"></td>
                        <td>性別</td>
                        <td><label><input name="gender" type="radio" value="0"　>男</label>
                            <label><input name="gender" type="radio" value="1" >女</label></td>
                    </tr>
                    <tr>
                        <td>アカウント権限</td>
                        <td>
                            <select name="authority">
                                <option>選択してください</option>
                                <option>一般</option>
                                <option>管理者</option>
                            </select>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="submit" name="search" value="検索" class="search"　></td>
                    </tr>
                    
                </table>
                </form>
                    
                <table border="1" cellspacing="0">
                    <tr>
                        <td>ID</td>
                        <td>名前（姓）</td><td>名前（名）</td><td>カナ（姓）</td><td>カナ（名）</td><td>メールアドレス</td><td>性別</td><td>アカウント権限</td><td>削除フラグ</td><td>登録日時</td><td>更新日時</td><td colspan="2">操作</td>
                    </tr>
                   
                    <?php
                    
                    $row['registered_time']=date('Y/m/d');
                    
                    
                     if($row['id']=""){
                        
                    }else{
                         if(isset($_POST['search'])){
                             
                            if(empty($_POST['name_1']) &&empty($_POST['name_2']) &&empty($_POST['name_3']) &&empty($_POST['name_4']) &&empty($_POST['mail']) && $_POST['authority']=="選択してください" &&empty($_POST['gender'])){  
                             //すべて空白の時に全リストを表示
                        
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
                                }//受け取った値を変換して表示する

                        
                            
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

                            if($delete == "有効"){

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
                            }else if($delete = "無効"){
                                    echo"<td colspan='2'>操作不可</td>"; //削除フラグによる操作不可
                            }  
                            echo "</tr>";
                                }
                                }elseif(isset($_POST['search'])){
                            

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
                                }//受け取った値を変換して表示する
                                
                                if(empty($_POST['name_1'])){
                                    $_POST['name_1']="";
                                }
                                if(empty($_POST['name_2'])){
                                    $_POST['name_2']="";
                                }
                                if(empty($_POST['name_3'])){
                                    $_POST['name_3']="";
                                }
                                if(empty($_POST['name_4'])){
                                    $_POST['name_4']="";
                                }
                                if(empty($_POST['mail'])){
                                    $_POST['mail']="";
                                }
                                if(empty($_POST['gender'])){
                                    $_POST['gender']="";
                                }
                                if(empty($_POST['authority'])){
                                    $_POST['authority']="";
                                }
                                
                                
                                if(preg_match('{'.$_POST['name_1'].'}',$row['family_name'])||preg_match('{'.$_POST['name_2'].'}',$row['last_name']) || preg_match('{'.$_POST['name_3'].'}',$row['family_name_kana'])|| preg_match('{'.$_POST['name_4'].'}',$row['last_name_kana'])|| preg_match('{'.$_POST['mail'].'}',$row['mail'])|| preg_match('{'.$_POST['gender'].'}',$row['gender'])|| preg_match('{'.$_POST['authority'].'}',$row['authority'])){
                            
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

                            if($delete == "有効"){

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
                            }else if($delete = "無効"){
                                    echo"<td colspan='2'>操作不可</td>"; //削除フラグによる操作不可
                            }  
                            echo "</tr>";
                            }
                            }
                         }
                         }
                     }
                    ?>
                    
                </table>
            </main>
        <footer>フッター</footer>
    </body>
</html>