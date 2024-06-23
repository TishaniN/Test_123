3<html>
<head>
    
    <title></title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" type="text/css" href="get.css">

    <style type="text/css" >



         input.curve1{
        border-radius:20px; 
        width: 48%;       
        height: 7% ;
        padding: 10px;
        
        }
    input.curve2{
        border-radius:20px; 
        width: 96%;       
        height: 7% ;
        padding: 10px;
        
        }

    form.size{
    
        border: 5px;
    }

    select.dropdown{
        border-radius: 20px;
        width: 96%;
        height: 7%;
       
    }

    textarea.curve3{
        border-radius: 20px; 
        padding: 10px;
        
        width: 96%;

    }

    div.container{
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        text-align: center;
 
    }
    
    .container .btn-2{
        background-color: #627CF4;
        width: 710px;
        letter-spacing: 5px;
        font-size: 30px;
        height: 50px;
        border: none;
        color: white;
        border-radius: 20px;
        transition: ease-out 0.3s;
        outline: none;
        border: #px solid #42FBF2;
        position: relative;
        z-index: 1;

    }



    .btn-2: hover{
       color: #fff;
        cursor: pointer;
    }

    .btn-2:before{
        border-radius: 20px;
       transition:0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: "";
        background-color: #42FBF2;
    }

    .btn-2:hover:before{
        transition: 0.5 all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
    }



    div.color{
        
        width: 55%;
        height: 110%;
        padding: -10px;
        margin: 0;
        background: rgba(88, 86, 86, 0.3);
        border-radius: 20px;
    }

 
    div.backcolor{
        background-color: #E7D2E3;
    }

    
    div.main{
        margin: -10;
    }

    div.imagetext{
        color: white;
        padding: 90px;

    }

    div.text1{
        color: #92F0C1;
        font-size: 30px;
    }

    div.text2{
        color: #62E1F4;
        font-size: 50px ;
    }

    div.smalltext{
        font-size: 20px;
    }
 

    body{
        background-image: linear-gradient(rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)),url(camera.jpg);
        background-size: cover;
    }
 

    </style> 
</head>

  


<body>



<div class="main">
    <div class="banner">
        <div class="navbar">
            <img src="logo.png" class="logo"\>
            <div class="links">
            <ul >
                <li><a  href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            </div>
            <button type="button" class="btn">Get in touch</button>
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


        <br><br>
        <center>
        <div class="imagetext">


            <div class="text1">
            GET IN TOUCH
            </div> 

            <div class="text2">
            <b>REQUSET A QUOTE</b>
            </div>
            <br>


            <div class="smalltext">
            We make your event most memorable <br>
            

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
        </center>




        <script type="text/javascript">
            
            function ValidateEmail(mail)
            {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(getintouch.email.value))
            {
            
            return (true)
            }
             alert("You have entered an invalid email address!")
             return (false)
            }
 
        </script>






        <center>
        <div class="color">
            <br>
            <form action="msg.php"   method="POST" enctype="multipart/form-data" name="getintouch" class="size">
            
            <input type="text" class="curve1" name="fname"   required   placeholder="First name">

            <input type="text" class="curve1" name="lname"  required   placeholder="Last name"> 
            <br><br><br>
 
            <input type="email" class="curve2" name="email" required   placeholder="Email">
            <br><br><br>
 
            <input type="text" class="curve1" name="wdate"  required    placeholder="Event date">

            <input type="text" class="curve1" name="wtime"  required   placeholder="Event Time">
            <br><br><br>
 
 
            <input type="text" class="curve2" name="location" required   placeholder="Event location (Reception)">
            <br><br><br>


            <select class="dropdown" name="type">
                <option selected> Type of the Ceromany </option>
                <option> Poruwa </option>
                <option> Church </option>
                <option> Poruwa & Church </option>
                <option> Other </option>
            </select>

            <br><br><br>

            <textarea class="curve3" name="message"    cols="98" rows="7" placeholder="Message"></textarea>
            <br><br><br>

            
            <div class="container">
                <center>
                <button class="btn-2"  >SEND MESSAGE</button>
                </center>
                 <br>
                
             <!-- onclick="ValidateEmail()"  -->
            </div> 
            

        </form>
        </div>
        </center>
            
       </div> <!-- banner div close --> 
        
        <br><br>

</div> <!-- end of backcolor div -->
            

 
 

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

<!-- main div tag -->
</div>

 


 



</body>
</html>