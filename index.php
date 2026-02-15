<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fallout Landing</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top nav-custom">
    <div class="container">
        <a class="navbar-brand" href="#Home"><img src="img/Logo_Fallout.svg" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#Home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#About">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#Team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="#Blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#Contact">Contact Us</a></li>
            </ul>
        </div>
       
        <a class="btn btn-primary ms-3 login" href="login.php">Login</a>

    </div>
</nav>

<!-- FULLSCREEN SCROLL SLIDER -->
<div id="Home" class="scroll-sections">

    <section class="scroll-slide active" style="background-image: url('img/Welcome_Home_Fallout.jpg');">
        <div class="slide-content">
            <h1>Welcome to Fallout</h1>
            <p>Explore the wasteland</p>
            <a href="#About" class="slide-btn">Learn More</a>
        </div>
    </section>

    <section class="scroll-slide" style="background-image: url('img/Survive_fallout.png');">
        <div class="slide-content">
            <h1>Survive the Apocalypse</h1>
            <p>Only the strong remain</p>
            <a href="#Team" class="slide-btn">Meet the Team</a>
        </div>
    </section>

    <section class="scroll-slide" style="background-image: url('img/Join_Brotherhood_fallout.jpg');">
        <div class="slide-content">
            <h1>Join the Brotherhood</h1>
            <p>Steel is stronger than fear</p>
            <a href="#Blog" class="slide-btn">Read More</a>
        </div>
    </section>

    <section class="scroll-slide" style="background-image: url('img/War_Fallout.jpg');">
        <div class="slide-content">
            <h1>War Never Changes</h1>
            <p>The legend continues</p>
            <a href="#Contact" class="slide-btn">Contact Us</a>
        </div>
    </section>

    <div class="scroll-indicators">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
        <span class="dot" data-slide="3"></span>
    </div>

</div>

<!-- ABOUT SECTION -->
<section id="About" class="section-features">
    <div class="container">
        <h2 class="text-center mb-5">About the Project</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-box" data-info="1">
                    <h4>BEST</h4>
                    <p>Research Management</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box" data-info="2">
                    <h4>POWER</h4>
                    <p>Financial Analysis</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-box" data-info="3">
                    <h4>INCREDIBLE</h4>
                    <p>Investment Trade</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT MODALS -->
<div class="feature-modal" id="info-1">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Research Management</h3>
        <p>Advanced tools for analyzing data, tracking progress, and managing complex research workflows.</p>

        <ul>
            <li>Real‑time data monitoring</li>
            <li>AI‑powered predictions</li>
            <li>Team collaboration tools</li>
            <li>Secure cloud storage</li>
        </ul>

        <a href="#" class="slide-btn">Learn more</a>

    </div>
</div>

<div class="feature-modal" id="info-2">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Financial Analysis</h3>
        <p>Powerful analytics engine for evaluating financial performance and forecasting future trends.</p>

        <ul>
            <li>Interactive charts</li>
            <li>Risk assessment tools</li>
            <li>Portfolio optimization</li>
            <li>Automated reporting</li>
        </ul>

        <img src="img/chart_example.png" alt="Chart" class="modal-img">

    </div>
</div>

<div class="feature-modal" id="info-3">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Investment Trade</h3>
        <p>Fast and secure trading platform designed for both beginners and professionals.</p>

        <ul>
            <li>Instant buy/sell operations</li>
            <li>Real‑time market data</li>
            <li>Advanced trading indicators</li>
            <li>Multi‑asset support</li>
        </ul>

        <a href="#" class="slide-btn">Start trading</a>

    </div>
</div>

