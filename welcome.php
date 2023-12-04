<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$sql = "INSERT INTO article (name, price, quantity)
VALUES ('".$name."',". $price.", ".$quantity.")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


Vous avez ajouté le produit: <?php echo $_POST["name"]; ?> avec prix <?php echo $_POST["price"]; ?> et quantité
<?php echo $_POST["quantity"]; ?>
</body>
</html>