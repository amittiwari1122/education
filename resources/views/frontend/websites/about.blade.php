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
                <!-- <div class="row pt-3 mx-0">
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
                </div> -->
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
                        <h4>Expert Faculty</h4>
                        <p>Our team of experienced educators and mentors is committed to providing quality teaching with
                            personalized attention to every student.</p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                    <div class="btn-icon bg-secondary mr-4">
                        <i class="fa fa-2x fa-certificate text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Comprehensive Curriculum</h4>
                        <p>We offer in-depth courses covering all competitive exams, from foundational to advanced
                            levels, ensuring that students are thoroughly prepared.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="btn-icon bg-warning mr-4">
                        <i class="fa fa-2x fa-book-reader text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Tailored Programs</h4>
                        <p class="m-0">Every student learns differently. That’s why we offer flexible learning plans
                            that are designed to cater to individual needs, ensuring personalized growth and
                            preparation.</p>
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