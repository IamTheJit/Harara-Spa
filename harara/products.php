<?php
    $title = 'Store';
    include'template/header.php';
    include'template/navigation.php';
?> 

 <div class="container pt-4">
     <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/store.jpg" alt="spa" class="img-fluid">
            <h2 class="text-capitaliz abc pl-5 text-light  d-none d-md-block p-3">Products</h2>
        </div>
     </div>
 </div>

    
    <div class="container">
        <div class="row">
            <main class="col-lg-12 main-content pt-4 ">  
                
                <div class="container products py-1">
                    <div class="bg-light">
                        <h2 class="welcome-to-site text-center">Our Products</h2>
                        <p class="text-center color">Lorem ipsum dolor sit amet consectetur </p>
                    </div>

                    <div class="row py-1">
                <?php
                try{
                    require_once 'inc/db.php';
                    $sql = 'SELECT `id`,`name`,`image_thumb`,`price`,`short_description` FROM `products` ';
                    $result=$db->query($sql);
                } catch (Exception $e){
                    $error =$e->getMessage();
                    
                }
               $rows = $result->num_rows;
            if(!$rows){
                echo "No result found";
            } 
            else{
                while($products = $result->fetch_assoc()){ ?>
            <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                    <a href="product.php?><?php echo $products['id'];?>">
                       <img src="img/<?php echo $products['image_thumb'];?>" alt="Product" class="card-img-top img-fluid">
                        <div class="card-body">
                            <div class="card-block">
                            <h3 class="card-title text-center mb-0"><?php echo $products['name'];?></h3>
                            <p class="card-text text-uppercase p-2"> <?php echo $products['short_description'];?></p>
                            <p class="price text-center mb-0"><?php echo $products['price'];?></p>
                        </div>
                        </div>
                    </a>
                </div>
            </div>
               
                <?php
                }
            }

           

                $db->close();
            ?>


                    </div>
    </div> 
            </main>
            
        </div>
    </div>

<?php
    include 'template/appoinment.php';
    include 'template/footer.php';

?> 