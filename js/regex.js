//Funcion para validar expresiones regulares
//Aca se valida tanto el nombre de usuario como el correo y la contraseña
//de ser todo correcto y validado entonces prosigue con el php
function validar(){
    var msg = "";
    var regex1 = /[a-zA-Z0-9]+/;
    var regex2 = /^[A-Z0-9a-z.]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
    var regex3 = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,14}$/;

    if((regex1.test(document.getElementById("username").value))){
        if((regex2.test(document.getElementById("email").value))){
            if((regex3.test(document.getElementById("password").value))){
                return true;
            } else {
                msg="La contraseña no es valida\nAsegurate que sean 8 caracteres minimo\ndebe estar conformada por al menos una letra mayuscula, una minuscula\nllevar minimo 1 numero y un caracter especial"
                window.alert(msg);
                return false;
            }
        } else {
            msg="El correo introducido no es valido!\nVerifica que este bien escrito"
            window.alert(msg);
            return false;
        }
    } else {
        msg="El nombre de usuario no es valido!\nTu nombre de usuario debe contener letras"
        window.alert(msg);
        return false;
    }
}
//Funcion para ver la contraseña con el checkbox de la pagina
function viewpsw(){
    var x = document.getElementById("password");
    if(x.type === "password"){
        x.type = "text";
    } else {
        x.type = "password";    
    }
}