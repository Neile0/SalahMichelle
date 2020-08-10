<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Michelle | Home</title>
    <meta name="description" content="Salah Michelle 10-12 Blacklands Rd East Kilbride. Ladies Gents Hair and Beauty Salon.">
    <meta name="keywords" content="Salah, Michelle, Salon, Hair, Haircut, Ladies, Gents, Style, Beauty, EastKilbride, East Kilbride, Luxury">
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" type="image/svg" href="/images/icons/favicon.svg">
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
    <script src="/scripts/main.js"></script>
</head>
<body>
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$navPath = $path ."/topnav.php";
// $path .= "/topnav.php";
include_once($navPath);
?>
        <main class="bg-primary">
        <div class="hero bg-primary" id="hero-section">
        
            <!-- <img src="/images/salon.jpg" alt="Large image of the salon" class="hero-image"> -->

            <div class="hero-background" id="hero-background">
            
                <div class="hero-block">
                    <h1 class="hero-title">Salah Michelle</h1>
                    <h2 class="hero-subtitle">Ladies Gents Hair and Beauty Salon</h2>
                    <div class="hero-btn-row">
                        <a href="pages/book.php" class="hero-btn button button-white button-shadow bg-accent-one-light">Book Online</a>
                        <a href="pages/services.php" class=" hero-btn button button-black  button-shadow bg-accent-two">Services</a>

                        <!-- <div class="hero-btn hero-book-online-btn bg-accent-one-light"> -->
                           
                            <!-- <a href="pages/book.php"><span class="div-button">Book Online</span></a> -->
                        <!-- </div> -->
                        <!-- <div class="hero-btn hero-services-btn bg-accent-two">
                            <a href="pages/services.php"><span class="div-button">Services</span></a>
                        </div> -->
                    </div>
                </div>
                <div class="hero-overlay">
            </div>
            </div>
        </div>
        

        <div class="testimonial bg-primary" id="testimonial-section">
            <div class="testimonial-block">
                <div class="testimonial-item"><p><span class="quote">"</span>You always get an excellent haircut here. Really friendly professional staff and great atmosphere <span class="quote">"</span><br><span class="name">-Keiran Harris</span></p></div>
                <div class="testimonial-item"><p><span class="quote"></span><span class="quote"></span><br><span class="name"></span></p></div>
                <div class="testimonial-item"><p><span class="quote">"</span>Quality barber with the right touches of tradition, blending skill and experience the way barbering was intended.<span class="quote">"</span><br><span class="name">-Callum Neil</span></p></div>
            </div>
        </div>

        <div class="about bg-secondary">
            <div class="about-block">
                <div class="about-right">
                    <img src="/images/sm.jpg" alt="The owners Salah and Michelle">
                </div>
                <div class="about-left">
                    <h1><span class="about-h">S</span>alah & Michelle's Salon (est. 2018) in the heart of East Kilbride, provided by ladies stylist Michelle and master barber Salah.<br>Always providing a warm welcome to all new and loyal customers.</h1>
                    <!-- <div class="about-btn bg-accent-one-light"> -->
                        <a href="/pages/about.php" class="about-btn button button-accent-one bg-accent-one-light button-primary">About Us</a>
                    <!-- </div> -->
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        
        <div class="services  bg-ternary">
            <div class="services-title"><h1>Services</h1><hr class="title-hr"></div>
     
            <div class="services-block-card">
                <div class="service-item" id="service-card-ladies">
                    <a href="/pages/services/ladies.php" class="service-link">
                    <div class="service-image" id="service-image-ladies">
                        <img src="/images/thumbnail_ladies.jpg" alt="Ladies Service">
                    </div>
                    <div class="service-btn-cont">
                        <p class="button button-no-animation bg-accent-two">View Ladies</p>
                    </div>
                    </a>
                </div>
                <div class="service-item" id="service-card-gents">
                    <a href="/pages/services/gents.php" class="service-link">
                    <div class="service-image" id="service-image-gents">
                        <img src="/images/thumbnail_gents.png" alt="Gents Service">
                    </div>
                    <div class="service-btn-cont">
                        <p class="button button-no-animation bg-accent-two">View Gents</p>
                    </div>
                    </a>
                </div>
                <div class="service-item" id="service-card-beauty">
                    <a href="/pages/services/beauty.php" class="service-link">
                    <div class="service-image" id="service-image-beauty">
                        <img src="/images/thumbnail_beauty.jpg" alt="Beauty Service">
                    </div>
                    <div class="service-btn-cont">
                        <p class="button button-no-animation bg-accent-two">View Beauty</p>
                    </div>
                    </a>
                </div>
            </div>
             </div>

        <div class="albums album-row">
            <div class="album-row-item album-item-one"><img src="/images/male_one.jpg" alt="mens haircut example"></div>
            <div class="album-row-item album-item-two"><img src="/images/female_one.jpg" alt="womens haircut example"></div>
            <div class="album-row-item album-item-three"><img src="/images/male_two.jpg" alt="mens haircut example"></div>
            <div class="album-row-item album-item-four"><img src="/images/female_two.jpg" alt="womens haircut example"></div>
                <a href="pages/albums.php" class="button button-no-animation button-no-hover album-btn">Our Albums</a>
        </div>

        <div class="share bg-accent-one-light">
            <div class="share-row"><h1>Share your looks using<br><span>#SalahMichelle</span></h1></div>
        </div>

        <div class="details bg-secondary">
            <div class="details-block">
                <div class="details-table-block">
                <table class="details-table details-table-ladies">
                    <tr>
                        <th class="details-table-header" colspan="2">Ladies</th>
                    </tr>
                    
                    <tr><th>Monday</th><td>closed</td></tr>
                    <tr><th>Tuesday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Wednesday</th><td>9AM - 8PM</td></tr>
                    <tr><th>Thursday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Friday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Saturday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Sunday</th><td>closed</td></tr>
                </table>
                <table class="details-table details-table-gents">
                    <tr>
                        <th class="details-table-header" colspan="2">Gents</th>
                    </tr>
                    
                    <tr><th>Monday</th><td>closed</td></tr>
                    <tr><th>Tuesday</th><td>9AM - 6PM</td></tr>
                    <tr><th>Wednesday</th><td>9.30AM - 7PM</td></tr>
                    <tr><th>Thursday</th><td>9AM - 6PM</td></tr>
                    <tr><th>Friday</th><td>9AM - 6PM</td></tr>
                    <tr><th>Saturday</th><td>9AM - 5PM</td></tr>
                    <tr><th>Sunday</th><td>closed</td></tr>
                </table>
                </div>
                <hr>
                <div class="details-contact-block">

                
            <div class="details-call-btn">
                <a href="tel:01355224033" class="button button-accent-one">Call us on 01355 224033</a>
            </div>
            </div>
            <div class="details-address">
                <h1>10-13 Blacklands Rd East Kilbride<br>G74 1BE</h1>
            </div>
        </div>
        </div>
    </div>



            <div class="details-gmaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.7071322435186!2d-4.187969759415371!3d55.763589583195525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48883f8853245c31%3A0x229c543037e518a4!2sSalah%20Michelle!5e0!3m2!1sen!2suk!4v1594512867188!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>          </div>
            </div>
        
             
    </main>
    <?php 
    $footerPath = $path . "/footer.php";
    include_once($footerPath);?>
</body>
</html>