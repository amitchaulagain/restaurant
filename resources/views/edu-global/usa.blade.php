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


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="">USA</h1>
                        <p class="mb-0">The United States of America has been a global leader in the field of education
                            and boasts of a lion’s share of top ranked universities according to all major international
                            rankings. Few countries offer as many high ranked universities and noble laureate academia,
                            as USA does.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">USA</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4> Popular Courses </h4>
                        <div class="services-list">
                            <a href="#" class="active"><i
                                    class="bi bi-arrow-right-circle"></i><span>Applied Sciences</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Business & Management</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Computer Science & Information Technology</span></a>
                            <a href="#"><i
                                    class="bi bi-arrow-right-circle"></i><span>Engineering & Technology</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Public Health & Healthcare Administration</span></a>
                        </div>
                    </div><!-- End Services List -->


                    <div class="service-box">
                        <h4>Popular Universities</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span> University of Connecticut, Connecticut (Public Ivy)</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Drexel University, Philadelphia, Pennsylvania (College of Engineering, UG Gateways and IEP)</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span> University of California, Riverside, California (Graduate Business Programs & College of Engineering and UCR Extension)</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>University of South Florida, Tampa, Florida (Only UG)</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Johns Hopkins University, Baltimore, Maryland (School of Engineering – Only PG)</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span> UMass Amherst (Masters Programs & ECE MS 1+1 Program)</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Have a Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+1 5589 55488 55</span>
                        </p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:contact@example.com">contact@example.com</a></p>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                    <h3>Why study in USA ?</h3>
                    <p>
                        Study in one of the most prestigious higher education systems globally and access some high-end
                        technology and cutting-edge research for an immersive, engaging & collaborative study
                        experience. Choose from an extensive range of schools, numerous study disciplines and niche
                        qualifications that are difficult to find by in other parts of the world and experience a
                        uniquely flexible education system allowing you to apply to a variety of programs suiting your
                        academic & career goals. Graduate with a truly global outlook and real-world skills for the
                        future.
                    </p>

                    <h3>Quick facts </h3>

                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>USA hosts more than a million international students
</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Over 25% of world’s top 100 universities are in the USA</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Post-study stay back visas (OPT) up to 3 years for STEM programs</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Internships (CPT) up to 12 months while studying</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Merit Based & Need Based Scholarships</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Over 4500 accredited universities & institutions to choose from</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>12 of the best student cities in the world (QS Best Student Cities 2023 </span></li>

                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

    </section><!-- /Contact Section -->

@endsection



