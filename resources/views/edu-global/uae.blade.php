@extends('weblayouts.app')

@section('content_box')

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">UAE</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <!-- Course, Country & University selection-->
    <section id="features" class="features section">
        <div class="container">
            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>  {!! $CMS['uae_header1'] !!}</h3>
                    <p>
                    {!! $CMS['uae_content1'] !!}


                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <input type="submit" class="btn btn-primary" value="Enquire now"
                               style="background-color: orange">
                    </div>
                </div>

                <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                     data-aos-delay="100">
                    <div class="image-stack">
                        <img src="{{ asset('/public/images/uploads/cms/' . $CMS['uae1']) }}" alt="" class="stack-front">
                        <img src="{{ asset('/public/images/uploads/cms/' . $CMS['uae2']) }}" alt="" class="stack-back">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
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
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span> Khalifa University </span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>United Arab Emirates University (UAEU) </span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span> American University of Sharjah (AUS)</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>University of Sharjah </span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>Zayed University</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Have a Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>{{$siteSetting['head_contact']}}</span>
                        </p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                            >{{$siteSetting['head_email']}}</a></p>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        {!! $CMS['uae_content2'] !!}

                    </p>
                </div>

            </div>


        </div>

        </div>
    </section>

@endsection
