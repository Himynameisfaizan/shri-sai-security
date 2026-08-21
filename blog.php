<?php
$pageTitle = "Our Blog & News";
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Latest <span>Insights</span></h2>
            <p class="text-muted">Stay updated with the latest security tips, company news, and industry trends.</p>
        </div>

        <div class="row g-4">

            <!-- Blog Card 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card border-0">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Blog Image" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> Aug 12, 2026</span>
                            <span><i class="fas fa-folder"></i> Corporate</span>
                        </div>
                        <h5 class="fw-bold mb-3">Importance of CCTV in Corporate Security</h5>
                        <p class="text-muted small mb-4">Learn why integrating CCTV systems with on-ground security
                            guards provides maximum protection...</p>
                        <a href="blog-details.php" class="text-primary-custom fw-bold text-decoration-none">Read More <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card border-0">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Blog Image" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> Aug 05, 2026</span>
                            <span><i class="fas fa-folder"></i> Housekeeping</span>
                        </div>
                        <h5 class="fw-bold mb-3">Best Housekeeping Practices for Offices</h5>
                        <p class="text-muted small mb-4">A clean environment boosts productivity. Discover our top
                            strategies for maintaining spotless workspaces...</p>
                        <a href="blog-details.php" class="text-primary-custom fw-bold text-decoration-none">Read More <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-card border-0">
                    <img src="https://images.unsplash.com/photo-1584433144859-1fc3ab64a957?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Blog Image" class="blog-image">
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> Jul 28, 2026</span>
                            <span><i class="fas fa-folder"></i> Training</span>
                        </div>
                        <h5 class="fw-bold mb-3">How We Train Our Industrial Guards</h5>
                        <p class="text-muted small mb-4">Industrial sectors face unique threats. See how Sri Sai
                            Security prepares guards for tough environments...</p>
                        <a href="blog-details.php" class="text-primary-custom fw-bold text-decoration-none">Read More <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- More cards can go here for a 6-card grid... I'm skipping duplicating them for brevity, you can copy-paste the structure above -->

        </div>

        <!-- Pagination -->
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12">
                <ul class="pagination pagination-custom justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-left"></i>
                            Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next <i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>