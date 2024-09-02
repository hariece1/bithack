@extends('tpages.layouts.main')

@push('body')
	<!-- hero area -->
	<div class="hero-area hero-bg" style="position: relative; overflow: hidden;">
        <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <source src="{{ asset('video/videoplayback.webm') }}" type="video/mp4">
        Your browser does not support the video tag.
        </video>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">"Build Innovatively"</p>
							<h1>BIT HACK's</h1>
							<div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Explore Events</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

        <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="list-box d-flex align-items-center">
            <div class="list-icon">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div class="content">
                <h3>Event Schedule</h3>
                <p>Stay updated with all sessions</p>
            </div>
        </div>
         </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="list-box d-flex align-items-center">
            <div class="list-icon">
                <i class="fas fa-user-friends"></i>
            </div>
            <div class="content">
                <h3>Networking</h3>
                <p>Connect with participants and mentors</p>
            </div>
        </div>
            </div>
        <div class="col-lg-4 col-md-6">
        <div class="list-box d-flex justify-content-start align-items-center">
            <div class="list-icon">
                <i class="fas fa-award"></i>
            </div>
            <div class="content">
                <h3>Prizes</h3>
                <p>Exciting rewards for top performers!</p>
            </div>
            </div>
        </div>
        </div>


		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="event-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">    
                        <h3><span class="orange-text">Featured</span> Statements</h3>
                        <p>Explore our top events with innovative problem statements.</p>
                    </div>
                </div>
            </div>

            <div id="eventCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-1.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Smart City Solutions</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Develop innovative solutions for smart city management, focusing on sustainability and efficiency.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-2.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Healthcare Automation</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Create an AI-powered solution to enhance healthcare delivery and automate routine tasks.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-3.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Education Technology</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Design an application that leverages AR/VR to revolutionize remote learning experiences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-4.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Fintech Innovation</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Build a secure and user-friendly platform for managing personal finances with real-time analytics.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-5.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Environmental Monitoring</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Develop a network of IoT sensors to monitor environmental factors and predict changes.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-6.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Supply Chain Optimization</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Create a blockchain-based system to enhance transparency and efficiency in supply chains.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="single-event-item">
                                    <div class="event-image">
                                        <a href="#"><img src="{{ asset('img/events/event-img-7.jpg') }}" alt=""></a>
                                    </div>
                                    <h3>Cybersecurity Challenges</h3>
                                    <p class="event-problem"><span>Problem Statement:</span> Design a robust cybersecurity solution to protect against emerging threats in the digital space.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
        </div>
    </div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="event-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <!-- <strong>Hackathon</strong> <br> starts in -->
                                </span>
                            </div>
                        </div>
                        <!-- Use the direct image URL here -->
                        <img src="https://edison365.com/wp-content/uploads/2022/03/How-do-hackathons-work.png" alt="Hackathon Event">
                    </div>
                </div>
                <!-- Content Column -->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">Hackathon</span> of the Year</h3>
                    <h4>Enhance Your Skills</h4>
                    <div class="text">Join us for an exciting hackathon designed to push your coding skills to the next level. Whether you're a seasoned developer or a budding tech enthusiast, this event will challenge you to innovate and solve real-world problems. Don't miss this chance to collaborate with like-minded individuals, learn from experts, and showcase your skills!</div>
                    <!-- Countdown Timer -->
                    <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="2024/10/01">
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span> Days</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span> Hours</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span> Mins</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span> Secs</div>
                            </div>
                        </div>
                    </div>
                    <a href="register.html" class="cart-btn mt-3"><i class="fas fa-sign-in-alt"></i> Register Now</a>
                </div>
            </div>
        </div>
    </section>
