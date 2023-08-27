<?php
$con = mysqli_connect('localhost','root','');

if($con){
    echo "connection successful";
 
}
else{
    echo "no connection";
    
}
mysqli_select_db($con, 'qubic mantra' );
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$query = " insert into userinfo (user, email, mobile, message) values ('$user', '$email', '$mobile', '$message',)";
mysqli_query($con,$query);
header('loaction:index.php');
?>