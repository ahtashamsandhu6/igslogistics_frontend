<footer class="text-center text-lg-left">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-2">
                <div class="footer-logo">
                    <img src="assets/img/1IGS-logo.png" alt="">
                </div>
            </div>
            <div class="col-lg-2">
                <h5 class="footer-heading">Company</h5>
                <div class="footer-links">
                    <a href="about.php">About Us</a>
                    <a href="company-leadership.php">Company Leadership</a>
                    <a href="sustainability.php">Sustainability</a>
                    <a href="supplier-diversity.php">Supplier Diversity</a>
<!--                    <a href="#">Careers</a>-->
                    <a href="ship-now.php">Shipping</a>
                    <a href="track.php">Tracking</a>
                    <a href="contact-us.php">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-2">
                <h5 class="footer-heading">Our Divisions</h5>
                <div class="footer-links">
                    <a href="1IGS-express.php">1IGS Express</a>
                    <a href="1IGS-global-forwarding.php">1IGS Global Forwarding</a>
                    <a href="1IGS-supply-chain.php">1IGS Supply Chain</a>
                    <a href="other-global-division.php">Other Global Divisions</a>
                </div>
            </div>
            <div class="col-lg-2">
                <h5 class="footer-heading">Industry Sectors</h5>
                <div class="footer-links">
                    <a href="auto-mobility.php">Auto-Mobility</a>
                    <a href="energy-chemicals-e&m.php">Chemicals</a>
                    <a href="consumer-goods.php">Consumer</a>
                    <a href="energy-chemicals-e&m.php">Energy</a>
                    <a href="energy-chemicals-e&m.php">Engineering & Manufacturing</a>
                    <a href="life-sciences-and-healthcare.php">Life Sciences & Health Care</a>
                    <a href="retail.php">Retail</a>
                    <a href="technology.php">Technology</a>
                </div>
            </div>
            <div class="col-lg-2">
                <h5 class="footer-heading">Quick Links</h5>
                <div class="footer-links">
                    <a href="#">Customer Service</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">Accessibility</a>
                    <a href="#">Fraud Awareness</a>
                </div>
            </div>
            <div class="col-lg-2">
                <h5 class="footer-heading">Follow Us</h5>
                <div class="footer-icons">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" id="copyright">
                    <div>© CurrentCopyrightYear 1IGS Logistics. All rights reserved</div>
                </div>
                <div class="col-lg-6">
                    <a href="#">Privacy Policy</a> |
                    <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    var dateNow = new Date();
    var intYear = dateNow.getFullYear();

    $('#copyright').each(function() {
        var text = $(this).text();
        $(this).text(text.replace('CurrentCopyrightYear', intYear));
    });
</script>