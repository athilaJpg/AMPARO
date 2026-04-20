<?php
session_start();

$email = $_POST['email'];

if(
    str_ends_with($email, "@ifsp.edu.br") || 
    str_ends_with($email, "@aluno.ifsp.edu.br")
){
    
    $_SESSION['email'] = $email;
    header("Location: denuncia.php");
    exit();

}else{
    echo "Use um email institucional válido.";
}
?>