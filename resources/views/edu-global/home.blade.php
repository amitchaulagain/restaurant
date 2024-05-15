<!DOCTYPE html>
<html lang="en">
@extends('weblayouts.app')
<style>
    .modern {
        background-color: #f0f0f0; /* Adjust background color as needed */
        border: 2px solid #f0f0f0; /* Adjust border properties as needed */
        border-bottom-left-radius: 500%; /* Adjust the radius for the left arc */
        border-bottom-right-radius: 5%; /* Adjust the radius for the right arc */
    }

    .my-image {
        width:100% ;
        height:35% ;
        margin-top: 20%;
        max-height: 420px;
    }
</style>

@section('content_box')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img class="modern" src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">We are bringing overseas education within everyone’s
                        reach</h2>
                    <br>
                    <p data-aos="fade-up" data-aos-delay="200">Our Tech-enabled solutions help international students
                        and recruitment partners choose the best global universities</p>
                    <br>
                    <br>
                </div>

                <div class="col-lg-5">
                    <input type="submit" class="btn btn-primary" value="Enquire now" style="background-color: orange">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>EduPath</h3>
                    <h3 style="color: #112e48; margin-left: -41px;" ;>Global</h3>

                    <p>We are the fastest growing EdTech brand operating across geographies, facilitating international
                        student recruitments by connecting students, recruitment entrepreneurs and global universities
                        through our high-tech online platform – coursefinder.a
                    </p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Eius provident</h3>
                                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                    voluptatem</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-clipboard-pulse"></i>
                                <h3>Rerum aperiam</h3>
                                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates
                                    quia</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-command"></i>
                                <h3>Veniam omnis</h3>
                                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                    corrupti</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Delares sapiente</h3>
                                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis
                                    quideme lorenda</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section><!-- /About Section -->


    <!-- Services Section -->
    {{--  <section id="services" class="services section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
              <h2>Services</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div><!-- End Section Title -->

          <div class="container">

              <div class="row gy-4">

                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                      <div class="service-item d-flex">
                          <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                          <div>
                              <h4 class="title"><a href="usa.blade.php" class="stretched-link">Lorem Ipsum</a>
                              </h4>
                              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                  excepturi sint occaecati cupiditate non provident</p>
                          </div>
                      </div>
                  </div>
                  <!-- End Service Item -->

                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                      <div class="service-item d-flex">
                          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                          <div>
                              <h4 class="title"><a href="usa.blade.php" class="stretched-link">Dolor Sitema</a>
                              </h4>
                              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                  aliquip ex ea commodo consequat tarad limino ata</p>
                          </div>
                      </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                      <div class="service-item d-flex">
                          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                          <div>
                              <h4 class="title"><a href="usa.blade.php" class="stretched-link">Sed ut
                                      perspiciatis</a></h4>
                              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                  dolore eu fugiat nulla pariatur</p>
                          </div>
                      </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                      <div class="service-item d-flex">
                          <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                          <div>
                              <h4 class="title"><a href="usa.blade.php" class="stretched-link">Magni Dolores</a>
                              </h4>
                              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                  officia deserunt mollit anim id est laborum</p>
                          </div>
                      </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                      <div class="service-item d-flex">
                          <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                          <div>
                              <h4 class="title"><a href="usa.blade.php" class="stretched-link">Nemo Enim</a></h4>
                              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                  blanditiis praesentium voluptatum deleniti atque</p>
                          </div>
                      </div>
                  </div><!-- End Service Item -->

                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                      <div class="service-item d-flex">
                          <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                          <div>
                              <h4 class="title"><a href="usa.blade.php" class="stretched-link">Eiusmod Tempor</a>
                              </h4>
                              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                  tempore, cum soluta nobis est eligendi</p>
                          </div>
                      </div>
                  </div><!-- End Service Item -->

              </div>

          </div>

      </section><!-- /Services Section -->--}}

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>What we offer ?</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <!-- Counselling -->
            <div class="row gy-4 align-items-center features-item">
                <div id="counselling" class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>{!! $CMS['counselling_header1'] !!}
                    </h3>
                    <p>
                        {!! $CMS['counselling_content1'] !!}
                    </p>
                    <div class="col-lg-5">
                        <input type="submit" class="btn btn-primary" value="Enquire now"
                               style="background-color: orange">
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                     data-aos-delay="100">
                    <div class="image-stack">
                        <img src="assets/img/counselling.svg" alt="" class="stack-front">
                        <img src="assets/img/counselling2.svg" alt="" class="stack-back">
                    </div>
                </div>
            </div>

            <!-- Test Preparation -->
            <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                <div class="col-lg-6 " data-aos="zoom-out">
                    <img src="assets/img/processing1.jpeg" class="my-image" >
                    <img src="assets/img/processing2.jpeg" class="my-image">
                </div>
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>{!! $CMS['preparation_header1'] !!}

                    </h3>
                    <p>
                        {!! $CMS['preparation_content1'] !!}

                    </p>
                    <div class="col-lg-5">
                        <input type="submit" class="btn btn-primary" value="Enquire now"
                               style="background-color: orange">
                    </div>
                </div>
            </div>

            <!-- Course, Country & University selection-->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>{!! $CMS['selection_header1'] !!}

                    </h3>
                    <p>
                        {!! $CMS['selection_content1'] !!}
                    </p>
                    <div class="col-lg-5">
                        <input type="submit" class="btn btn-primary" value="Enquire now"
                               style="background-color: orange">
                    </div>

                </div>

                <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out"
                     data-aos-delay="100">
                    <div class="image-stack">
                        <img src="assets/img/counselling.svg" alt="" class="stack-front">
                        <img src="assets/img/counselling2.svg" alt="" class="stack-back">
                    </div>
                </div>
            </div>
            <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                <div class="col-lg-6 " data-aos="zoom-out">
                    <img src="assets/img/processing1.jpeg" class="my-image" >
                    <img src="assets/img/processing2.jpeg" class="my-image">
                    <img src="assets/img/processing3.jpeg" class="my-image">

                </div>
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>{!! $CMS['processing_header1'] !!}


                    </h3>
                    <p>
                        {!! $CMS['processing_content1'] !!}


                    </p>
                    <div class="col-lg-5">
                        <input type="submit" class="btn btn-primary" value="Enquire now"
                               style="background-color: orange">
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Features Section -->



    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="content px-xl-5">
                        <h3><span style="color: orange">Frequently Asked </span><strong style="color: darkblue">Questions</strong>
                        </h3>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3><span class="num">1.</span>
                                <span>Can you work while studying in the United States?</span>
                            </h3>
                            <div class="faq-content">
                                <p>As an international student you may work on campus up to 20 hours/week in the first
                                    year of study in US and can apply to work off-campus in the subsequent years only
                                    with due permission of the International Student Office under CPT or OPT.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">2.</span> <span>What are the English Language Proficiency requirements?</span>
                            </h3>
                            <div class="faq-content">
                                <p>U.S. universities require an English language proficiency test before admission and
                                    the test requirements vary depending on the course you apply for. English Language
                                    Ability Tests. The most common tests of English language ability are the Test of
                                    English as a Foreign Language (TOEFL), the International English Language Testing
                                    System (IELTS), and the Pearson Test of English (PTE).

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">3.</span> <span>What are the other Standardized Tests for USA?</span>
                            </h3>
                            <div class="faq-content">
                                <p>Undergraduate Level Examinations SAT: A standardized test to evaluate the written,
                                    verbal and mathematical skills of the applicants. ACT: To test the student's ability
                                    in English, Math, Science, Reading and Writing sections. Graduate-Level Examinations
                                    GRE: A standardized test of verbal reasoning, quantitative reasoning, and analytical
                                    writing for graduate-level study. GMAT: A standardized test for MBA applicants and
                                    for business programs that measures basic verbal, mathematical, analytical writing
                                    and integrated reasoning skills. MCAT: A standardized examination that assesses
                                    problem solving, critical thinking, writing skills, and knowledge of science
                                    concepts and principles essential for the study of medicine. LSAT: A standardized
                                    test to measure the reading and verbal reasoning skills used by the law schools as
                                    an assessment factor for admission. DAT: A test to measure general academic ability,
                                    comprehension of scientific information, and perceptual ability, used for admission
                                    to Dental schools.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">4.</span> <span>What are the popular courses in the USA?
</span>
                            </h3>
                            <div class="faq-content">
                                <p>STEM (Sciences, Technology, Engineering and Mathematics) subjects are mostly opted by
                                    international as well as domestic students in the USA. However, Psychology, Business
                                    Administration, Education, Economics and Political Science are certain other popular
                                    courses..</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">5.</span> <span>Are any scholarships available for international students in USA?</span>
                            </h3>
                            <div class="faq-content">
                                <p>Scholarships and grants are usually awarded to international students in USA on the
                                    basis of merit, need or any other exceptional excellence like proficiency in sports,
                                    cultural activities or a remarkable contribution in community service. The
                                    scholarships are highly competitive. Many American universities also offer grants
                                    for foreign students who wish to study at their institution but these vary
                                    substantially from university to university. The Standardized Test scores play a
                                    vital role in U.S. universities granting scholarships.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Faq Section -->


@endsection

