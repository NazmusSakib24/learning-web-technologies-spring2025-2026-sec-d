let btn = document.getElementById('btn');
btn.addEventListener('click', email_val);

function email_val(){
    let mail = document.getElementById('email');
    let email = mail.value.trim();
    let msg = document.getElementById('msg');

    if (email == ""){
        msg.innerHTML = "Can not be empty"
        msg.style.color = "red";
        return;
    }

    let atCount = 0;
    for (let i = 0; i<email.length; i++)
    {
        let ch = email[i];
        if (ch == '@'){
            atCount++;
        }
    }

    if (atCount != 1){
        msg.innerHTML = "Must contain at least one @";
        msg.style.color = "red";
        return;
    }

    if(!email.includes('.')){
        msg.innerHTML = "Must contain a dot(.).";
        msg.style.color = "red";
        return;
    }

    msg.innerHTML="Valid Email";
    msg.style.color = "green" ; 
}