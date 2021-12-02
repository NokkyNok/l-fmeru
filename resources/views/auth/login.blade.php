<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="{{asset ('assets/css/login.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Login to Account</div>
    <div class="content">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="user-details">
         
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email"  placeholder="Enter your email" name="email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div>
         
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
     
        </div>
       
        <div class="button">
          <input type="submit" value="Login">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
