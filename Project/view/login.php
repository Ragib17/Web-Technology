<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="../css/pageone.css">

<h2><span class = "blueColor">..............................................................................................................Login Page.............................................................................................................................</span></h2>
<hr>
<div class = "one";>

<form action="" method="post">
<span class = "blueColor">User name:</span><br>
    <input type="text" name="username" placeholder="Enter your username" ><br><br>
    <span class = "blueColor">Password</span><br>
    <input type="password" name="password" placeholder="Enter your password"  ><br><br>
    <input name="submit" type="submit" value="LOGIN">
</div>
</form>
<br>
<?php echo $message; ?>

</body>
</html>