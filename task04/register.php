<?php
$conn=new mysqli("localhost","root","","fooddelidb");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$country=$_POST['country'];

if($password!=$confirm){
    echo "Passwords do not match!";
    exit;
}

$hashedPassword=password_hash($password,PASSWORD_DEFAULT);
 $hashedConfirm  = password_hash($confirm, PASSWORD_DEFAULT);

$sql="INSERT INTO registration (name,mobile,email,password,confirm,dob,gender,country) 
VALUES
('$name', '$mobile', '$email', '$hashedPassword', '$hashedConfirm', '$dob', '$gender', '$country')";

if($conn->query($sql)===TRUE){
echo "Registration successful!";
}
else{
    echo "Error:".$conn->error;
}
}
$conn->close();
?>