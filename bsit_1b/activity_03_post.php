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
            <input type="text" name="txtFirstName" id="txtFirstName" placeholder="First Name..."><br><br>
            <label>Last Name</label><br>
            <input type="text" name="txtLastName" id="txtLastName" placeholder="Last Name..."><br><br>
            <label>Status</label><br>
            <select name="status">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
            </select><br><br>
            <label>DOB</label><br>
            <input type="date" class="form-control" name="txtDOB" placeholder="DOB..."><br><br>
            <label>Address</label><br>
            <textarea rows="10" class="form-control"
                cols="25" name="txtAddress" id="txtAddress" placeholder="Address..."></textarea><br><br>
            <input class="btn" type="submit" name="btnSubmit" value="Submit"/>
            <input class="btn" type="reset" value="Clear"/>
        </form>
    </body>
</html>