 <!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rai Catering Bandung</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/fe/img/logo/R.jpg')}}">
		
		<!-- All css here -->
        <link rel="stylesheet" href="{{asset('assets/fe/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fe/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fe/css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fe/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fe/css/responsive.css')}}">
        <script src="{{asset('assets/fe/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
		<!-- Header Area Start -->
		<header class="fixed">
			<div class="header-area pt-85 pb-20 header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<div class="logo">
								<a href="#"><img src="{{asset('assets/fe/img/logo/logo.png')}}" alt="Panshi" /></a>
							</div>
						</div>
						<div class="col-sm-9 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="{{route('catering')}}">Beranda</a></li>
                                            </li>
                                            <li><a href="{{route('cabang1')}}">Cabang</a></li>
                                           <li><a href="#">Kategori Paket</a>
                                                <ul>
                                                @foreach($categori_paket as $data)
                                                    <li><a href="{{route('isipaket',$data->id)}}">{{$data->kategori}}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                            
                                            <!-- <li><a href="{{route('kategorimakanan1')}}">Kategori Makanan</a></li>
                                            <li><a href="{{route('kategoripaket1')}}">Kategori Paket</a></li> -->
                                            <li><a href="{{route('makanan_frontend')}}">Menu</a></li>
                                            
        
                                            </li>
                                            <li><a href="contact.html"></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->
		<!-- Background Area Start -->
		<section id="slider" class="slider-area">	
		    <div class="slider-wrapper">
		        <div class="single-slide" style="background-image: url({{asset('assets/fe/img/slider/slider1.jpg')}}">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-center">
                                            <h4 class="pt-85">Layanan Catering Untuk Semua Kesempatan</h4>
                                            <h2>Hanya Dengan Memesan & Membooking Layanan Anda Sekarang </h2>
                                            <h3>(880) 1245 657 9875</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		        <div class="single-slide" style="background-image: url({{asset('assets/fe/img/slider/slider2.jpg')}}">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-center">
                                            <h4 class="pt-85">Layanan Catering Untuk Semua Kesempatan</h4>
                                            <h2>Hanya Dengan Memesan & Membooking Layanan Anda Sekarang </h2>
                                            <h3>(880) 1245 657 9875</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</section>
		<!-- Background Area End -->
        
        <!-- Event Start -->
        <!-- <section class="event-area pt-130">
            <div class="container">
        <center>                
        <div class="section-title">
        <h2>Kategori Paket</h2>
        </div>
        </center>
        <br><br>
                <div class="row">
                    <div class="event-owl">
                        
                        @foreach($categori_paket as $data)
                       <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="{{route('isipaket',$data->id)}}"><img src="{{asset('assets/fe/img/event/'.$data->gambar)}}" style="height: 200px;width: 450px;margin-top: 7px"></a>
                                </div>
                                <h4><a href="{{route('isipaket',$data->id)}}">{{$data->kategori}}</a></h4>
                            </div>
                        </div>
                        @endforeach
                   </div>
               </div>
           </div>
        </section> -->
        <!-- Event End -->

        <!-- Menu Area Strat -->
        <section class="menu-area pb-55 pt-123">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-content text-center">
                            <div class="section-title">
                                <h2>Menu</h2>
                                <div class="section-tab">
                                    <div class="section-tab-menu text-center">
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="tab-content row">
                                        <div id="new" role="tabpanel" class="active section-tab-item">
                                            <div class="menu-owl">
                                             @foreach($kategori_makanan as $data)
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                                                         
                                                        <div class="table-head">
                                                            <h3>{{$data->kategori_makanan}}</h3>
                                                        </div>
                                                  
                                                        <div class="table-body">
                                                            <ul>
                                                            @php $no = 1; @endphp         
                                                            @foreach($data->makanan as $diti)    
                                                            <li>{{$no++}}.{{$diti->makanan}}</li> 
                                                            @endforeach                                        
                                                            </ul><!-- 
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a> -->
                                                        </div>
                                                         
                                                    </div>
                                                </div>
                                                @endforeach 
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Menu Area End -->
        <!-- About Start -->
        <section id="about-area" class="about-area bg-pink mt-195">
            <div class="about-image">
                <img src='img/about/ '" alt="" class="hidden-lg hidden-md">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-5 col-xs-12">
                        <div class="about-content pt-85 pb-85">
                            <div class="section-title">
                                <h2>Rai Catering<br>
                                    Layanan Catering Dikota Bandung </h2>
                                <h4>Makanan Terbaik Yang Membuat Perasaan Menjadi Lebih Baik!</h4>
                                <p>Rai Catering Mempunyai Menu Makanan Yang Baik Untuk di Konsumsi Oleh Semua Kalangan Karena di Dalam nya Mengandung Makanan Yang Sehat dan Bergizi.  </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial-area mb-128">
            <div class="container">
                <div class="row">
                    <br><br><br>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="testimonial-wrapper bg-pink text-center pt-60 pb-100 pl-60 pr-60">
                            <div class="row">
                                <div class="testimonial-owl center">
                                    <div class="col-xs-12"> 
                                        <div class="testimonial-content text-center">
                                            <img src="{{asset('assets/fe/img/testimonia/testi1.jpg')}}" alt="">
                                            <p>Rai Catering Adalah layanan katering yang terbaik untuk semua kalangan,dengan harga yang murah meriah dan sajian yang mewah </p>
                                            <h4>Mashrafee Mortuza</h4>
                                            
                                        </div>
                                            
                                    </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    <!-- <br><br><br>
                    <center>
                     --><!-- <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="testimonial-wrapper bg-pink text-center pt-60 pb-100 pl-60 pr-60">
                            <div class="row">
                                <div class="testimonial-owl center">
                                    <div class="col-xs-12"> 
                                        <div class="testimonial-content text-center">
                                            <img src="{{asset('assets/fe/img/testimonia/testi1.jpg')}}" alt="">
                                            <p>Panshi the Best Catering service eme for  elit, sed do eiuod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna iquatd </p>
                                            <h4>Mashrafee Mortuza</h4>
                                            <h5>the real hero</h5>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        </center>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Package Area Start -->
        <section id="info" class="package-area bg-pink">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-xs-12">
                        <div class="package-content pt-155">
                            <h4>Fasilitas Kami Membuat Kalian Senang </h4>
                            <h2>Jika Kamu Membutuhkan Kami</h2>
                            <h3>Cukup Hubungi (880) 1245 657 9875</h3>
                            <p>Kami Siap Memberikan Layanan Terbaik Bagi Anda Sehingga Anda Tidak Merasa Menyesal </p>
                        </div>
                    </div> 
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <div class="package-img">
                            <img src="{{asset('assets/fe/img/package/bg.png')}}" alt="package">
                        </div>
                    </div>       
                </div>
            </div>
        </section>    
        <!-- Package Area End -->
        <!-- Blog Area Strat -->
        <!-- <div class="blog-area pt-122">
            <div class="container">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                       <div class="section-title text-center pb-40">
                           <h2>our blog</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam explicabo voluptate culpa dolorem placeat, temporibus dolores eius error dolor deserunt!</p>
                       </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumbnail">
                                <a href="blog-details.html"><img src="{{asset('assets/fe/img/blog/blog1.jpg')}}" alt="blog"></a>
                            </div>
                            <div class="blog-desc">
                                <div class="publish-date">
                                    <p>13<span>May</span></p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">Lorem Ipsum is simply dummy</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumbnail">
                                <a href="blog-details.html"><img src="{{asset('assets/fe/img/blog/blog2.jpg')}}" alt="blog"></a>
                            </div>
                            <div class="blog-desc">
                                <div class="publish-date">
                                    <p>13<span>May</span></p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">Lorem Ipsum is simply dummy</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumbnail">
                                <a href="blog-details.html"><img src="{{asset('assets/fe/img/blog/blog3.jpg')}}" alt="blog"></a>
                            </div>
                            <div class="blog-desc">
                                <div class="publish-date">
                                    <p>13<span>May</span></p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">Lorem Ipsum is simply dummy</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog Area Strat -->
        <!-- Subscribe Area Strat -->
         <!-- <section class="subscribe">  
            <div class="subscribe-area pt-157 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                            <div class="subscribe-content text-center">
                                <h2>Subscribe our Newsletter for Latest Offer</h2>
                                <p>To Get Latest Update tempor dolor sit amet, conse ctetur adipiscing elit </p>
                            </div>
                            <div class="subscribe-form">
                                <div id="mc_embed_signup">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="default-btn"><span>subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --> 
        <!-- Subscribe Area Strat -->
        <!-- Contact Area Strat -->
        <br><br><br>
        <div id="contact" class="contact-area pb-128">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-area">
                            <div class="section-title mb-35">
                                
                            </div>
                            <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/panshi/mail.php" method="post">
                                <h1>Lokasi</h1><br><br>
                                <p>Jl. Sawah Kurung IV No.8, Ciateul, Regol, Kota Bandung, Jawa Barat 40252</p><br>
                                <p>022-834537452</p>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="map-area">
                            <!-- google-map-area start -->
                            <div class="google-map-area">
                                 <!-- Map Section -->
                                <div id="contacts" class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.551305772507!2d107.612569!3d-6.933818!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe430d781b9b49d8d!2sRai+Catering+%26+Wedding+Organizer!5e0!3m2!1sen!2sid!4v1547623362800" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area Strat -->
        <!-- Footer Area Strat -->
        <div class="footer-area">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 hidden-sm hidden-xs">
                            <p>Address : 256 AVE, Manchester, 125, North England</p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <p class="text-right">Copyright <i class="fa fa-copyright"></i> 2017 <a href="https://devitems.com/" target="_blank">Devitems LLC</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
       
		<!-- All js here -->
        <script src="{{asset('assets/fe/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/fe/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/fe/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/fe/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('assets/fe/js/ajax-mail.js')}}"></script>  		
        <script src="{{asset('assets/fe/js/jquery.magnific-popup.js')}}"></script>  	
        <script src="{{asset('assets/fe/js/jquery.nav.js')}}"></script> 
        <script src="{{asset('assets/fe/js/plugins.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM"></script> 
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
        </script>
        <script src="{{asset('assets/fe/js/main.js')}}"></script>
    </body>
</html>
