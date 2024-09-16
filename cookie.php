<?php 
session_start();  

$correct_username = "nisil";
$correct_password = "123";

if(isset($_POST['submit_btn'])) {
   $username = $_POST['name'];
   $password = $_POST['password'];
   $isSelected = isset($_POST['isSelected']) ? true : false;

   if($correct_username === $username && $correct_password === $password) {
        $_SESSION['username'] = $username;

        if ($isSelected) {
            $_SESSION['isSelected'] = true;
        }
        
        header('location: welcome.php'); 
        exit(); 
    } else {
        echo "Invalid username or password!";
    }
}
?>

<form method="post" action="">
    <input type="text" placeholder="Please enter your username" name="name" required> 
    <input type="password" placeholder="Please enter your password" name="password" required> 
    <label>Remember me</label>
    <input type="checkbox" name="isSelected">
    <input type="submit" value="submit" name="submit_btn">
</form>
