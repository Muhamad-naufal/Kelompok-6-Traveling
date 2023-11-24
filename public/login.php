<div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="post-tabs">
                    <!-- Tab Navbar Start -->
                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                        </li>
                    </ul>
                    <!-- Tab Navbar Start -->

                    <!-- Tab Content Start -->
                    <div class="tab-content blog-full" id="postsTabContent">
                        <!-- Form Login Start -->
                        <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                            <h4 class="text-center border-b pb-2 pt-3">Login</h4>
                            <form method="post" action="" name="contactform" id="contactform">
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" id="fname" placeholder="Email">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" class="form-control" id="lpass" placeholder="Password">
                                </div>
                                <div class="comment-btn mb-3 pb-2 text-center border-b">
                                    <input type="submit" class="btn-primary w-100" id="submit" value="Login">
                                </div>
                            </form>
                        </div>
                        <!-- Form Login End -->

                        <!-- Form Register Start -->
                        <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                            <h4 class="text-center border-b pb-2 pt-3">Register</h4>
                            <form method="post" action="" name="contactform" id="contactform">
                                <div class="form-group mb-3">
                                    <input type="text" name="fullname" class="form-control" id="fname" placeholder="Nama Lengkap" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control" id="fname" placeholder="Email" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="password" class="form-control" id="lpass" placeholder="Password">
                                </div>
                                <div class="comment-btn mb-3 pb-2 text-center border-b">
                                    <input type="submit" class="btn-primary w-100" id="submit" value="Register">
                                </div>
                            </form>
                        </div>
                        <!-- Form Register End -->
                    </div>
                    <!-- Tab Content End -->

                </div>
            </div>
        </div>
    </div>
</div>