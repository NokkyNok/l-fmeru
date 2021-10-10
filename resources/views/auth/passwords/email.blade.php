


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
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <h2 class="title">Reset Password</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

           
            <button type="submit" class="btn solid">Send Password Reset Link</button>
        
          </form>
        
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New Here ?</h3>
            <p>
              Create a new account at L$FMeru and Sign in to submit or claim your document
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="}">Sign Up</a>
            </button>
          </div>
          <img src="{{asset('assets/img/auth/login.png')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
           
          <img src="{{asset('assets/img/auth/register.png')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('assets/js/app.js')}}"></script>
	
</body>





































