<html>
    <head>
        <link rel="icon" type="image/x-icon" href="logo.png">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="gallery.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
        <style>
            .cover{
                background-image: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.25)),url(lif11.jpg);
            }
        </style>
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
                    <a href="getintouch.php"><button type="button" class="btn">Get in touch</button></a></li>
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
        <div class="cover">
            <p>Sophia & Andro - Porthcurno Beach</p>
        </div>
        <div class="gallery">
            <div class="box">
      
                <div class="column">
                    <span><img src="lif1.jpg"></span>
                    <span><img src="lif31.jpg"></span>
                    <span><img src="lif3.jpg"></span>
                    <span><img src="lif33.jpg"></span>
                    <span><img src="lif2.jpg"></span>
                    <span><img src="lif44.jpg"></span>
                    <span><img src="lif21.jpg"></span>
                    <span><img src="lif4.jpg"></span>
                    <span><img src="lif41.jpg"></span>
                </div>
          
                  <div class="column">
                    <span><img src="lif32.jpg"></span>
                    <span><img src="lifestyle.jpg"></span>
                    <span><img src="lif1.jpg"></span>
                    <span><img src="lif31.jpg"></span>
                    <span><img src="lif3.jpg"></span>
                    <span><img src="lif33.jpg"></span>
                    <span><img src="lif2.jpg"></span>
                    <span><img src="lif44.jpg"></span>
                    <span><img src="lif21.jpg"></span>                      
                </div>
          
                  <div class="column">
                    <span><img src="lif4.jpg"></span>
                    <span><img src="lif41.jpg"></span>
                    <span><img src="lif32.jpg"></span>
                    <span><img src="lifestyle.jpg"></span>
                    <span><img src="lif1.jpg"></span>
                    <span><img src="lif31.jpg"></span>
                    <span><img src="lif3.jpg"></span>
                    <span><img src="lif33.jpg"></span>
                    <span><img src="lif2.jpg"></span>
                      
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

            ScrollReveal().reveal('.services', { delay: 200,origin:'bottom' });
            ScrollReveal().reveal('.wrapper', { delay: 150,origin:'bottom' });
            ScrollReveal().reveal('.image', { delay: 150,origin:'bottom' });
            ScrollReveal().reveal('.text-box', {direction:'150px', delay: 350,origin:'right' });
            ScrollReveal().reveal('.reviews .title', { delay: 200,origin:'bottom' });
        </script>
    </body>
</html>