<!-- TEAM SECTION -->
<section id="Team" class="section-team">
    <div class="container">
        <h2 class="text-center mb-5">Our Team</h2>

        <div class="row text-center">

            <div class="col-md-4 team-member">
                <a href="#" target="_blank">
                    <img src="img/Jontray.png" class="team-photo">
                </a>
                <h4>Jontray Arnold</h4>
                <p>Producer</p>

                <div class="team-socials">
                    <a href="#"><img src="img/instagram.svg"></a>
                    <a href="#"><img src="img/twitter.svg"></a>
                    <a href="#"><img src="img/facebook.svg"></a>
                </div>
            </div>

            <div class="col-md-4 team-member">
                <a href="#" target="_blank">
                    <img src="img/Joana.png" class="team-photo">
                </a>
                <h4>Joana Leite</h4>
                <p>Manager</p>

                <div class="team-socials">
                    <a href="#"><img src="img/instagram.svg"></a>
                    <a href="#"><img src="img/twitter.svg"></a>
                    <a href="#"><img src="img/facebook.svg"></a>
                </div>
            </div>

            <div class="col-md-4 team-member">
                <a href="#" target="_blank">
                    <img src="img/Jelena.png" class="team-photo">
                </a>
                <h4>Jelena Denisova</h4>
                <p>Producer</p>

                <div class="team-socials">
                    <a href="#"><img src="img/instagram.svg"></a>
                    <a href="#"><img src="img/twitter.svg"></a>
                    <a href="#"><img src="img/facebook.svg"></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- BLOG -->
<section id="Blog" class="section-testimonials">
    <div class="container">
        <h2 class="text-center mb-5 fallout-title"><img class="nuclear-radioactive" src="img/nuclear-radioactive.svg" alt="">Vault-Tec Testimonials</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="testimonial-box">
                    “War. War never changes. But this shelter? Best decision I ever made.”
                    <br><strong>Vault Dweller #101</strong>
                </div>
            </div>

            <div class="col-md-6">
                <div class="testimonial-box">
                    “If it wasn’t for this place, I’d be Radroach food by now.”
                    <br><strong>Survivor from Megaton</strong>
                </div>
            </div>

            <div class="col-md-6">
                <div class="testimonial-box">
                    “Clean water, working lights, no super mutants. 10/10.”
                    <br><strong>Brotherhood Initiate</strong>
                </div>
            </div>

            <div class="col-md-6">
                <div class="testimonial-box">
                    “I’ve seen the wasteland. Trust me — this is luxury.”
                    <br><strong>NCR Ranger</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer id="Contact" class="footer">
    <div class="container">
        <div class="row">

            <!-- LOGO + CONTACT -->
            <div class="col-md-4">
                <a href="#Home"><img src="img/Logo_Fallout.svg" alt=""></a> 
                <p>354 King Street, Melbourne Victoria 5467 Australia</p>
                <p>(0321) 654-798-021</p>
                <p>info@mail.com</p>
            </div>

            <!-- PRODUCT -->
            <div class="col-md-2">
                <h5>PRODUCT</h5>
                <ul class="footer-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>

            <!-- COMPANY -->
            <div class="col-md-2">
                <h5>COMPANY</h5>
                <ul class="footer-list">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Vacancies</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <!-- SOCIAL -->
            <div class="col-md-2">
                <h5>SOCIAL</h5>
                <ul class="footer-list">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
            </div>

        </div>
       
        <!-- SEPARATOR LINE --> 
        <span class="footer-separator">
       
        <!-- RED SOCIAL ICONS (BOTTOM RIGHT) -->
        <div class="footer-socials">
           
            <p class="copyright">© 2026. All Rights Reserved.</p>
            <div class="icon_block">
                <a href="#" class="social-icon">
                     <!-- YouTube -->
                    <img src="img/youtube.svg" alt="">
                </a>

                 <a href="#" class="social-icon">
                    <!-- Twitter -->
                    <img src="img/twitter.svg" alt="">
                </a>

                <a href="#" class="social-icon">
                    <!-- Facebook -->
                    <img src="img/facebook.svg" alt="">
                </a>

                <a href="#" class="social-icon">
                    <!-- Instagram -->
                    <img src="img/instagram.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>



<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="scroll.js"></script>

</body>
</html>