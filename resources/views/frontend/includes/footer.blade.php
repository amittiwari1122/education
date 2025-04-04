    <!-- Footer Start -->
    <?php
    $mobile = '';
    $email = '';
    $facebook = '';
    $twitter = '';
    $linkedin = '';
    $instagram = '';
    $youtube = '';
    $logo = '';
    $footerDescription = '';
    ?>
    @foreach (App\Models\MainDetail::select('name','value','url')->get() as $item)
    <?php
    if ($item->name == 'call_us') {
        $mobile = $item->value;
    }
    if ($item->name == 'email_us') {
        $email = $item->value;
    }
    if ($item->name == 'facebook_link') {
        $facebook = $item->url;
    }
    if ($item->name == 'twitter_link') {
        $twitter = $item->url;
    }
    if ($item->name == 'linkedin_link') {
        $linkedin = $item->url;
    }
    if ($item->name == 'instagram_link') {
        $instagram = $item->url;
    }
    if ($item->name == 'youtube_link') {
        $youtube = $item->url;
    }
    if ($item->name == 'logo') {
        $logo = $item->value;
    }
    if ($item->name == 'our_location') {
        $location = $item->value;
    }
    ?>
    @endforeach

    @foreach (App\Models\HomePage::select('name','title','description','image')->get() as $homeItem)
    <?php

if ($homeItem->name == 'footer_message') {
    $footerDescription = $homeItem->description;
}
    ?>
    @endforeach

    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i
                                class="fa fa-book-reader mr-3"></i><?php echo $logo; ?>
                        </h1>
                    </a>
                    <p class="m-0"><?php echo $footerDescription; ?>
                    </p>
                </div>
                <div class="col-md-6 mb-5">
                    <!-- <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;"
                                placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i
                            class="fa fa-map-marker-alt mr-2"></i><?php echo $location; ?>
                    </p>
                    <p><i
                            class="fa fa-phone-alt mr-2"></i><?php echo $mobile; ?>
                    </p>
                    <p><i
                            class="fa fa-envelope mr-2"></i><?php echo $email; ?>
                    </p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4"
                            href="<?php echo $twitter; ?>"><i
                                class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4"
                            href="<?php echo $facebook; ?>"><i
                                class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4"
                            href="<?php echo $linkedin; ?>"><i
                                class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white"
                            href="<?php echo $instagram; ?>"><i
                                class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Courses</h3>
                    <div class="d-flex flex-column justify-content-start">
                        @foreach (App\Models\Course::where('status', '1')->get() as $courseItem)
                        <a class="text-white-50 mb-2" href="/courseDetails/{{ $courseItem->id }}"><i
                                class="fa fa-angle-right mr-2"></i>{{ $courseItem->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="/privacyPolicy"><i
                                class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="/termCondition"><i class="fa fa-angle-right mr-2"></i>Terms
                            &
                            Condition</a>
                        <a class="text-white-50 mb-2" href="/faq"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50" href="/contact"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white"
                            href="/"><?php echo $logo; ?></a>. All
                        Rights
                        Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <!-- <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>