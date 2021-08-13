<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plcord.css">
    <title>Place order</title>
</head>
<body>
<div class="main">

<?php



$fd = $_POST["fdnam"];
$amt1 = $_POST["fdamt"];
$nm = $_POST["name"];
$add = $_POST["address"];
$qt = $_POST["quantity"];
$amt = $amt1*$qt;

?>

<div class="register">
        <h2>Confirm order</h2>
        <form action="confirmord.php" method="POST" id="register">
            <label>Food you ordered:</label>
            <input name="fdnam" value="<?php echo "$fd" ?>" id="name" style="cursor:default" readonly>
            <span class="br"></span>
            <label>Amount in dollar:</label>
            <input name="fdamt" value="<?php echo "$amt" ?>" id="name" style="cursor:default" readonly>
            <span class="br"></span>
            <label>Your name:</label>
            <input name="name" value="<?php echo "$nm" ?>" id="name" style="cursor:default" readonly>
            <span class="br"></span>
            <label>Your address:</label>
            <input name="add" value="<?php echo "$add" ?>" id="name" style="cursor:default" readonly>
            <span class="medbr"></span>
            <label>Quantity:</label>
            <input name="qt" value="<?php echo "$qt" ?>" id="name" style="cursor:default" readonly>
            <br><br>
            <input type="submit" value="Confirm Order" name="submit" id="submit">
        </form>
</div>

</div>


</body>
</html>