<style>
    .event-banner {
        background: #f7f7f7;
        border-radius: 8px;
        overflow: hidden;
    }
    .image-column .image {
        position: relative;
    }
    .price-box {
        position: absolute;
        top: 10px;
        left: 10px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    .price-box .inner-price {
        text-align: center;
    }
    .price-box .price {
        font-size: 24px;
        font-weight: bold;
    }
    .content-column .text {
        margin-top: 20px;
        font-size: 16px;
        color: #333;
    }
    .time-counter {
        margin-top: 30px;
    }
    .time-countdown .counter-column {
        display: inline-block;
        margin-right: 10px;
    }
    .time-countdown .inner {
        background: #000;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }
    .cart-btn {
        background-color: #ff6600;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }
    .cart-btn:hover {
        background-color: #cc5200;
    }
</style>

    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<!-- <div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://youtu.be/UFUP1S_IxeY?si=dOaL1go81UbsFd6W" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Since Year 1996</p>
                        <h2>Welcome to <span class="orange-text">Bannari Amman Institute of Technology</span></h2>
                        <p>Bannari Amman Institute of Technology (BIT) has been a pioneering force in higher education since 1996. Located in the serene environment of Satyamangalam, Tamil Nadu, our institution is dedicated to fostering innovation and academic excellence.</p>
                        <p>With a commitment to providing high-quality education and a holistic learning environment, BIT offers a range of undergraduate, postgraduate, and research programs. Our state-of-the-art facilities and experienced faculty members ensure that students are well-equipped to meet the challenges of the modern world.</p>
                        <a href="https://www.bitsathy.ac.in" class="boxed-btn mt-4">Learn More</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<!-- <section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section> -->
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="past-events pt-120 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Past</span> Events</h3>
                        <p>Take a look back at some of our previous events and their highlights.</p>
                    </div>
                </div>
            </div>

            <div id="pastEventsCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-1"></div></a>
                                    <div class="event-text-box">
                                        <h3><a href="event-details.html">Innovative Solutions Hackathon</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 15 July, 2023</span>
                                        </p>
                                        <p class="excerpt">An exciting hackathon focusing on innovative solutions for smart city management and sustainability.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-2"></div></a>
                                    <div class="event-text-box">
                                        <h3><a href="event-details.html">Healthcare Automation Challenge</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 22 September, 2023</span>
                                        </p>
                                        <p class="excerpt">A challenge aimed at enhancing healthcare delivery through AI-powered solutions.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-3"></div></a>
                                    <div class="event-text-box">
                                        <h3><a href="event-details.html">Educational Technology Symposium</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 10 November, 2023</span>
                                        </p>
                                        <p class="excerpt">A symposium dedicated to revolutionizing remote learning experiences through AR/VR technologies.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-4"></div></a>
                                    <div class="event-text-box">
                                        <h3><a href="event-details.html">Fintech Innovation Expo</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 5 December, 2023</span>
                                        </p>
                                        <p class="excerpt">An expo showcasing cutting-edge fintech solutions and platforms for personal finance management.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-5"></div></a>
                                    <div class="event-text-box">
                                        <h3><a href="event-details.html">Environmental Monitoring Conference</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 14 January, 2024</span>
                                        </p>
                                        <p class="excerpt">A conference focused on IoT solutions for environmental monitoring and prediction.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-6"></div></a>
                                    <div class="event-text-box">
                                        <h3><a href="event-details.html">Supply Chain Optimization Forum</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 25 February, 2024</span>
                                        </p>
                                        <p class="excerpt">A forum on blockchain-based systems to enhance transparency and efficiency in supply chains.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-past-event">
                                    <a href="event-details.html"><div class="event-bg event-bg-7"></div></a>
                                    <!-- <div class="event-text-box">
                                        <h3><a href="event-details.html">Cybersecurity Challenges Workshop</a></h3>
                                        <p class="event-meta">
                                            <span class="date"><i class="fas fa-calendar"></i> 10 March, 2024</span>
                                        </p>
                                        <p class="excerpt">A workshop designed to address emerging cybersecurity threats and solutions.</p>
                                        <a href="event-details.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#pastEventsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pastEventsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

<style>
    .past-events .carousel-item {
        /* display: flex; */
        justify-content: center;
    }
    .event-bg {
        background-size: cover;
        background-position: center;
        height: 200px; /* Adjust as needed */
    }
    .event-bg.event-bg-1 { background-image: url('path-to-event-image1.jpg'); }
    .event-bg.event-bg-2 { background-image: url('path-to-event-image2.jpg'); }
    .event-bg.event-bg-3 { background-image: url('path-to-event-image3.jpg'); }
    .event-bg.event-bg-4 { background-image: url('path-to-event-image4.jpg'); }
    .event-bg.event-bg-5 { background-image: url('path-to-event-image5.jpg'); }
    .event-bg.event-bg-6 { background-image: url('path-to-event-image6.jpg'); }
    .event-bg.event-bg-7 { background-image: url('path-to-event-image7.jpg'); }
    .event-text-box {
        padding: 15px;
        box-sizing: border-box;
    }
	.event-text-box a {
        color: black;
    }
    .event-text-box .event-meta .date {
        color: black;
    }
    .read-more-btn {
        color: black;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
    }
</style>

	<!-- end latest news -->
@endpush