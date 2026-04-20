function validarEmail() {

let email = document.getElementById("email").value;

if(email.endsWith("@ifsp.edu.br")){

alert("Email válido!");

}else{

alert("Use seu email institucional @ifsp.edu.br");

}
function confirmarEnvio(){
    return confirm("Tem certeza que deseja enviar esta denúncia? Informações falsas podem gerar consequências.");
}

}