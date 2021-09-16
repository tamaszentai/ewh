<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "exercise";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT invoices.id, customers.id, customers.name, customers.email, invoices.product_id, invoices.product_description, invoices.timestamp FROM invoices, >
$result = $conn->query($sql);
echo "<table>";
if ($result->num_rows > 0) {
  // output data of each row
echo "<table>";
            echo "<tr>";
                echo "<th>Invoice ID</th>";
                echo "<th>Customer ID</th>";
                echo "<th>Customer Name</th>";
                echo "<th>Customer Email</th>";
                echo "<th>Invoice Product ID</th>";
                echo "<th>Invoice Product Description</th>";
                echo "<th>Invoice Timestamp</th>";
            echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_description'] . "</td>";
                echo "<td>" . $row['timestamp'] . "</td>";
            echo "</tr>";
        }
} else {
  echo "0 results";
}
echo "</table";
$conn->close();
?>