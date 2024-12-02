@extends('weblayouts.app')

@section('content_box')

        <!-- Preloader Area -->

        <!-- End Menubar Area -->

        <!-- Start Banner area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="single-banner-content">
                            <span data-cue="slideInUp" data-duration="800">Welcome To Oer Restaurant</span>
                            <h1 data-cue="slideInUp" data-duration="1800">Our Restaurant Offers Delicious & Seafood</h1>
                            <p data-cue="slideInUp" data-duration="2000">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled item  demoralized  by the charms of pleasure of the moment with a righteous hand, we denounce with righteous indignation.</p>
                            <a href="about.html" class="default-btn" data-cue="slideInUp" data-duration="2500">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-cue="zoomIn" data-duration="2000">
                        <div class="single-banner-image">
                            <img src="assets/images/banner/banner-img-2.webp" alt="images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape-1">
                <img src="assets/images/banner/banner-shape-1.webp" alt="images">
            </div>
            <div class="banner-shape-2">
                <img src="assets/images/banner/banner-shape-2.webp" alt="images">
            </div>
            <div class="banner-shape-3">
                <img src="assets/images/banner/banner-shape-3.webp" alt="images">
            </div>
            <div class="banner-shape-4">
                <img src="assets/images/banner/banner-shape-4.webp" alt="images">
            </div>
            <div class="banner-shape-5">
                <img src="assets/images/banner/banner-shape-5.webp" alt="images">
            </div>
        </div>
        <!-- End Banner area -->

        <!-- Start From Our Menu Area -->
        <div class="from-our-menu-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="from-our-menu-area">
                <div class="container">
                    <div class="section-title">
                        <span class="top-title">From Our Menu</span>
                        <h2>Try Our Special Offers</h2>
                    </div>
                    <div class="menu-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Diner</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Lunch</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Brunch</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="dessert-tab" data-bs-toggle="tab" data-bs-target="#dessert-tab-pane" type="button" role="tab" aria-controls="dessert-tab-pane" aria-selected="false">Dessert</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="wine-tab" data-bs-toggle="tab" data-bs-target="#wine-tab-pane" type="button" role="tab" aria-controls="wine-tab-pane" aria-selected="false">Wine</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="menu-tabs-content">
                                    <div class="from-menu-slider owl-carousel owl-theme">
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-1.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                                <p>$231.00 - <del>$364.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-2.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                                <p>$195.00 - <del>$254.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-3.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                                <p>$95.00 - <del>$124.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-4.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                                <p>$150.00 - <del>$204.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-1.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                                <p>$231.00 - <del>$364.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-2.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                                <p>$195.00 - <del>$254.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-3.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                                <p>$95.00 - <del>$124.00</del></p>
                                            </div>
                                        </div>
                                        <div class="single-menu-card">
                                            <a href="menu-details.html">
                                                <img src="assets/images/menu/menu-4.webp" alt="images">
                                            </a>
                                            <div class="add-to-card">
                                                <a href="cart.html" class="default-btn">Add To Cart</a>
                                            </div>
                                            <div class="menu-text">
                                                <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                                <p>$150.00 - <del>$204.00</del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="from-menu-slider owl-carousel owl-theme">
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                <div class="from-menu-slider owl-carousel owl-theme">
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dessert-tab-pane" role="tabpanel" aria-labelledby="dessert-tab" tabindex="0">
                                <div class="from-menu-slider owl-carousel owl-theme">
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wine-tab-pane" role="tabpanel" aria-labelledby="wine-tab" tabindex="0">
                                <div class="from-menu-slider owl-carousel owl-theme">
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-1.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Chicken Soup</h3></a>
                                            <p>$231.00 - <del>$364.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-2.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Oatmeal Chicken </h3></a>
                                            <p>$195.00 - <del>$254.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-3.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Pizza Pane</h3></a>
                                            <p>$95.00 - <del>$124.00</del></p>
                                        </div>
                                    </div>
                                    <div class="single-menu-card">
                                        <a href="menu-details.html">
                                            <img src="assets/images/menu/menu-4.webp" alt="images">
                                        </a>
                                        <div class="add-to-card">
                                            <a href="cart.html" class="default-btn">Add To Cart</a>
                                        </div>
                                        <div class="menu-text">
                                            <a href="menu-details.html"><h3>Vagetable Pasta</h3></a>
                                            <p>$150.00 - <del>$204.00</del></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-view-btn">
                            <a href="menu-details.html" class="default-btn">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End From Our Menu Area -->


        <!-- Start Visit Us Today Area -->
        <div class="visit-us-today-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="visit-images">
                            <div class="visit-main-img" data-cue="bounceInLeft" data-duration="2000">
                                <img src="assets/images/reserve-today/reserve-img-1.webp" alt="images">
                            </div>
                            <div class="visit-shape-1">
                                <img src="assets/images/reserve-today/reserve-shape-1.webp" alt="images">
                            </div>
                            <div class="visit-shape-2">
                                <img src="assets/images/reserve-today/reserve-shape-3.webp" alt="images">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-cue="bounceInRight" data-duration="1500">
                        <div class="reserve-from">
                            <div class="section-title left-title">
                                <span class="top-title">Visit Us Today</span>
                                <h2>Make A Reserve</h2>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Persons</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                                <span class="input-group-addon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
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
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <button type="submit" class="default-btn">Book A Table</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visit-shape-3">
                <img src="assets/images/reserve-today/reserve-shape-2.webp" alt="images">
            </div>
            <div class="visit-shape-4">
                <img src="assets/images/reserve-today/reserve-shape-4.webp" alt="images">
            </div>
            <div class="visit-shape-5">
                <img src="assets/images/reserve-today/reserve-shape-5.webp" alt="images">
            </div>
        </div>




        <!-- End Visit Us Today Area -->

@endsection


