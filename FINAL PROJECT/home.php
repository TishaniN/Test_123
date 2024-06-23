<html>
    <head>
        <link rel="icon" type="image/x-icon" href="logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>        <script src="https://unpkg.com/scrollreveal"></script> 
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.css" integrity="sha512-Lc4aT4sbiVWDTSgqn3lf5kwKECm7rU45AReUS9WI2k4yRPSKtS+kJ9aV1jrxDUIyetNFRYZ3U2gR6WWbtWbIfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        <div class="banner">
            <div class="navbar">
                <img src="logo.png" class="logo"\>
                <div class="links">
                <ul >
                    <li><a  class="active" href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
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
                <li><a href="getintouch.php"><button type="button" class="btn">Get in touch</button></a></li>
            </div>
            <div class="caption">
                <p>We capture your <br>today's moments that will<br> amaze your hearts tomorrow.</p>
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





        <div class="about">
            <div class="image">
                <img src="image.jpg">
            </div>
            <div class="text-box">
                <h3>ABOUT ME</h3>
                <hr>
                <p>Introducing Perfect Lens, a talented photographer with a unique eye for 
                    capturing life's most precious moments. With 10 years of experience in the 
                    field, Perfect Lens has established themselves as a leading photographer in 
                    Sri Lanka and beyond.</p>
                <a href="about.php">Read more</a>
            </div>
        </div>
        <div class="services">
            <h1>WHAT AM I DOING</h1>
        </div>
        <div class="wrapper">
            <div class="single-box">
                <div class="content">
                    <div class="icon">
                        <img src="1.png">
                    </div>
                    <h2>Weddings </h2>
                    <p>If you force it and you keep looking for moments then you'll end up 
                        shooting what you think the wedding should look like rather than actual 
                        moments that are unfolding in front of you</p>
                    
                </div>
            </div>
            <div class="single-box">
                <div class="content">
                    <div class="icon">
                        <img src="4.png">
                    </div>
                    <h2>Birthdays & Events</h2>
                    <p>We provide a different guest experience for each event.
                        Memories make the best swag; don't let your event attendees
                        leave without their own copy.</p>
                    
                </div>
            </div>
            <div class="single-box">
                <div class="content">
                    <div class="icon">
                        <img src="5.png" >
                    </div>
                    <h2>Lifestyle </h2>
                    <p>Lifestyle photography features individuals and families 
                        with the intention to capture real-life events or milestones 
                        in an artistic way</p>
                    
                </div>
            </div>
            <div class="single-box">
                <div class="content">
                    <div class="icon">
                        <img src="2.png">
                    </div>
                    <h2>Fashion</h2>
                    <p>Fashion photography is a devoted to displaying clothing and other fashion items, 
                         sometimes haute couture. We taking a picture studio or an outside setting.</p>
                </div>
            </div>
        </div>
        <section class="reviews">
            <div class="title"><h1>CLIENT'S LOVE NOTES</h1></div>
            <div class="wrapper">
                <div class="testimonial swiper">
                    <div class="slide-group swiper-wrapper">
                        <div class="slide swiper-slide">
                            <img src="image1.jpeg" class="cus-img">
                            <div class="cus-thought">
                                <p>" We had our wedding in Rome and chose imagications as our photographer. 
                                    Our photos are amazing, look as if they are from a movie or fashion magazine.
                                    she was very fun, kind and helpful all day with us , we didn't even feel like we 
                                    were posing, we had a great time."</p>
                                <p class="cus-name">- Casey & Robert</p>
                                <p class="shoot">Wedding Shoot</p>
                            </div>
                        </div>
                        <div class="slide swiper-slide">
                            <img src="image2.jpg" class="cus-img" style="height: 340px;">
                            <div class="cus-thought">
                                <p>" HUGE thank you to Alex for not only the quality of our photos, but for his support
                                     and understanding along the way. Alex was incredibly easy and pleasant to work with 
                                     and the quality of the images is top notch and should be the standard for all events 
                                     we capture going forward."</p>
                                <p class="cus-name">- James Martin</p>
                                <p class="shoot">Birthday Shoot</p>
                            </div>
                        </div>
                        <div class="slide swiper-slide">
                            <img src="image3.jpg" class="cus-img">
                            <div class="cus-thought">
                                <p>" We had the most wonderful time on our session with Alex. She made us feel comfortable
                                    and directed us perfectly. She has such incredible talent to capture the most exquisite 
                                    photos in the simplest moments. We are forever grateful for these images and definitely 
                                    recommend her to anyone and everyone"</p>
                                <p class="cus-name">- Emma & Chris</p>
                                <p class="shoot">Couple Shoot</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="btn_group">
                <div class="btn_prev">
                  <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26 35L20.7071 29.7071C20.3166 29.3166 20.3166 28.6834 20.7071 28.2929L26 23M20.4141 29L38.4141 29" stroke="#3B3B3B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <rect x="57" y="57" width="56" height="56" rx="28" transform="rotate(-180 57 57)" stroke="#3B3B3B" stroke-width="2" />
                  </svg>
                </div>
                <div class="btn_next">
                  <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31 22L36.2929 27.2929C36.6834 27.6834 36.6834 28.3166 36.2929 28.7071L31 34M36.5859 28H18.5859" stroke="#3B3B3B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <rect x="1" y="1" width="54" height="54" rx="27" stroke="#3B3B3B" stroke-width="2" />
                  </svg>
                </div>
              </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script>
            const Tswiper = new Swiper('.testimonial',{
                speed:400,
                loop:true,
                spaceBetween:100,
                navigation:{
                    nextEl:".btn_next",
                    prevEl:".btn_prev",
                }
            })
       </script>
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