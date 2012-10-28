<html>
<head>
    <title>Admin Area</title>
</head>
<body>
    <?php
include ('includes/connect.php');
session_start();
if(isset($_SESSION['user'])){
?>
    <span>Giriş Başarılı ! Hoşgeldin <?php echo $_SESSION['user']; ?></span>
    <?php
}else{
header("location: login.php");

}
?>    
</body>
</html>
