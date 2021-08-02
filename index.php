<!DOCTYPE html>
    <html lang="en">
        <head>
        <?php

 $conn = mysqli_connect("localhost", "root", "", "tmt");

 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }

 if (isset($_POST['SAVE'])) {
    echo "<br>";

 $e_mail =  $_POST['e_mail'];
 $s_ervice = $_POST['s_ervice'];

 $sql = "INSERT INTO inquiries  VALUES ('$e_mail',
     '$s_ervice')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Inquiry sent successfully.</h3>";

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 }
 mysqli_close($conn);
 ?>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--==================== UNICONS ====================-->
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
            
            <!--==================== SWIPER CSS ====================-->
            <link rel="stylesheet" href="">
            
            <!--==================== CSS ====================-->
            <link rel="stylesheet" href="assets/css/tmt.css">
    
            <title>TMT Technologies | Home</title>
        </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <img src="assets/img/tmtlogo.png" alt="" class="about__img">
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link">
                                <i class=""></i>Home
                            </a>
                        </li>

                         <li class="nav__item">
                            <a href="about.html" class="nav__link">
                                <i class=""></i>About Us
                            </a>
                        </li>

                         <li class="nav__item">
                            <a href="services.html" class="nav__link">
                                <i class=""></i>Our Services
                            </a>
                        </li>

                         <li class="nav__item">
                            <a href="contact.php" class="nav__link">
                                <i class=""></i>Contact Us
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <!---Theme change button-->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </div>
    </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="homeone section" id="homeone">
            <div class="homemainone">
                    <div class="homesubone">
                        <div class="tech">
                        We are The Managers of
                        <br>
                    <span style="color: #33ccff">Technology
                        <br>
                    </span>
                    </div>
                    <div class="homesubtwo">
                        Your number one contact for business systems
                    </div>

                    <div class="homesubthree">
                        <div class="homesubthrees">
                            Make a consultation below
                            <br>
                            on any of our services and
                            <br>
                            we'll get back to you <span style="color: #33ccff;">ASAP</span>
                        </div>
                        <br>
                        <form action="index.php" method="POST" class="contact__form grid">
                            <div class="contact__inputs grid">
                                <div class="contact__content">
                                    <label for="" class="contact_label">Email*</label>
                                    <input type="text" name="e_mail" class="contact__input" id="emailaddress">
                                </div>
                                <div class="contact__content">
                                    <label for="" class="contact_label">What service do you need</label>
                                    <textarea name="s_ervice" id="service" cols="0" rows="7" class="contact__input"></textarea>
                                    
                                </div>
                            </div>
                            <div class="subthreebutton">
                            <center>
                            <input style="color:yellow ; background-color:hsl(121, 43%, 51%); padding:5%; border-radius:20%" type="submit" name = "SAVE"  value = "Make Inquiry" />
                            </center>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="homesuboneimg">
                        <img src="assets/img/pic6.jpg" alt="" class="homesubone__img">
                    </div>      
                </div>   
                <div class="homemaintwo">
                    <center>
                    Sale, Leasing, sevice and maintenance of Photocopiers, Computers and their
                    <br>
                    Accessories, PABX telephone Systems for internal communication, networking
                    <br>
                    (Local Area Networks), consultancy, Stationery, solar installation, air
                    <br>
                    conditioning systems, graphics design and printing Services
                </center>
                </div>    
                <div class="gallerys"> <center>
                    <img src="assets/img/tmtlogo.png" alt="" class="gallerys__img">
                    <img src="assets/img/tmtfooter3.PNG" alt="" class="gallerys__img">
                    <img src="assets/img/pic7.jpg" alt="" class="gallerys__img">
                </center> 
                </div>
                <br>
                <div class="brs__bg">
                    <div class="about__data">
                            <div class="brs__info">  

                                    <div>
                                    <span class="brs__info-title">1790</span>
                                    <span class="brs__info-name">HAPPY CLIENTS </span>
                                </div>
 
                                
                                <div>
                                    <span class="brs__info-title">920</span>
                                    <span class="brs__info-name">FINISHED PROJECTS</span>
                                </div>  
                                <div>
                                    <span class="brs__info-title">245</span>
                                    <span class="brs__info-name">SKILLED EXPERTS</span>
                                </div>  
                            </div>
                    </div>   
                    <div style="font-size: 50px; color: black; font-weight: bolder; background-color: #fff; padding: 0;"><center> Check out our <span style="font-weight: bolder; color: #33ccff; font-size: 50px;">core services</span> below</center></div>  
            </div>
            <center>                   
                <div class="contained">
                    <div class="contained-item st-box">
                        <img src="assets/img/pic4.PNG"style="width:180px; height:160px;">
                        <div class="sttitle">
                            <span style="color: black; font-size: 18px; font-weight: bold;"> Sales & Supply</span> 
                         </div>
                         <br>
                         <div class="stinfo">
                            <span style="color: black; font-size: 15px;;"> All types of photocopiers (Basic copiers, Multi-functional printers and basic printers)</span> 
                         </div>
                    </div>
                      
                    <div class="contained-item gd-box">
                        <img src="assets/img/pic3.jpg" style="width:180px; height:160px;">
                        <div class="gdtitle">
                            <span style="color: black; font-size: 18px; font-weight: bold;"> Maintenance & Repair</span> 
                         </div>
                         <div class="gdinfo">
                            <span style="color: black; font-size: 15px;;">Maintenance, repair of office equipment (photocopiers, printers & their accessories)</span> 
                         </div>
                    </div>
                      
                    <div class="contained-item rd-box">
                        <img src="assets/img/pic5.PNG" style="width:180px; height:160px;">
                        <div class="rdtitle">
                            <span style="color: black; font-size: 20px; font-weight: bold;"> Leasing</span> 
                         </div>
                         <br>
                         <div class="rdinfo">
                            <span style="color:black; font-size: 15px;;"> Leasing of office equipment for short and long periods of time.</span> 
                         </div>
                    </div>
                </div>
                </center>
                <center>
                <div class="indexabout">
                    <div class="indexabouttext">
                      <span style="color: black; font-size: 18px; font-weight: bold;">Do you need any of our services?</span>
                    </div>
                    <div class="talkers">
                        <center>
                        <a href="contact.html" class="button button--flex">
                            <span style="color: yellow;"> Contact Us Now</span>
                        </a>
                    </center>
                    </div>
                </div>
            </center>
                <center>
                <div class="indexlast">
                    <div class="years">
                        <span style="color: #001a00 ; font-size: 200px; font-weight: bolder;">11</span>
                        <span style="color: gray ; font-size: 20px; font-weight: bolder;">YEARS IN THE FIELD</span>
                        <div class="secondindex">
                            <span style="color: black; font-size: 25px; font-weight: bold;">Know More</span>
                            <br>
                            <span style="color: black; font-size: 25px; font-weight: bold;">About Us & Our</span>
                            <br>
                            <span style="color: black; font-size: 25px; font-weight: bold;">Services</span>
                            <div class="talked">
                                <a href="about.html" class="button button--flex">                            
                                    <span style="color: yellow;"><i class="uil uil-comment-alt-dots"></i></span>
                                    <span style="color: yellow;">About Us</span>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </center>
            <center>
                <div class="agents">
                    <span style="color: black; font-size: 18px; font-weight: bold;">Get in touch with us. Our agents</span>
                    <br>
                    <span style="color: black; font-size: 18px; font-weight: bold;">are eager for you.</span>
                    <div class="tk">
                        <a href="contact.html" class="button button--flex">
                            <span style="color: yellow;"> Send Message</span>
                        </a>
                    </div>
                </div>
            </center>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">TMT Technologies Limited</h1>
                        <br>
                        <span class="footer__subtitle">
                            Plot 30 Soliz Courts, Lumumba Avenue - Nakasero                            
                            Kampala, Uganda
                            <br>
                            <a href="" class="">
                            info@tmt.co.ug
                        </a>
                        <br>
                            (+256)414599917
                        </span>
                        <div class="footer__socials">
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="uil uil-twitter-alt"></i>
                            </a>
                            <a href="https://facebook.com/" target="_blank" class="footer__social">
                                <i class="uil uil-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="uil uil-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" class="footer__social">
                                <i class="uil uil-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="footer__services">
                        <h1 class="footer__title">Our Services</h1>
                        <br>
                        <a href="services.html" class="our__services">Sales &  Supply</a>
                        <br>
                        <a href="services.html" class="our__services">Repair & Maintenance</a>
                        <br>
                        <a href="services.html" class="our__services">Leasing</a>
                    </div>
                    <div class="footer__socials">
                        <h1 class="footer__title">Quick Links</h1>
                        <br>
                        <a href="index.php" class="footer__link">Home</a>
                        <br>
                        <a href="about.html" class="footer__link ">About Us</a>
                        <br>
                        <a href="services.html" class="footer__link ">Our Services</a>
                        <br>
                        <a href="contact.php" class="footer__link ">Contact Us</a>
                    </div>
                </div>
                <hr>
                <br>
                <img src="assets/img/tmtfooter.PNG" alt="" class="footer__img">
                <p class="footer__copy">&#169 2021 TMT Technologies Limited. Designed, Developed, Hosted & Maintained By Eland Technologies Limited</p>
            </div>
        </footer>
          <!--==================== SCROLL TOP ====================-->
          <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

       <!--==================== SWIPER JS ====================-->
       <script src="assets/js/swiper.js"></script>

       <!--==================== MAIN JS ====================-->
       <script src="assets/js/main.js"></script>
    </body>
</html>