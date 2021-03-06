<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel='stylesheet' href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="./fonts.css?v=<?php echo rand();?>">
    <link rel="stylesheet" href="./style.css?v=<?php echo rand();?>">

    <title>Monza Factory</title>

  </head>
  <body class="overflow-hidden">
  <body>

    <div class="preload-fullpage" id="preload">
        <img class="preload-fullpage-logo mb-5 animate__animated animate__backInDown animate__flash" src="./src/monza-factory-logo.png" alt="">
    </div>

    <nav class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col d-none d-lg-block">
                    +662 999 9999 | SALES@MONZAFACTORY.COM
                </div>
                <div class="col text-right d-none d-md-block">
                    <div class="btn-group">
                        <button type="button" class="btn btn-language p-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          EN
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">EN</a>
                          <a class="dropdown-item" href="#">TH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav id="nav-top" class="navbar navbar-expand-lg navbar-light navbar-sticky w-100">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="./src/monza-factory-logo.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu" class="text-white"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarText">

                <ul class="navbar-nav">
                    <!-- <li class="nav-item active"></li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT <i data-feather="chevron-down" class="fe"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCT <i data-feather="chevron-down" class="fe"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item mr-0 d-none d-xl-block">
                        <a class="nav-link pr-0 pt-2" href="#"><i data-feather="menu" class="fe-menu text-white"></i></a>
                    </li>
                </ul>
                
            </div>

        </div>
    </nav>

    <nav id="nav-stickky" class="navbar navbar-expand-lg navbar-light position-fixed w-100 navbar-hide">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="./src/monza-factory-logo.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <i data-feather="menu" class="text-white"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarText">

                <ul class="navbar-nav">
                    <!-- <li class="nav-item active"></li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT <i data-feather="chevron-down" class="fe"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCT <i data-feather="chevron-down" class="fe"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item mr-0  d-none d-xl-block">
                        <a class="nav-link pr-0 pt-2" href="#"><i data-feather="menu" class="fe-menu text-white"></i></a>
                    </li>
                </ul>
                
            </div>

        </div>
    </nav>

        
    <!-- <div class="youtube_warpper">
        <div class="baner_youtube" data-jarallax-video="https://www.youtube.com/watch?v=K2fhljO9V00" style="padding-top: 150px !important;text-align:center;height:800px;color:#ffffff;">    
        </div>
    </div> -->

    <div class="baner_youtube" style="background-image: url('./img/youtube-home.png');">    
        <video autoplay loop muted playsinline autobuffer class="baner_youtube_video" poster="./img/monza_youtube2.mp4">
            <source src="./img/monza_youtube2.mp4" type="video/mp4">
        </video>
    </div>


<!--Search-->

    <section class="home_search">

        <div class="container" style="overflow: visible">

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section_tagline">MONZA CARBON FIBRE</div>
                    <h2 class="section_title">PRODUCT FINDER</h2>
                    <hr>
                </div>
            </div>
            <div class="row mt-3 justify-content-center text-center">
                <div class="col-11 col-md-11 col-xl-12 text-center">
                    <div class="row">
                        <div class="dropdown col-12 col-md-4 col-xl-4 mb-2">
                            <button class="btn btn-secondary dropdown-toggle mb-2"  type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SELECT BRAND
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenu1">
                            <button class="dropdown-item" href="#">HONDA</button>
                            <button class="dropdown-item" href="#">IZUSU</button>
                            <button class="dropdown-item" href="#">TOYOTA</button>
                            
                            </div>
                        </div>
                        <div class="dropdown col-12 col-md-4 col-xl-4 mb-2">
                            <button class="btn btn-secondary dropdown-toggle mb-2" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SELECT MODEL
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenu2">
                            <button class="dropdown-item" href="#">MODEL 1</button>
                            <button class="dropdown-item" href="#">MODEL 2</button>
                            <button class="dropdown-item" href="#">MODEL 3</button>
                            </div>
                        </div>
                        <div class="dropdown col-12 col-md-4 col-xl-4 mb-2">
                            <button class="btn btn-secondary dropdown-toggle mb-2" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SELECT YEAR
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenu3">
                            <button class="dropdown-item" href="#">2020</button>
                            <button class="dropdown-item" href="#">2021</button>
                            <button class="dropdown-item" href="#">2022</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            </div>
        </div>
    </section>


