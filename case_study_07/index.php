<!DOCTYPE html>
<html>
<head>
    <title>..: LOGIN :..</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

 <?php 
     if (isset($_POST["submit"])) {
        $userName = $_POST["userName"];
        $userPassword = $_POST["userPassword"];

            if ($userName == "Admin" && $userPassword=="1234") {
                echo "Login success! Welcome, ".$userName.". <br> <br>";
                echo "<a href='login.php'>Log out</a>";
            }

            else if ($userName != "Admin" && $userPassword!="1234") {
                echo "Wrong username and password! Please try again. <br> <br>";
                echo "<a href='login.php'>Back</a>";
            }

        } else {

?>

<body>
    <div class="login">
    <form method="post" action="">

    <br><br>
        <label><b>Username</b></label><br>
        <input type="text" name="userName" placeholder="Username..."><br><br>

        <label><b>Password</b></label><br>
        <input type="password" name="userPassword" placeholder="Password...">

        <br><br>

        <input type="submit" name="submit" value="Submit"> <br><br>
    </form>
    </div>
</body>

<?php } ?>

</html>