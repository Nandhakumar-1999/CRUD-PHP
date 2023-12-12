<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM user_information WHERE id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE user_information 
    SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password'
    WHERE id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        //echo "data updated successfully";
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
                <input type="text" class="form-control my-2" placeholder="Enter your name" id="name" name="name" autocomplete="off" required value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control my-2" placeholder="Enter your Email" id="email" name="email" autocomplete="off" required value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control my-2" placeholder="Enter your mobile number" id="mobile" name="mobile" autocomplete="off" required value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label for="pswrd">Password</label>
                <input type="text" class="form-control my-2" placeholder="Enter your password" id="pswrd" name="password" autocomplete="off" required value=<?php echo $password;?>>
            </div>
            <button type="submit" class="btn btn-primary my-2" name="submit">Update</button>
        </form>
    </div>
</body>

</html>