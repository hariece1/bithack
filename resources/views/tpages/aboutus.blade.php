
@extends('tpages.layouts.main')

@push('body')
	
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>"Empowering Innovators"</p>
                        <h1>About BIT Hack's</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Ends -->

    <!-- Featured Section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3">Why <span class="orange-text">BIT Hack</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Innovative Challenges</h3>
                                        <p>Engage with real-world problems and unleash your creativity to develop impactful solutions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Attractive Prizes</h3>
                                        <p>Compete for exciting prizes and recognition from industry leaders and academia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Collaborative Environment</h3>
                                        <p>Network with like-minded individuals, mentors, and professionals to enhance your skills.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Workshops & Sessions</h3>
                                        <p>Attend insightful workshops and sessions to gain valuable knowledge and insights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Optionally, you can add an image or video here -->
            </div>
        </div>
    </div>
    <!-- Featured Section Ends -->

    <!-- Event Details Section -->
    <div class="event-details-section mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>About <span class="orange-text">BIT Hack</span></h3>
                        <p>BIT Hack is an annual hackathon organized by Bannari Amman Institute of Technology, aiming to bring together talented minds to innovate and create solutions that address real-world challenges.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Add any additional content or images here -->
                <div class="col-lg-12">
                    <p>Join us for an exhilarating 24-hour event filled with coding, brainstorming, and networking opportunities. Whether you're a seasoned developer or a passionate beginner, BIT Hack provides the perfect platform to showcase your skills and collaborate with peers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Section Ends -->

    <!-- Team Section -->
    <div class="mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>Our <span class="orange-text">Team</span></h3>
                        <p>Meet the dedicated team behind BIT Hack, committed to making this event a success.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Team Member 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-1"></div>
                        <h4>John Smith <span>Event Coordinator</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-2"></div>
                        <h4>Jane Doe <span>Technical Lead</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-3"></div>
                        <h4>Robert Brown <span>Logistics Manager</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section Ends -->

    <!-- Copyright Ends -->
    
    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticker.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
@endpush