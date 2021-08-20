const login = document.getElementById("login");

login.addEventListener("click",function(){
    if (form.mail.value==""){
        document.getElementById("error1").textContent = "メールアドレスが未入力です";
    }else{
        document.getElementById("error1").innerText = "\n";
    }
    console.log("AAAA");
});

login.addEventListener("click",function(){
    if (form.pass.value==""){
        document.getElementById("error2").textContent = "メールアドレスが未入力です";
    }else{
        document.getElementById("error2").innerText = "\n";
    }
});