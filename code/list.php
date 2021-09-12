<?php
session_start();
try{
    if ($_SESSION['login']==""){
                header("Location: error2.php");
    }else if($_SESSION['login'] == "0"){
        header("Location: error4.php");
    }
    unset($_SESSION['name1']);
    unset($_SESSION['name2']);
    unset($_SESSION['name3']);
    unset($_SESSION['name4']);
    unset($_SESSION['mail']);
    unset($_SESSION['gender']);
    unset($_SESSION['yubin']);
    unset($_SESSION['password']);
    unset($_SESSION['prefecture']);
    unset($_SESSION['address1']);
    unset($_SESSION['address2']);
    unset($_SESSION['authority']);
}catch(PDOException $e){
    echo "データベースの接続に失敗しました:";
    echo $e->getMessage();
    exit;
}
?>
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
        $stmt = $pdo ->query("select * from spi order by id desc");
            
        if(isset($_POST['update'])){
            $_SESSION['name1']=$_POST['name1'];
            $_SESSION['name2']=$_POST['name2'];
            $_SESSION['name3']=$_POST['name3'];
            $_SESSION['name4']=$_POST['name4'];
            $_SESSION['mail']=$_POST['mail'];
            $_SESSION['gender']=$_POST['gender'];
            $_SESSION['yubin']=$_POST['yubin'];
            $_SESSION['password']=$_POST['password'];
            $_SESSION['prefecture']=$_POST['prefecture'];
            $_SESSION['address1']=$_POST['address1'];
            $_SESSION['address2']=$_POST['address2'];
            $_SESSION['authority']=$_POST['authority'];
            $_SESSION['id']=$_POST['id'];
            header("Location:http://localhost/account/code/update.php");
        }
        
        if(isset($_POST['delete'])){
            $_SESSION['name1']=$_POST['name1'];
            $_SESSION['name2']=$_POST['name2'];
            $_SESSION['name3']=$_POST['name3'];
            $_SESSION['name4']=$_POST['name4'];
            $_SESSION['mail']=$_POST['mail'];
            $_SESSION['gender']=$_POST['gender'];
            $_SESSION['yubin']=$_POST['yubin'];
            $_SESSION['password']=$_POST['password'];
            $_SESSION['prefecture']=$_POST['prefecture'];
            $_SESSION['address1']=$_POST['address1'];
            $_SESSION['address2']=$_POST['address2'];
            $_SESSION['authority']=$_POST['authority'];
            $_SESSION['id']=$_POST['id'];
            header("Location:http://localhost/account/code/delete.php");
        }
            
                            
        ?>
            <header>ナビゲーションバー</header>
            <main>
                <h3>アカウント一覧画面</h3>
                <form method="post">
                <table border="1" cellspacing="0" class="table">
                    <tr>
                        <td>名前（姓）</td>
                        <td width="41%"><input type="text" size="60%" name="name_1" value="<?php if(isset($_POST['name_1'])){echo $_POST['name_1'];}?>"></td>
                        <td>名前（名）</td>
                        <td  width="41%"><input type="text" size="60%" name="name_2" value="<?php if(isset($_POST['name_2'])){echo $_POST['name_2'];}?>"></td>
                    </tr>
                    <tr>
                        <td>カナ（姓）</td>
                        <td><input type="text" size="60%" name="name_3" value="<?php if(isset($_POST['name_3'])){echo $_POST['name_3'];}?>"></td>
                        <td>カナ（名）</td>
                        <td><input type="text" size="60%" name="name_4" value="<?php if(isset($_POST['name_4'])){echo $_POST['name_4'];}?>"></td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td><input type="text" size="60%" name="mail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];}?>"></td>
                        <td>性別</td>
                        <td><label><input name="gender" type="radio" value="未選択" checked>未選択</label><label><input <?php if(isset($_POST['gender'])){if($_POST['gender']=="男"){echo "checked";}}?> name="gender" type="radio" value="男" >男</label>
                            <label><input <?php if(isset($_POST['gender'])){if($_POST['gender']=="女"){echo "checked";}}?>  name="gender" type="radio" value="女">女</label></td>
                    </tr>
                    <tr>
                        <td>アカウント権限</td>
                        <td>
                            <select name="authority">
                                <option value="選択してください">選択してください</option>
                                <option <?php if(isset($_POST['authority'])){if($_POST['authority']=="一般"){echo "selected";}}?>>一般</option>
                                <option <?php if(isset($_POST['authority'])){if($_POST['authority']=="管理者"){echo "selected";}}?>>管理者</option>
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
                  
                     if($row['id']=""){
                        
                    }else{
                         if(isset($_POST['search'])){
                             
                            if(empty($_POST['name_1']) &&empty($_POST['name_2']) &&empty($_POST['name_3']) &&empty($_POST['name_4']) &&empty($_POST['mail']) && $_POST['authority']=="選択してください" &&$_POST['gender']=="未選択" ){  
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

                                    echo"<form method='post'>";
                                    echo"<td><input type='submit' value='更新' name='update'></td>";
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


                                    echo"<form method='post'>";
                                    echo"<td><input type='submit' value='削除' name='delete'></td>";
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
                                if(!isset($swith)){
                                    $swith="1";
                                }
                                }elseif(isset($_POST['search'])){ //ここから検索機能
                            

                                foreach($stmt as $row){
                                    
                                
                                    if($row['gender'] == 0){
                                        $seibetsu = "男";
                                    }else{
                                        $seibetsu = "女";
                                    }          
                                    if($row['authority'] == 0){
                                        $kengen = "一般";
                                    }else if(($row['authority'] == 1)){
                                        $kengen = "管理者";
                                    }
                                    if($row['delete_flag'] == 0){
                                        $delete = "有効";
                                    }else{
                                        $delete = "無効";
                                    }//受け取った値を変換して表示する
                                    

                                    if(empty($_POST['name_1'])){
                                        $_POST['name_1']="";
                                         $zyouken1=empty($_POST['name_1']);
                                    }elseif(!empty($_POST['name_1'])){
                                        $zyouken1=strpos($row['family_name'],$_POST['name_1'])!==false;
                                    }
                                    if(empty($_POST['name_2'])){
                                        $_POST['name_2']="";
                                        $zyouken2=empty($_POST['name_2']);               
                                    }elseif(!empty($_POST['name_2'])){
                                        $zyouken2=strpos($row['last_name'],$_POST['name_2'])!==false;
                                    }
                                    if(empty($_POST['name_3'])){
                                        $_POST['name_3']="";
                                        $zyouken3=empty($_POST['name_3']);               
                                    }elseif(!empty($_POST['name_3'])){
                                        $zyouken3=strpos($row['family_name_kana'],$_POST['name_3'])!==false;
                                    }
                                    if(empty($_POST['name_4'])){
                                        $_POST['name_4']="";
                                        $zyouken4=empty($_POST['name_4']);               
                                    }elseif(!empty($_POST['name_4'])){
                                        $zyouken4=strpos($row['last_name_kana'],$_POST['name_4'])!==false;
                                    }
                                    if(empty($_POST['mail'])){
                                        $_POST['mail']="";
                                        $zyouken5=empty($_POST['mail']);               
                                    }elseif(!empty($_POST['mail'])){
                                        $zyouken5=strpos($row['mail'],$_POST['mail']) !==false;
                                    }
                                    if($_POST['authority']=="選択してください"){
                                        $authority="";
                                        $zyouken6=empty($authority);                                        
                                    }elseif(!empty($_POST['authority'])){
                                        $zyouken6=strpos($kengen,$_POST['authority']) !==false;
                                    } 
                                    if($_POST['gender']=="未選択"){
                                        $_POST['gender']="";
                                        $zyouken7=empty($_POST['gender']); 
                                    }elseif(!empty($_POST['gender'])){
                                        $zyouken7=strpos($seibetsu,$_POST['gender'])!==false;
                                    }
                                    
                                      
                                    if($zyouken1 && $zyouken2 && $zyouken3 && $zyouken4 && $zyouken5&& $zyouken6 && $zyouken7){
                                        
                                        if(!isset($error)){
                                             $error = ""; //エラー表示をなくすため
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

                                if($delete == "有効"){

                                    echo"<form method='post'>";
                                    echo"<td><input type='submit' value='更新' name='update'></td>";
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


                                    echo"<form method='post'>";
                                    echo"<td><input type='submit' value='削除' name='delete'></td>";
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
                            }if(!isset($error)&&!isset($swith)){
                                    
                                    $error = "<div class='error'>条件に一致するアカウントは存在しませんでした。</div>";
                                    echo $error;
                                
                            }
                         }
                        }
                    ?>
                    
                </table>
                <div class="back">
                        <input type="button"  value="TOPに戻る" class="bottun" onclick="location.href='http://localhost/account/D.I.Blog/index.php'">
            </div>
            </main>
        <footer>フッター</footer>
    </body>
</html>