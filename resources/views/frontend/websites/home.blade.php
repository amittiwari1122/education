@extends('frontend.layouts.website')

@section(section: 'content')

@include('../frontend/includes.header')

<?php
    $mobile = '';
$email = '';
$facebook = '';
$twitter = '';
$linkedin = '';
$instagram = '';
$youtube = '';
$logo = '';
$testimonialTitle = '';
$testimonialDescription = '';
$testimonialImage = '';
$aboutTitle = '';
$aboutDescription = '';
$aboutImage = '';
$whyTitle = '';
$whyDescription = '';
$whyImage = '';
$instTitle = '';
$instDescription = '';
$instImage = '';
$courseTitle = '';
$courseDescription = '';
$courseImage = '';
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
if ($homeItem->name == 'about') {
    $aboutTitle = $homeItem->title;
    $aboutDescription = $homeItem->description;
    $aboutImage = $homeItem->image;
}
if ($homeItem->name == 'why_choose_us') {
    $whyTitle = $homeItem->title;
    $whyDescription = $homeItem->description;
    $whyImage = $homeItem->image;
}
if ($homeItem->name == 'our_courses') {
    $courseTitle = $homeItem->title;
    $courseDescription = $homeItem->description;
    $courseImage = $homeItem->image;
}
if ($homeItem->name == 'instructors') {
    $instTitle = $homeItem->title;
    $instDescription = $homeItem->description;
    $instImage = $homeItem->image;
}
if ($homeItem->name == 'testimonial') {
    $testimonialTitle = $homeItem->title;
    $testimonialDescription = $homeItem->description;
    $testimonialImage = $homeItem->image;
}
?>
@endforeach

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100"
                        src="<?php echo $aboutImage; ?>"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4"><?php echo $aboutTitle; ?>
                    </h1>
                </div>
                <p><?php echo $aboutDescription; ?></p>
                <div class="row pt-3 mx-0">
                    <div class="col-3 px-0">
                        <div class="bg-success text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">123</h1>
                            <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-primary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">1234</h1>
                            <h6 class="text-uppercase text-white">Online<span class="d-block">Courses</span></h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-secondary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">123</h1>
                            <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-warning text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">1234</h1>
                            <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid bg-image" style="margin: 90px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?
                    </h6>
                    <h1 class="display-4"><?php echo $whyTitle; ?>
                    </h1>
                </div>
                <p class="mb-4 pb-2"><?php echo $whyDescription; ?>
                </p>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-primary mr-4">
                        <i class="fa fa-2x fa-graduation-cap text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Skilled Instructors</h4>
                        <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no
                            nonumy et eos dolor magna ipsum.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-secondary mr-4">
                        <i class="fa fa-2x fa-certificate text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>International Certificate</h4>
                        <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no
                            nonumy et eos dolor magna ipsum.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="btn-icon bg-warning mr-4">
                        <i class="fa fa-2x fa-book-reader text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Online Classes</h4>
                        <p class="m-0">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita
                            magna kasd no nonumy et eos dolor magna ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100"
                        src="<?php echo $whyImage; ?>"
                        style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->


<!-- Courses Start -->
<div class="container-fluid px-0 py-5">
    <div class="row mx-0 justify-content-center pt-5">
        <div class="col-lg-6">
            <div class="section-title text-center position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6>
                <h1 class="display-4"><?php echo $courseTitle; ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="owl-carousel courses-carousel">
        <div class="courses-item position-relative">
            <img class="img-fluid" src="img/courses-1.jpg" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="detail.html">Course Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="img/courses-2.jpg" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="detail.html">Course Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="img/courses-3.jpg" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="detail.html">Course Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="img/courses-4.jpg" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="detail.html">Course Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="img/courses-5.jpg" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="detail.html">Course Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="img/courses-6.jpg" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="detail.html">Course Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center bg-image mx-0 mb-5">
        <div class="col-lg-6 py-5">
            <!-- <div class="bg-white p-5 my-5">
                <h1 class="text-center mb-4">30% Off For New Students</h1>
                <form>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                    style="padding: 30px 20px;">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                    style="padding: 30px 20px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="custom-select bg-light border-0 px-3" style="height: 60px;">
                                    <option selected>Select A courses</option>
                                    <option value="1">courses 1</option>
                                    <option value="2">courses 1</option>
                                    <option value="3">courses 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">Sign Up
                                Now</button>
                        </div>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
</div>
<!-- Courses End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
            <h1 class="display-4"><?php echo $instTitle; ?></h1>
        </div>
        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            @foreach (App\Models\Instructor::where('show_home', '1')->get() as $instructorItem)
            <div class="team-item">
                <img class="img-fluid w-100"
                    src="<?php echo $instructorItem->image; ?>"
                    alt="">
                <div class="bg-light text-center p-4">
                    <h5 class="mb-3">
                        <?php echo $instructorItem->name; ?>
                    </h5>
                    <p class="mb-2">
                        <?php echo $instructorItem->subject; ?>
                    </p>
                    <div class="d-flex justify-content-center">
                        @if($instructorItem->twitter_link)
                        <a class="mx-1 p-1"
                            href="<?php echo $instructorItem->twitter_link; ?>"><i
                                class="fab fa-twitter"></i></a>
                        @endif
                        @if($instructorItem->facebook_link)
                        <a class="mx-1 p-1"
                            href="<?php echo $instructorItem->facebook_link; ?>"><i
                                class="fab fa-facebook-f"></i></a>
                        @endif
                        @if($instructorItem->linkedin_link)
                        <a class="mx-1 p-1"
                            href="<?php echo $instructorItem->linkedin_link; ?>"><i
                                class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if($instructorItem->instagram_link)
                        <a class="mx-1 p-1"
                            href="<?php echo $instructorItem->instagram_link; ?>"><i
                                class="fab fa-instagram"></i></a>
                        @endif
                        @if($instructorItem->youtube_link)
                        <a class="mx-1 p-1"
                            href="<?php echo $instructorItem->youtube_link; ?>"><i
                                class="fab fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-image py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                    <h1 class="display-4">
                        <?php echo $testimonialTitle; ?>
                    </h1>
                </div>
                <p class="m-0"><?php echo $testimonialDescription; ?>
                </p>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel">
                    @foreach (App\Models\Testimonial::where('show_home', '1')->get() as $testimonalItem)
                    <div class="bg-white p-5">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <p><?php echo $testimonalItem->message; ?>
                        </p>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <img class="img-fluid mr-4"
                                src="<?php echo $testimonalItem->image; ?>"
                                alt="">
                            <div>
                                <h5><?php echo $testimonalItem->name; ?>
                                </h5>
                                <span><?php echo $testimonalItem->title; ?></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Start -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Our Location</h4>
                            <p class="m-0"><?php echo $location; ?>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-phone-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Call Us</h4>
                            <p class="m-0"><?php echo $mobile; ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-envelope text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Email Us</h4>
                            <p class="m-0"><?php echo $email; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                    <h1 class="display-4">Send Us A Message</h1>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Your Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5"
                                placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->