<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>about</title>
	<link rel="stylesheet" href="header.css">

	<link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		*{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
		body,html{
			padding: 0px;
			margin: 0px;
		}
		.about{
			width: 100%;
			
			background-color: #1a1a1a;
		}
		.aimg{
			height: 600px;
			padding: 50px 0px;
			width: 450px;
		}
		.txt{
			width: 600px;
			padding-left: 15px;
			animation: 3s anim-lineUp ease-out;
			animation-iteration-count: 1;
		}
		@keyframes anim-lineUp {
			  0% {
			    opacity: 0;
			    transform: translateY(80%);
			  }
			  20% {
			    opacity: 0;
			  }
			  50% {
			    opacity: 1;
			    transform: translateY(0%);
			  }
			  100% {
			    opacity: 1;
			    transform: translateY(0%);
			  }
			}
		.main{
			width: 1130px;
			margin: 0 auto;
			display: flex;
			align-items: center;
			justify-content: space-around;
		}
		.title{
			color: white;
			font-size: 50px;
			text-transform: capitalize;
			margin-bottom: 20px;
			text-decoration: underline;
		}
		.text{
			color: white;
			font-size: 15px;
			letter-spacing: 1px;
		}
		.moretext{
			display: none;
		}
		.read-more-btn{
			padding:10px 24px;;
			background-color:#b45e71 ;
			color: black ;
			font-size: 12px;
			cursor: pointer;
			border-radius: 40px;
			border: none;
		}
		.read-more-btn:hover{
			background-color: black;
			color: white;
			border: 2px solid black;
		}

		.text.show-more .moretext {
		  display: inline;
		}
	</style>
	
</head>
<body>
	
	<div class= "about">
	<div class="banner">
            <div class="navbar">
                <img src="logo.png" class="logo"\>
                <div class="links">
                <ul >
                    <li><a   href="home.php">Home</a></li>
                    <li><a class="active" href=" ">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                </div>
                <a href="getintouch.php">
                <button type="button" class="btn">Get in touch</button> </a>
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
                <li><button type="button" class="btn">Get in touch</button></li>
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
	<div class="main">
		 <img src="bg.jpg" class="aimg">
		 <div class="txt">
		 	<font class="title">About Us</font><br><br>
		 	<font class="text">Introducing Perfect Lens, a talented photographer with a unique eye for capturing life's most precious moments. With 10 years of experience in the field, Perfect Lens has established themselves as a leading photographer in Sri Lanka and beyond.<br><br>

		With a keen sense of style and an ability to connect with their subjects, Perfect Lens has a way of bringing out the beauty and emotion in every shot. Whether it's a portrait, a landscape, or a candid moment, their photographs are not just images, but works of art.<br><br>

		<span class="moretext">As a photographer, Perfect Lens is dedicated to making sure each client's vision is realized. They take the time to get to know their clients and understand their needs, ensuring that each session is tailored to their unique style and personality.<br><br>

		In addition to their exceptional photography skills, Perfect Lens is also known for their professionalism and attention to detail. They go above and beyond to ensure that each client's experience is seamless and stress-free, from the initial consultation to the final product delivery.<br><br>

		Whether you're looking for a family portrait, a wedding photographer, or a commercial shoot, Perfect Lens is the photographer for you. Contact them today to schedule a session and see the world through their lens.</span></para><br><br>
		<button class="read-more-btn">Read More</button>
	<script type="text/javascript">
		const readMoreBtn = document.querySelector(".read-more-btn");
		const text = document.querySelector(".text");

		readMoreBtn.addEventListener("click", (e) => {
		  text.classList.toggle("show-more");
		  if (readMoreBtn.innerText === "Read More") {
		    readMoreBtn.innerText = "Read Less";
		  } else {
		    readMoreBtn.innerText = "Read More";
		  }
		});
	</script>
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
</body>
</html>