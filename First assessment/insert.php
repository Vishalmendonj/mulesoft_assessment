<?php
//Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbvishal";

// Connection is created
$conn = mysqli_connect($servername, $username, $password, $database);

// Error if the connection is not created
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Sql query to be executed
$sql = "INSERT INTO `Movies` (`name`, `actor`, `actress`, `director`, `release_Year`)
VALUES ('KGF', 'Yash', 'Srinidhi Shetty', 'Prashanth Neel', 2018);";
$sql .= "INSERT INTO `Movies` (`name`, `actor`, `actress`, `director`, `release_Year`)
VALUES ('Kirik Party', 'Rakshith Shetty', 'Rashmika Mandanna', 'Rishabh Shetty', 2017);";
$sql .= "INSERT INTO `Movies` (`name`, `actor`, `actress`, `director`, `release_Year`)
VALUES ('Bahubali', 'Prabhas', 'Anushka Shetty', 'Rajmouli', 2017)";
$result = mysqli_query($conn, $sql);


?>
