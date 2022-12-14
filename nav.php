<!--Pre Loader-->
<div class="preloaderBg" id="preloader">
    <div class="preloader-wrap">
        <div class="preloader-logo"></div>
        <div class="preloader-circle"></div>
    </div>
</div>
<script>
    $(window).on('load', function () { // makes sure the whole site is loaded
        $('#preloader').delay(350).fadeOut('fast'); // will fade out the white DIV that covers the website.
        $('html').css({'overflow-y': 'auto'});
    });
</script>

<!--Navbar-->

<div class="nav-container" id="nav-cont">
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
        <div>
            <a href="index.php" id="nav-logo">
                <img src="assets/img/1IGS-logo.png" alt="">
            </a>
        </div>
        <div class="d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="position-relative">
                    <button class="nav-link" data-toggle="modal" data-target="#solution-modal">
                        <span>Enterprise Logistics Services</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button2">
                        <span>Shipping</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-2">
                        <li><a href="ship-now.php" class="nav-link">Create a Shipment</a></li>
                        <li><a href="get-a-quote.php" class="nav-link">Shipping Rates & Delivery</a></li>
                        <li><a href="schedule-and-manage-pickups.php" class="nav-link">Schedule & Manage Pickups</a>
                        </li>
                        <li><a href="packing.php" class="nav-link">Packing & Shipping</a></li>
                        <li><a href="manage-return.php" class="nav-link">Manage Return</a></li>
                        <li><a href="#" class="nav-link">All Shipping Services</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="modal" data-target="#track-modal" class="nav-link">Track</a>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button2">
                        <span>Locations</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-2">
                        <li><a href="drop-off-package.php" class="nav-link">Drop off a Package</a></li>
                        <li><a href="#" class="nav-link">Find 1IGS Locations</a></li>
                    </ul>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button2">
                        <span>Aviation</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-2">
                        <li><a href="#" class="nav-link">Private Plane Charter</a></li>
                        <li><a href="#" class="nav-link">Cargo, Government & Humanitarian Charter</a></li>
                    </ul>
                </li>

                <!--                <li class="ml-lg-5 sign-btn-wrap">-->
                <!--                    <a href="sign-in.php" class="nav-link sign-in-link">-->
                <!--                        <span>Sign In</span>-->
                <!--                    </a><span class="text-red or">OR</span>-->
                <!--                    <a href="sign-up.php" class="nav-link sign-in-link nav-sign-up">-->
                <!--                        <span>Sign Up</span>-->
                <!--                    </a>-->
                <!--                </li>-->
            </ul>
        </div>
    </nav>
</div>


<div class="d-none d-lg-block" id="nav-top">
    <nav class="navbar navbar-expand-lg navbar-dark h-100" id="nav">
        <!--        <div>-->
        <!--            <form>-->
        <!--                <div class="nav-top-search">-->
        <!--                    <input class="form-control nt-search" type="search" placeholder="search">-->
        <!--                </div>-->
        <!--            </form>-->
        <!--        </div>-->
        <div class="d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto align-items-center">
                <li>
                    <a href="#" class="nav-link nav-t-link">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="position-relative">
                    <button class="nav-link nav-t-link drop-button2">
                        <span>Sign in</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown">
                        <li><a href="sign-in.php" class="nav-link">My 1IGS +</a></li>
                        <li><a href="sign-in.php" class="nav-link">My Supply Chain</a></li>
                        <li><a href="sign-in.php" class="nav-link">1IGS Same Day</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sign-up.php" class="nav-link nav-t-link">Sign Up</a>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button3 nav-t-link">
                        <span>Support</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-3">
                        <li><a href="#" class="nav-link">Customer Service</a></li>
                        <li><a href="contact-us.php" class="nav-link">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Solution Modal -->
<div class="modal fade nav-modal" id="solution-modal" tabindex="-1" role="dialog" aria-labelledby="solution-modal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="close m-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 py-5">
                            <div class="row nav-links-row">
                                <div class="col-6">
                                    <h6 class="default-heading-2">Products</h6>
                                    <a href="general-freight.php" class="nav-link">General Freight</a>
                                    <a href="sea-freight.php" class="nav-link">Sea Freight</a>
                                    <a href="air-freight.php" class="nav-link">Air Freight</a>
                                    <a href="road-freight.php" class="nav-link">Overland Freight</a>
                                    <a href="#" class="nav-link">Packing Cases & Crates</a>
                                    <a href="customs-clearance.php" class="nav-link">Customs Clearance</a>
                                </div>
                                <div class="col-6">
                                    <h6 class="default-heading-2">Industries</h6>
                                    <a href="auto-mobility.php" class="nav-link">Auto-Mobility</a>
                                    <a href="consumer-goods.php" class="nav-link">Consumer Goods</a>
                                    <a href="energy-chemicals-e&m.php" class="nav-link">Energy, Chemicals,
                                        Engineering and Manufacturing</a>
                                    <a href="life-sciences-and-healthcare.php" class="nav-link">Life Sciences
                                        and Healthcare</a>
                                    <a href="retail.php" class="nav-link">Retail</a>
                                    <a href="technology.php" class="nav-link">Technology</a>
                                </div>
                                <div class="col-6">
                                    <h6 class="default-heading-2">Solutions</h6>
                                    <a href="services-logistics.php" class="nav-link">Services Logistics</a>
                                    <a href="warehousing.php" class="nav-link">Warehouse Solutions</a>
                                    <a href="transport-solutions.php" class="nav-link">Transport Solutions</a>
                                    <a href="packaging-solutions.php" class="nav-link">Packaging Solutions</a>
                                    <a href="lead-logistics.php" class="nav-link">Lead Logistics Partner</a>
                                    <a href="e-commerce-fulfillment.php" class="nav-link">E-commerce Fulfillment</a>
                                </div>
                                <div class="col-6">
                                    <h6 class="default-heading-2">About Us</h6>
                                    <a href="about.php" class="nav-link">About 1IGS</a>
                                    <a href="company-leadership.php" class="nav-link">Company Leadership</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 solution-bg">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Track Modal -->
<div class="modal fade nav-modal" id="track-modal" tabindex="-1" role="dialog" aria-labelledby="track-modal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <button type="button" class="close m-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 py-5">
                            <div class="track-modal-wrap">
                                <h2 class="default-heading-2">Track your shipment</h2>
                                <p class="mb-3">Find the status of your in transit shipment</p>
                                <div class="hero-search-wrap">
                                    <form>
                                        <div class="search-wrap">
                                            <input class="form-control" type="search" id="tracking-id" placeholder="Tracking ID" required>
                                            <button class="btn-default" onclick="trackShipment()">Tracks</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 solution-bg">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
