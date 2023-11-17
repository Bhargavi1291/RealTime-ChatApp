const pswrdField = document.querySelector(".form  input[type='password']"),
toggleBtn = document.querySelector(".form .field i");


toggleBtn.onclick = ()=>{
    if(pswrdField.type == "text"){
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
    else{       
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }
}