<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="{{asset('css/DASH/user.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>

    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Real <span>Estate</span></h3>
        </div>
        <div class="right_area">
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item logout_btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>        </div>
    </header>
    <div class="sidebar">
        <center>
            <img src="{{ asset('images/1.jpg`') }}" class="profile_image" alt="">
            <h4>Dashboard</h4>
        </center>
        <a href="{{ url('unit') }}"><i class="fas fa-plus"></i><span>Add</span></a>
        <a href="{{ route('unit.show',1) }}"><i class="fas fa-trash"></i><span>Delete</span></a>
    </div>

</body>

</html>
