<?php
    $title = 'Conatct Us';
    include'template/header.php';
    include'template/navigation.php';
?> 

 <div class="container pt-4">
     <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/contact_us.jpg" alt="spa" class="img-fluid">
            <h2 class="text-capitaliz abc pl-5 text-light  d-none d-md-block p-3">Contact Us</h2>
        </div>
     </div>
 </div>

    
    <div class="container">
        <div class="row">
            <main class="col-lg-12 cal-md-10 offset-1 main-content pt-4 ">  
                <form action="send.php" method="post" class="p-5 contact-form mt-5" >
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="Email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                       <textarea name="message" id="message" rows="6" class="form-control">
                           
                       </textarea>
                    </div>
                    <input type="submit" class="btn btn-primary text-uppercase" name="submit" value="submit">
                </form>
                
                
            </main>
            
        </div>
    </div>

<?php

    include 'template/footer.php';

?> 