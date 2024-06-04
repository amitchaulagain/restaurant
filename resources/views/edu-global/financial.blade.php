@extends('weblayouts.app')

@section('content_box')

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Taxation Sevices</li>
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
                    <h3>  {!! $CMS['financial_header1'] !!}</h3>
                    <p>
                    {!! $CMS['financial_content1'] !!}


                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <input type="submit" class="btn btn-primary" value="Enquire now"
                               style="background-color: orange">
                    </div>
                </div>

                <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                     data-aos-delay="100">
                    <div class="image-stack">
                        <img src="{{ asset('/public/images/uploads/cms/' . $CMS['financial1']) }}" alt="" class="stack-front">
                        <img src="{{ asset('/public/images/uploads/cms/' . $CMS['financial2']) }}" alt="" class="stack-back">
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
                        <h4> Taxation Services </h4>
                        <div class="services-list">
                            <a href="http://www.munaltax.com/lodge-in-person" class="active"><i
                                    class="bi bi-arrow-right-circle"></i><span>Tax related services for shares and crypto currency</span></a>
                            <a href="http://www.munaltax.com/online"><i class="bi bi-arrow-right-circle"></i><span>Tax Services for Property Investors</span></a>
                            <a href="http://www.munaltax.com/tax-review"><i class="bi bi-arrow-right-circle"></i><span>Tax Review</span></a>
                            <a href="http://www.munaltax.com/small-business"><i
                                    class="bi bi-arrow-right-circle"></i><span>Tax Support for Uber and Sole Traders</span></a>
                            <a href="http://www.munaltax.com/bas"><i class="bi bi-arrow-right-circle"></i><span>Payroll & BAS</span></a>
                            <a href="http://www.munaltax.com/bookkeeping"><i class="bi bi-arrow-right-circle"></i><span>Bookkeeping</span></a>
                        </div>
                    </div><!-- End Services List -->


                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        {!! $CMS['financial_content2'] !!}

                    </p>
                </div>

            </div>


        </div>

        </div>
    </section>

@endsection
