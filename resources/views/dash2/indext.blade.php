<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="{{asset('css/DASH/idex.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>

    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Real Estate</h3>
        </div>
        <div class="right_area">
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <img src="{{ asset('images/logo option 2 (2).png') }}" class="profile_image" alt="" width="50%" height="40%">
            <h4>Dashboard</h4>
        </center>
        <a href="{{ url('unitPage') }}"><i class="fas fa-city"></i><span>units</span></a>
        <a href="{{ url('user') }}"><i class="fas fa-user"></i><span>client</span></a>
    </div>
    <section class="products">
        <h2>Products</h2>
        <div class="all-products">
            <div class="product">
                <img src="#">
                <div class="product-info">
                    <h4 class="product-title">prouduct
                    </h4>
                    <p class="product-price">$129</p>
                    <a class="product-btn" href="#">Delete</a>

                </div>
            </div>
        </div>
    </section>
    <script src="{{url('js/index.js')}}"></script>
</body>

</html>
