<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>ST Hosting</title>
</head>

<body class="bg-secondary">
    <div class="container bg-light">
        <nav id="nav" class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="{{ route('home') }}">TRINHSON</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#about">About us</a>
                        <a class="nav-link" href="#products">Products</a>
                        <a class="nav-link" href="#team">Team</a>
                        <a class="nav-link" href="#contact">Contact us</a>
                    </div>
                </div>
            </div>
        </nav>
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0">
                        <h1 class="logo">Better Hosting For Your Business</h1>
                        <h2 class="text-secondary">Offers a lot of storage solutions</h2>
                        <div class="mt-3 mb-3 d-flex justify-content-center justify-content-lg-start">
                            <a href="#about" class="btn btn-primary btn-round">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate">
                        <img src="https://photo2.tinhte.vn/data/attachment-files/2021/10/5682597_Hosting-Thiet-Ke-Web-Shop-Ban-Hang-Online-kien-thuc-kiem-tien-online.png"
                            class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div id="about" class="mt-3">
            <h2 class="section-title mb-3">ABOUT US</h2>
            <div class="row content">
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, rerum tempora. Laudantium illo
                        fuga explicabo quam voluptatem. Neque fugit quam voluptates eius, voluptate necessitatibus sequi
                        iure optio perferendis earum asperiores?</p>
                    <ul>
                        <li><i class="fa-solid fa-check text-primary"></i> <span class="fw-bold">Hosting experts support
                                24/7</span>
                            <p>No more worrying about whether you will get help in time! A trained expert from Hostinger
                                company will provide you with technical support almost all the time in Vietnamese
                                (Vietnamese 24/7).</p>
                        </li>
                        <li><i class="fa-solid fa-check text-primary"></i> <span class="fw-bold">Server hosting leading
                                technology</span>
                            <p>We provide our customers with the most advanced and reliable servers in the market.</p>
                        </li>
                        <li><i class="fa-solid fa-check text-primary"></i> <span class="fw-bold">Easy & Free hosting
                                transfer</span>
                            <p>To fully support you from the start, we do not charge a fee to transfer your website to
                                Hostinger. Technical experts will help you do this, so you can focus on your main job,
                                faster.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore explicabo illo odio
                        repudiandae. Facilis, quia! Similique debitis, repellat magnam excepturi molestias, eligendi eum
                        porro quaerat animi perferendis in dolorem.
                    </p>
                    <ul>
                        <li><i class="fa-solid fa-check text-primary"></i> <span class="fw-bold">Maximum security</span>
                            <p>We don't take security lightly, so from the moment you buy a domain and hosting, we'll
                                give you an SSL to help keep your website safe. Install free SSL</p>
                        </li>
                    </ul>
                    <a href="#" class="btn-learn-more btn-secondary btn">Learn More</a>
                </div>
            </div>
        </div>
        <div id="team" class="mt-3">
            <h2 class="section-title mb-3">TEAM</h2>
            <div class="row">
                <div class="col-md-6 info my-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('images/son.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Trinh Xuan Son</h4>
                                    <span>CEO</span>
                                    <p>Some information...</p>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 info my-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('images/nghia.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Le Van Tung</h4>
                                    <span>HR</span>
                                    <p>Some information...</p>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 info my-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('images/viet.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Pham Hong Nguyen</h4>
                                    <span>CIO</span>
                                    <p>Some information...</p>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 info my-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('images/tuan.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Dinh Khac Tuan</h4>
                                    <span>CTO</span>
                                    <p>Some information...</p>
                                    <div class="social">
                                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="products" class="mt-3">
            <h2 class="section-title mb-3">PRODUCTS</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-2">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name font-weight-bold text-uppercase">Hosting 1</p>
                            <i class="card-pricing-icon dripicons-user text-primary"></i>
                            <h2 class="card-pricing-price">0 đ <span>/ Month</span></h2>
                            <ul class="card-pricing-features">
                                <li>1 MB Storage</li>
                                <li>100 GB Bandwidth</li>
                                <li>1 Domain</li>
                                <li>1 User</li>
                                <li class="na">Email Support</li>
                                <li class="na">24x7 Support</li>
                            </ul>
                            <button class="btn btn-primary mt-4 mb-2 btn-round">Choose</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name font-weight-bold text-uppercase">Hosting 2</p>
                            <i class="card-pricing-icon dripicons-user text-primary"></i>
                            <h2 class="card-pricing-price">500.000 đ <span>/ Month</span></h2>
                            <ul class="card-pricing-features">
                                <li>5 GB Storage</li>
                                <li>500 GB Bandwidth</li>
                                <li>3 Domain</li>
                                <li>3 User</li>
                                <li>Email Support</li>
                                <li>24x7 Support</li>
                            </ul>
                            <button class="btn btn-primary mt-4 mb-2 btn-round">Choose</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <p class="card-pricing-plan-name font-weight-bold text-uppercase">Hosting 3</p>
                            <i class="card-pricing-icon dripicons-user text-primary"></i>
                            <h2 class="card-pricing-price">800.000 đ <span>/ Month</span></h2>
                            <ul class="card-pricing-features">
                                <li>10 GB Storage</li>
                                <li>No Limit Bandwidth</li>
                                <li>10 Domain</li>
                                <li>10 User</li>
                                <li>Email Support</li>
                                <li>24x7 Support</li>
                            </ul>
                            <button class="btn btn-primary mt-4 mb-2 btn-round">Choose</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="mt-3">
            <h2 class="section-title mb-3 ml-2">CONTACT US</h2>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <div class="info">
                                <div class="address">
                                    <h4>Address:</h4>
                                    <p>Minh Khai, Bac Tu Liem, Ha Noi</p>
                                </div>

                                <div class="email">
                                    <h4>Email:</h4>
                                    <p>sonit7122@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <h4>Call:</h4>
                                    <p>+84372238783</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body">
                            <form class="w-100" id="form-send-mail" action="{{ route('send-message') }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group mt-3 col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group mt-3 col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" rows="5"></textarea>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary py-2 px-5">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{ route('home') }}" class="logo">TRINHSON</a>
                        <p class="text-dark-50 mt-4">Hyper makes it easier to build better websites with
                            <br> great speed. Save hundreds of hours of design
                            <br> and development by using it.
                        </p>

                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                        class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                        class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                        class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);"
                                    class="social-list-item border-secondary text-secondary"><i
                                        class="mdi mdi-github-circle"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-dark">Company</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">About Us</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Documentation</a>
                            </li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Blog</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Affiliate
                                    Program</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-dark">Apps</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Ecommerce
                                    Pages</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Email</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Social Feed</a>
                            </li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Projects</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Tasks
                                    Management</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-dark">Discover</h5>

                        <ul class="list-unstyled pl-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Help Center</a>
                            </li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Our Products</a>
                            </li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-dark-50">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <p class="text-dark-50 mt-4 text-center mb-0">© 2023 Hyper. Design and coded by
                                TrinhXuanSon</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/icon.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src='{{ asset('js/sweetalert.min.js') }}'></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
