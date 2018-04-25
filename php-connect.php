<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PariPython";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, gebruikersnaam, voornaam, achternaam FROM leerkracht";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - gebruikersnaam: " . $row["voornaam"]. " " . $row["achternaam"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>