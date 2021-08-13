<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conford.css">
    <title>Confirm order</title>
</head>
<body>
    <div class="main">

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
$fd = $_POST["fdnam"];
$amt = $_POST["fdamt"];
$nm = $_POST["name"];
$add = $_POST["add"];
$qt = $_POST["qt"];

$sql = "INSERT INTO `orders`(`NAME`, `ADDRESS`, `ITM_NAME`, `ITM_QUANTITY`, `AMT_PURCHASED`) VALUES ('$nm','$add','$fd',$qt,$amt)";
?>
<h2>
    <?php
if($conn->query($sql)===TRUE){
    echo "Thank you for placing order ";
    }else{
    echo "Error : ".$conn->error;
    echo "<br>";
    echo "Cannot place order";
    }
    ?> &#128519;
    </h2>




<?php
  $conn->close();
 ?>

</div>

</body>
</html>