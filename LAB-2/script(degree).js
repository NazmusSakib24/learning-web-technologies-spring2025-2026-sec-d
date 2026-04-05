let btn = document.getElementById('btn');
btn.addEventListener('click', dg)


function dg(){
    let s = document.getElementById('ssc');
    let h = document.getElementById('hsc');
    let b = document.getElementById('bsc');
    let msg = document.getElementById('msg');

    if(!s.checked && !h.checked && !b.checked)
    {
        msg.innerHTML = "Select at least one";
        msg.style.color = "red";
        return;
    }

}