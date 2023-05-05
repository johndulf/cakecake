<?php 
    
    include "includes/header.php";
     $app = "<script src='js/app.products.js'></script>";
    $fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
?>
    <!-- Customer -->
      <?php if($role == 2): ?>
     <nav>
        <ul class="nav-flex-row">
               <h1 class="h1">Heaven's Cake</h1>
             <li class="nav-item">
                <a href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a href="reservation.php">Reservation</a>
            </li>
            <li class="nav-item">
                <a href="schedule.php">Schedule</a>
            </li>

            <li class="nav-item">
                <a href="products.php">Menu</a>
            </li>
            
            <li class="nav-item">
               
                    <a href="logout.php"> Welcome <?php echo $fullname; ?></a> <br>
        
        </ul>
    </nav>

   <div class="container-fluid mt-3 pt-5 text-light text-left text-decoration-none">
    <p style="font-size:70px;"><img src="img/cake.jpeg" class="img" alt="cake" style="margin-left:15px;">
The Perfect Cake For Everybody.</p>

                   <button class="btn btn-primary btn-lg" style="border-radius: 10px;"> <a href="reservation.php" style="color:whitesmoke; text-decoration:none;"> Reserve Now</a></button>
</div>
</div>
<?php endif ?>
<?php include "includes/footer.php"; ?>