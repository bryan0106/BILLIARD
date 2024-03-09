<?php
include 'connection.php';



   // INsert Game A
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Values to insert (example values)
    $date = $_POST["date"];
    $game = $_POST["game"];
    $tong = $_POST["tong"];
    $name = $_POST["name"];
    $time = $_POST["time"];
    $duration = $_POST["duration"];

    $sql = "INSERT INTO player (date, game, tong, name, time, duration) VALUES (:date, :game, :tong, :name, :time, :duration)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':game', $game);
    $stmt->bindParam(':tong', $tong);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':duration', $duration);

    // Execute the query
    $stmt->execute();

    echo "New record inserted successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

 


?>
