<?php
    $title = 'Services';
    include'template/header.php';
    include'template/navigation.php';
?> 

 <div class="container pt-4">
     <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/sevices_1.jpg" alt="spa" class="img-fluid">
            <h2 class="text-capitaliz abc pl-5 text-light  d-none d-md-block p-3">Services</h2>
        </div>
     </div>
 </div>


    <div class="container">
        <div class="row">
            <main class="col-lg-8 main-content pt-4 ">  
                <div id="services" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="services_1">
                            <h3 class="mb-0">
                                <a href="#service_1desc" aria-expanded="true" aria-controls="service_1desc" data-toggle="collapse" data-parent="#services">Services 1</a>
                            </h3>
                        </div>
                        <div id="service_1desc" class="collapse show p-2" role="tabpanel" aria-labelledby="service_1">
                            <div class="card-block">
                                1Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod esse porro necessitatibus repellat, blanditiis obcaecati a itaque dolor laborum nobis doloribus delectus hic veritatis voluptatum quaerat et corporis. Autem, soluta!ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, ipsa, labore ad dignissimos repellat unde veritatis rerum suscipit pariatur ducimus necessitatibus saepe facere rem maxime molestias quasi, libero quam eos.
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="card">
                        <div class="card-header py-2" role="tab" id="services_2">
                            <h3 class="mb-0">
                                <a href="#service_2desc" aria-expanded="false" aria-controls="service_2desc" data-toggle="collapse" data-parent="#services" class="collapsed">Services 2</a>
                            </h3>
                        </div>
                        <div id="service_2desc" class="collapse p-2" role="tabpanel" aria-labelledby="service_3">
                            <div class="card-block ">
                                2Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod esse porro necessitatibus repellat, blanditiis obcaecati a itaque dolor laborum nobis doloribus delectus hic veritatis voluptatum quaerat et corporis. Autem, soluta!ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, ipsa, labore ad dignissimos repellat unde veritatis rerum suscipit pariatur ducimus necessitatibus saepe facere rem maxime molestias quasi, libero quam eos.
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="card">
                        <div class="card-header py-2" role="tab" id="services_3">
                            <h3 class="mb-0">
                                <a href="#service_3desc" aria-expanded="false" aria-controls="service_3desc" data-toggle="collapse" data-parent="#services" class="collapsed">Services 3</a>
                            </h3>
                        </div>
                        <div id="service_3desc" class="collapse p-2" role="tabpanel" aria-labelledby="service_3">
                            <div class="card-block">
                                3Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod esse porro necessitatibus repellat, blanditiis obcaecati a itaque dolor laborum nobis doloribus delectus hic veritatis voluptatum quaerat et corporis. Autem, soluta!ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, ipsa, labore ad dignissimos repellat unde veritatis rerum suscipit pariatur ducimus necessitatibus saepe facere rem maxime molestias quasi, libero quam eos.
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col-lg-4 discount">
                <div class=" p-3">
                    <h2 class="text-center text-capitalize mt-3">Frist time customers</h2>
                    <p class="lead text-center mt-4 text-capitalize">get 20% off with this coupon:</p>
                    <div class="coupon p-1">
                        <p class="text-center text-uppercase">
                            <span class="display-4 pt-2">20% off</span>
                            in any service
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php
    include 'template/appoinment.php';
    include 'template/footer.php';

?> 