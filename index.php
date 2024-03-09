<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
    <body id="page-top">

    <?php include 'connection.php';?>

    <?php include 'navigation.php';?>

            
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" id="headerSection" >
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                
                <?php
$ip_address = $_SERVER['REMOTE_ADDR'];
echo "Client's IP Address: " . $ip_address;


?>



                <h1 class="masthead-heading text-uppercase mb-0">Mely's Billiard Hall</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light"  id="hideButton">
                        <i class="fas fa-download me-2"></i>
                        Open Now!
                    </a>
                </div>
            </div>
        </header>
        <!-- Portfolio Section-->

 

        <section class="page-section portfolio" id="portfolio" style="display: none;" >
            <div class="container" >
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" >GAME LIST</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <?php include 'connection.php';?>      
                    <?php
$sql = "SELECT name, price, type FROM gamelist";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<div class="col-md-6 col-lg-4 mb-5">
    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="<?php echo '#' . $row['type']; ?>"  data-name="<?php echo $row['name']; ?>" data-price="<?php echo $row['price']; ?>">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
            </div>
        </div>
        <div class="text-center">
            <h1><?php echo $row['name']; ?></h1>
            <h3>Tong:<?php echo $row['price']; ?></h3>
            <a onclick="startTimer()" class="btn btn-xl btn-outline-light" data-toggle="modal" data-bs-target="<?php echo '#' . $row['type']; ?>" data-name="<?php echo $row['name']; ?>" data-price="<?php echo $row['price']; ?>">

                PLAY
            </a>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="..." />
    </div>
</div>
<?php
        }
    } else {
        echo "No data found in the table.";
    }
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>





            
            </div>
        </section>
       
        <?php
include 'modals.php';
include 'scriptcode.php';
?>
      
    
 
 
 
 
 
 
 
 

    </body>
</html>
