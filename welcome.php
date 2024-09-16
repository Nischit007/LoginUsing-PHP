<?php
session_start();  


if (isset($_SESSION['isSelected']) && $_SESSION['username'] === 'nisil') {
    setcookie("user", "nischit", time() + (86400 * 30), "/");  
}

echo "<h1>Welcome to Home, " . $_SESSION['username'] . "!</h1>";
?>

<form method="POST">
    <input type="submit" value="Logout" name="logout">
</form>

<?php
if (isset($_POST['logout'])) {
    session_unset(); 
    session_destroy();  
    
   
    setcookie("user", "", time() - 3600, "/");
    
    header('location: cookie.php'); 
    exit();  
}
?>
