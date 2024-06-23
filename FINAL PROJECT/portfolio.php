<html>
    <head>
       <link rel="icon" type="image/x-icon" href="logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>        <script src="https://unpkg.com/scrollreveal"></script> 
        <link rel="stylesheet" type="text/css" href="p.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.css" integrity="sha512-Lc4aT4sbiVWDTSgqn3lf5kwKECm7rU45AReUS9WI2k4yRPSKtS+kJ9aV1jrxDUIyetNFRYZ3U2gR6WWbtWbIfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="logo.png" class="logo"\>
                <div class="links">
                <ul >
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a class="active" href="portfolio.php">Portfolio</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                </div>
                <a href="getintouch.php">
                <button type="button" class="btn">Get in touch</button></a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="dropdown_menu">
                <li><a href="button.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portrait.php">Portfolio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a href="getintouch.php">
                        <button type="button" class="btn">Get in touch</button> </a></li>
            </div>
            
            <div class="caption">
                <h2>CAPTURED STORIES</h2>
                <p>A gallery reflects love, affection, intimacy, laughter, and connection. 
                    It represents a passing moment meant to be cherished and remembered. </p>
            </div>
        </div>
        <script> 
            const toggleBtn = document.querySelector('.toggle_btn')
            const toggleBtnIcon = document.querySelector('.toggle_btn i')
            const dropDownMenu = document.querySelector('.dropdown_menu')

            toggleBtn.onclick = function(){
                dropDownMenu.classList.toggle('open')
                const isOpen = dropDownMenu.classList.contains('open')

                toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
            }
        </script>
        <div class="albums">
            <div class="album-gallery">
                <div class="row">
                    <a href="wedding.php"><div class="pic wedding" >
                        <img src="wed1.jpg">
                        <div class="desc">
                            <h2>WEDDING</h2>
                            <p>LILY & NOAH</p>
                        </div>
                    </div></a>
                    <a href="event.php"><div class="pic b-E">
                        <img src="eve4.jpg">
                        <div class="desc">
                            <h2>BIRTHDAY & EVENT</h2>
                            <p>UNTAMED NIGHT</p>
                        </div>
                    </div></a>
                    <a href="lifestyle.php"><div class="pic lifestyle">
                        <img src="lif1.jpg">
                        <div class="desc">
                            <h2>LIFESTYLE</h2>
                            <p>SOPHIA & ANDRO</p>
                        </div>
                    </div></a>
                    <a href="fashion.php"><div class="pic fashion">
                        <img src="fas3.jpg">
                        <div class="desc">
                            <h2>FASHION</h2>
                            <p>JEMMA AUDREY</p>
                        </div>
                    </div></a>
                </div>
                <div class="row">
                    <a href="lifestyle.php"><div class="pic lifestyle">
                        <img src="lif2.jpg">
                        <div class="desc">
                            <h2>LIFESTYLE</h2>
                            <p>LYLA & WESLEY</p>
                        </div>
                    </div></a>
                    <a href="fashion.php"><div class="pic fashion">
                        <img src="fas1.jpg">
                        <div class="desc">
                            <h2>FASHION</h2>
                            <p>JOSIE KEATS</p>
                        </div>
                    </div></a>
                    <a href="wedding.php"><div class="pic wedding">
                        <img src="wed3.jpg">
                        <div class="desc">
                            <h2>WEDDING</h2>
                            <p>JENNY & COLTON</p>
                        </div>
                    </div></a>
                    <a href="event.php"><div class="pic b-E">
                        <img src="eve1.jpg">
                        <div class="desc">
                            <h2>BIRTHDAY & EVENT</h2>
                            <p>ELSIE PRESTON</p>
                        </div>
                    </div></a>
                </div>
                <div class="row">
                    <a href="lifestyle.php"><div class="pic lifestyle">
                        <img src="lif3.jpg">
                        <div class="desc">
                            <h2>LIFESTYLE</h2>
                            <p>EMILY BREANNA</p>
                        </div>
                    </div></a>
                    <a href="wedding.php"><div class="pic wedding">
                        <img src="wed4.jpg">
                        <div class="desc">
                            <h2>WEDDING</h2>
                            <p>GRACE & HARRY</p>
                        </div>
                    </div></a>
                    <a href="lifestyle.php"><div class="pic lifestyle">
                        <img src="lif4.jpg">
                        <div class="desc">
                            <h2>LIFESTYLE</h2>
                            <p>ROSIE GRACE</p>
                        </div>
                    </div></a>
                    <a href="fashion.php"><div class="pic fashion">
                        <img src="fas2.jpg">
                        <div class="desc">
                            <h2>FASHION</h2>
                            <p>FREYA HARPER</p>
                        </div>
                    </div></a>
                </div>
                <div class="row">
                    <a href="event.php"><div class="pic b-E">
                        <img src="eve3.jpg">
                        <div class="desc">
                            <h2>BIRTHDAY & EVENT</h2>
                            <p>AMELIA CHARLOTTE</p>
                        </div>
                    </div></a>
                    <a href="wedding.php"><div class="pic wedding">
                        <img src="wed2.jpg">
                        <div class="desc">
                            <h2>WEDDING</h2>
                            <p>ISLA & TOMMY</p>
                        </div>
                    </div></a>
                    <a href="fashion.php"><div class="pic fashion">
                        <img src="fas4.jpg">
                        <div class="desc">
                            <h2>FASHION</h2>
                            <p>IVY FLORENCE</p>
                        </div>
                    </div></a>
                    <a href="event.php"><div class="pic b-E">
                        <img src="eve5.jpg">
                        <div class="desc">
                            <h2>BIRTHDAY & EVENT</h2>
                            <p>HAPPY'S FEST</p>
                        </div>
                    </div></a>
                </div>
                
                                  
            </div>
            
        </div>
        <div class="footer">
            <div class="row">
                <div class="col">
                    <center><img src="logo.png" class="logo" ></center>
                    <p><q>Photography is a way of feelings, of touching, of loving. 
                        What we have caught is captured forever.It remenbers little things, 
                        long after you have forgotten everything.</q></p>
                </div>
                <div class="col">
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col">
                    <p class="em"><a href="mailto:abcd123@gmail.com">abcd123@gmail.com</a></p>
                    <p class="em">+94 71 234 5678</p> 
                    <h1>ALEX ANDRIA</h1> 
                    <div class="social-media">
                        <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.whatsapp.com"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">COPYRIGHT 2023 &#169; PERFECT LENS PHOTOGRAPHY</p>
        </div>
        <script>
            ScrollReveal({ 
                reset: true, 
                distance : '200px',
                duration: 2500,
                delay: 400
            });

            ScrollReveal().reveal('.album-gallery .row', { delay: 200,origin:'bottom' });
        </script>
    </body>
</html>
