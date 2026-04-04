let btn = document.getElementById('btn');
btn.addEventListener('click', gender_val);

function gender_val(){
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let other = document.getElementById('other');
    let msg = document.getElementById('msg');

    if(!male.checked && !female.checked && !other.checked)
    {
        msg.innerHTML = "Check at least one";
        msg.style.color = "red";
        return;
    }

    msg.innerHTML = "Checked!"
    msg.style.color = "green";
    
    
}    