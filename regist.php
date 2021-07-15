<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>アカウント登録画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            function check(){
                for(var i=1; i<2;i++){
                    var hairetu =[];
                    if(form.name1.value == ""){
                          hairetu.push("名前（姓）を入力してください");
                    }
                    if(form.name2.value == ""){
                        hairetu.push("名前（名）を入力してください");
                    }
                    if(form.name3.value == ""){
                        hairetu.push("カナ（姓）を入力してください");
                    }
                    if(form.name3.value.match(/[^ァ-ヶー　]+$/)){
                        hairetu.push("カナ（姓）を全角カタカナで入力してください");
                    }
                    if(form.name4.value == ""){
                        hairetu.push("カナ（名）を入力してください");
                    }
                    if(form.name4.value.match(/[^ァ-ヶー　]+$/)){
                        hairetu.push("カナ（名）を全角カタカナで入力してください");
                    }
                    if(form.mail.value == ""){
                        hairetu.push("メールアドレスを入力してください")
                    }
                    if(form.password.value == ""){
                        hairetu.push("パスワードを入力してください");
                    }
                    if(document.form.seibetu[0].checked || document.form.seibetu[1].checked){
                    }else{
                        hairetu.push("性別が選択されていません");
                    }
                    if(form.yubin.value == ""){
                        hairetu.push("郵便番号を入力してください");
                    }
                    if(form.yubin.value.match(/[^0-9]+/)){
                        hairetu.push("郵便番号を半角数字で入力してください");
                    }
                    if(form.prefecture.value=="選択してください"){
                        hairetu.push("都道府県を選択してください");
                    }
                    if(form.sikutyouson.value == ""){
                        hairetu.push("住所(市区町村)を入力してください");
                    }
                    if(form.banti.value == ""){
                        hairetu.push("住所(番地)を入力してください");
                    }
                    if(form.kengen.value=="選択してください"){
                        hairetu.push("アカウント権限を選択してください");
                    }
                };
                if(hairetu.length>0){
                        alert(hairetu.join("\n"));
                    return false;
                }
            }
    </script>
    </head>
    
    <body>
        <header>ナビゲーションバー</header>
        <main>
            <div class="a">アカウント登録画面</div>
            <form method="post"  action="regist_confirm2.php" name="form" maxlength="10">
                <div class="contents">
                    <label>名前（姓）</label>
                    <script>
                    </script>
                    <input type="text" class="text" name="name1" value="<?php if(!empty($_POST['name1'])){echo$_POST['name1'];}?>" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>名前（名）</label>
                    <input type="text" class="text" name="name2" value="<?php if(!empty($_POST['name2'])){echo$_POST['name2'];}?>" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>カナ（姓）</label>
                    <input type="text" placeholder="カタカナのみ可" class="text" name="name3"value="<?php if(!empty($_POST['name3'])){echo$_POST['name3'];}?>" maxlength="10">
                </div> 
                
                <div class="contents">
                    <label>カナ（名）</label>
                    <input type="text" placeholder="カタカナのみ可" class="text" name="name4" value="<?php if(!empty($_POST['name4'])){echo$_POST['name4'];}?>" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>メールアドレス</label>
                    <input type="email" class="text1" size="XXX" name="mail" value="<?php if(!empty($_POST['mail'])){echo$_POST['mail'];}?>" maxlength="100">
                </div>
            
                <div class="contents">
                    <label>パスワード</label>
                    <input type="password" class="text2" size="XXX" name="password" value="<?php if(!empty($_POST['password'])){echo$_POST['password'];}?>" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>性別</label>
                    <input type="radio"  name="seibetu" class="radio" value="0" <?php if(filter_input(INPUT_POST,'seibetu') === "0"){echo 'checked';}?>>男
                    <input type="radio"  name="seibetu" class="radio" value="1" <?php if(!empty($_POST['seibetu']) && $_POST['seibetu']==="1"){echo 'checked';}?>>女
                </div>
            
                <div class="contents">
                    <label>郵便番号</label>
                    <input type="tel" class="yubin" size="10" name="yubin" placeholder="半角数字のみ可" value="<?php if(!empty($_POST['yubin'])){echo$_POST['yubin'];}?>" maxlength="7"　>
                </div>
            
                <div class="contents">
                    <label>住所(都道府県)</label>
                    <select name="prefecture" class="text3" value="<?php if(!empty($_POST['prefecture'])){echo$_POST['prefecture'];}?>">
                        <option hidden>選択してください</option>
                        <option　<?php if($_POST['prefecture']==="北海道" && !empty($_POST['prefecture'])){echo 'selected';}?>>北海道</option>
                        <option　<?php if($_POST['kengen']==="青森" && !empty($_POST['prefecture'])){echo 'selected';}?>>青森県</option>
                        <option>岩手県</option>
                        <option>宮城県</option>
                        <option>秋田県</option>
                        <option>山形県</option>
                        <option>福島県</option>
                        <option>茨城県</option>
                        <option>栃木県</option>
                        <option>群馬県</option>
                        <option>埼玉県</option>
                        <option>千葉県</option>
                        <option>東京都</option>
                        <option>神奈川県</option>
                        <option>新潟県</option>
                        <option>富山県</option>
                        <option>石川県</option>
                        <option>福井県</option>
                        <option>山梨県</option>
                        <option>長野県</option>
                        <option>岐阜県</option>
                        <option>静岡県</option>
                        <option>愛知県</option>
                        <option>三重県</option>
                        <option>滋賀県</option>
                        <option>京都府</option>
                        <option>大阪府</option>
                        <option>兵庫県</option>
                        <option>奈良県</option>
                        <option>和歌山県</option>
                        <option>鳥取県</option>
                        <option>島根県</option>
                        <option>岡山県</option>
                        <option>広島県</option>
                        <option>山口県</option>
                        <option>徳島県</option>
                        <option>香川県</option>
                        <option>愛媛県</option>
                        <option>高知県</option>
                        <option>福岡県</option>
                        <option>佐賀県</option>
                        <option>長崎県</option>
                        <option>熊本県</option>
                        <option>大分県</option>
                        <option>宮崎県</option>
                        <option>鹿児島県</option>
                        <option>沖縄県</option>
                    </select>
                </div>
            
                <div class="contents">
                    <label>住所(市区町村)</label>
                    <input type="text"class="text3" name="sikutyouson" value="<?php if(!empty($_POST['sikutyouson'])){echo$_POST['sikutyouson'];}?>" maxlength="10">
                </div>
                
                <div class="contents">
                    <label>住所(番地)</label>
                    <input type="text"class="text4" name="banti" value="<?php if(!empty($_POST['banti'])){echo$_POST['banti'];}?>" maxlength="100">
                </div>

                <div class="contents">
                    <label>アカウント権限</label>
                    <select name="kengen" class="text5" value="<?php if(!empty($_POST['kengen'])){echo$_POST['kengen'];}?>">
                        <option hidden>選択してください</option>
                        <option <?php if($_POST['kengen']==="一般" && !empty($_POST['kengen'])){echo 'selected';}?>>一般</option>
                        <option <?php if($_POST['kengen']==="管理者" && !empty($_POST['kengen'])){echo 'selected';}?>>管理者</option>
                    </select>
                </div>
            
                <div class="kakunin">
                    <input type="submit" value="確認する" class="bottun" onclick="return check()">
                </div>
            </form>
        </main>
        <footer>フッター</footer>
    </body>

</html>