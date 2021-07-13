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
                    if(form.name4.value == ""){
                        hairetu.push("カナ（名）を入力してください");
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
            <form method="post"  action="regist_confirm2.php" name="form" maxlength="10">
                <div class="contents">
                    <label>名前（姓）</label>
                    <script>
                    </script>
                    <input type="text" class="text" size="XXX" name="name1" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>名前（名）</label>
                    <input type="text" class="text" size="XXX" name="name2" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>カナ（姓）</label>
                    <input type="text" class="text" size="XXX" name="name3" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>カナ（名）</label>
                    <input type="text" class="text" size="XXX" name="name4" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>メールアドレス</label>
                    <input type="text" class="text1" size="XXX" name="mail" maxlength="100">
                </div>
            
                <div class="contents">
                    <label>パスワード</label>
                    <input type="password" class="text2" size="XXX" name="password" maxlength="10">
                </div>
            
                <div class="contents">
                    <label>性別</label>
                    <input type="radio" size="XXX" name="seibetu" class="radio" value="男">男
                    <input type="radio" size="XXX" name="seibetu" class="radio" value="女">女
                </div>
            
                <div class="contents">
                    <label>郵便番号</label>
                    <input type="text" class="yubin" size="10" name="yubin" maxlength="7">
                </div>
            
                <div class="contents">
                    <label>住所(都道府県)</label>
                    <select name="prefecture" placeholder="" class="text3">
                        <option hidden>選択してください</option>
                        <option>北海道</option>
                        <option>青森県</option>
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
                    <input type="text"class="text3" size="XXX" name="sikutyouson" maxlength="10">
                </div>
                
                <div class="contents">
                    <label>住所(番地)</label>
                    <input type="text"class="text4" size="XXX" name="banti" maxlength="100">
                </div>

                <div class="contents">
                    <label>アカウント権限</label>
                    <select name="kengen" class="text5">
                        <option hidden>選択してください</option>
                        <option>一般</option>
                        <option>管理者</option>
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