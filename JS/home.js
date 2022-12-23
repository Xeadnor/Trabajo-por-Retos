const login = document.getElementById("login");
const divlogin = document.getElementById("divlogin");
const body1 = document.getElementById("body");

login.addEventListener("click",logar)

function logar(e) {
    e.preventDefault();
    divlogin.style.display="block";
    document.onclick = function(e){
        if(e.target.id !== 'divlogin' && e.target.id !== "login" && e.target.id !== "formlogin"
        && e.target.id !== "usuario"
        && e.target.id !== "password"
        && e.target.id !== "reenviador"
        && e.target.id !== "divr"
        && e.target.id !== "falloLogado"
        && e.target.id !== 'ti'){

          divlogin.style.display = 'none';
        }
    }
   
}

