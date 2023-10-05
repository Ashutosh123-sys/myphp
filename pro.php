<!DOCTYPE html>
<html>
<head>
    <title>FORM-PROJECT</title>
    <link rel="stylesheet" href="p2.css">
</head>
<body>
    <h2 id="per">FORM</h2>
    <form action="pro.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>

        <label for="address1">Address:</label>
        <textarea id="address1" name="address" rows="4" cols="50" required></textarea><br><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="pincode">Pin Code:</label>
        <input type="text" id="pincode" name="pincode" required><br><br>

        <input type="submit" value="Submit" id="Submit">
        <?php
            $conn=mysqli_connect("localhost","root","Welcome@27356","data");

            $fname =  $_POST['fname'];
            $lname = $_POST['lname'];
            $address =  $_POST['address'];
            $contact = $_POST['contact'];
            $pincode = $_POST['pincode'];
            if (!$conn) {
                die("Connection failed:".$conn->connect_error);
            }
            $sqlquery = "INSERT INTO data.project_table VALUES
                ('$fname', '$lname', '$address','$contact','$pincode')";
            $stmt=mysqli_query($conn,$sqlquery);

        ?>
    </form>
</body>
</html>
