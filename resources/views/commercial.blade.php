<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions" style="margin-top:-15px;">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Documents</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/unit/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('css/unit/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('css/unit/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{url('css/unit/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>

        <div class="nav-left">
            <img class="logo" src="{{url('images/other/logo option 2.png')}}" alt="">

        </div>

        <ul class="nav-right">
            <a href="{{ url('home') }}" id="home">
                <li>Home</li>
            </a>
            <div class="dropdown">
                <button class="dropbtn">property
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="{{ url('resident') }}">residential</a>
                    <a href="{{ url('commercial') }}">commercial</a>
                </div>
            </div>

            <a href="{{ url('contact_us') }}">
                <li>
                    Contact US
                </li>
            </a>
            @if (!Auth::user())
                <a href="{{ url('lo') }}">
                    <li>Login</li>
                </a>
                @else
                <li> <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div></li>
            @endif
        </ul>

    </header>
    <br>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
        <div class="container">
            <div class="rowsa">
                <div class="col-md-4 col-sm-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="filters" class="button-group">
                        <button class="btn btn-primary" data-filter="*">All Products</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
            <div class="row posts">
               
                @foreach ($unites as $item)
                    <div class="featured container no-gutter">
        
                    {{-- </div> --}}
                    <div id="zx" class="item sale col-md-4"
                        style="opacity: 1;">
                        <div class="featured-item">
                            <img src="{{url('images/Units/residential/data1/data1 (3).jpeg')}}" alt="">
                            <!-- <div class="top-right">for rent</div> -->
                            <div class="content-featured ">
                                <h3>{{ $item->name }}</h3>
                                <div class="felex">
                                    <div class="felex">
                                        <div class="div-felex">
                                            <h4>الموقع</h4>
                                            <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2"> {{ $item->address }}</p>
                                        </div>
                                        <div class="div-felex">
                                            <h4>المساحة</h4>
                                            <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                                    alt="المساحة" title="المساحة">185</p>
                                        </div>
                                        <div class="div-felex">
                                            <h4>عدد الغرف</h4>
                                            <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                                    alt="عددالغرف" title="عدد الغرف">3</p>
                                        </div>
                                        <div class="div-felex">
                                            <h4>عدد الحمامات</h4>
                                            <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                                    alt="عدد الحمامات" title="عدد الحمامات">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="price">
                                    <p>
                                       {{$item->price}} جنيه
                                    </p>
                                </div>
                                <a class="cola" href="{{url('P-Details')}}">
                                    <button class="glow-on-hover" type="button">
                                        Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div></div>
            {{--<div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data1/data1 (11).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محلات للايجار في مول تجاري بلوكيشن</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة">25</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                350,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item sale col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data2/data2 (13).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محلات للبيع في مول تجاري كونكورد بلازا</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة">35</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                3,500,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item sale col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data3/2023-04-15.jpg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محلات للبيع في مول تجاري بوينت 90</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 26</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                4,850,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data4/data4 (12).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محل للايجار بميفيدا - البيزنس بارك الجديدة</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 225</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                220,500 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data5/data5 (9).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>مكتب للايجار بمفيدا بزنس بارك</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 378</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                335,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data6/data6 (9).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محل تجاري كامل التشطيب للإيجار التجمع شارع التسعين</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 450</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                350,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data7/data7 (14).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>مقر اداري سوبر لوكس في التسعين الشمالي </h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 650</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                320,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data8/data8 (9).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محل تجاري للإيجار في حي النرجس</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 600</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                270,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data9/data9 (5).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محل للايجار في حي البنفسج</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 110</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                150,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item rent col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data10/data10 (10).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محل تجارى للايجار يصلح للمطاعم والكفيهات في شارع 90</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 318</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                265,500 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item sale col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data12/data12.jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>للبيع مكتب في شارع 90 الشمالي</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 120</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                3,850,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="zx" class="item sale col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/commercial/data15/data15.jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>محلات للبيع في مول تجاري روفولفي </h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع
                                        الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> تبدأ من 200</p>
                                </div>

                            </div>
                        </div>
                        <div class="price">
                            <p>
                                6,500,000 جنيه
                            </p>
                        </div>
                        <a class="cola" href="{{url('P-Details')}}">
                            <button class="glow-on-hover" type="button">
                                Details
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer class="footer-sec">
        <div class="main">
            <div class="logo row">
                <div class="footer-header">
                    <img src="{{url('images/other/logo option 2.png')}}" class="manik" alt="">
                </div>
            </div>

            <div class="link row">
                <div class="footer-header">
                    <h3>category</h3>
                </div>

                <div class="link-des">
                    <a href="#" class="footer-links">Home</a>
                    <a href="#" class="footer-links">Services</a>
                    <a href="#" class="footer-links">Galary</a>
                    <a href="#" class="footer-links">Contact</a>
                </div>
            </div>

            <div class="link row">
                <div class="footer-header">
                    <h3>Links</h3>
                </div>
                <div class="link-des">
                    <a href="index.html" class="footer-links">Home</a>
                    <a href="log.html" class="footer-links">Login</a>
                    <a href="Contact Us.html" class="footer-links">Contact</a>
                    <a href="residential.html" class="footer-links">estate</a>
                    <a href="commercial.html" class="footer-links">unit</a>
                </div>
            </div>
            <div class="linkima">
                <img class="imw" src="{{url('images/other/service-1.png')}}" alt="">
                <img class="imw" src="{{url('images/other/service-2.png')}}" alt="">
                <img class="imw" src="{{url('images/other/service-3.png')}}" alt="">
            </div>
        </div> --}}

    </footer>
    <!-- Featred Page Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('js/unit/jquery.min.js')}}"></script>
    <script src="{{url('js/unit/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('js/index.js') }}"></script>

    <script src="{{url('js/unit/custom.js')}}"></script>
    <script src="{{url('js/unit/owl.js')}}"></script>
    <script src="{{url('js/unit/isotope.js')}}"></script>





</body>

</html>
