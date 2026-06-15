<html>
    <head>
        <title>Activity 03</title>
        <style type="text/css">
            body {
                font-family: arial;
            }
            .form-control {
                font-family: arial;
            }
            .btn {
                background-color: #7c6388;
                color: white;
            }
            .btn:hover {
                background-color: white;
                color: #7c6388;
            }
            </style>
    </head>
    <body>
        <form method="post" action="activity_03_receiver.php">
            <label>First Name</label><br>
            <strong><?php echo $_POST["txtFirstName"] ?></strong><br>
            <label>Last Name</label><br>
            <strong><?php echo $_POST["txtLastName"] ?></strong><br>
            <label>Status</label><br>
            <strong><?php echo $_POST["status"] ?></strong><br>
            <label>DOB</label><br>
            <strong><?php echo $_POST["txtDOB"] ?></strong><br>
            <label>Address</label><br>
            <strong><?php echo $_POST["txtAddress"] ?></strong><br>
            <a href="activity_03_post.php">Back</a>
        </form>
    </body>
</html>