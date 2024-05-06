<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swiss_collection";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$result = mysqli_query($conn,"SELECT * FROM product"); 


if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display product details
        echo "<div class='product'>";
        // echo "<data:.upload/;base64," . base64_encode($row['product_image']) .$row["product_image"] . "' alt='Product Image'>";
        echo  $row["product_name"] ;
        echo  $row["price"] ;
        echo  $row["uploaded_date"] ;
        echo  $row["product_desc"];

        echo "<a href='view_product.php?product_id=" . $row["product_id"] . "' class='view-more'>View More</a>";
        echo "</div>";
    }
} else {
    echo "No products found";
}

// Close connection
$conn->close();
?>
