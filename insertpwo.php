
<?php
include 'connection.php';

   // INSert Game pWO
try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $date = $_POST["date"];
    $time = $_POST["time"];
    $name = $_POST["name"];
    $tong = $_POST["tong"];
    $bet = $_POST["bet"];
    $price = $_POST["price"];
    $result = $_POST["result"];
    echo    $result;
    $sql = "INSERT INTO pwo (date, time, name, tong, bet, price, result) VALUES (:date, :time, :name, :tong, :bet, :price, :result)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tong', $tong);
    $stmt->bindParam(':bet', $bet);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':result', $result);
    //$stmt->bindParam(':result', $result);
    $stmt->execute();

    echo "New record inserted successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}






?>
