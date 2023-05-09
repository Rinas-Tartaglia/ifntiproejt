<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('aws/css/all.min.css')}}">
    <script src="{{asset('scrips/scripts.js')}}" async></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/ifnti.png" alt="">
        </div>
        <div class="navigation">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">IFNTI</a></li>
                <li><a href="#">Admission</a></li>
                <li><a href="#">Actualité</a></li>
            </ul>
        </div>
        <div class="contact">
            <a href="#">Contact</a>
        </div>

    </header>  



    <div class="content">
        <div class="contenu">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
                centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide><img src="img/a1.png" alt=""></swiper-slide>
                <swiper-slide><img src="img/a2.png" alt=""></swiper-slide>
                <swiper-slide><img src="img/a3.png" alt=""></swiper-slide>
                <swiper-slide><img src="img/a4.png" alt=""></swiper-slide>
                <swiper-slide><img src="img/a5.png" alt=""></swiper-slide>
                <swiper-slide><img src="img/a6.png" alt=""></swiper-slide>

                <div class="autoplay-progress" slot="container-end">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                </div>
            </swiper-container>
        </div>
        

        <div class="cool">
            <div class="custom-shape-divider-bottom-1683622737">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>  
        </div> 

        <div class="restecode">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolorem distinctio ratione quisquam earum? Architecto rerum consequuntur quas ratione, asperiores modi voluptatem, sapiente quisquam, a quod eius. Doloribus illum facilis voluptate facere dolores fugit doloremque mollitia placeat, ea voluptatibus! Alias facilis veniam esse modi beatae sint perferendis distinctio totam officiis.
        </div>
        
    </div>



    <footer>
        <!--
        <div class="cards">
            <div class="cards0">
                <img src="img/ifnti.png" alt="">
            </div>
            <div class="cards1">
                <p>un cadre calme et boisé <br>
                propice aux études.
            </p>
            </div>
            <div class="cards2">
                <div class="carden1">
                    <h2>Information contact</h2>
                </div>
                <div class="carden2">
                    <small><i class="fas fa-phone"></i></small>
                    <p>+ 228 90 9 1 81 41</p>
                </div>
                <div class="carden3">
                    <small><i class="fas fa-envelope"></i></small>
                    <p><a href="mailto:info @site web.com"></a></p>
                </div>
            </div>

            <div class="cards3">

            </div>
        </div>
-->
    </footer>
</body>
</html>
