<?php 
include 'connection.php';

function getTotalPriceForToday($conn) {
    date_default_timezone_set('Asia/Seoul');
    $today = date("n/j/Y");
    $sql = "SELECT SUM(tong) AS total_price FROM player WHERE date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $today);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalPrice = $row['total_price'];
        return $totalPrice;
    } else {
        return "No data found in the table.";
    }
    
    $stmt->close();
    $conn->close();
}

function getTotal($conn) {
    date_default_timezone_set('Asia/Seoul');
    $today = date("n/j/Y");
    $sql = "SELECT SUM(tong) AS total_price, SUM(bet) AS bet, SUM(price) AS price, result AS res FROM pwo WHERE result = 'WIN' AND date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $today);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row['res'] == "WIN"){ // Use double equals sign for comparison
            $totalb = $row['price'] - ($row['total_price'] + $row['bet']);
        } else {
            $totalb = ($row['total_price'] + $row['bet']) - $row['price'];
        }
        return $totalb;
    } else {
        return "No data found in the table.";
    }
    
    $stmt->close();
    $conn->close();
}

function getTotalL($conn) {
    date_default_timezone_set('Asia/Seoul');
    $today = date("n/j/Y");
    $sql = "SELECT SUM(tong) AS total_price, SUM(bet) AS bet, SUM(price) AS price, result AS res FROM pwo WHERE result = 'LOSS' AND date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $today);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row['res'] == "WIN"){ // Use double equals sign for comparison
            $totalb = $row['price'] - ($row['total_price'] + $row['bet']);
        } else {
            $totalb = ($row['total_price'] + $row['bet']) - $row['price'];
        }
        return $totalb;
    } else {
        return "No data found in the table.";
    }
    
    $stmt->close();
    $conn->close();
}

?>

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="" id="tongnav">TONG: <?php echo getTotalPriceForToday($conn); ?> W:  <?php echo getTotal($conn); ?> L:  <?php echo getTotalL($conn); ?> </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Game1 List</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Inventory</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Expenses</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Records</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Closing</a></li>
            </ul>
        </div>
    </div>
</nav>
