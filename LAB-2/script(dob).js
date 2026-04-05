let btn = document.getElementById('btn')
btn.addEventListener('click', dmy)

function dmy(){
    let dd = document.getElementById('dd');
    let mm = document.getElementById('mm');
    let yy = document.getElementById('yy');
    let msg = document.getElementById('msg');

    if (dd.value == "" || mm.value == "" || yy.value == ""){
        msg.innerHTML = "Can not be empty.";
        msg.style.color = "red";
        return;
    }

    dd = parseInt(dd.value);
    mm = parseInt(mm.value);
    yy = parseInt(yy.value); 

    if (dd < 1 || dd > 31)
    {
        msg.innerHTML = "Day must be 1-31 ";
        msg.style.color = "red";
        return;
    }

    if (mm < 1 || mm > 12)
    {
        msg.innerHTML = "Day must be 1-31 ";
        msg.style.color = "red";
        return;
    }

    if (yy < 1900 || yy > 2016)
    {
        msg.innerHTML = "Day must be 1-31 ";
        msg.style.color = "red";
        return;
    }

    msg.innerHTML = "Valid";
    msg.style.color = "green";
}