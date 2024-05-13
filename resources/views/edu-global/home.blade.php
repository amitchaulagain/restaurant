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
</style>

@section('content_box')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img class="modern" src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">We are bringing overseas education within everyone’s reach</h2>
                    <br>
                    <p data-aos="fade-up" data-aos-delay="200">Our Tech-enabled solutions help international students and recruitment partners choose the best global universities</p>
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
                    <h3 >EduPath</h3>                      <h3 style="color: #112e48; margin-left: -41px;";>Global</h3>

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
                    <h3 >Counselling
                    </h3>
                    <p>
                        Our counselling sessions will immensely benefit you in making the best academic decision suiting
                        your career choices.
                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Career-oriented counselling.</span></li>
                            <li>
                                <i class="bi bi-check"></i><span> Emphasis on futuristic courses and careers.</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Interactive sessions with university delegates.</span>.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
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
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Test Preparation

                    </h3>
                    <p>
                        Effortlessly reach your highest potential test score with our certified, adept and dedicated
                        tutors who will efficiently prepare you for your desired tests.

                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Interactive classrooms & free demo sessions.</span></li>
                            <li>
                                <i class="bi bi-check"></i><span> Study material that’s simple yet highly effective</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Score oriented tutorials & mock tests.</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Course, Country & University selection-->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Course, Country & University selection

                    </h3>
                    <p>
                        We help you choose the ideal course, university & country that perfectly match your career,
                        academic and budget preferences.


                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Make precise academic and career decisions
.</span></li>
                            <li>
                                <i class="bi bi-check"></i><span> University comparison – rankings, courses & scholarships
</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Course options across 800+ universities in 33 countries
.</span>.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
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
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Application & Admission

                    </h3>
                    <p>
                        Choose the right intake, apply timely and smartly in courses and universities that are your
                        right fit and receive admits/offers in no time.


                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Flawless applications - assured admits
</span></li>
                            <li>
                                <i class="bi bi-check"></i><span>High quality SOPs, LORs and Resumes
.</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Real time application tracking & follow through with universities.</span>.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                    </div>
                </div>
            </div><!-- Scholarships-->
            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Scholarships
                    </h3>
                    <p>
                        Our global universities have plenty of scholarships on offer and we will help you identify and
                        apply for the ones you deserve the most.


                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Alerts on latest and high value scholarships.</span></li>
                            <li>
                                <i class="bi bi-check"></i><span> Guidance on ‘how’ to apply for scholarships.</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Assistance for scholarship essays.</span>.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
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
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Internships

                    </h3>
                    <p>
                        We know how important internships are to your profile and thus our course recommendations are
                        full of options with inbuilt internships.


                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Apply for programs offering guaranteed internships</span></li>
                            <li>
                                <i class="bi bi-check"></i><span>Guidance on paid/unpaid internships
                                </span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Know your placement periods and stipends</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Education Loan

                    </h3>
                    <p>
                        Availing an education loan to study in your dream university has never been easier!


                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Study Loans through 20+ leading Banks & NBFCs</span></li>
                            <li>
                                <i class="bi bi-check"></i><span>Financial structuring to suit your university</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Hassle free documentation.</span>.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
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
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="assets/img/features-light-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Visa Processing


                    </h3>
                    <p>
                        Our skilled visa experts will help you prepare and present your visa documents to Embassies and
                        High Commissions to ensure a successful visa outcomes in minimal time.


                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>mpeccable guidance on visa documentation</span></li>
                            <li>
                                <i class="bi bi-check"></i><span> Excellent visa success ratio across all countries</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Mock visa interviews.</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="row gy-4 align-items-center features-item">
                <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Allied Services
                    </h3>
                    <p>
                        Allied services play an important role in helping international students to have a successful
                        study abroad experience and we made it more easier by providing services like booking an
                        accommodation, Remittance process, Education Loan and Forex to make transactions in foreign
                        currencies.


                    </p>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h5>Offerings</h5>
                        <ul>
                            <li><i class="bi bi-check"></i>
                                <span>Use exchange rates to your advantage</span></li>
                            <li>
                                <i class="bi bi-check"></i><span> Minimum premium, maximum cover</span>
                            </li>
                            <li><i class="bi bi-check"></i>
                                <span>Pre-departure briefing</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
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


        </div>

    </section><!-- /Features Section -->



    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="content px-xl-5">
                        <h3><span style="color: orange">Frequently Asked </span><strong style="color: darkblue">Questions</strong></h3>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">
                        <div class="faq-item faq-active">
                            <h3><span class="num">1.</span> <span>Can you work while studying in the United States?</span>
                            </h3>
                            <div class="faq-content">
                                <p>As an international student you may work on campus up to 20 hours/week in the first year of study in US and can apply to work off-campus in the subsequent years only with due permission of the International Student Office under CPT or OPT.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">2.</span> <span>What are the English Language Proficiency requirements?</span>
                            </h3>
                            <div class="faq-content">
                                <p>U.S. universities require an English language proficiency test before admission and the test requirements vary depending on the course you apply for. English Language Ability Tests. The most common tests of English language ability are the Test of English as a Foreign Language (TOEFL), the International English Language Testing System (IELTS), and the Pearson Test of English (PTE).

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">3.</span> <span>What are the other Standardized Tests for USA?</span>
                            </h3>
                            <div class="faq-content">
                                <p>Undergraduate Level Examinations SAT: A standardized test to evaluate the written, verbal and mathematical skills of the applicants. ACT: To test the student's ability in English, Math, Science, Reading and Writing sections. Graduate-Level Examinations GRE: A standardized test of verbal reasoning, quantitative reasoning, and analytical writing for graduate-level study. GMAT: A standardized test for MBA applicants and for business programs that measures basic verbal, mathematical, analytical writing and integrated reasoning skills. MCAT: A standardized examination that assesses problem solving, critical thinking, writing skills, and knowledge of science concepts and principles essential for the study of medicine. LSAT: A standardized test to measure the reading and verbal reasoning skills used by the law schools as an assessment factor for admission. DAT: A test to measure general academic ability, comprehension of scientific information, and perceptual ability, used for admission to Dental schools.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">4.</span> <span>What are the popular courses in the USA?
