<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/all.css') }}" />
        <title>Document</title>
    </head>
    <body>
            <!-- header -->
    <header>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg">
        <a href="index.html" class="navbar-brand">
          <img src="{{asset('img/logo.png')}}" alt="company logo" class="img-logo"/>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#myNavbar"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2 nav-active">
              <a href="index.html" class="nav-link">Home</a>
            </li>

            <li class="nav-item mx-2">
              <a href="products.html" class="nav-link">Products</a>
            </li>

            <li class="nav-item mx-2">
              <a href="singleproduct.html" class="nav-link">Single</a>
            </li>

            <li class="nav-item mx-2">
              <a href="store.html" class="nav-link">Store</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="banner d-none d-sm-block">
        <img src="{{asset('images/banner-bg.jpg')}}" alt="banner" class="img-banner">
        <p class="display-4 text-capitalize">best courses found online</p>
        </div>
      </div>
    </div>
     <hr class="line d-block d-sm-none">
    <div class="sub-nav">
      <ul class="mx-auto d-flex">
       
            <li class="sub-nav-wrapper mx-2">
              <a href="{{route('dmca')}}" class="sub-nav-title">DMCA - copyrights</a>
            </li>

            <li class="sub-nav-wrapper mx-2">
              <a href="{{route('privacy-policy')}}" class="sub-nav-title text-capitalize">privacy policy</a>
            </li>

            <li class="sub-nav-wrapper mx-2">
              <a href="{{route('term-of-use')}}" class="sub-nav-title text-capitalize">term of use</a>
            </li>
          </ul>
    </div>
</header>
<!-- end of header -->


<!-- Blog Area -->

    <section class="blog_area section-gap single-post-area">
        <div class="container box_1170">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        {{--<img class="img-fluid fixed" src="img/blog/news-blog.jpg" alt=""> --}} 
            <img src="{{asset('storage/4i7Ulrnn5ekVPF42189un38D3Gxw65Ujq1dXwA4c.jpeg')}}" alt="post-image" class="img-fluid fixed">

                        <h4>Cartridge Is Better Than Ever <br /> A Discount Toner</h4>
                        {{-- <div class="user_details">
                            <div class="float-left">
                                <a href="#">Lifestyle</a>
                                <a href="#">Gadget</a>
                            </div>
                            <div class="float-right">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Mark wiens</h5>
                                        <p>12 Dec, 2017 11:21 am</p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="img/blog/user-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why
                            you
                            should have to spend money on boot camp when you can get the MCSE study materials yourself
                            at
                            a fraction of the camp price. However, who has the willpower</p>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why
                            you
                            should have to spend money on boot camp when you can get the MCSE study materials yourself
                            at
                            a fraction of the camp price. However, who has the willpower to actually sit through a
                            self-imposed
                            MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.</p>
                        <blockquote class="blockquote">
                            <p class="mb-0">MCSE boot camps have its supporters and its detractors. Some people do not
                                understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials
                                yourself at a fraction of the camp price. However, who has the willpower to actually
                                sit
                                through a self-imposed MCSE training.</p>
                        </blockquote>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why
                            you
                            should have to spend money on boot camp when you can get the MCSE study materials yourself
                            at
                            a fraction of the camp price. However, who has the willpower</p>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why
                            you
                            should have to spend money on boot camp when you can get the MCSE study materials yourself
                            at
                            a fraction of the camp price. However, who has the willpower</p>
                        <div class="news_d_footer">
                            <a href="#" class="link mr-2" ><i class="fas fa-heart mr-1"></i>Lily and 4 people like this</a>
                            <a class="justify-content-center ml-auto mr-2" href="#"><i class="fas fa-comments mr-1"></i>06
                                Comments</a>
                            <div class="news_socail ml-auto d-flex justify-content-between">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="{{asset('img/blog/prev.jpg')}}" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><i class="fas fa-arrow-left"></i></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>A Discount Toner</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Cartridge Is Better</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid"  src="{{asset('img/blog/next.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img  src="{{asset('img/blog/c1.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img  src="{{asset('img/blog/c2.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img  src="{{asset('img/blog/c3.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img  src="{{asset('img/blog/c4.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('img/blog/c5.jpg')}}" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn submit_btn text-uppercase">Send Message</a>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 sidebar">
					<div class="single-widgeti protfolio-widget">
                        <img class="img-fluid"  src="{{asset('img/blog/user2.png')}}" alt="">
                        <div class="wrapper p-4">

                        <a href="#">
							<h4>Peter Anderson</h4>
						</a>
						<p class="p-text">
							Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend
							money on boot camp whenyou can get. Boot camps have itssuppor ters andits detractors.
						</p>
						<ul class="social-links d-flex justify-content-between">
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
                        <img src="{{asset('img/sign.png')}}" alt="">
                        
                        </div>
						
					</div>

					<div class="single-widget popular-posts-widget mb-2">
						<div class="jq-tab-wrapper p-4 mb-4" id="horizontalTab">
							<div class="jq-tab-menu">
								<div class="jq-tab-title active h4 text-white" data-tab="1">Popular</div>
								<div class="jq-tab-title h6 text-white" data-tab="2">Latest</div>
							</div>
							<div class="jq-tab-content-wrapper">
								<div class="jq-tab-content active" data-tab="1">
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories1.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories2.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories3.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories4.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
								</div>

								<div class="jq-tab-content active" data-tab="2">

									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories2.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories3.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories1.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid"  src="{{asset('img/posts/carousel/stories4.jpg')}}" alt="">
										</div>
										<div class="popular-details pl-3">
											<h6><a href="" class="text-white">2nd Gen Smoke Alarm <br>
													get up from sleep</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="single-widget category-widget p-4 mb-4">
						<h4 class="title text-white">Post Categories</h4>
						<ul>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p class="text-white"><img  src="{{asset('img/bullet.png')}}" alt="">International (56)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p class="text-white"><img  src="{{asset('img/bullet.png')}}" alt="">Tours and Travels (45)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p class="text-white"><img  src="{{asset('img/bullet.png')}}" alt="">Cooking Tips (23)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p class="text-white"><img  src="{{asset('img/bullet.png')}}" alt="">Life Style and Fashion (72)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p class="text-white"><img  src="{{asset('img/bullet.png')}}" alt="">Organic News (37)</p>
								</a>
							</li>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p class="text-white"><img  src="{{asset('img/bullet.png')}}" alt="">Games and Sports (19)</p>
								</a>
							</li>
						</ul>
					</div>

					<div class="single-widget tags-widget p-4">
						<h4 class="title text-white">Post Tags</h4>
						<ul>
							<li><a href="#" class="text-white">Lifestyle</a></li>
							<li><a href="#" class="text-white">Art</a></li>
							<li><a href="#" class="text-white">Adventure</a></li>
							<li><a href="#" class="text-white">Food</a></li>
							<li><a href="#" class="text-white">Techlology</a></li>
							<li><a href="#" class="text-white">Fashion</a></li>
							<li><a href="#" class="text-white">Architecture</a></li>
							<li><a href="#" class="text-white">Food</a></li>
							<li><a href="#" class="text-white">Technology</a></li>
						</ul>
					</div>

				</div>
            </div>
        </div>
    </section>
    <!-- end of Blog Area -->



	  <!-- jquery -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
