<?php 
    
    include "includes/header.php";
    $app = "<script src='js/app.reserved.js'></script>";
    $fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
?>
    <style>
        .form-control{
            border:1px solid #000 !important;
        }
    </style>
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
                <?php endif ?>
                    <a href="logout.php"> Welcome <?php echo $fullname; ?></a>
            </li>
        </ul>
    </nav>

    <div id="products-app" style="margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
                
                <?php if($role == 2): ?>
                <div class="col-md-6">
                    
                    <form @submit="fnSave($event)" class="container2">
                        <input class="form-control" required type="text" name="productname" placeholder="Name" v-model="productname" /><br>
                        <textarea class="form-control" name="description" v-model="description" placeholder="Description"></textarea><br>
                        <input class="form-control" required type="text" name="quantity" placeholder="Flavor" v-model="quantity" /><br>
                        <input class="form-control" required type="text" name="price" placeholder="500" v-model="price"  disabled /><br>
                        <input class="form-control" type="file" name="productimage" /><br>
        
                        <button class="btn btn-warning btn-lg" type="submit">Reserve</button>
                    </form>
                </div>

                <div>
                
                             <?php endif ?>


<?php include "includes/footer.php"; ?>