</span>
                            </h3>
                            <div class="faq-content">
                                <p>STEM (Sciences, Technology, Engineering and Mathematics) subjects are mostly opted by international as well as domestic students in the USA. However, Psychology, Business Administration, Education, Economics and Political Science are certain other popular courses..</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3><span class="num">5.</span> <span>Are any scholarships available for international students in USA?</span>
                            </h3>
                            <div class="faq-content">
                                <p>Scholarships and grants are usually awarded to international students in USA on the basis of merit, need or any other exceptional excellence like proficiency in sports, cultural activities or a remarkable contribution in community service. The scholarships are highly competitive. Many American universities also offer grants for foreign students who wish to study at their institution but these vary substantially from university to university. The Standardized Test scores play a vital role in U.S. universities granting scholarships.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio
                            dire flow</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores
                            exercitationem ut</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque
                            sed facilis at qui</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi
                            quam consectetur</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                    <div class="member-img">
                        <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Brian Doe</h4>
                        <span>Marketing</span>
                        <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia
                            impedit laborum velit</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                    <div class="member-img">
                        <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Josepha Palas</h4>
                        <span>Operation</span>
                        <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit
                            eligendi cupiditate vel</p>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
   '{{-- <section id="testimonials" class="testimonials section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                    <h3>Testimonials</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident.
                    </p>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                    <div class="swiper">
                        <script type="application/json" class="swiper-config">
                            {
                              "loop": true,
                              "speed": 600,
                              "autoplay": {
                                "delay": 5000
                              },
                              "slidesPerView": "auto",
                              "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                              }
                            }
                        </script>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-1.jpg"
                                             class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-2.jpg"
                                             class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-3.jpg"
                                             class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-4.jpg"
                                             class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-5.jpg"
                                             class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Recent Posts</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Politics</p>

                        <h2 class="title">
                            <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="assets/img/blog/blog-author.jpg" alt=""
                                 class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">Maria Doe</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Jan 1, 2022</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Sports</p>

                        <h2 class="title">
                            <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="assets/img/blog/blog-author-2.jpg" alt=""
                                 class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">Allisa Mayer</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <article>

                        <div class="post-img">
                            <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                        </div>

                        <p class="post-category">Entertainment</p>

                        <h2 class="title">
                            <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <img src="assets/img/blog/blog-author-3.jpg" alt=""
                                 class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">Mark Dower</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                </p>
                            </div>
                        </div>

                    </article>
                </div><!-- End post list item -->

            </div><!-- End recent posts list -->

        </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>A108 Adam Street</p>
                                <p>New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                                <p>+1 6678 254445 41</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                                <p>contact@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday</p>
                                <p>9:00AM - 05:00PM</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                          data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                       required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                       required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                          required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->--}}'

@endsection

