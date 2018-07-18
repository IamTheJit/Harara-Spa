<?php
    $title = 'About';
    include'template/header.php';
    include'template/navigation.php';
?> 

 <div class="container pt-4">
     <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/banner-spa-specials.jpg" alt="spa" class="img-fluid">
            <h2 class="text-capitaliz abc pl-5 text-light  d-none d-md-block p-3">about us</h2>
        </div>
     </div>
 </div>


    <div class="container">
        <div class="row">
            <main class="col-lg-8 main-content pt-4">  
                <p>Lorem ipsum dolor  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, voluptatum iste cum tempora harum veritatis at autem nihil culpa rem molestias consequatur quidem, vero explicabo. Odio, minima nihil nobis voluptate?sit amet, consectetur adipisicing elit. Blanditiis corporis, adipisci praesentium. Excepturi quisquam doloribus quae dolorem, soluta fugit adipisci mollitia, possimus nemo, consectetur illo? Fugit mollitia, odit quidem itaque?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, libero, illo. Perspiciatis repellendus tempore reiciendis ipsam doloribus, expedita asperiores mollitia quia, aperiam. Sunt praesentium debitis aspernatur, sapiente nostrum laborum obcaecati.</p>
                
                <div class="falilities">
                   <h2 class="welcome-to-site text-center">Check Out</h2>
                    <a href="#" data-target="#image_1" data-toggle="modal" class="mr-2 ml-2">
                        <img src="img/gallery_thumb_01.jpg" alt="" class="rounded">
                    </a>
                    
                    <a href="#" data-target="#image_2" data-toggle="modal" class="mr-2">
                        <img src="img/gallery_thumb_02.jpg" alt="" class="rounded">
                    </a>
                    
                    <a href="#" data-target="#image_3" data-toggle="modal">
                        <img src="img/gallery_thumb_03.jpg" alt="" class="rounded">
                    </a>
                    <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="img/gallery_large_01.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="img/gallery_large_02.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="img/gallery_large_03.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    </div>
                    </div>
                    
                </div>
            </main>
            <aside class="col-lg-4">
                <div class="sidebar">
                    <?php
                        include'template/business_hours.php';
                    ?>
                </div>
            </aside>
        </div>
    </div>



<?php
    include'template/footer.php';
?> 