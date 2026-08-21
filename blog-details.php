<?php
$pageTitle = "Blog Details";
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row">

            <!-- Main Content Area -->
            <div class="col-lg-8 mb-5 mb-lg-0" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                    alt="Blog Detail" class="blog-details-img">

                <div class="blog-meta mb-3">
                    <span><i class="fas fa-user"></i> By Admin</span>
                    <span><i class="fas fa-calendar-alt"></i> August 12, 2026</span>
                    <span><i class="fas fa-comments"></i> 3 Comments</span>
                    <span><i class="fas fa-folder"></i> Corporate Security</span>
                </div>

                <h2 class="fw-bold text-secondary mb-4">Importance of CCTV and Manual Guarding in Corporate Security
                </h2>

                <div class="post-content">
                    <p>In today's fast-paced corporate world, relying solely on technology or purely on manual guarding
                        is no longer sufficient. At Sri Sai Security Services, we emphasize a hybrid model—integrating
                        state-of-the-art CCTV surveillance with highly trained on-ground security personnel.</p>

                    <p>While cameras act as an unblinking eye that records events and deters potential intruders, they
                        cannot physically intervene. This is where our verified and trained security guards step in.
                        They provide the immediate response required during an emergency, manage physical access
                        control, and ensure that safety protocols are strictly followed.</p>

                    <blockquote class="post-blockquote">
                        "Security is a continuous process, not an endpoint. Combining technology with human intelligence
                        creates an impenetrable shield for any organization."
                    </blockquote>

                    <h4 class="fw-bold text-secondary mb-3">Why You Need Both</h4>
                    <p>When an alarm is triggered or a camera captures suspicious activity, a rapid human response is
                        crucial. Our guards are trained to monitor control rooms and instantly deploy to the location of
                        the threat. Furthermore, the physical presence of a uniformed guard provides a psychological
                        deterrent that cameras alone cannot offer.</p>

                    <p>Investing in both ensures that your corporate office in Chennai remains a safe haven for your
                        employees and a fortress against external threats.</p>
                </div>

                <!-- Share Tags -->
                <div class="d-flex justify-content-between align-items-center mt-5 pt-4 border-top">
                    <div>
                        <span class="fw-bold text-dark me-2">Tags:</span>
                        <span class="badge bg-secondary">CCTV</span>
                        <span class="badge bg-secondary">Guards</span>
                        <span class="badge bg-secondary">Corporate</span>
                    </div>
                    <div>
                        <span class="fw-bold text-dark me-2">Share:</span>
                        <a href="#" class="text-secondary fs-5 me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-secondary fs-5 me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-secondary fs-5"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-lg-4" data-aos="fade-left">

                <!-- Search Widget -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Search</h4>
                    <form class="d-flex">
                        <input type="text" class="form-control me-2" placeholder="Search blog...">
                        <button class="btn btn-primary-custom" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <!-- Categories Widget (Reused styling from service list) -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Categories</h4>
                    <ul class="service-list">
                        <li><a href="#">Corporate Security <span class="float-end">(12)</span></a></li>
                        <li><a href="#">Industrial Safety <span class="float-end">(8)</span></a></li>
                        <li><a href="#">Housekeeping Tips <span class="float-end">(15)</span></a></li>
                        <li><a href="#">Event Security <span class="float-end">(5)</span></a></li>
                    </ul>
                </div>

                <!-- Recent Posts Widget -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-widget-title">Recent Posts</h4>
                    <ul class="recent-post-list">
                        <li>
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Recent Post" class="recent-post-img">
                            <div>
                                <span class="small text-muted"><i
                                        class="fas fa-calendar-alt text-primary-custom me-1"></i> Aug 05, 2026</span>
                                <a href="#" class="recent-post-title mt-1">Best Housekeeping Practices for Offices</a>
                            </div>
                        </li>
                        <li>
                            <img src="https://images.unsplash.com/photo-1584433144859-1fc3ab64a957?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Recent Post" class="recent-post-img">
                            <div>
                                <span class="small text-muted"><i
                                        class="fas fa-calendar-alt text-primary-custom me-1"></i> Jul 28, 2026</span>
                                <a href="#" class="recent-post-title mt-1">How We Train Our Industrial Guards</a>
                            </div>
                        </li>
                        <li>
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                alt="Recent Post" class="recent-post-img">
                            <div>
                                <span class="small text-muted"><i
                                        class="fas fa-calendar-alt text-primary-custom me-1"></i> Jul 15, 2026</span>
                                <a href="#" class="recent-post-title mt-1">5 Reasons You Need a Residential Guard</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Contact Help Widget (Reused from service details) -->
                <div class="sidebar-widget help-widget">
                    <i class="fas fa-headset fs-1 text-primary-custom mb-3"></i>
                    <h4 class="fw-bold mb-3">Need Any Help?</h4>
                    <p class="text-white-50 mb-4">Contact our expert team to get a customized security plan.</p>
                    <a href="https://wa.me/917200864976" target="_blank" class="btn btn-primary-custom w-100">Chat on
                        WhatsApp</a>
                </div>

            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>