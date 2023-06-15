<html>

<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('css/log.css')}}">
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="header">
                <img src="{{url('images/other/logo option 2.png')}}" alt="Our Company">
                <p><strong>SIGN IN</strong></p>
            </div>
            <div>
                <input type="email" class="button" id="username" name="email" placeholder="Email" required><br>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="button @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <input type="submit" class="button" id="submit" value="SIGN IN"><br>
            </div>
            <div class="footer">
                <p>New here? <span><a href="{{url('signup')}}">Sign Up Now?</a></span></p>
            </div>
        </form>
    </div>
</body>

</html>
