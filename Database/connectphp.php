<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Echo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



$sql = "SELECT * FROM product";
$result = $conn->query($sql);



     
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["ID"]. " - Link " . $row["Link"]."<br>";
//    }

    foreach ($result->fetch_array(MYSQLI_ASSOC) as $key => $value) {
        echo "key: ". $key." value: ". $value."<br>";
    
}
   
$conn->close();

?>


