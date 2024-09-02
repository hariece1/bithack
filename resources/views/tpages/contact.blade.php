
@extends('tpages.layouts.main')

@push('body')


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get in touch with us</p>
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have any questions?</h2>
                        <p>If you have any questions about BIT Hackathon 2024, feel free to contact us. We're here to help!</p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="hackathon-contact" onSubmit="return valid_datas(this);">
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                                <input type="text" placeholder="Subject" name="subject" id="subject">
                            </p>
                            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> Event Location</h4>
                            <p>Bannari Amman Institute of Technology, <br> Sathyamangalam, Tamil Nadu, India.</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Event Hours</h4>
                            <p>March 10-12, 2024 <br> 8:00 AM to 6:00 PM</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contact</h4>
                            <p>Phone: +91 98765 43210 <br> Email: hackathon@bit.edu.in</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.924888212713!2d77.24013987498962!3d11.504224391787477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f0a9f2b5e29%3A0x0!2sBannari%20Amman%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1606640348301!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
    </div>
    <!-- end google map section -->
    @endpush