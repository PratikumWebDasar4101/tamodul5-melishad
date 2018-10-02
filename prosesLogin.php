<?php  
$username=$_POST['username']? $_POST['username']:"Input tidak boleh kosong";
$password=$_POST['password']? $_POST['password']:"Input tidak boleh kosong";
if($username == "debby" && $password == "123"){
    $_SESSION["username"]=$username;
    header("Location:registrasi.php");
}else{
    echo "Maaf username/password yang anda inputkan salah! ";
}
?>
<br><br> Silahkan inputkan kembali <a href="login.php">LOGIN</a>
