var log = true;
function sign(){
    let id = null;
    var sign = document.getElementById("sign");
    var cont = document.getElementById("scont");
    var login = document.getElementById("log");
    var register = document.getElementById("reg");
    var logininp = document.getElementById("loginp");
    var registerinp = document.getElementById("reginp");
    let pos = 600;
    let conpos = 0;
    if (log){
        pos = 0;
        conpos = 40;
    }
    clearInterval(id);
    id = setInterval(frame, 10);
    function frame() {
        if (log){
            if (pos == 600) {
                clearInterval(id);
                log = false;
            } else {
                pos += 30;
                conpos -= 2;
                if (pos == 300){
                    login.style.display = "none";
                    register.style.display = "unset";
                    logininp.style.display = "none";
                    registerinp.style.display = "unset";
                }
                sign.style.marginLeft = pos + "px";
                cont.style.marginLeft = conpos + "%";
            }
        }
        else {
            if (pos == 0) {
                clearInterval(id);
                log = true;
            } else {
                pos -= 30;
                conpos += 2;
                if (pos == 300){
                    login.style.display = "unset";
                    register.style.display = "none";
                    logininp.style.display = "unset";
                    registerinp.style.display = "none";
                }
                sign.style.marginLeft = pos + "px";
                cont.style.marginLeft = conpos + "%";
            }
        }
    }
}