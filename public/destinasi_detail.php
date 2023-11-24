<?php
include 'layouts/head.php';
include 'layouts/topbar.php';
?>

<body>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <?php include 'layouts/navbar.php' ?>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Kebun Raya Bogor</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Pilihan Destinasi Start -->
    <section class="choose pt-6 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <div id="highlight" class="mb-2">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1">Kebun Raya Bogor</h2>
                                </div>
                            </div>

                            <div class="description-images mb-4">
                                <img src="assets/img/kota tua.jpg" alt="" class="w-100 rounded">
                            </div>

                            <div class="description mb-2">
                                <h4>Deskripsi</h4>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis explicabo commodi omnis vero ex corrupti quis recusandae, repellat accusantium quas cupiditate itaque placeat saepe sunt repudiandae minima provident nobis aliquid dicta nihil. Quia, repellat provident ratione similique ipsum ipsa quas laborum odit voluptates commodi, eum, repudiandae expedita perferendis nihil praesentium?</p>
                            </div>

                            <div class="description mt-2">
                                <h4>Fasilitas</h4>
                                <hr>
                                <ul>
                                    <li class="pb-1">lorem</li><br>
                                </ul>
                            </div>
                        </div>

                        <div id="single-map" class="single-map">
                            <h4>Lokasi</h4>
                            <hr>
                            <div class="map rounded overflow-hidden">
                                <div style="width: 100%">
                                    <iframe height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.967503522382!2d106.81109921017911!3d-6.13506869382611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2a940017ed%3A0xdfce12d4a0938133!2sKawasan%20Wisata%20Kota%20Tua%20Jakarta!5e0!3m2!1sid!2sid!4v1700811874747!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Form Testimonial Start -->
                        <div id="single-add-review" class="single-add-review pt-2">
                            <h4>Testimonial</h4>
                            <hr>
                            <form action="#" method="POST">
                                <input type="text" name="" hidden>
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary px-3 border-end" style="border-radius: 3px">Kirim</a>
                            </form>
                        </div>
                        <!-- Form Testimonial End -->
                    </div>
                </div>

                <!-- sidebar start -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="popular-post sidebar-item mb-4 mt-3">
                            <div class="sidebar-tabs">
                                <div class="post-tabs">
                                    <h3 class="title-serupa">Wisata Serupa</h3>
                                    <hr>
                                    <div class="tab-content" id="postsTabContent1">
                                        <div aria-labelledby="popular-tab" class="tab-pane fade active show" id="popular" role="tabpanel">
                                            <article class="post mb-2 border-b pb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href=""><img src="assets/img/package-1.jpg" alt="" width="100"></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="">Monas</a></h5>
                                                        <p style="font-size: 13px;">Jl. Basuki Rahmat</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- Pilihan Destinasi Start -->

    <!-- Footer Start -->
    <?php include 'layouts/footer.php' ?>
    <!-- Footer End -->

    <?php include 'layouts/script.php' ?>
</body>

</html>