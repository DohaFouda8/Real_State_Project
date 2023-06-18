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
        {{-- <div class=""> --}}

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
                        <a class="cola" href="{{url('P-Details/'.$item->id)}}">
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
            {{-- <div id="zx" class="item sale col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/residential/data2/data2 (4).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>شقة مساحة 210م بالحي الخامس بالقرب من الشويفات</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة">210</p>
                                </div>
                                <div class="div-felex">
                                    <h4>عدد الغرف</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                            alt="عددالغرف" title="عدد الغرف">3</p>
                                </div>
                                <div class="div-felex">
                                    <h4>عدد الحمامات</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                            alt="عدد الحمامات" title="عدد الحمامات">3</p>
                                </div>
                            </div>
                        </div>
                        <div class="price">
                            <p>
                                جنيه 4,200,000
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
                    <img src="{{url('images/Units/residential/data4/data4 (6).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>شقة مساحة 157م ش التسعين امام الجامعه الامريكية</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة">157</p>
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
                                جنيه 1,613,000
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
                    <img src="{{url('img/Units/residential/data7/data7 (3).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>شقة مساحة 160م بالتجمع الخامس بالاندلس</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة">160</p>
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
            <div id="zx" class="item Financing col-md-4"
                style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
                <div class="featured-item">
                    <img src="{{url('images/Units/residential/data8/data8 (1).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>شقة للبيع وقسط علي 8 سنوات في كمبوند المراسم</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة">160</p>
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
                                2,000,000 جنيه
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
                <img src="{{url('images/Units/residential/data9/data9 (2).jpeg')}}" alt="">
                <!-- <div class="top-right">for rent</div> -->
                <div class="content-featured ">
                    <h3>شقة للايجار بدون فرش تشطيب سوبر لوكس</h3>
                    <div class="felex">
                        <div class="felex">
                            <div class="div-felex">
                                <h4>الموقع</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                            </div>
                            <div class="div-felex">
                                <h4>المساحة</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                        alt="المساحة" title="المساحة"> 200</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الغرف</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                        alt="عددالغرف" title="عدد الغرف">3</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الحمامات</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                        alt="عدد الحمامات" title="عدد الحمامات"> 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>
                            10,000 جنيه
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
                <img src="{{url('images/Units/residential/data10/data10 (5).jpeg')}}" alt="">
                <!-- <div class="top-right">for rent</div> -->
                <div class="content-featured ">
                    <h3>فيلا للبيع 860م في كمبوند ديار المخابرات</h3>
                    <div class="felex">
                        <div class="felex">
                            <div class="div-felex">
                                <h4>الموقع</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                            </div>
                            <div class="div-felex">
                                <h4>المساحة</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                        alt="المساحة" title="المساحة"> 860</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الغرف</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                        alt="عددالغرف" title="عدد الغرف">6</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الحمامات</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                        alt="عدد الحمامات" title="عدد الحمامات"> 6</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>
                            25,000,000 جنيه
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
            <div id="zx" class="item Financing col-md-4"
            style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
            <div class="featured-item">
                <img src="{{url('images/Units/residential/data13/data13 (1).jpeg')}}" alt="">
                <!-- <div class="top-right">for rent</div> -->
                <div class="content-featured ">
                    <h3>فيلا مساحه 623 تقسيط في واتر واي ش التسعين</h3>
                    <div class="felex">
                        <div class="felex">
                            <div class="div-felex">
                                <h4>الموقع</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                            </div>
                            <div class="div-felex">
                                <h4>المساحة</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                        alt="المساحة" title="المساحة"> 623</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الغرف</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                        alt="عددالغرف" title="عدد الغرف">6</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الحمامات</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                        alt="عدد الحمامات" title="عدد الحمامات"> 4</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>
                            41,900,000 جنيه
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
                    <img src="{{url('images/Units/residential/data14/data14 (1).jpeg')}}" alt="">
                    <!-- <div class="top-right">for rent</div> -->
                    <div class="content-featured ">
                        <h3>فيلا مساحه 705م في كمبوند الديار ش التسعين</h3>
                        <div class="felex">
                            <div class="felex">
                                <div class="div-felex">
                                    <h4>الموقع</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                                </div>
                                <div class="div-felex">
                                    <h4>المساحة</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                            alt="المساحة" title="المساحة"> 705</p>
                                </div>
                                <div class="div-felex">
                                    <h4>عدد الغرف</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                            alt="عددالغرف" title="عدد الغرف">5</p>
                                </div>
                                <div class="div-felex">
                                    <h4>عدد الحمامات</h4>
                                    <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                            alt="عدد الحمامات" title="عدد الحمامات">5</p>
                                </div>
                            </div>
                        </div>
                        <div class="price">
                            <p>
                                17,500,000 جنيه
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
            <div id="zx" class="item Financing col-md-4"
            style="position: absolute;left: 0px;top: 30px; transform: translate3d(0px, 1282px, 0px) scale3d(1, 1, 1);opacity: 1;">
            <div class="featured-item">
                <img src="{{url('images/Units/residential/data15//data15 (8).jpeg')}}" alt="">
                <!-- <div class="top-right">for rent</div> -->
                <div class="content-featured ">
                    <h3>شقة للبيع مساحة 170م بالتقسيط متشطبة تشطيب كامل</h3>
                    <div class="felex">
                        <div class="felex">
                            <div class="div-felex">
                                <h4>الموقع</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                            </div>
                            <div class="div-felex">
                                <h4>المساحة</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                        alt="المساحة" title="المساحة"> 170</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الغرف</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                        alt="عددالغرف" title="عدد الغرف">3</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الحمامات</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                        alt="عدد الحمامات" title="عدد الحمامات"> 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>
                            3,000,000 جنيه
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
                <img src="{{url('images/Units/residential/data16/data16 (3).jpeg')}}" alt="">
                <!-- <div class="top-right">for rent</div> -->
                <div class="content-featured ">
                    <h3>فيلا مساحة 662م في كمبوند الديار ش التسعين ج متشطبة لوكس</h3>
                    <div class="felex">
                        <div class="felex">
                            <div class="div-felex">
                                <h4>الموقع</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                            </div>
                            <div class="div-felex">
                                <h4>المساحة</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                        alt="المساحة" title="المساحة"> 662</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الغرف</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/rooms_number_mob.png?var=8"
                                        alt="عددالغرف" title="عدد الغرف">8</p>
                            </div>
                            <div class="div-felex">
                                <h4>عدد الحمامات</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/bathrooms_number_mob.png?var=8"
                                        alt="عدد الحمامات" title="عدد الحمامات">5</p>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <p>
                            23,000,000 جنيه
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
                <img src="{{url('images/Units/residential/data21/data21 (10).jpeg')}}" alt="">
                <!-- <div class="top-right">for rent</div> -->
                <div class="content-featured ">
                    <h3>شقة للايجار مساحه 160م بالمستثمرين</h3>
                    <div class="felex">
                        <div class="felex">
                            <div class="div-felex">
                                <h4>الموقع</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/locat.png?var=2">التجمع الخامس</p>
                            </div>
                            <div class="div-felex">
                                <h4>المساحة</h4>
                                <p><img src="https://aqaryamasr.com/frontend/imgs/property/size_mob.png?var=8"
                                        alt="المساحة" title="المساحة"> 160</p>
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
                            7,000 جنيه
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
    </div> --}}
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
        </div>

    </footer>
    <!-- Featred Page Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('js/unit/jquery.min.js')}}"></script>
    <script src="{{url('js/unit/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{url('js/unit/custom.js')}}"></script>
    <script src="{{url('js/unit/owl.js')}}"></script>
    <script src="{{url('js/unit/isotope.js')}}"></script>





</body>

</html>
