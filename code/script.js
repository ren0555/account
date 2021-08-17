const kakunin = document.getElementById("kakunin");

kakunin.addEventListener("click",function(){
    if (form.name1.value==""){
        document.getElementById("error1").textContent = "名前（姓）が未入力です。";
    }else{
        document.getElementById("error1").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.name2.value==""){
        document.getElementById("error2").textContent = "名前（名）が未入力です。";
    }else{　
        document.getElementById("error2").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.name3.value==""){
        document.getElementById("error3").textContent = "カナ（姓）が未入力です。";
    }else if(form.name3.value.match(/[^ァ-ヶー　]+$/)){
        document.getElementById("error3").textContent = "カタカナで入力してください。";
    }else{
        document.getElementById("error3").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.name4.value==""){
        document.getElementById("error4").textContent = "カナ（名）が未入力です。";
    }else if(form.name4.value.match(/[^ァ-ヶー　]+$/)){
        document.getElementById("error4").textContent = "カタカナで入力してください。";
    }else{
        document.getElementById("error4").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.mail.value==""){
        document.getElementById("error5").textContent = "メールアドレスが未入力です。";
    }else{
        document.getElementById("error5").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.password.value==""){
        document.getElementById("error6").textContent = "パスワードが未入力です。";
    }else{
        document.getElementById("error6").innerText = "\n";
    }
});

kakunin.addEventListener("click",function(){
    if (form.yubin.value==""){
        document.getElementById("error8").textContent = "郵便番号が未入力です。";
    }else if(form.yubin.value.match(/[^0-9]+/)){
        document.getElementById("error8").textContent ="数字で入力してください";
    }else{
        document.getElementById("error8").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.prefecture.value=="選択してください"){
        document.getElementById("error9").textContent = "住所(都道府県)が未入力です。";
    }else{
        document.getElementById("error9").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.sikutyouson.value==""){
        document.getElementById("error10").textContent = "住所(市区町村)が未入力です。";
    }else if(form.sikutyouson.value.match(/[a-zA-Z]+$/)){
        document.getElementById("error10").textContent = "英字が含まれています。"
    }else{
        document.getElementById("error10").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.banti.value==""){
        document.getElementById("error11").textContent = "住所(番地)が未入力です。";
    }else if(form.banti.value.match(/[a-zA-Z]+$/)){
        document.getElementById("error11").textContent = "英字が含まれています。";
    }else{
        document.getElementById("error11").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.kengen.value==""){
        document.getElementById("error12").textContent = "権限が未入力です。";
    }else{
        document.getElementById("error12").innerText = "\n";
    }
});

kakunin.addEventListener("click",function(){
    if (form.address1.value==""){
        document.getElementById("error10").textContent = "住所(市区町村)が未入力です。";
    }else if(form.address1.value.match(/[a-zA-Z]+$/)){
        document.getElementById("error10").textContent = "英字が含まれています。"
    }else{
        document.getElementById("error10").innerText = "\n";
    }
});
kakunin.addEventListener("click",function(){
    if (form.address2.value==""){
        document.getElementById("error11").textContent = "住所(番地)が未入力です。";
    }else if(form.address2.value.match(/[a-zA-Z]+$/)){
        document.getElementById("error11").textContent = "英字が含まれています。";
    }else{
        document.getElementById("error11").innerText = "\n";
    }
});



