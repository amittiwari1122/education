@extends('frontend.layouts.website')

@section(section: 'content')

@include('../frontend/includes.header')

<?php
$testimonialTitle = '';
$testimonialDescription = '';
$testimonialImage = '';
?>

@foreach (App\Models\HomePage::select('name','title','description','image')->get() as $homeItem)
<?php

if ($homeItem->name == 'testimonial') {
    $testimonialTitle = $homeItem->title;
    $testimonialDescription = $homeItem->description;
    $testimonialImage = $homeItem->image;
}
?>
@endforeach

<!-- Testimonial Start -->
<div class="container-fluid py-5">
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