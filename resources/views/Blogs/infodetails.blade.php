<section class="main-section blog-page">
    <!-- Blog -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                        <ul class="meta">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-red"></i>Photography</a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="img-post m-b-15">
                            <img src="assets/images/blog/blog-page-1.jpg" alt="Awesome Image">
                            <div class="social_share">
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                            </div>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                        <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Comments</strong> 3</h2>
                    </div>
                    <div class="body">
                        <ul class="comment-reply list-unstyled">
                            <li class="row" data-aos="fade-left" data-aos-offset="100" data-aos-duration="2000">
                                <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="assets/images/sm/avatar2.jpg" alt="Awesome Image"></div>
                                <div class="text-box col-md-10 col-8 p-l-0">
                                    <h6>Gigi Hadid </h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                    <ul class="list-inline">
                                        <li><a href="javascript:void(0);">Jan 09 2018</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-offset="100" data-aos-duration="2000">
                    <div class="header">
                        <h2><strong>Leave</strong> a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
                    </div>
                    <div class="body">
                        <div class="comment-form">
                            <form  action="/postdetails" method="post" class="row">
                                @csrf
                            <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea rows="4" name="content" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn btn-primary btn-round">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 right-box">
                <div class="card">
                    <div class="body search">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                    <i class="zmdi zmdi-search"></i>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-left" data-aos-offset="200" data-aos-duration="2000">
                    <div class="header">
                        <h2><strong>Popular</strong> Posts</h2>
                    </div>
                    <div class="body widget popular-post">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="border single_post">
                                    <div class="img-post m-b-5">
                                        <img src="assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                                    </div>
                                    <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                    <small>Dec 20, 2017</small>
                                </div>
                                <div class="border single_post m-t-20">
                                    <div class="img-post m-b-5">
                                        <img src="assets/images/blog/blog-page-3.jpg" alt="Awesome Image">
                                    </div>
                                    <p class="m-b-0">new rules, more cars, more races</p>
                                    <small>Dec 20, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-left" data-aos-offset="200" data-aos-duration="2000">
                    <div class="header">
                        <h2><strong>Tag</strong> Clouds</h2>
                    </div>
                    <div class="body widget tag-clouds">
                        <ul class="list-unstyled m-b-0">
                            <li><a href="#" class="tag badge badge-default">Cardio Monitoring</a></li>
                            <li><a href="#" class="tag badge badge-success">Traumatology</a></li>
                            <li><a href="#" class="tag badge badge-info">Creative UX</a></li>
                            <li><a href="#" class="tag badge badge-success">Pulmonary</a></li>
                            <li><a href="#" class="tag badge badge-warning">Cardiology</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card" data-aos="fade-left" data-aos-offset="200" data-aos-duration="2000">
                    <div class="header">
                        <h2><strong>Email</strong> Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                    </div>
                    <div class="body widget newsletter">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon">
                                    <i class="zmdi zmdi-mail-send"></i>
                                {{--  <button type="submit" class="zmdi zmdi-mail-send"></button>  --}}

                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog -->
</section>
