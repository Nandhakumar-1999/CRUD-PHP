<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO user_information (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "data insert successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control my-2" placeholder="Enter your name" id="name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control my-2" placeholder="Enter your Email" id="email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control my-2" placeholder="Enter your mobile number" id="mobile" name="mobile" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="pswrd">Password</label>
                <input type="password" class="form-control my-2" placeholder="Enter your password" id="pswrd" name="password" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>