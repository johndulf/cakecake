<?php 
    
    include "includes/header.php";
    $app = "<script src='js/app.products.js'></script>";
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
                <?php if($role == 1): ?>
                
                <div class="col-md-6">
                    
                    <form @submit="fnSave($event)">
                        <input class="form-control" required type="text" name="productname" placeholder="Product Name" v-model="productname" /><br>
                        <textarea class="form-control" name="description" v-model="description" placeholder="Description"></textarea><br>
                        <input class="form-control" required type="number" name="quantity" placeholder="Quantity" v-model="quantity" /><br>
                        <input class="form-control" required type="text" name="price" placeholder="Unit Price" v-model="price" /><br>
                        <input class="form-control" type="file" name="productimage" /><br>
        
                        <button class="btn btn-primary btn-lg" type="submit">Save</button>
                    </form>
                </div>
                <?php endif ?>
                <div>
                    <h1 style="text-align: center; margin-top: 100px; color: yellow;">MENU</h1>
                <div class="col-md-6">
                    <div class="row" v-for="product in products" style="border:2px solid black; margin: 10px;"  >
                        <div class="col-md-4"><img class="img-fluid" :src="'uploads/' + product.image" / style="margin:15px"></div>
                        <div class="col-md-8" style="font-size: 25px; color: white;">
                            Product Name: {{ product.productname }}<br>
                            Description: {{ product.description }}<br>
                            Quantity: {{ product.quantity }}<br>
                            Price: {{ product.price }} <br>

                             <?php if($role == 2): ?>
                            <button class="btn-primary btn-lg" style="margin-right:10px;" @click="">Buy</button>
                            <?php endif ?>
                            
                              <?php if($role == 1): ?>
                            <button class="btn-danger btn-sm" style="margin-right:10px;" @click="DeleteProducts(product.productid)">Delete</button>
                            <button class="btn-success btn-sm" @click="fnGetProdcuts(product.productid)"><a href="#update" style="color: whitesmoke; text-decoration: none;">Update</a></button>
                             <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>