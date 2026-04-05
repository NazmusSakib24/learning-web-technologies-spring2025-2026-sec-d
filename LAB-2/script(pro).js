let btn = document.getElementById('btn');
btn.addEventListener('click', profile_val);

function profile_val(){
    let uid = document.getElementById('name').value.trim();
    let pic = document.getElementById('pic');
    let msg = document.getElementById('msg');

    if(uid == ""){
        msg.innerHTML = "User ID cannot be empty";
        msg.style.color = "red";
        return;
    }

    let num = parseInt(uid);

    if(isNaN(num) || num <= 0){
        msg.innerHTML = "User ID must be a positive number";
        msg.style.color = "red";
        return;
    }

    if(pic.value == ""){
        msg.innerHTML = "Picture cannot be empty";
        msg.style.color = "red";
        return;
    }

    msg.innerHTML = "Valid";
    msg.style.color = "green";
}