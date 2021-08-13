<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    <title>Food details</title>
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

//create connen=ction
$conn=new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
die("Connection failed : ".$conn->connect_error);
}

$itm = $_POST["food"];

$sql = "SELECT * FROM `menu` WHERE ITEM = '$itm'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

            // output data of each row
            if($row = $result->fetch_assoc()) {
                  
                  
                     $name =  $row["ITEM"];
                     $rate =  $row["RATE"];
            }
        ?>

<div class="main">
    <div class="register">
        <h2>Place order</h2>
        <form action="plcord.php" method="POST" id="register">
            <label>Food you search for:</label>
            <input name="fdnam" value="<?php echo "$name" ?>" id="name" style="cursor:default" readonly>
            <span class="br"></span>
            <label>Amount in dollar:</label>
            <input name="fdamt" value="<?php echo "$rate" ?>" id="name" style="cursor:default" readonly>
            <span class="br"></span>
            <label>Name:</label>
            <br>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <span class="br"></span>
            <label>Address:</label>
            <br>
            <textarea type="text" name="address" id="name" placeholder="Enter your address" required></textarea>
            <span class="medbr"></span>
            <label>Quantity:</label>
            <br>
            <input type="number" name="quantity" id="name" placeholder="Enter the quantity of your food" required>
            <br><br>
            <input type="submit" value="Place Order" name="submit" id="submit">
        </form>
    </div>
    <?php

} else {
    ?>
    <div class="nt">
        <h2>Sorry,product not available &#128577;</h2>
    </div>
    <?php
 }

?>

    <?php
  $conn->close();
 ?>

</div>

</body>
</html>