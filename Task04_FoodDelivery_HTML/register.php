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
 <!DOCTYPE html>
<html >
<head>
    
    <title>Create Account</title>

    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #6dd5fa, #2980b9);
            font-family: Arial;
        }

        .form-box {
            margin-top:25px;
            margin-bottom:15px;
            
            width: 380px;
            background: #fff;
            padding: 30px;
            /* border-radius: 10px; */
            box-shadow: 0 10px 25px black;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-size: 12px;
            margin-bottom: 3px;
        }

        input, select {
            width: 100%;
            padding: 5px;
            border: 1px solid lightblue;
            border-radius: 3px;
            outline: none;
        }

        input:focus, select:focus {
            border-color: #2980b9;
        }

        .gender {
            display: flex;
            gap: 10px;
            font-size: 12px;
        }

        .buttons {
            width: 100%;
            background: #2980b9;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 3px;
        }

        .buttons:hover {
            background: #1f6691;
        }

        /* .reset-btn {
            text-align: center;
            margin-top: 10px;
        } */
    </style>
</head>

<body>

<div class="form-box">
    <h2>Create Account</h2>

    <form method="post" action="register.php">
        <!-- <div class="form-group">
            <label>First Name</label>
            <input type="text" placeholder="Aswani" required>
        </div> -->

        <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="Durga" name="name" required>
        </div>

        <div class="form-group">
            <label>Mobile Number</label>
            <input type="tel" name="mobile" placeholder="000-000-0000" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="aswani@gmail.com" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Minimum 5 characters" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm" required>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="dob">
        </div>

        <div class="form-group">
            <label>Gender</label>
            <div class="gender">
                <label><input type="radio" name="gender"> Male</label>
                <label><input type="radio" name="gender"> Female</label>
                <label><input type="radio" name="gender"> Custom</label>
            </div>
        </div>

        <div class="form-group">
            <label>Country</label>
            <select name="country">
                <option>Select</option>
                <option>India</option>
                <option>USA</option>
                <option>China</option>
            </select>
        </div>

       

        <button class="buttons">Create Account</button>
<!-- 
        <div class="reset-btn">
            <input type="reset">
        </div> -->
    </form>
</div>

</body>
</html>
