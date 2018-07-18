<?php
    $title = 'Home';
    include'template/header.php';
    include'template/navigation.php';
?>   
    <main class="container mt-2"><!--Slider Start Here-->
        <div class="row">
            <div class="col-12">
                <div id="slider p-2" class="carousel slide" data-ride="carousel">
                        <!--Slider Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                        <li data-target="#slider" data-slide-to="4"></li>
                    </ol>


                    <div class="carousel-inner">
                                <!--Slider Items-->
                        <div class="carousel-item active">
                            <img class="d-block img-fluid size" src="img/e.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Saturday is a day for the spa. Relax, indulge, enjoy, and love yourself, too.</h3>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block img-fluid size" src="img/g.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>God is a spa-bath of water and we are all individual bubbles.</h3>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block img-fluid size" src="img/f.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>It’s not selfish to love yourself, take care of yourself, and to make your happiness a priority. It’s necessary.”</h3>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block img-fluid size" src="img/d.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Time spent getting a massage is never wasted.</h3>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img class="d-block img-fluid size" src="img/c.jpg">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Sometimes the best thing to do is just call it a day and go get a massage.</h3>
                            </div>
                        </div>
                        add_action
                        </div> <!--.carousel Control-->

                            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                </div>
            </div>
        </div>
    </main><!--Slider End Here-->
    
    <div class="container">
        <div class="row">
            <div class=" col-12">
                <div class="bg-light container mt-3">
                        <h1 class="text-center font-ariel bg-light">Welcome To Harara</h1>
                        <p class="text-center color">Lorem ipsum dolor sit amet consectetur </p>
                </div>
            </div>
        </div>
    </div>
   
   
    <div class="container pb-1 mb-3">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="image-links">
                    <img src="img/srvc-1.jpg" alt="Sevices-1" class="img-fluid">
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 image-info">
                           <h3 class="text-center text-capitalize sub-font">Learn more <br><span>About us</span></h3>
                           <a href="#" class="btn btn-success btn-block mt-3">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12">
                <div class="image-links">
                    <img src="img/foot-1885546.jpg" alt="Services-2" class="img-fluid">
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 image-info">
                           <h3 class="text-center text-capitalize sub-font">About Our <br><span>Services</span></h3>
                           <a href="#" class="btn btn-success btn-block mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-12">
                <div class="image-links">
                    <img src="img/it.jpg" alt="vsit us" class="img-fluid thumb-size">
                    <div class="row no-gutters">
                        <div class="col-8 offset-2 image-info">
                           <h3 class="text-center text-capitalize sub-font">Visit our <br><span>Store</span></h3>
                           <a href="#" class="btn btn-success btn-block mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
        <div class="business-hours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        include'template/business_hours.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container products py-1">
        <div class="bg-light">
            <h2 class="welcome-to-site text-center">Our Products</h2>
            <p class="text-center color">Lorem ipsum dolor sit amet consectetur </p>
        </div>
        
        <div class="row py-1">
           
           <?php
                try{
                    require_once 'inc/db.php';
                    $sql = 'SELECT `id`,`name`,`image_thumb`,`price`,`short_description` FROM `products` LIMIT 4';
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
    
    
    
    
<?php
    include 'template/appoinment.php';
    include 'template/footer.php';

?> 
    
    