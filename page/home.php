<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="assets/img/icons8-css3-48.png" alt="">  </a>
        <button type="button" class="navbar-toggler" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="menu">
            <ul class="navbar-nav ms-auto ">
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">MENU</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">manu one</a></li>
                        <li><a href="" class="dropdown-item">manu two</a></li>
                        <li><a href="" class="dropdown-item">manu three</a></li>
                        <li><a href="" class="dropdown-item">manu four</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link ">ABOUT</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">SERVICE</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">service one</a></li>
                        <li><a href="" class="dropdown-item">service tow</a></li>
                        <li><a href="" class="dropdown-item">service three</a></li>
                        <li><a href="" class="dropdown-item">service four</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link ">CONTACT</a></li>
                <li><a href="" class="nav-link ">GALLERY</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">
    <ol class="carousel-indicators">
        <li data-bs-target="#slide" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#slide" data-bs-slide-to="1" class=></li>
        <li data-bs-target="#slide" data-bs-slide-to="2" class=></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/ss1.jpg" alt="" class="w-100 h-500"/>
            <div class="carousel-caption my-caption">
                <h1>This Is a carousel caption</h1>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Aliquid at et expedita itaque libero
                    nostrum vero! Aut eius eos fugit,
                    illum nemo quidem!
                    Explicabo illum natus nemo quos rerum ut.</p>
                <a href="" class="btn btn-success">Detail</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/ss2.jpg" alt="" class="w-100 h-500"/>
            <div class="carousel-caption my-caption">
                <h1>This Is a carousel caption</h1>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Aliquid at et expedita itaque libero
                    nostrum vero! Aut eius eos fugit,
                    illum nemo quidem!
                    Explicabo illum natus nemo quos rerum ut.</p>
                <a href="" class="btn btn-success">Detail</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/ss3.jpg" alt="" class="w-100 h-500"/>
            <div class="carousel-caption my-caption">
                <h1>This Is a carousel caption</h1>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    Aliquid at et expedita itaque libero
                    nostrum vero! Aut eius eos fugit,
                    illum nemo quidem!
                    Explicabo illum natus nemo quos rerum ut.</p>
                <a href="" class="btn btn-success">Detail</a>
            </div>
        </div>
    </div>
    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">this is a card header

                    </div>
                    <div class="card-body">
                        <h1>this is a card body</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut cum cumque dicta error eum iure, iusto nobis nulla numquam, quis quisquam, sequi vel? Accusantium culpa laboriosam laudantium nobis nostrum.</p>
                    </div>
                    <div class="card-footer">this is a ard footer
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">this is a card header

                    </div>
                    <div class="card-body">
                        <h1>this is a card body</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut cum cumque dicta error eum iure, iusto nobis nulla numquam, quis quisquam, sequi vel? Accusantium culpa laboriosam laudantium nobis nostrum.</p>
                    </div>
                    <div class="card-footer">this is a ard footer
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">this is a card header

                    </div>
                    <div class="card-body">
                        <h1>this is a card body</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut cum cumque dicta error eum iure, iusto nobis nulla numquam, quis quisquam, sequi vel? Accusantium culpa laboriosam laudantium nobis nostrum.</p>
                    </div>
                    <div class="card-footer">this is a ard footer
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/f1.jpg" alt="" class="card-img-top h-250">
                    <div class="card-body">
                        <h5>Product Name</h5>
                        <p>TK.550</p>
                        </hr>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/f2.jpg" alt="" class="card-img-top h-250">
                    <div class="card-body">
                        <h5>Product Name</h5>
                        <p>TK.499 </p>
                        </hr>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/f3.jpg" alt="" class="card-img-top h-250">
                    <div class="card-body">
                        <h5>Product Name</h5>
                        <p>TK.750</p>
                        </hr>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/f4.jpg" alt="" class="card-img-top h-250">
                    <div class="card-body">
                        <h5>Product Name</h5>
                        <p>TK.650</p>
                        </hr>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<footer>
    <section class="bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <h4>About US</h4>
                        </hr>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi, illo incidunt laboriosam maiores provident! Aperiam dignissimos dolorem ea est, fugiat illum itaque </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h4>Subscribe Here</h4>
                        </hr>
                        <form action="" method="Post">
                            <div class="row md-4">
                                <label>Your Email Email adderss</label>
                                <input type="email" class="form-control" placeholder="your email"/>
                            </div>
                            <div class=" md-4">
                                <input type="button" name="" class="btn btn-success w-100 " value="Subscribe"/>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h4>Contact US</h4>
                        </hr>
                        <p class="mb-1">House No:49, Road No:23 <br> Dhanmondi 27,Dhaka 1289</p>
                        <p class="mb-1">Phone No:01732577482</p>
                        <p class="mb-1">Email:Engjewel@gmail.com</p>
                        <p class="mb-0">twitter:jewel123</p>



                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class=" bg-dark">
        <div class="container">
            <div class="row">
                <div col-md-12>
                    <p class="md-0 text-white text-center">copyright@companynam,All right resevrd ny<a href="#" class="text-white text-decoration-none" >Laravel bathe 3</a> </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/jquery-3.6.0.js"></script>
</body>
</html>
