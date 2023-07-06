<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= ($_POST['name']);
    $price =($_POST ['price']);
        
           // Prepare the SQL statement
            $sql = "INSERT INTO product (name, price) VALUES ('$name', '$price')";

            // Execute the SQL statement
            if ($conn->query($sql) === TRUE) {
            echo "Product inserted successfully.";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
             // Close the database connection
            $conn->close();
        }
    



?>