<!--QUALITY-->

    <section class="home_quality">   
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-lg-6 col-xl-5 text-md-left ml-3 pt-5 mb-5" style="z-index: 1;">
                        <h2 class="section_title">THAILAND</h2>
                        <h2 class="section_title">QUALITY</h2>
                        <hr class="mt-4" style=" margin: 1px;">
                        <h4 class="mt-4 mb-3">CARBON FIBRE PARTS</h4>
                        <p>Since 2099 we have grown a considerable amount and we not only produce carbon fibre parts but offer performance tuning parts, bodyshop facilities, Carbon Kevlar must be monza and center of imported Car accessories from America.</p>
                    </div>
                    <div class="img-quality" >
                        <div class="faded-left-right" ></div>
                        <img src="./img/home-quality.png">
                    </div>         
                </div> 
            </div>
                
            </div>  
        </div>
    </section>

<!--PRODUCT-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <div class="section_tagline">TRUS ME PERFORMANCE</div>
                    <h2 class="section_title">PRODUCT MODEL</h2>
                    <hr class="mb-3">
                </div>
            </div>
            <div class="row product-box mt-3 mb-2 mb-md-5 px-3">
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image7.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER DOOR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image8.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER DOOR</h4>
                            <p class="ection_tagline" style="padding: 0;">ISUZU DMAX</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image6.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER CHAIR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image7.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER DOOR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image6.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER CHAIR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image7.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER DOOR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image6.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER CHAIR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3 px-2 px-md-3">
                    <div class="card mb-3">
                        <div class="card-thumbnail">
                            <img src="./img/image7.png" class="card-img-top" alt="...">
                            <span class="badge badge-primary">NEW</span>
                        </div>
                        <div class="card-body">
                            <h4>CARBON FIBER DOOR</h4>
                            <p class="ection_tagline" style="padding: 0;">HONDA CVIC - FC</p>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row justify-content-md-center mt-2 mb-5 px-4 px-4">
                <button type="button" class="btn btn-lg btn-outline-primary col-12 col-md-6 col-lg-4">SEE MORE</button>
            </div>    
        </div>
       
    </section>

 <!--GALLERY-->

    <section class="home_gallery">

        <div class="container">

    
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_tagline">MONZA CARBON FIBRE</div>
                    <h2 class="section_title">GALLERY</h2>
                    <hr class="mb-4">
                    
                    <!-- 
                        <img src="./img/gallery/image 3.png" alt="" style=" width: 100% ">
                    -->
                </div>
            </div>
            
            <div class="pb-2 pb-md-5">
                <div class="container text-center px-2 px-md-0">
                    <!-- Masonry grid -->
                    <div class="gallery-wrapper mansonry">
                        <!-- Grid sizer -->
                        <div class="grid-sizer col-lg-4 col-md-6"></div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item">
                            <img class="img-fluid w-100 img-thumbnail shadow-sm rounded-0" src="./img/gallery_copy/Monza edit1-11.jpg" alt="">
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item">
                            <img class="img-fluid w-100 img-thumbnail shadow-sm rounded-0" src="./img/gallery_copy/ga2.jpg" alt="">
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item">
                            <img class="img-fluid w-100 img-thumbnail shadow-sm rounded-0" src="./img/gallery_copy/90148786_1100812883618507_8277114183753924608_o.jpg" alt="">
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item">
                            <img class="img-fluid w-100 img-thumbnail shadow-sm rounded-0" src="./img/gallery_copy/93581054_1122976304735498_7069285215939592192_o.jpg" alt="">
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item">
                            <img class="img-fluid w-100 img-thumbnail shadow-sm rounded-0" src="./img/gallery_copy/94144124_1128734297493032_401308099027140608_o.jpg" alt="">
                        </div>
                        
                        <!-- Grid item -->
                        <div class="col-lg-4 col-md-6 grid-item">
                            <img class="img-fluid w-100 img-thumbnail shadow-sm rounded-0" src="./img/gallery_copy/97852868_1151539381879190_6743407016191983616_n.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center mt-3 mb-3 px-4">
                <button type="button" class="btn btn-lg btn-outline-primary col-12 col-md-6 col-lg-4">SEE MORE</button>
            </div>

        
            </div>
        </div>
        
    </section>   


    
 <!--blog-->

    <section class="home_blog">

        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_tagline">TRUS ME PERFORMANCE</div>
                    <h2 class="section_title">BLOG</h2>
                    <hr>
                </div>
            </div>
            <div class="row mt-3">
                <div class="blog-vdo col-12 col-lg-6">
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="home-blog-vdo" style="background-image: url(./img/vdo_image\ 9.png)">
                        </div>
                        </div>
                        <div class="col-12 my-3 mx-2">
                            <h3 class="mb-2">All New D-Max</h3>
                            <p class="m-0 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti perspiciatis optio possimus dolore! Perferendis aliquid qui.</p>
                        </div>

                    </div>
                

                </div>
                <div class="col-12 col-lg-6">
                    <div class="row " style="justify-content: center;">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="home-blog-img my-3" style="background-image: url('./img/blog_01.jpg');">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-8 mt-0 mt-md-2 mb-4 pl-3 pl-md-0">
                            <h4 class="my-2">Auto Salon 2020</h4>
                            <p class="mb-md-2 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores </p>
                        </div>
                    </div>
                    <div class="row " style="justify-content: center;">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="home-blog-img my-3" style="background-image: url('./img/blog_02.jpg');">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-8 mt-0 mt-md-2 mb-4 pl-3 pl-md-0">
                            <h4 class="my-2">Auto Salon 2020</h4>
                            <p class="mb-md-2 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores </p>
                        </div>
                    </div>
                    <div class="row " style="justify-content: center;">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="home-blog-img my-3" style="background-image: url('./img/blog_03.jpg');">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-8 mt-0 mt-md-2 mb-4 pl-3 pl-md-0">
                            <h4 class="my-2">Auto Salon 2020</h4>
                            <p class="mb-md-2 p-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores </p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="row justify-content-md-center pt-0 mt-3 mt-md-5 mb-5 px-4">
                <button type="button" class="btn btn-lg btn-outline-primary col-12 col-md-6 col-lg-4">SEE MORE</button>
            </div> 
            
        </div>
   
    </section>





    <section class="home_footer pb-0">

        <div class="container">
            <div class="row justify-content-center justify-md-content-between">

                <div class="col-5 col-xl-4 d-none d-md-block">
                    <div class="row">
                        <div class="footer-part col-12">
                            <h4 class="p1 mb-0">
                                <strong>PART CATEGORIES</strong>
                            </h4>
                        </div>
                        <div class="foot-part01 col-5 col-xl-4 pl-0 pr-0 mr-4 mt-1">
                            <ul class="list-unstyled mt-1">
                                <li>Accessories</li>
                                <li>Air Ducts</li>
                                <li>Bumper</li>
                                <li>Canards</li>
                                <li>Air Ducts</li>
                                <li>Bumper</li>
                                <li>Fender Garnish </li>
                                <li>Logo</li>
                                <li>Air Ducts</li>
                                <li>Surrounds</li>
                                <li>Canards</li>
                                <li>Air Ducts</li>
                                <li>Bumper</li>
                                <li>Canards</li>
                            </ul>         
                        </div>
                        <div class="foot-part02 col-5 col-xl-4 pl-0 pr-0 mt-1">
                            <ul class="list-unstyled mt-1">
                                <li>Air Ducts</li>
                                <li>Bumper</li>
                                <li>Canards</li>
                                <li>Air Ducts</li>
                                <li>Bumper</li>
                                <li>Fender Garnish </li>
                                <li>Logo</li>
                                <li>Air Ducts</li>
                                <li>Surrounds</li>
                            </ul>                                  
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-8 d-none d-xl-block">
                    <div class="row mt-4 mt-xl-0 d-flex justify-content-between">
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>ISUZU</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>D-Max</li>
                                <li>Mu-X</li>
                                <li>TFR</li>
                                <li>Dragon-Eye</li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>TOYOTA</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Revo</li>
                                <li>Fortuner</li>
                                <li>Vios</li>
                                <li>Yaris</li>
                                <li>Altis</li>
                                <li>Camry</li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>FORD</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Fiasta</li>
                                <li>Ranger</li>
                                <li>Raptor</li>
                            </ul>
                        </div>                               
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>SUSUKI</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Triton</li>
                                <li>Pajero</li>
                                <li>Mirage</li>
                                <li>Attrage</li>
                                <li>Lancer</li>
                            </ul>
                        </div>                                     
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>SUSUKI</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Swift</li>
                                <li>Ertiga</li>
                            </ul>
                        </div> 
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>MITSUBISHI</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Swift</li>
                                <li>Ertiga</li>
                            </ul>
                        </div>                                     
                    </div>
                    <div class="row mt-4 mt-xl-0 ">
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>HONDA</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Cvic - FK</li>
                                <li>Cvic - FC</li>
                                <li>Cvic - FB</li>
                                <li>Cvic - FD</li>
                                <li>Jazz - GK</li>
                                <li>Jazz - GE</li>
                                <li>City</li>
                            </ul>
                        </div>                                
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>NISSAN</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Navara</li>
                                <li>Big M</li>
                                <li>X-tral</li>
                                <li>Frontiere</li>
                                <li>Almera</li>
                                <li>March</li>
                                <li>Juke</li>
                                <li>Cube</li>
                                <li>Tiena</li>
                                <li>GTR- 350Z</li>
                            </ul>
                        </div>                                
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>MAZDA</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>BT-50</li>
                                <li>M2</li>
                                <li>M3</li>
                            </ul>
                        </div>                                
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>MG</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>Cororado</li>
                                <li>Tralbazer</li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2 px-0">
                            <h5 class="h5">
                                <strong>CHEVROLET</strong>
                            </h5>
                            <ul class="list-unstyled mt-1">
                                <li>ZS</li>
                                <li>MG-5</li>
                            </ul>
                        </div>                            
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-8 d-xl-none collapse-list" id="accordion">
                    <div class="footer-part col-12 d-md-none text-left">
                        <h4 class="mb-4 pl-2">
                            <strong>Product</strong>
                        </h4>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                          <button class="btn btn-link pt-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                            ISUZU
                            <i data-feather="chevron-down" class="fe"></i>
                          </button>
                        </h5>
                      </div>
                      <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-unstyled mt-1">
                                <li>D-Max</li>
                                <li>TFR</li>
                                <li>Dragon-Eye</li>
                                <li>MU-X</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                            TOYOTA
                            <i data-feather="chevron-down" class="fe"></i>
                          </button>
                        </h5>
                      </div>
                      <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-unstyled mt-1">
                                <li>Revo</li>
                                <li>Fortuner</li>
                                <li>Vios</li>
                                <li>Yaris</li>
                                <li>Altis</li>
                                <li>Camry</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                            FORD
                            <i data-feather="chevron-down" class="fe"></i>
                          </button>
                        </h5>
                      </div>
                      <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-unstyled mt-1">
                                <li>Fiasta</li>
                                <li>Ranger</li>
                                <li>Raptor</li>
                            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading4">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                SUSUKI
                                <i data-feather="chevron-down" class="fe"></i>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-unstyled mt-1">
                                <li>Triton</li>
                                <li>Pajero</li>
                                <li>Mirage</li>
                                <li>Attrage</li>
                                <li>Lancer</li>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading5">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                            MITSUBISHI
                            <i data-feather="chevron-down" class="fe"></i>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-unstyled mt-1">
                                <li>Triton</li>
                                <li>Lancer</li>
                                <li>Pajero</li>
                                <li>Attrage</li>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading6">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                              HONDA
                              <i data-feather="chevron-down" class="fe"></i>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-unstyled mt-1">
                                <li>Cvic - FK</li>
                                <li>Cvic - FC</li>
                                <li>Cvic - FB</li>
                                <li>Cvic - FD</li>
                                <li>Jazz - GK</li>
                                <li>Jazz - GE</li>
                                <li>City</li>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading7">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                            NISSAN
                            <i data-feather="chevron-down" class="fe"></i>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-unstyled mt-1">
                                <li>Navara</li>
                                <li>Big M</li>
                                <li>X-tral</li>
                                <li>Frontiere</li>
                                <li>Almera</li>
                                <li>March</li>
                                <li>Juke</li>
                                <li>Cube</li>
                                <li>Tiena</li>
                                <li>GTR- 350Z</li>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading8">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                                MAZDA
                                <i data-feather="chevron-down" class="fe"></i>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-unstyled mt-1">
                                <li>BT-50</li>
                                <li>M2</li>
                                <li>M3</li>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                                CHEVROLET
                                <i data-feather="chevron-down" class="fe"></i>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-unstyled mt-1">
                                <li>Cororado</li>
                                <li>Tralbazer</li>
                              </ul>
                          </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row justify-content-between py-5 px-3">
                <div class="footer-social col-12 col-md-2 col-lg-2 text-md-center mb-2">
                <a href="#"></a>
                    <img class="footer-social-icon mr-2 mx-md-3" src="./img/fb.png" alt="">
                    <strong>Mzmonza</strong>
                </a>
                </div>
                <div class="footer-social col-12 col-md-2 col-lg-2 text-md-center mb-2">
                    <img class="footer-social-icon mr-2" src="./img/line.png" alt="">
                    <strong>monzashop</strong>
                </div>
                <div class="footer-social col-12 col-md-2 col-lg-2 text-md-center mb-2">
                    <img class="footer-social-icon mr-2" src="./img/ig.png" alt="">
                    <strong>monzafactory</strong>
                </div>
                <div class="footer-social col-12 col-md-2 col-lg-2 text-md-center mb-2">
                    <img class="footer-social-icon mr-2" src="./img/twiter.png" alt="">
                    <strong>monzafactory</strong>
                </div>
                <div class="footer-social col-12 col-md-2 col-lg-2 text-md-center mb-2">
                    <img class="footer-social-icon mr-2" src="./img/youtube.png" alt="">
                    <strong>monzafactory</strong>
                </div>
            </div>
        
        </div>
        
    </section>

    <section class="bg_end_footer" style="background: #008040;">

        <div class="container">
            <div class="row justify-content-center footer-logo ">
                <div class="logo_footer_end">
                    <img src="./img/monza-factory-logo.png" alt="">
                </div>
            </div>
        </div>

    </section>
  
    <div class="row justify-content-center m-2">

        <div class="text_footer_end">
            <small>© 2020 MONZA FACTORY WEB DESIGN BY INCOMMON STUDIO</small>
        </div>

    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>


    <script>

        $(function(){
            var navbar = $('#nav-stickky');
            
            $(window).scroll(function(){

                var isDesktop = $(window).width() >= 768;
                var isMobile = $(window).width() < 768;

                if( isDesktop && $(window).scrollTop() >= 120){
                    navbar.removeClass('navbar-hide');
                }
                else if( isMobile < 768 && $(window).scrollTop() >= 75){
                    navbar.removeClass('navbar-hide');
                } else {
                    navbar.addClass('navbar-hide');
                }
            });

        });

    </script>


    <script type='text/javascript' src='js/plugins/jarallax.js'></script>
    <script type='text/javascript' src='js/plugins/jarallax-video.js'></script>


    <script>
        feather.replace()
        $('.parallax').each(function(){
    		var parallaxObj = $(this);
    	
            $(this).jarallax({
		 		zIndex          : 0,
		 		speed			: 0.01,
		 		onCoverImage: function() {
			        parallaxObj.css('z-index', 0);
			    }
		 	});
		 });
    </script>

    <script>
        setTimeout(() => {
            $("body").removeClass('overflow-hidden');
            $("#preload").fadeOut(300);
        }, 1500);
    </script>
  
    <script>
       
        function applyBeforeunload() {
            $(window).on('beforeunload', function() {
                $('body').hide();
                $(window).scrollTop(0);
            });
            }
            //applyBeforeunload();
            $(document).on('click', '[samepage]', function() {
            $(window).off('beforeunload');
            setTimeout(applyBeforeunload, 100);
        });
    </script>

    <script>
            $("#dropdownMenu1 button").click(function(){
                //console.log($(this).text())
                $("#dropdownMenuButton1").html($(this).text()+' <span class="caret"></span>');
            });
            $("#dropdownMenu2 button").click(function(){
                //console.log($(this).text())
                $("#dropdownMenuButton2").html($(this).text()+' <span class="caret"></span>');
            });
            $("#dropdownMenu3 button").click(function(){
                //console.log($(this).text())
                $("#dropdownMenuButton3").html($(this).text()+' <span class="caret"></span>');
            });
        
    </script>   

    <script>

        $(function () {

            // Initate masonry grid
            var $grid = $('.gallery-wrapper').masonry({
                temSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                percentPosition: true,
            });

            // Initate imagesLoaded
            $grid.imagesLoaded().progress( function() {
                $grid.masonry('layout');
            });

        });

        
        
    </script>
  
  </body>
</html>