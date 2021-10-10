




<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
	<title>Sign in </title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>

<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="full name">
            </div>
             <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  placeholder="email address">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="password">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">
            </div>
            <button type="submit" class="btn solid">Register</button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Have an Account already ?</h3>
            <p>
              Sign in to your your account to be able to submit or claim a property with us
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="{{route('log')}}">Sign in</a>
            </button>
          </div>
          <img src="{{asset('assets/img/auth/register.png')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
           
          <img src="{{asset('assets/img/auth/register.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('assets/js/app.js')}}"></script>
	
</body>



















