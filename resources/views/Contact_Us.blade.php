<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Contact US</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="{{url('css/Contact Us.css')}}" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="form-v6">
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
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="{{url('images/other/contact.jpg')}}" alt="form">
			</div>
			<form class="contact100-form validate-form" action="{{ route('contact_us') }}" method="post">
                @csrf
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
				<span class="contact100-form-title">
					Send Us A Message
				</span>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Full name</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Enter your name..." required>
					<span class="focus-input100"></span>
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
				</div>
				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">Email Address</label>
					<input id="email" class="input100" type="email" name="email" placeholder="Enter your email..." required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<label class="label-input100" for="message">Message</label>
					<textarea id="message" class="input100" name="message"
						placeholder="Type your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn">
						Send
					</button>
				</div>
				<div class="contact100-form-social flex-c-m">
					<a href="https://www.facebook.com/real.estat.102?__tn__=%3C" class="contact100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>
					<a href="https://wa.me/+01094739473" class="contact100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-whatsapp"></i>
					</a>
					<a href="#" class="contact100-form-social-item flex-c-m bg3">
						<i class="fa fa-linkedin"></i>
					</a>
				</div>
			</form>
		</div>
	</div>

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
</body>

</html>
