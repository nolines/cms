<?php
include ('includes/connect.php');
session_start();
if(isset($_POST['login'])){
    if(isset($_POST['username'])){
        if(isset($_POST['password'])){
            $username = $_POST['username'];
            $query = mysql_query("SELECT * FROM users Where username = '$username'") or die(mysql_error());
            $user = mysql_fetch_array($query);
            
            if(md5($_POST['password']) == $user['password']){
                echo 'Giriş Başarılı !';
                $_SESSION['user'] = $user['password'];
                header("location: index.php");
            } else {
                    echo 'Bilgilerinizi Kontrol Ediniz. <br>Tekrar deneyiniz.';
                    include ('login.php');
            }
        } else {
                    echo 'Sifre Hatali <br>Tekrar deneyiniz.';
                    include ('login.php');
             }
    } else {
                    echo 'Kullanici adi Hatali <br>Tekrar deneyiniz.';
                    include ('login.php');
    }
} else {
                    echo 'Giris Formunu Doldurunuz. <br>Tekrar deneyiniz.';
                    include ('login.php');
    
}
?>
