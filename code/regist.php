<?php
session_start();
try{
if($_SESSION['login']==1){
   echo ""; 
}else if($_SESSION['login']==0){
    header("Location: error2.php");
}else{
    header("Location: error4.php");
}
}catch(PDOException $e){
        echo "データベースの接続に失敗しました:";
        echo $e->getMessage();
        exit;
}

    unset($_SESSION['regist_name1']);
    unset($_SESSION['regist_name2']);
    unset($_SESSION['regist_name3']);
    unset($_SESSION['regist_name4']);
    unset($_SESSION['regist_mail']);
    unset($_SESSION['regist_gender']);
    unset($_SESSION['regist_yubin']);
    unset($_SESSION['regist_password']);
    unset($_SESSION['regist_prefecture']);
    unset($_SESSION['regist_address1']);
    unset($_SESSION['regist_address2']);
    unset($_SESSION['regist_authority']);

if(isset($_POST['regist'])){
                     
    $_SESSION['regist_name1']=$_POST['name1'];
                    
    $_SESSION['regist_name2']=$_POST['name2'];
                        
    $_SESSION['regist_name3']=$_POST['name3'];
                       
    $_SESSION['regist_name4']=$_POST['name4'];
                       
    $_SESSION['regist_mail']=$_POST['mail'];
                       
    $_SESSION['regist_gender']=$_POST['seibetu'];
                       
    $_SESSION['regist_yubin']=$_POST['yubin'];
                       
    $_SESSION['regist_password']=$_POST['password'];
                       
    $_SESSION['regist_prefecture']=$_POST['prefecture'];
                        
    $_SESSION['regist_address1']=$_POST['address1'];
                       
    $_SESSION['regist_address2']=$_POST['address2'];
                        
    $_SESSION['regist_authority']=$_POST['authority'];
                    


    if(isset($_POST['name1']) && isset($_POST['name2'])&& isset($_POST['name3'])&& isset($_POST['name4']) && isset($_POST['mail']) && isset($_POST['seibetu']) && isset($_POST['yubin']) && isset($_POST['password']) && isset($_POST['prefecture']) && isset($_POST['address1']) && isset($_POST['address2']) && isset($_POST['authority'])){
    header("Location:http://localhost/account/code/regist_confirm.php");
}
}
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>アカウント登録画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function check(){
                
                    if(form.name1.value == ""){
                          return false;
                    }
                    if(form.name2.value == ""){
                        return false;
                    }
                    if(form.name3.value == ""){
                        return false;
                    }
                    if(form.name3.value.match(/[^ァ-ヶー　]+$/)){
                        return false;
                    }
                    if(form.name4.value == ""){
                        return false;
                    }
                    if(form.name4.value.match(/[^ァ-ヶー　]+$/)){
                        return false;
                    }
                    if(form.mail.value == ""){
                        return false;
                    }
                    if(form.password.value == ""){
                        return false;
                    }
                    if(document.form.seibetu[0].checked || document.form.seibetu[1].checked){
                    }else{
                        return false;
                    }
                    if(form.yubin.value == ""){
                        return false;
                    }
                    if(form.yubin.value.match(/[^0-9]+/)){
                       return false;
                    }
                    if(form.prefecture.value=="選択してください"){
                        return false;
                    }
                    if(form.sikutyouson.value == ""){
                        return false;
                    }else if(form.sikutyouson.value.match(/^[a-zA-Z]*$/)){
                             return false;
                             }
                    if(form.banti.value == ""){
                        return false;
                    }else if(form.sikutyouson.value.match(/^[a-zA-Z]*$/)){
                             return false;
                             }
                    if(form.kengen.value=="選択してください"){
                        return false;
                    }
                };
    </script>
    </head>
    
    <body>
        
        <header>ナビゲーションバー</header>
        <main>
            <div class="a">アカウント登録画面</div>
            <form method="post"  action="" name="form" maxlength="10">
                <div class="contents">
                    <label>名前（姓）</label>
                    <input type="text" class="text" name="name1" value="<?php if(!empty($_SESSION['regist_name1']))  {echo$_SESSION['regist_name1'];}?>" maxlength="10">
                    <div id ="error1"><br></div>
                </div>
            
                <div class="contents">
                    <label>名前（名）</label>
                    <input type="text" class="text" name="name2" value="<?php if(!empty($_SESSION['regist_name2'])){echo $_SESSION['regist_name2'];}?>" maxlength="10">
                    <div id ="error2"><br></div>
                </div>
            
                <div class="contents">
                    <label>カナ（姓）</label>
                    <input type="text" placeholder="カタカナのみ可" class="text" name="name3"value="<?php if(!empty($_SESSION['regist_name3'])){echo $_SESSION['regist_name3'];}?>" maxlength="10">
                    <div id ="error3"><br></div>
                </div> 
                
                <div class="contents">
                    <label>カナ（名）</label>
                    <input type="text" placeholder="カタカナのみ可" class="text" name="name4" value="<?php if(!empty($_SESSION['regist_name4'])){echo $_SESSION['regist_name4'];}?>" maxlength="10">
                    <div id ="error4"><br></div>
                </div>
            
                <div class="contents">
                    <label>メールアドレス</label>
                    <input type="email" class="text1" size="XXX" name="mail" value="<?php if(!empty($_SESSION['regist_mail'])){echo $_SESSION['regist_mail'];}?>"  maxlength="100">
                    <div id ="error5"><br></div>
                </div>
            
                <div class="contents">
                    <label>パスワード</label>
                    <input type="password" class="text2" size="XXX" name="password" value="<?php if(!empty($_SESSION['regist_password'])){echo $_SESSION['regist_password'];}?>" maxlength="10">
                    <div id ="error6"><br></div>
                </div>
            
                <div class="contents">
                    <label>性別</label>
                    <input type="radio"  name="seibetu" class="radio" value="0" checked <?php if(filter_input(INPUT_POST,'seibetu') === "0"){echo 'checked';}?>>男
                    <input type="radio"  name="seibetu" class="radio" value="1" <?php if(!empty($_SESSION['regist_gender']) && $_SESSION['regist_gender']==="1"){echo 'checked';}?>>女
                    <div id ="error7"><br></div>
                </div>
            
                <div class="contents">
                    <label>郵便番号</label>
                    <input type="tel" class="yubin" size="10" name="yubin" placeholder="半角数字のみ可" value="<?php if(!empty($_SESSION['regist_yubin'])){echo $_SESSION['regist_yubin'];}?>" maxlength="7"　>
                    <div id ="error8"><br></div>
                </div>
            
                <div class="contents">
                    <?php
                    $prifecture='';
                    
                    $prefectureList = array(
                         "選択してください",
                         "北海道",
                         "青森県",
                         "岩手県",
                         "宮城県",
                         "秋田県",
                         "山形県",
                         "福島県",
                         "茨城県",
                         "栃木県",
                         "群馬県",
                         "埼玉県",
                         "千葉県",
                         "東京都",
                         "神奈川県",
                         "新潟県",
                         "富山県",
                         "石川県",
                         "福井県",
                         "山梨県",
                         "長野県",
                         "岐阜県",
                         "静岡県",
                         "愛知県",
                         "三重県",
                         "滋賀県",
                         "京都府",
                         "大阪府",
                         "兵庫県",
                         "奈良県",
                         "和歌山県",
                         "鳥取県",
                         "島根県",
                         "岡山県",
                         "広島県",
                         "山口県",
                         "徳島県",
                         "香川県",
                         "愛媛県",
                         "高知県",
                         "福岡県",
                         "佐賀県",
                         "長崎県",
                         "熊本県",
                         "大分県",
                         "宮崎県",
                         "鹿児島県",
                         "沖縄県",
                     );
                    
                    if (isset($_SESSION['regist_prefecture'])){
                        $prefecture=$_SESSION['regist_prefecture'];
                    }
                    ?>
                </div>   
                <div class="contents">
                    <label>住所(都道府県)</label>
                    <select name="prefecture" class="text6">
                    <?php
                        foreach($prefectureList as $value){
                            if($value === $prefecture){
                                echo "<option value='$value' selected>".$value."</option>";
                            }else{
                                echo "<option value='$value'>".$value."</option>";
                            }
                        }
                        ?>
                        
                    </select>
                    <div id ="error9"><br></div>
                </div>
            
                <div class="contents">
                    <label>住所(市区町村)</label>
                    <input type="text"class="text3" name="address1" value="<?php if(!empty($_SESSION['regist_address1'])){echo $_SESSION['regist_address1'];}?>" maxlength="10">
                    <div id ="error10"><br></div>
                </div>
                
                <div class="contents">
                    <label>住所(番地)</label>
                    <input type="text"class="text4" name="address2" value="<?php if(!empty($_SESSION['regist_address2'])){echo $_SESSION['regist_address2'];}?>" maxlength="100">
                    <div id ="error11"><br></div>
                </div>
                
                <?php
                
               
                
                $a="";
                $b="";
                
                if(!empty($_SESSION['regist_authority'])){
                    $authority= $_SESSION['regist_authority'];
                }else{
                    $authority="";
                }
                
                if($authority==="一般"){
                    $a="selected";
                }else if($authority==="管理人"){
                    $b="selected";
                }
               ?>
                <div class="contents">
                    <label>アカウント権限</label>
                    <select name="authority" class="authority">
                        <option <?php echo $a ?> >一般</option>
                        <option <?php echo $b ?> >管理人</option>
                    </select>
                    <div id ="error12"><br></div>
                    
                   
                    <div id ="error12"><br></div>
                </div>
            
                <div class="kakunin">
                    <input type="submit" value="確認する" id="kakunin" name="regist" class="bottun" onclick="return check()">
                </div>
            </form>
            
        </main>
        <footer>フッター</footer>
        <script src="script.js"></script>
    </body>

</html>