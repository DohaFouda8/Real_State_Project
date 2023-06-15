<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/signup.css') }}">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="header">
            <img src="{{ url('images/other/logo option 2.png') }}" alt="Our Company">
            <h2>SIGN UP</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="user-box">
                    <input type="text" name="name" id="text" required />
                    <label>Username</label>

                    @error('name')
                    <span class="invalid-feedback" style="color:rgb(43, 3, 3)" role="alert">
                        <strong style="color:rgb(43, 3, 3)">{{ $message }}</strong>
                    </span>
                @enderror

                </div>
                <div class="user-box">
                    <input type="Email" name="email" id="email" required />
                    <label>E-mail</label>
                    @error('email')
                    <span class="invalid-feedback" style="color:rgb(43, 3, 3)" role="alert">
                        <strong style="color:rgb(43, 3, 3)">{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="user-box">
                    <input type="password" id="password" name="password" required>
                    <label>Password</label>
                    @error('password')
                    <span class="invalid-feedback" style="color:rgb(43, 3, 3)" role="alert">
                        <strong style="color:rgb(43, 3, 3)">{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="user-box">
                    <input type="password" id="cnfrm-password" name="password_confirmation" required>
                    <label>Confirm Password</label>
                </div>
                <p id="message"></p>
                <input type="submit" id="btn" onclick="checkPassword()" value="SUBMIT"/>
            </form>
            <script src="{{ url('js/form.js') }}"></script>
</body>
</html>
