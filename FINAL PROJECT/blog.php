<html>
<head>
    <link rel="icon" type="image/x-icon" href="logo.png">
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
			/*background-color: #080808;*/
            background-image: url(back.jpg);
            background-size: cover;

		}
		.container{
            width: 1100px;
            margin: auto;
            height: 300px;
            background-color: #dfd3cf;
            position: relative;
            padding-top: 40px;
            padding-left: 50px ;
            border-radius: 15px 50px;
		}
        .text{
            width: 45%;
        }
        .title{
            text-align: center;
            margin-bottom: 10px;
            font-size: 50px;
            font-weight: bold;
        }
        .subtitle{
            text-align: center;
            margin-bottom: 10px;
            font-size: 20px;
        }
        .text.p{
            text-align: center;
        }
        .blogim{
            position: absolute;
            top: 5%;
            right: -5%;
            box-shadow: 5px 4px 10px rgba(37, 0, 0, 1.0);
            border-radius: 15px 50px;
            
        }

        .blogim img{
            border-radius: 15px 50px;
        }
        .btn2{
              background-color: white;
              color: black;
              width: 150px;
              border: 2px solid white;
              border-radius: 20px;
              padding: 5px 7px;
              text-align: center;
        }

        .btn2:hover, .btn2:active {
              background-color: lightblue;
              color: white;
        }

        div.main{
            background: rgba(0, 0, 0, 0.5);
            margin: -20px;
            padding: 50px;
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
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a class="active" href="">Blog</a></li>
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
                <li><a href="button.html">Home</a></li>
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
    <br/>



    <div class="main">
        
    

    <font style="color: white;font-size:50px;font-weight: bold; letter-spacing: 8px;">ARTICLES</font><br>

    <font style="color:#8b8988; font-size: 17px;font-weight: bold;">Blog posts about photography can be a great resource for people who love photography.</font><br>

    <hr style="width:900px;height: 2px; text-align:left;margin-left:0;background-color:#615f5e;">


    <div class="container">
        <div class="text">
            <font class="title">Gear Up for Success:</font><br>
            <font class="subtitle">Photography Equipment Reviews and Recommendations</font><br><br>
            <p>
                Photography is a captivating art form that requires skill, creativity, and the right gear. Whether you're a professional photographer or an enthusiastic hobbyist, having the right equipment can make a significant difference in the quality of your images. 
        </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.youtube.com/watch?v=qzhi_C1Nkzs"><button type="button" class="btn2">Watch Reel</button></a>
        </div>
        <div class="blogim">
            <img src="eq.jpg"  style="width: 500px;height: 300px;">
        </div>
    </div> <br><br><br>





    <div class="container">
        <div class="text">
            <font class="title">Mastering Portrait Photography:</font><br>
            <font class="subtitle">Capturing the Essence of the Subject</font><br><br>
            <p>
                Portrait photography is a beautiful art form that allows us to capture the essence and personality of an individual. Whether you're photographing a friend, a loved one, or a professional model, mastering the art of portrait photography can greatly enhance your skills as a photographer. 

        </p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.youtube.com/watch?v=BAiN4Wyf_KY"><button type="button" class="btn2">Watch Reel</button></a>
        </div>
        <div class="blogim">
            <img src="pot.jpg" style="height: 300px;width: 500px;">
        </div>
    </div><br>
   
        
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