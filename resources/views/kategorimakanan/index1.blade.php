<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rai Catering Bandung</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/fe/img/logo/R.jpg')}}">
		
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
			<div class="header-area pt-50 pb-20 header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<div class="logo">
								<a href="index.html"><img src="{{asset('assets/fe/img/logo/logo.png')}}" alt="Panshi" /></a>
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
                                            <li><a href="{{route('cabang')}}">Cabang</a></li>
                                            <li><a href="#">Kategori Paket</a>
                                                <ul>
                                                @foreach($categori_paket as $data)
                                                    <li><a href="{{route('isipaket',$data->id)}}">{{$data->kategori}}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                            <!-- <li><a href="{{route('kategorimakanan1')}}">Kategori Makanan</a></li>
                                            <li><a href="{{route('kategoripaket1')}}">Kategori Paket</a></li> -->
                                            <li><a href="{{route('makanan1')}}">Menu</a></li>
                                            <!-- <li><a href="blog.html">blog</a>
        
                                            </li> -->
                                            <li><a href="contact.html">Contact</a></li>
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
		<!-- Banner Area Start -->
		<section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                           <!--  <div class="banner-content">
                                <h2>About Us</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="index.html">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>about us</li>
                                    </ul>
                                </div>
                            </div> -->  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
		<!-- Banner Area End -->
        <!-- Event Start -->
        <!-- <section class="event-area pt-130">
            <div class="container">
                <div class="row">
                    <div class="event-owl">
                       <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Corporate</a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                    <a href="service.html"><img src="{{asset('assets/fe/img/event/event2.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Banquet</a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event3.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Wedding</a></h4>
                            </div>
                        </div>
                       <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Corporate</a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Banquet</a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Wedding</a></h4>
                            </div>
                        </div>
                       <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Corporate</a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                   <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Banquet</a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-event text-center">
                                <div class="event-img">
                                    <a href="service.html"><img src="{{asset('assets/fe/img/event/event1.jpg')}}" alt="event"></a>
                                </div>
                                <h4><a href="service.html">Wedding</a></h4>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
        </section> -->
        <!-- Event End -->
        <!-- About Start -->
        <section class="about-area sin bg-pink mt-195 mb-130">
            <div class="about-image">
                <img src="img/about/bg.jpg" alt="" class="hidden-lg hidden-md">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-5 col-xs-12">
                        <div class="about-content pt-85 pb-85">
                            <div class="section-title">
                                <h2>Panshi The Best<br>
                                    Catering Service in the City </h2>
                                <h4>The best food make you feel good!</h4>
                                <p>Panshi the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adiog elit, sed do eiusmod tempor incididunt ut labore et lorna iquatd minimam, is nostrud iono oris nisi ut aliquip ex ea On the other hand, we denounce with righteous indignation.  </p>
                                <a href="contact.html" class="default-btn"><span>order now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Menu Area Strat -->
        <section class="menu-area pb-55 pt-123">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-content text-center">
                            <div class="section-title">
                                <h2>Choose your menu</h2>
                                <div class="section-tab">
                                    <div class="section-tab-menu text-center">
                                        <ul role="tablist">
                                            <li role="presentation" class="active"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">package</a></li>
                                            <li role="presentation"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">banquet</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="tab-content row">
                                        <div id="new" role="tabpanel" class="active section-tab-item"><div class="menu-owl">
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 1</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Plain Rice<span>$10</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 2</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Morog Polaw<span>$30</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$73</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 3</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Sea Food Rice<span>$50</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$93</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 1</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Plain Rice<span>$10</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 2</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Morog Polaw<span>$30</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$73</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 3</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Sea Food Rice<span>$50</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$93</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 1</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Plain Rice<span>$10</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 2</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Morog Polaw<span>$30</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$73</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>package # 3</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Sea Food Rice<span>$50</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$93</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="featured" role="tabpanel" class="section-tab-item">
                                            <div class="menu-owl">
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 1</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Plain Rice<span>$10</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 2</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Morog Polaw<span>$30</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$73</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 3</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Sea Food Rice<span>$50</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$93</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 1</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Plain Rice<span>$10</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 2</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Morog Polaw<span>$30</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$73</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 3</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Sea Food Rice<span>$50</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$93</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 1</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Plain Rice<span>$10</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$53</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 2</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Morog Polaw<span>$30</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$73</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="single-table text-center">
                                                        <div class="table-head">
                                                            <h3>Banquet # 3</h3>
                                                        </div>
                                                        <div class="table-body">
                                                            <ul>
                                                                <li>Sea Food Rice<span>$50</span></li> 
                                                                <li>Vegetable<span>$05</span></li> 
                                                                <li>Chicken Suslick<span>$08</span></li> 
                                                                <li>Chicken Roast<span>$08</span></li> 
                                                                <li>Mutton Rejala<span>$10</span></li> 
                                                                <li>Shahi Jorda<span>$06</span></li> 
                                                                <li>Soft Drinks <span>$04</span></li> 
                                                                <li>Pan<span>$02</span></li> 
                                                            </ul>
                                                            <h3>per person <span>$93</span></h3>
                                                            <a href="contact.html" class="default-btn"><span>order now</span></a>
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
                </div>
            </div>
        </section>
        <!-- Menu Area End -->

        <!-- Package Area Start -->
        <section class="package-area bg-pink">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-xs-12">
                        <div class="package-content three pt-155">
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
        <!-- Footer Area Strat -->
        <section class="footer-area">
            <div class="subscribe-area pt-130 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                            <!-- <div class="subscribe-content text-center">
                                <h2>Subscribe our Newsletter for Latest Offer</h2>
                                <p>To Get Latest Update tempor dolor sit amet, conse ctetur adipiscing elit </p>
                            </div> -->
                             <!-- <div class="subscribe-form">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
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
        </section>
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
        <script src="{{asset('assets/fe/js/main.js')}}"></script>
 dy>
</html>
