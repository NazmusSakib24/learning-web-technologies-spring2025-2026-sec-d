let btn = document.getElementById('btn');
btn.addEventListener('click', name_val);

function name_val(){
    let username=document.getElementById('name');
    let name = username.value.trim();
    let msg = document.getElementById('msg');
    
    if (name == ""){
        msg.innerHTML="Can not be empty";
        msg.style.color= "red";
        return;
    }

    for (let i = 0; i<name.length; i++)
    {
        let ch = name[i];

        if (i == 0) {
            if (!((ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z'))) 
            {
                msg.innerHTML = "Must start with a letter";
                msg.style.color = "red";
                return;
            }
        }   

    let n_length = name.split(" ");
    if (n_length.length < 2)
    {
        msg.innerHTML = "Must have at least two words.";
        msg.style.color= "red";
        return;
    }

        if (!((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z') || ch == '.' || ch == '-' || ch ==' '))
        {
            msg.innerHTML = "Can contain a-z or A-Z or dot(.) or dash(-) or Space( )";
            msg.style.color="red";
            return ;
        }
    }
}