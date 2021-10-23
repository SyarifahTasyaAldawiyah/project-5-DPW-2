<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Tasya Beauty</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="{{url('index')}}">Home</a>
                  <a href="{{url('login')}}">Login</a>
                  <a href="{{url('products')}}">Products</a>
                  <a href="{{url('about')}}">About</a>
                  <a href="{{url('client')}}">Client</a>
                  <a href="{{url('contact')}}">Contact</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="{{url('public')}}/images/toggle-icon.png"></span>
               <a class="logo" href="index.php">Tasya Beauty<span class="sr-only">(current)</span></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>
                        <li><a href="/l"><img src="{{url('public')}}/images/user-icon.png"></a></li>
                        <li><a href="#"><img src="{{url('public')}}/images/bag-icon.png"></a></li>
                        <li><a href="#"><img src="{{url('public')}}/images/search-icon.png"></a></li>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Tasya<br>Beauty</h1>
                           <p class="banner_text">Halo Ladies! selamat datang di toko kami, disini kami menyediakan berbagai macam produk kecantikan yang akan membuatmu tampil lebih cantik dan menarik!</p>
                           <div class="read_bt"><a href="#">Beli Sekarang</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{url('public')}}/images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Tasya<br>Beauty</h1>
                           <p class="banner_text">Kamu akan terlihat cantik didepan pasanganmu buat pasanganmu semakin betah berada didekatmu!</p>
                           <div class="read_bt"><a href="#">Beli Sekarang</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{url('public')}}/images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Tasya<br>Beauty</h1>
                           <p class="banner_text">Silahkan Pilih Produk pilihanmu! Semua tersedia di toko kami</p>
                           <div class="read_bt"><a href="#">Beli Sekarang</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{url('public')}}/images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Tasya<br>Beauty</h1>
                           <p class="banner_text">HAPPY SHOPING!</p>
                           <div class="read_bt"><a href="#">Beli Sekarang</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="{{url('public')}}/images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- product section start -->
      <div class="product_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="product_taital">Produk Terbaru</h1>
                  <p class="product_text">Tentukan pilihanmu ladies!</p>
               </div>
            </div>
            <div class="product_section_2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-1.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 25.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-2.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 30.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-3.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 80.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-4.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 200.000</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-5.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 60.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-6.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 55.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-7.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 150.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-8.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 55.000</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-9.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 245.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-10.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 135.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-11.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 99.000</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                        <img src="{{url('public')}}/images/img-12.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">Detail</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Rp 65.000</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="seemore_bt"><a href="#">See More</a></div>
            </div>
         </div>
      </div>
      <!-- product section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_main">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <h1 class="about_taital">Tentang Toko Tasya Beauty</h1>
                        <p class="about_text">Toko ini didirikan oleh Syarifah Tasya Aldawiyah, toko ini beralamat dijalan bintang musir desa tuan tuan ketapang kalimantan barat Indonesia. Toko ini menjual beragam produk kecantikan.</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div><img src="{{url('public')}}/images/about-img.png" class="image_3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- customer section start -->
      <div class="customer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="customer_taital">Apa yang costumer katakan???</h1>
               </div>
            </div>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{url('public')}}/images/client2.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Tasya Alydrus</h3>
                              <p class="dolor_text">Sumpah barangnya bagus banget kualitas premium </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{url('public')}}/images/client-img.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Ahmat</h3>
                              <p class="dolor_text">Bagus banget! Istri saya suka</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{url('public')}}/images/client-img.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Doni</h3>
                              <p class="dolor_text">Pacar gw seneng banget pas gw kadoin produk disini, terimakasih Tasya Beauty</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- customer section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_taital">Get In Touch</h1>
                  <p class="contact_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation  eu </p>
               </div>
               <div class="col-md-6">
                  <div class="contact_main">
                     <div class="contact_bt"><a href="#">Contact Form</a></div>
                     <div class="newletter_bt"><a href="#">Newletter</a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.php"><img src="{{url('public')}}/images/footer-logo.png"></a></div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <h3 class="address_text">Contact Us</h3>
                     <div class="address_bt">
                        <ul>
                           <li>
                              <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : Loram Ipusm</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +01 1234567890</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : demo@gmail.com</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="footer_logo_1"><a href="#"><h3 class="address_text">Tasya Beauty</h3></a></div>
                     <p class="dummy_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
                  </div>
                  <div class="col-sm-4">
                     <div class="main">
                        <h3 class="address_text">Best Products</h3>
                        <p class="ipsum_text">dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright @Syarifah Tasya Aldawiyah<a href="https://html.design"> | @2021 Alydrus Tasya</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>