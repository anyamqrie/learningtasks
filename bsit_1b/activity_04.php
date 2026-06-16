<html>
    <head>
        <title>Activity 04</title>
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

    <?php
    if (isset($_POST["btnSubmit"])) {

        $num1 = $_POST["txtNum1"];
        $num2 = $_POST["txtNum2"];
        $op = $_POST["op"];
        $addition = $num1 + $num2;
        $subtraction = $num1 - $num2;
        $multiplication = $num1 * $num2;
        $division = $num1 / $num2;

        echo "First Number: <strong>".$num1."</strong><br>";
        echo "Second Number: <strong>".$num2."</strong><br><br>";
        
    if ($op=="Add"){
        echo "Sum: <strong>".$addition."</strong><br>";
    } else if ($op=="Sub") {
        echo "Difference: <strong>".$subtraction."</strong><br>";
    } else if ($op=="Mul"){
        echo "Product: <strong>".$multiplication."</strong><br>";
    } else {
        echo "Quotient: <strong>".$division."</strong><br><br>";
    } 
        echo "<a href='activity_04.php'>Back</a>";

    } else {
    ?>

    <form method="post" action="activity_04.php">
        <label>First Number</label><br>
          <input type="text" name="txtNum1" id="txtNum1" placeholder="First Number..."><br>

        <label>Second Number</label><br>
          <input type="text" name="txtNum2" id="txtNum2" placeholder="Second Number..."><br>

        <label>Operation</label><br>
            <select name="op">
                <option value="Add">Addition (+)</option>
                <option value="Sub">Subtraction (-)</option>
                <option value="Mul">Multiplication (*)</option>  
                <option value="Div">Division (/)</option>  

        <input type="submit" name="btnSubmit" value="Compute">
    </form>

    <?php } ?>

    </body>
</html>



