@extends('weblayouts.app')

@section('content_box')

    {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" >
         <div class="overlay"></div>
         <div class="container">
             <div class="row no-gutters slider-text align-items-end">
                 <div class="col-md-9 ftco-animate pb-5">
                     <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
                     <h1 class="mb-0 bread">Contact Us</h1>
                 </div>
             </div>
         </div>
     </section>--}}


    <!-- Contact Section -->
    <section id="contact" class="contact section" style="margin-top: 120px">




        <!-- Start About Area -->
        <div class="about-area about-page pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-cue="slideInLeft" data-duration="800">
                        <div class="about-image">
                            <img src="assets/images/about/about-page-img-1.webp" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6" data-cue="slideInRight" data-duration="800">
                        <div class="single-about-content">
                            <div class="section-title left-title">
                                <span class="top-title">About Us</span>
                                <h2>Enjoy An Exceptional Journey Of Taste In Our Restaurant</h2>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are mantis
                                    beguiled aitem demora lized by the charms of pleasure of the moment.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="speciallst-card">
                                        <h3><img src="assets/images/about/about-img-3.webp" alt="images">Speciallst</h3>
                                        <p>bled it to make a type specimen boIt has survived not amnits.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="speciallst-card">
                                        <h3><img src="assets/images/about/about-img-4.webp" alt="images">Restaurant</h3>
                                        <p>bled it to make a type specimen boIt has survived not amnits.</p>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class='bx bx-right-arrow-circle'></i>Mauris mattis lectus eget ligula dapibus, ac maximus ipsum Services.</li>
                                <li><i class='bx bx-right-arrow-circle'></i>Aenean facilisis erat et metus semper molestie sem posuere tests.</li>
                            </ul>
                            <a href="booking-table.html" class="default-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shape-1">
                <img src="assets/images/about/about-page-shape-1.webp" alt="images">
            </div>
            <div class="about-shape-2">
                <img src="assets/images/about/about-page-shape-2.webp" alt="images">
            </div>
            <div class="about-shape-3">
                <img src="assets/images/about/about-page-shape-3.webp" alt="images">
            </div>
            <div class="about-shape-4">
                <img src="assets/images/about/about-page-shape-4.webp" alt="images">
            </div>
        </div>
        <!-- End About Area -->



        <!-- Start Visit Us Today Area -->
        <div class="visit-today-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="section-title">
                    <span class="top-title">Visit Us Today</span>
                    <h2>Make A Reserve</h2>
                </div>
                <form class="reserve-from reserve-from-two">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Persons</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                    <span class="input-group-addon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Time</option>
                                    <option value="1">08:00 AM – 05:00 PM</option>
                                    <option value="2">09:00 AM – 06:00 PM</option>
                                    <option value="3">10:00 AM – 05:00 PM</option>
                                    <option value="4">09:00 AM – 05:00 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-md-12">
                            <button type="submit" class="default-btn">Book A Table</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Visit Us Today Area -->


        <!-- End Find Our Location -->




@endsection


