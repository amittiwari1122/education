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

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
            <h1 class="display-4">Meet Our Instructors</h1>
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