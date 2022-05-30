<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/client/style.css" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Styles -->
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="container-fluid nav-top-container">
                <div class="row nav-top-container">
                    <div class="img-nav col-lg-2 d-flex align-items-center">
                        <img src="https://taxigo.vn/images/logo.png" alt="">
                    </div>
                    <div class="nav-item col-lg-7 d-flex align-items-center">
                        <ul>
                            <li>
                                <a href="">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="">Đặt xe sân bay</a>
                            </li>
                            <li>
                                <a href="">Đặt xe đường dài</a>
                            </li>
                            <li>
                                <a href="">Thuê xe Tour</a>
                            </li>
                            <li>
                                <a href="">Tin tức</a>
                            </li>
                            <li>
                                <a href="">Bảng giá</a>
                            </li>
                            <li>
                                <a href="">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="img-nav col-lg-3 d-flex align-items-center">
                        <button>
                            <a href="">HOTLINE:19000370</a>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid banner-index d-flex justify-content-center">
        <div class="mt-5">
            <h2>Nền tảng đặt xe, Thuê xe Tour trực tuyến</h2>
            <h4>Kết nối Bạn với hàng nghìn xe nhàn rỗi</h4>
            <div>An toàn, Sang trọng</div>
            <div>Gía trọn gói, không phát sinh</div>
            <div>Nền tảng thuê xe 4,7,16,29 chỗ lớn nhất Việt Nam</div>
        </div>
    </div>
    <div class="container relative">
        <div class="row order-car">
            <div class="col-6 order-car-left">
                <img src="https://taxigo.vn/images/main-car.png" alt="">
            </div>
            <div class="col-6 order-car-right">
                <h2>
                    <a href="">Đặt xe trực tuyến</a>
                </h2>
                <div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nhập điểm đón</label>
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Sân bay Cam Ranh, Khánh Hoà</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhập điểm đến</label>
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Sân bay Cam Ranh, Khánh Hoà</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Chọn chiều về</label>
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>1 chiều</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Xem giá</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container why-choose-our-div">
        <h2 style="text-align:center">Tại sao lại chọn chúng tôi?</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 item text-center why-choose-our">
                <img src="https://taxigo.vn/images/icon1.png" alt="">
                <p>TIẾT KIỆM 50%</p>
                <p>Tiết kiệm được từ 30% đến 50% chi phí</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 item text-center why-choose-our">
                <img src="https://taxigo.vn/images/icon1.png" alt="">
                <p>TIẾT KIỆM 50%</p>
                <p>Tiết kiệm được từ 30% đến 50% chi phí</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 item text-center why-choose-our">
                <img src="https://taxigo.vn/images/icon1.png" alt="">
                <p>TIẾT KIỆM 50%</p>
                <p>Tiết kiệm được từ 30% đến 50% chi phí</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 item text-center why-choose-our">
                <img src="https://taxigo.vn/images/icon1.png" alt="">
                <p>TIẾT KIỆM 50%</p>
                <p>Tiết kiệm được từ 30% đến 50% chi phí</p>
            </div>
        </div>
    </div>
    <div class="container-fluid banner-bt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-items-center">
                    <h4>Đặt xe sân bay, xe tỉnh, xe tour</h4>
                    <h2>TaxiGo kết nối muôn nơi</h2>
                    <p>NHẬN NHIỀU ƯU ĐÃI HƠN NỮA KHI ĐẶT XE QUA ỨNG DỤNG</p>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    <a href="">
                        <button>Đặt xe ngay</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
        <div>
            <h3>1</h3>
        </div>
        <div>
            <h3>2</h3>
        </div>
        <div>
            <h3>3</h3>
        </div>
        <div>
            <h3>4</h3>
        </div>
        <div>
            <h3>5</h3>
        </div>
        <div>
            <h3>6</h3>
        </div>
    </div>
</body>

</html>

<script>
$(".slider").slick({

// normal options...
infinite: false,

// the magic
responsive: [{

    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      infinite: true
    }

  }, {

    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      dots: true
    }

  }, {

    breakpoint: 300,
    settings: "unslick" // destroys slick

  }]
});
</script>