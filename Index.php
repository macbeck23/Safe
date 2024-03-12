<?php

require_once 'includes/config-session.inc.php';
require_once 'includes/signup_view.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Safe</title>
</head>
<body>
    <header>
        <div class="logo">
           <a href="index.php"> <img src="images\SAFE.png" alt="Logo"></a>
        </div> 
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="social-icons">
            <a href="#"><img src="images/icons8-facebook-30.png" alt="Facebook"></a>
            <a href="#"><img src="images/icons8-instagram-30.png" alt="Instagram"></a>
            <a href="#"><img src="images/icons8-snapchat-24.png" alt="Snapchat"></a>
            <a href="#"><img src="images/icons8-email-24.png" alt="Email"></a>
        </div>
    </header>


    <div class="text-container">
        <h1>Shared Art. Finding Expression<br></h1>
    
      </div>
      
        <main>
        <section class="about-section"id="about">
            <div class="container">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et tellus at ligula feugiat posuere. Sed varius vel elit nec interdum. Duis ut tincidunt orci. Integer sagittis enim ut nisl eleifend, quis malesuada dolor scelerisque.</p>
            </div>
        </section>
        
        
    </main>
    <section class="services-section" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>Art Therapy Sessions</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="service-item">
                    <h3>Expressive Arts Workshops</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            
            </div>
        </div>
    </section>
    <section class="gallery-section"id="gallery">
        <div class="container">
            <h2>Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/emotional art5.png" alt="Gallery Image 1">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art8.png" alt="Gallery Image 2">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art1.png" alt="Gallery Image 3">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art3.png" alt="Gallery Image 4">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art7.png" alt="Gallery Image 5">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art2.png" alt="Gallery Image 6">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art4.png" alt="Gallery Image 7">
                </div>
                <div class="gallery-item">
                    <img src="images/emotional art6.png" alt="Gallery Image 8">
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section"id="testimonial">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                    </div>
                    <div class="testimonial-author">
                        <p>- John Doe</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                    </div>
                    <div class="testimonial-author">
                        <p>- John Doe</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                    </div>
                    <div class="testimonial-author">
                        <p>- John Doe</p>
                    </div>
                </div>
    
            </div>
        </div>
    </section>


    <div class="form-section" id="contact">

   

    <h2>How Can We Help <br></h2>
 
    <div class="error_messages">
    <?php check_signup_errors(); ?>
</div>

    <form class="form" action="includes/signup.inc.php" method="post">
        <label class="label" for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" >
        
        <label class="label" for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" >

        <label class="label" for="username">Create a username:</label>
        <input type="text" id="username" name="username" >
        
        <label class="label" for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">
        
        <label class="label" for="email">Email Address:</label>
        <input type="text" id="email" name="email" >
        
        <label class="label" for="usersQuery">Your Query:</label>
        <input yype="textarea" id="usersQuery" name="usersQuery">

        <label class="label" for="pwd">Create Password:</label>
        <input type="password" id="pwd" name="pwd">
        
        <label class="label" for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        
        <input type="submit" value="Submit">
    </form>
</div> 

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="images\SAFE.png" alt="Footer Logo">
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-social-icons">
                    <a href="#"><img src="images/icons8-facebook-30.png" alt="Facebook"></a>
                    <a href="#"><img src="images/icons8-instagram-30.png" alt="Instagram"></a>
                    <a href="#"><img src="images/icons8-snapchat-24.png" alt="Snapchat"></a>
                    <a href="#"><img src="images/icons8-email-24.png" alt="Email"></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Safe. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>