<!-- Topbar Start -->
<?php
 $mobile = '';
$email = '';
$facebook = '';
$twitter = '';
$linkedin = '';
$instagram = '';
$youtube = '';
$logo = '';
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
?>
@endforeach

<div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i
                        class="fa fa-phone-alt mr-2"></i><?php echo $mobile; ?></small>
                <small class="px-3">|</small>
                <small><i
                        class="fa fa-envelope mr-2"></i><?php echo $email; ?></small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2"
                    href="<?php echo $facebook; ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2"
                    href="<?php echo $twitter; ?>">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-2"
                    href="<?php echo $linkedin; ?>">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2"
                    href="<?php echo $instagram; ?>">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2"
                    href="<?php echo $youtube; ?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand ml-lg-3">
            <h2 class="m-0 text-uppercase text-primary"><i
                    class="fa fa-book-reader mr-3"></i><?php echo $logo; ?>
            </h2>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <?php $link_array = explode('/', $_SERVER['PHP_SELF']);
$page = end($link_array); ?>
                <a href="/"
                    class="nav-item nav-link <?php echo($page == 'index.php' ? ' active' : ''); ?>">Home</a>
                <a href="/about"
                    class="nav-item nav-link <?php echo($page == 'about' ? ' active' : ''); ?>">About</a>
                <a href="/course"
                    class="nav-item nav-link <?php echo($page == 'course' ? ' active' : ''); ?>">Courses</a>
                <a href="/instructor"
                    class="nav-item nav-link <?php echo($page == 'instructor' ? ' active' : ''); ?>">Instructors</a>
                <a href="/testimonial"
                    class="nav-item nav-link <?php echo($page == 'testimonial' ? ' active' : ''); ?>">Testimonial</a>
                <!-- <a href="/feature"
                    class="nav-item nav-link <?php //echo($page == 'feature' ? ' active' : '');?>">Our
                Features</a> -->
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="detail.html" class="dropdown-item">Course Detail</a>
                        <a href="feature.html" class="dropdown-item">Our Features</a>
                        <a href="team.html" class="dropdown-item">Instructors</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div> -->
                <a href="/contact"
                    class="nav-item nav-link <?php echo($page == 'contact' ? ' active' : ''); ?>">Contact</a>
            </div>
            <!-- <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join Us</a> -->
        </div>
    </nav>
</div>
<!-- Navbar End -->


<!-- Header Start -->
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center my-5 py-5">
        <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
        <h1 class="text-white display-1 mb-5">Education Courses</h1>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <!-- <div class="input-group-prepend">
                    <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Courses 1</a>
                        <a class="dropdown-item" href="#">Courses 2</a>
                        <a class="dropdown-item" href="#">Courses 3</a>
                    </div>
                </div>
                <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Header End -->