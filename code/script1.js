document.getElementById("update").addEventListener("click",function(){
    if (form.password.value==""){
        document.getElementById("error6").textContent = "パスワードが未入力です。";
    }else{
        document.getElementById("error6").innerText = "\n";
    }
});