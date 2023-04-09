<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style/index.css" rel="stylesheet" type="text/css">
    <link href="./image/logo2.svg" rel="shortcut icon" type="image/x-icon">
    <title>FortressBoxes Home Page</title>
</head>
<body>
    <!-- navbar begin menu.js(change carousel in js by the first div after navbar) toggle.js-->
    <link href="./style/navbar.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./script/toggle.js"></script>
    <nav class="navbar">
        <div class="logo">
            <a href="./index.php"><img class="logo-pic" src="./image/logo.svg" alt="FortressBoxes Logo"></a>
        </div>
        <div class="logo2">
            <a href="./index.php"><img class="logo-pic" src="./image/logo2.svg" alt="FortressBoxes Logo"></a>
        </div>
        <ul class="nav-links" style="padding: 0 30px;">
            <!-- USING CHECKBOX HACK -->
            <input class="hum" type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger" style="color:white">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="./index.php">Home</a></li>
                <li><a href="">About Us</a></li>
                <li class="services">
                    <a class="services-link" href="#" onclick="toggleDropdown(this); return false;">Services</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a style="font-size: 13px;" href="">Blockchain Audit</a></li>
                        <li><a style="font-size: 13px;" href="">PenTest</a></li>
                        <li><a style="font-size: 13px;" href="">Web Development</a></li>
                    </ul>
                </li>
                <li><a href="">Project</a></li>
                <li><a href="">Contact</a></li>
            </div>
        </ul>
        <div class="button">
            <img class="button-icon" src="./image/next.svg">
            <a class="button-c" href="mailto:contact@fortressboxes.tech">Get in Touch</a>
        </div>
    </nav>
    <!-- navbar end -->
    
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="carousel__inner">
            <div class="carousel__item active" >
                <div class="pic-1">
                    <img class="pic-1-content" src="./image/blockchain.svg" alt="FortressBoxes blockchain audit">
                </div>
                <div class="content-1">
                    <h2 class="title">Smart Contract Security: Our Top Priority</h2>
                    <p class="text">
                        Smart contracts have become increasingly popular due to their many benefits, but they also come with security risks that need to be addressed. <br>
                        At FortressBoxes, we prioritize the security of your smart contract by implementing various measures to prevent vulnerabilities and attacks. We conduct thorough code reviews, utilize industry-standard security protocols, and regularly update our systems to ensure your smart contract remains secure.<br><br>
                    <b class="end" style="font-size: 17px;">Trust us to help you navigate the complex world of smart contract security and keep your assets safe.</b></p>
                </div>
            </div>
            <div class="lopp carousel__item" >
                <div class="content-1">
                    <h2 class="title">Penetration Testing: The Key to Securing Your Infrastructure</h2>
                    <p class="text">
                        Penetration testing is a critical component of a comprehensive security strategy.<br>
                        Our skilled professionals provide customized testing services to identify weaknesses in your systems, applications, and networks. We simulate real-world attacks and provide actionable recommendations to improve your security posture using the latest tools and techniques. Protect your sensitive data and assets from potential threats with our expert guidance.<br><br>
                    <b class="end" style="font-size: 17px;">Trust us to keep your IT environment secure, contact us to schedule your assessment.</b>
                    </p>
                </div>
                <div class="pic-1">
                    <img class="pic-1-content" src="./image/Pentest.svg" alt="FortressBoxes Penetration Testing">
                </div>
            </div>
            <div class="carousel__item" >
                <div class="pic-1">
                    <img class="pic-1-content" src="./image/webdev.svg" alt="FortressBoxes Web Developement">
                </div>
                <div class="content-1">
                    <h2 class="title">Secure Web Development for Your Business</h2>
                    <p class="text">
                        FortressBoxes specializes in secure web development to protect businesses' sensitive data and assets. <br>
                        Our experienced developers follow industry best practices, using the latest security technologies and frameworks to prevent attacks and vulnerabilities. Trust us to build a functional and secure website from the ground up.<br><br>
                        <b class="end" style="font-size: 17px;">Get in touch with us today to discuss your web development project.</b>
                    </p>
                </div>
            </div>
            <!-- <div class="carousel__item" >
                <h2>Slide 4</h2>
            </div>
            <div class="carousel__item" >
                <h2>Slide 5</h2>
            </div> -->
        </div>
        <button class="carousel__button carousel__button--left"><img class="raw" src="./image/prev.svg"></button>
        <button class="carousel__button carousel__button--right"><img class="raw" src="./image/next.svg"></button>
    </div>
    <!-- Carousel End -->
    <!-- services start -->
    <div>
        <h1 style="text-align: center;margin-bottom: 10px;color: #d295f8;">Our Services</h1>
        <div class="card_cont">
            <div class="card">
                <img class="card_pic" src="./image/pentest_card.svg" alt="Penetration testing service">
                <div class="card_title">
                    <h4>Penetration Testing</h4>
                </div>
                <div class="card_text">
                    <p >Expert cybersecurity testing. <br>Identify vulnerabilities. <br>Protect from cyber attacks.</p>
                </div>
            </div>
            <div class="card">
                <img class="card_pic" src="./image/webdev_card.svg" alt="Web development service">
                <div class="card_title">
                    <h4>Web Development</h4>
                </div>
                <div class="card_text">
                    <p>Expert development. <br>Customized solutions. <br>Enhance security. <br>Stay ahead of threats.</p>
                </div>
            </div>
            <div class="card">
                <img class="card_pic" src="./image/blockchain_card.svg" alt="Blockchain audit service">
                <div class="card_title">
                    <h4>Blockchain Audit</h4>
                </div>
                <div class="card_text">
                    <p>Comprehensive auditing. <br>Identify vulnerabilities. <br>Enhance security. <br>Trust our expertise.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- services end -->
    <!-- contact us form start -->
    <div class="container" >
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i style="padding: 2px;"><img src="./image/address.svg" width="60px"></i> <!-- image -->
                    <div class="topic">Address</div>
                    <div class="text-one">Marrakech</div>
                    <div class="text-two">Morocco</div>
                </div>
                <div class="phone details">
                    <i style="padding: 2px;"><img src="./image/phone.svg" width="60px"></i> <!-- image -->
                    <div class="topic">Phone</div>
                    <div class="text-one">+212 693370585</div>
                    <div class="text-two">+212 </div>
                </div>
                <div class="email details">
                    <i style="padding: 2px;"><img src="./image/mail.svg" width="60px"></i> <!-- image -->
                    <div class="topic">Email</div>
                    <div class="text-one">contact@fortressboxes.tech</div>
                    <div class="text-two">mohamed.moualim@fortressboxes.tech</div>
                </div>
            </div>
            <div class="right-side" id="contact">
                <div class="topic-text">Send us a message</div>
                <p style="color:white;">Fill out the form below and our team will reach out you soon.</p>
                <form action="./contact_us.php" method="post">
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Your email" required>
                    </div>
                    <div class="input-box message-box">
                        <textarea type="text" name="message" placeholder="Enter Description" required></textarea>
                    </div>
                    <?php 
                        if(isset($_GET['res'])){
                            if($_GET['res']==1){echo '<p style="text-align:center;color:#8ae48a;">Sent successfully</p>';}
                            if($_GET['res']==2){echo '<p style="text-align:center;color:#c70d2d;">Try Again !</p>';}  
                        }
                    ?>
                    <div class="button">
                        <input type="submit" value="Send Now" >
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact us form end -->
    <!-- footer start -->
    <link href="./style/footer.css" rel="stylesheet" type="text/css">
    <div class="footer">
        <div class="footer-wrapper">
            <a href="./index.php" class="footer-brand inline-block"><img src="./image/logo2.svg" loading="lazy" width="100" alt="FortressBoxes Logo" class="footer-logo"/></a>
            <div class="footer-content">
                <div class="footer-block">
                    <div class="title-small">Company</div>
                    <a href="" class="footer-link">About Us</a>
                    <a href="" class="footer-link">Pricing</a>
                    <a href="" class="footer-link">Join Us</a>
                </div>
                <div class="footer-block">
                    <div class="title-small">Resources</div>
                    <a href="" class="footer-link">Blockchain</a>
                    <a href="" class="footer-link">Penetration Test</a>
                    <a href="" class="footer-link">Ctf challenge creator</a>
                </div>
                <div class="footer-block">
                    <div class="title-small">About</div>
                    <a href="" class="footer-link">Terms &amp; Conditions</a>
                    <a href="" class="footer-link">Privacy policy</a>
                    <div class="footer-social-block">
                        <a href="https://twitter.com/fortressboxes" class="footer-social-link-twitter inline-block"><img src="./image/twitter.svg" loading="lazy" alt="FortressBoxes twitter" width="24" height="24"/></a>
                        <a href="https://www.linkedin.com/company/fortressboxes/" class="footer-social-link-linkedin inline-block"><img src="./image/linkedin.png" loading="lazy" alt="fortressboxes linkedin"  height="24"/></a>
                        <a href="https://www.instagram.com/fortressboxes/" class="footer-social-link-facebook inline-block"><img src="./image/instagram.png" loading="lazy" alt="FortressBoxes instagram" height="24"/></a>
                    </div>
                </div>
            </div>
            <div class="footer-content2">
                <div class="footer-block2">
                    <div class="title-small">About</div>
                    <a href="" class="footer-link" style="font-size:14px !important;">Blockchain</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">Penetration Test</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">Ctf challenge creator</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">About Us</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">Pricing</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">Join Us</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">Terms &amp; Conditions</a>
                    <a href="" class="footer-link" style="font-size:14px !important;">Privacy policy</a>
                    <div class="footer-social-block">
                        <a href="https://twitter.com/fortressboxes" class="footer-social-link-twitter inline-block"><img src="./image/twitter.svg" loading="lazy" alt="FortressBoxes twitter" width="24" height="24"/></a>
                        <a href="https://www.linkedin.com/company/fortressboxes/" class="footer-social-link-linkedin inline-block"><img src="./image/linkedin.png" loading="lazy" alt="fortressboxes linkedin"  height="24"/></a>
                        <a href="https://www.instagram.com/fortressboxes/" class="footer-social-link-facebook inline-block"><img src="./image/instagram.png" loading="lazy" alt="FortressBoxes instagram" height="24"/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-divider"></div>
        <div class="footer-copyright-center">Copyright © 2023 FortressBoxes</div>
    </div>
    <!-- footer end -->
    <script type="text/javascript" src="./script/carouselle.js"></script>
    <script type="text/javascript" src="./script/menu.js"></script> 
</body>
</html>
