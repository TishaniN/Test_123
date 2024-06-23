 
<html>
<head>
	<title>Contact</title>
    <link rel="icon" type="image/x-icon" href="logo.png">

     <link rel="stylesheet" type="text/css" href="header.css">
     <link rel="stylesheet" type="text/css" href="copy.css">

     <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>        <script src="https://unpkg.com/scrollreveal"></script> 


        <link rel="stylesheet" type="text/css" href="header.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.css" integrity="sha512-Lc4aT4sbiVWDTSgqn3lf5kwKECm7rU45AReUS9WI2k4yRPSKtS+kJ9aV1jrxDUIyetNFRYZ3U2gR6WWbtWbIfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" type="text/css" href="cntstyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body >

	<script type="text/javascript">
            
            function ValidateEmail(mail)
            {
                if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(contact.email.value))
            {
            
            return (true)
            }
             alert("You have entered an invalid email address!")
             return (false)
            }
 
        </script>


<div class=" ">
            <div class="navbar">
                <img src="logo.png" class="logo"\>
                <div class="links">
                <ul >
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a class="active" href="">Contact</a></li>
                </ul>
                </div>
                <a href="getintouch.php">
                <button type="button" class="btn">Get in touch</button> </a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="dropdown_menu">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portrait.php">Portfolio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><button type="button" class="btn">Get in touch</button></li>
            </div>
            
        </div>
        




        <!-- ---------------------------body---------------------------- -->


    <div class="container1">
        <header>
            <h1>Contact Us</h1><br>
            <p>We would love to hear from you and answer any questions you may have. If you are interested in booking a photography session, please reach out to us using the contact form below. We specialize in capturing the beauty of special moments, whether it be a wedding, family gathering, or personal milestone. Our team is dedicated to providing exceptional service and creating stunning photographs that you will treasure for years to come. Thank you for considering us for your photography needs.</p>
        </header>
    </div>


       <!--methana thibbe content form eka-->

       	<div class="trans">
      	<div class="content">
            <div class="content-form">
                <section>
                    
                </section>
            </div>
        </div> 

      <form id = "form" action="cnt_php.php" method="POST">
        <div class="form">
            <div class="right">
              <div class="contact-form">
                  <input type="text" name="fname" required>
                  <span>Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input type="email" name="mail" required >
                  <span>E-mail </span>
              </div>
              <div class="contact-form">
                  <textarea name="text">
                    
                  </textarea>
                  <span> Type your Message....</span>
              </div>
  
              <div class="contact-form">
                  <center><input type="submit" name="submit" onclick="ValidateEmail()"></center>
              </div>
              </div>
            </div>
          </div>
      </div>
    </form>

<!-- ---------------------------------- content ------------------------------------------------------------------ -->

    
        <br><br><br><br>
 
        
        <div class="trans">
       

      
      	<div class="container">
		<div class="box">
			<div class="icon">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
			</div>
			
			<div class="para">
				<h3>Address</h3>
				<p>
					
            	No: 245, Kandy Road, 
            	Dalugama, 
            	Kelaniya.
            
				</p>
			</div>
		</div>
			<div class="box">
			<div class="icon">
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>
			
			<div class="para">
				<h3>Phone</h3>
				<p>
					Contact us today to learn more about our services and to schedule your next photography session.<br><br>
					<b>+94 76 871 4862<br>
                 	+94 663 6666 26</b>
				</p>
			</div>
		</div>
		<div class="box">
			<div class="icon">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</div>
			
			<div class="para">
				<h3>E-mail</h3>
				<p>
					You can also contact us with our E-mail address.<br><br> alexandreaphotography@gmail.com
				</p>
			</div>
		</div>
	</div>  

 
	</div> 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>











        <!-- ---------------------------------footer-------------------------------------------------- -->

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
                        <li><a href="portrait.php">Portfolio</a></li>
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
 
 
</div>


<script>
            ScrollReveal({ 
                reset: true, 
                distance : '200px',
                duration: 2500,
                delay: 400
            });

            ScrollReveal().reveal('.container', { delay: 50,origin:'bottom' });
             
        </script>



</body>
</html>