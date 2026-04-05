let btn = document.getElementById('btn');
btn.addEventListener ('click', bg);

function bg(){
    let bg = document.getElementById('bg').value;
    let msg = document.getElementById('msg');

    if (bg == ""){
        msg.innerHTML = "Select an option";
        msg.style.color = "red";
        return;
    }

    msg.innerHTML = "Valid Selection";
    msg.style.color = "green";
}