<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/prop/prop.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>

<body>
    <header>
        <div class="nav-left">
            <img class="logo" src="{{ asset('images/logo option 2 (2).png') }}" alt="">
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
                    <a href="{{ url('residential') }}">residential</a>
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
    <section>
        <div class="landing-page">
            <div class="overlay"></div>
        </div>
    </section>

    <section>
        <h1 id="Fatured" class="fasa"> Fatured Estate </h1>
        <div class="carousel">
            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">01</div>
                    <img src="{{ asset('images/Fatured Estate/1.jpg') }}"/>

                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">02</div>
                    <img src="{{ asset('images/Fatured Estate/2.jpg') }}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">03</div>
                    <img src="{{ asset('images/Fatured Estate/3.jpg')}}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">04</div>
                    <img src="{{ asset('images/Fatured Estate/4.jpg')}}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">05</div>
                    <img src="{{ asset('images/Fatured Estate/5.jpg')}}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">06</div>
                    <img src="{{ asset('images/Fatured Estate/6.jpg')}}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">07</div>
                    <img src="{{ asset('images/Fatured Estate/7.jpg')}}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">08</div>
                    <img src="{{ asset('images/Fatured Estate/8.jpg')}}" />
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">09</div>
                    <img
                        src="{{ asset('images/Fatured Estate/9.jpeg') }}" />
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-box">
                    <div class="num">10</div>
                    <img
                        src="{{ asset('images/Fatured Estate/10.jpg') }}" />
                </div>
            </div>
        </div>
    </section>



    <h1 class="fasa"> about US </h1>
    <section class="about" id="about">

        <img class="about-img" src="{{ asset('images/other/about-banner-1.png')}}">


        <p>A real estate investment site that provides many advantages to a user.
            The possibility of marketing the property yourself
            Equipping and training the marketing staff appropriate to the nature of the real estate project
            Develop a good marketing plan with a specific time to start marketing
            Designing the details of the real estate units for the project in terms of areas and prices
            Manage the sale process professionally, and the sale process takes place in record time and with a good
            value offer
            Privacy and confidentiality is between you and the buyer only.
            Winning the trust of customers, and obtaining a large number of them to achieve high profit.
            Ease of obtaining the unit to be purchased via the Internet, bypassing time and space.
            Ease of obtaining information about any unit and its advantages due to the strong spread of the Internet.
            Low costs of electronic marketing compared to the costs of regular marketing.
            Almost instant interaction between marketer, marketer and end user.

        </p>

    </section>
    <br>
    <br>
    <br>
    <br>


    <!--
        - #PROPERTY----------------------------------------------------------------
    -->
    <section class="property" id="property">
        <div class="container">

            <p class="section-subtitle">Properties</p>

            <h2 class="h2 section-title">Featured Listings</h2>

            <ul class="property-list has-scrollbar">

                <li>
                    <div class="property-card">
                        <figure class="card-banner">
                            <a href="{{url('P-Details')}}"><img src="{{ asset('images/Featured Listings/1.jpg')}}" alt="New Apartment Nice View" class="w-100"></a>
                        </figure>

                        <div class="card-content">
                            <h3 class="h3 card-title">
                                <a href="{{url('P-Details')}}">شقة سكنية مساحه137م للبيع تقسيط التجمع الخامس الشويفات-القاهره</a>
                            </h3>
                            <p class="card-text">
                                امتلك شقة بالروف 137 متر في واتر واي التجمع الخامس (3غرف-2 حمام-مطبغ-رسيبشين قطعتين-تراس) التشطيب الترا سوبر لوكس
                            <ul class="card-list">

                                <li class="card-item">
                                    <strong>3</strong>
                                    <span>Bedrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>3</strong>
                                    <span>Bathrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>137</strong>
                                    <span>Square Ft</span>
                                </li>
                            </ul>
                            <br>
                            <div class="card-price">
                                <strong>810,000 جنية</strong>
                            </div>

                        </div>
                    </div>
                </li>
                <!--  -->
                <li>
                    <div class="property-card">
                        <figure class="card-banner">
                            <a href="{{url('P-Details')}}"><img src="{{ asset('images/Featured Listings/2.jpg')}}" alt="New Apartment Nice View" class="w-100"></a>
                        </figure>

                        <div class="card-content">
                            <h3 class="h3 card-title">
                                <a href="{{url('P-Details')}}">شقة سكنية مساحه 230م للبيع كاش بالتجمع الخامس الشويفات -القاهره</a>
                            </h3>
                            <p class="card-text">
                                شقة_للبيع_التجمع الخامس_ بجوار كايروفيستيفال_داون_تاون_الجامعة الامريكية
                            <ul class="card-list">

                                <li class="card-item">
                                    <strong>3</strong>
                                    <span>Bedrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>2</strong>
                                    <span>Bathrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>230</strong>
                                    <span>Square Ft</span>
                                </li>
                            </ul>
                            <br>
                            <div class="card-price">
                                <strong>3,000,000 جنية</strong>
                            </div>

                        </div>
                    </div>
                </li>
                <!--  -->
                <li>
                    <div class="property-card">
                        <figure class="card-banner">
                            <a href="{{url('P-Details')}}"><img src="{{ asset('images/Featured Listings/3.jpg')}}" alt="New Apartment Nice View" class="w-100"></a>
                        </figure>

                        <div class="card-content">
                            <h3 class="h3 card-title">
                                <a href="{{url('P-Details')}}">شقة سكنية مساحه 56م للبيع بالتقسيط بالتجمع الخامس -الشويفات-القاهره</a>
                            </h3>
                            <p class="card-text">
                            امتلك شقة بمقدم6% وقسط الباقي علي 8 سنوات تشطيب كامل بالتكيفات سوبر الترا لوكس
                            <ul class="card-list">

                                <li class="card-item">
                                    <strong>1</strong>
                                    <span>Bedrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>1</strong>
                                    <span>Bathrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>56</strong>
                                    <span>Square Ft</span>
                                </li>
                            </ul>
                            <br>
                            <div class="card-price">
                                <strong>150,000 جنية</strong>
                            </div>

                        </div>
                    </div>
                </li>
                <!--  -->
                <li>
                    <div class="property-card">
                        <figure class="card-banner">
                            <a href="{{url('P-Details')}}"><img src="{{ asset('images/Featured Listings/4.jpg')}}" alt="New Apartment Nice View" class="w-100"></a>
                        </figure>

                        <div class="card-content">
                            <h3 class="h3 card-title">
                                <a href="{{url('P-Details')}}">دوبلكس سكني 187م للبيع بالتقسيط بالتجمع الخامس الشويفات القاهرة</a>
                            </h3>
                            <p class="card-text">
                                بالمراسم ببنتا هاوس 187متر+120متر (روف)  استلام فوري  وتسهيلات سداد حتي 8 سنوات
                            <ul class="card-list">

                                <li class="card-item">
                                    <strong>4</strong>
                                    <span>Bedrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>3</strong>
                                    <span>Bathrooms</span>
                                </li>
                                <li class="card-item">
                                    <strong>187</strong>
                                    <span>Square Ft</span>
                                </li>
                            </ul>
                            <br>
                            <div class="card-price">
                                <strong>300,000 جنية</strong>
                            </div>

                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </section>

        <footer class="footer-sec">
            <div class="main">
                <div class="logo row">
                    <div class="footer-header">
                        <img src="{{ asset('images/other/logo option 2.png" class="manik')}}" alt="">
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
                        <a href="{{ url('/') }}" class="footer-links">Home</a>
                        <a href="{{ url('log') }}" class="footer-links">Login</a>
                        <a href="{{ url('contact_us') }}" class="footer-links">Contact</a>
                        <a href="{{ url('dashboard') }}" class="footer-links">host</a>
                        <a href="{{ url('residential') }}" class="footer-links">estate</a>
                        <a href="{{ url('commercial') }}" class="footer-links">unit</a>
                    </div>
                </div>
                <div class="linkima">
                    <img class="imw" src="{{ asset('images/other/service-1.png')}}" alt="">
                    <img class="imw" src="{{ asset('images/other/service-2.png')}}" alt="">
                    <img class="imw" src="{{ asset('images/other/service-3.png')}}" alt="">
                </div>
            </div>

        </footer>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
