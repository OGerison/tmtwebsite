<!DOCTYPE html>
    <html lang="en">
        <head>
        <?PHP
            include 'db.php';
            $host = "localhost";
            $user ="root"; 
            $password = "";
            $database = "tmtwebsite";
            if (isset($_POST ['SAVE'])){
                echo "<br>";	
                $names = $_POST['name'];
                $emails = $_POST['email'];
                $subjects = $_POST['subject'];
                $descriptions = $_POST['description'];
                
                $sql = "insert into contact(NAME,EMAIL,SUBJECT,DESCRIPTION)values('$names',$emails','$subjects','$descriptions')";
                if ($connection -> query($sql)){
                    echo"Inquiry sent successfully.";
                }
            else		{
                echo "Error is here." .$connection ->error;
                }
            }
            
            if (isset($_POST ['SAVED'])){
                $sql = "select * from contact";
                $myquery = $connection->query($sql);
                $result = $myquery->fetch_assoc();
                while($result = $myquery->fetch_assoc()){
                    echo "<br>";
                    print $result['NAME']."".$result['EMAIL']."".$result['SERVICE']."".$result['DESCRIPTION'];
                    echo"<br>";
                }
            }
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
    
            <title>TMT Technologies | Contact Us </title>
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
          
            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">

                <div class="contact__container container grid">
                    <div class="home__container container grid">
                        <div class="home__content grid">
                            <div class="home__social">
                                <div class="vl">
                                <h1 class="hometitle">To make requests for 
                                    <br>
                                    further information,
                                    <br>
                                    <span style="color: #33ccff">contact us
                                        <br>
                                    </span>
                                   <h1 class="hometitle">via our social 
                                       <br>
                                       channels.
                                   </h1> 
                                    <br>
                                    </div>
                                    <span style="color: black;">Send us your inquiry now!</span> 
                                    
                                    <span style="color: black;">One of our agents will contact you back shortly.</span> 
                                    
                                </h1>
                            </div>
                        </div>                      
                    </div> 
                    <form action="contact.php" method="POST" class="contact__form grid">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact_label">Name*</label>
                                <input type="text" class="contact__input">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact_label">Email*</label>
                                <input type="email" class="contact__input">
                            </div>
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact_label">Subject*</label>
                            <input type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact_label">Please describe what you need.</label>
                            <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                        </div>

                        <div>
                        <center>
                            <input style="color:yellow ; background-color:hsl(121, 43%, 51%); padding:5%; border-radius:20%" type="submit" name = "SAVE"  value = "Send Message" />
                            </center>
                        </div>
                    </form>
                </div>

            </section>
            <!---another section-->
            <section class="contact section" id="contact">
                <div class="contact__bg">
                    <div class="footeree__container container grid">
                        <div>
                            <h1 class="contact__title">Our Location</h1>
                            <br>
                            <span class="footer__subtitle">
                                Plot 30 Soliz Courts, 
                                <br>
                                Lumumba Avenue - Nakasero  
                                <br>                          
                                Kampala, Uganda
                                <br>
                            </span>
                        </div>
                        <div class="footer__serviced">
                            <h1 class="contact__title">Mobile Contacts</h1>
                            <br>
                            <div class="contactcontent">
                            58 Howard Street #14 New York
                            <h2 class="contactone">Office Telephone</h2>
                            (+256)414599917
                            <h2 class="contactone">Mobile  Telephone</h2>
                            (+256)704807111
                            <br>
                            (+256)706665283
                            <br>
                            (+256)772948122
                            <h2 class="contactone">FAX</h2>
                            (+256)414285082
                        </div>
                        </div>
                        <div>
                            <h1 class="contact__title">Emails & Social</h1>
                            <br>
                            <div class="contact__socials">
                                <a href="" class="subtle">
                                info@tmt.co.ug
                            </a>
                            <br>
                                <a href="https://twitter.com/" target="_blank" class="contact__social">
                                    <i class="uil uil-twitter-alt"></i>
                                </a>
                                <a href="https://facebook.com/" target="_blank" class="contact__social">
                                    <i class="uil uil-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" class="contact__social">
                                    <i class="uil uil-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank" class="contact__social">
                                    <i class="uil uil-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brief__bg">
                    <div class="footers__container container grid">
                        <div class="home section" id="home">
                            <div class="home__container container grid">
                                <div class="home__content grid">
                                    <div class="home__social">
                                        <h1 class="hometitle">We run the kind of IT
                                            <br> services that vow 
                                            <br>
                                            your
                                            <br>
                                            <span style="color: #33ccff">success
                                                <br>
                                            </span>
                                        </h1>
                                    </div>
                                </div>                      
                            </div>   
                        </div>
                        <div class="home section" id="home">
                            <div class="home__container container grid">
                                <div class="home__content grid">
                                    <div class="home__social">
                                        <!---buttons-->
                                        
                                            <div class="talk">
                                                <a href="" class="button button--flex">
                                                    <i class="uil uil-comment-alt-dots"></i>
                                                Let's Talk
                                                </a>
                                            </div>
                                        
                                        <a href="" class="button button--flex">
                                            <i class="uil uil-info-circle"></i>
                                            Call us Now
                                        </a> 
                                    </div>
                                </div>                      
                            </div>   
                        </div>
                    </div>
                </div>
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
                            <a href="#services" class="our__services">Sales &  Supply</a>
                            <br>
                            <a href="#services" class="our__services">Repair & Maintenance</a>
                            <br>
                            <a href="#services" class="our__services">Leasing</a>
                        </div>
                        <div class="footer__socials">
                            <h1 class="footer__title">Quick Links</h1>
                            <br>
                            <a href="index.phpl" class="footer__link">Home</a>
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
            </section>
        </main>
              
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