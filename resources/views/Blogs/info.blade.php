<section class="main-section blog-page">

    <!-- Blog -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 left-box">
                <div class="card single_post" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                        <ul class="meta">
                            <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                            <li><a href="#"><i class="zmdi zmdi-label col-red"></i>Traumatology</a></li>
                            <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                        </ul>
                    </div>
                </div>
                @foreach($blogs as $blog)
                <div class="card single_post" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3>
                        <ul class="meta">
                            <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                            <li><a href="#"><i class="zmdi zmdi-label col-amber"></i>Orthodontics</a></li>
                            <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="img-post m-b-15">
                            <img src="assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                            <div class="social_share">
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                                <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                            </div>
                        </div>
                        <p>{{$blog->content}}It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                        <a href="blog-detail.html" title="read more" class="btn btn-round btn-info">Read More</a>
                    </div>
                </div>
                @endforeach
                <ul class="pagination pagination-primary" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
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
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog -->

</section>
