</main>

<footer id="footer" class="footer position-relative">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="/" class="logo d-flex align-items-center">
                    <span class="sitename">EduPath Global</span>
                </a>
                <p>We are the fastest growing EdTech brand operating across geographies, facilitating international
                    student recruitments by connecting students, recruitment entrepreneurs and global universities
                    through our high-tech online platform – coursefinder.ai.</p>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Study Destinations</h4>
                <ul>
                    <li><a href="#">United States</a></li>
                    <li><a href="#">Canada us</a></li>
                    <li><a href="#">United Kingdom</a></li>
                    <li><a href="#">Ireland </a></li>
                    <li><a href="#">Australia </a></li>
                    <li><a href="#">New Zealand </a></li>
                    <li><a href="#">Europe </a></li>
                    <li><a href="#">Asia </a></li>


                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Counselling</a></li>
                    <li><a href="#">Test Preparation</a></li>
                    <li><a href="#">Course, Country & University Selection</a></li>
                    <li><a href="#">Applications & Admission</a></li>
                    <li><a href="#">Scholarships</a></li>
                    <li><a href="#">Internship</a></li>
                    <li><a href="#">Education Loan</a></li>
                    <li><a href="#">Visa Processing</a></li>
                    <li><a href="#">Allied Services</a></li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                {{ $siteSetting['head_address'] ?? '' }}"
                <p class="mt-4"><strong>Phone:</strong> <span>{{ $siteSetting['head_contact'] ?? '' }}</span></p>
                <p><strong>Email:</strong> <span>{{ $siteSetting['head_email'] ?? '' }}</span></p>
            </div>

        </div>
    </div>

</footer>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
