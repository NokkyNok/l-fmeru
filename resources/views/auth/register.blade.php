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
    <div class="title">Register</div>
    <div class="content">
     <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Enter Name</span>
            <input type="text" id="name" placeholder="Enter your name" name="name"  required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email"  placeholder="Enter your email" name="email"  class="form-control @error('email') is-invalid @enderror" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
           
          </div>
          <div class="user-details">
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="name" placeholder="Enter your name" name="phone"  required>
         
          </div>
          
          <div class="input-box">
            <span class="details">Country</span>
            <select name="country" id="country" form="carform">
              <option value="Kenya" selected >Kenya</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Uganda">Uganda</option>
            </select>
            
            
           
          </div>
    
          <div class="input-box">
            <span class="details">Password</span>
            <input  type="password" id="password" placeholder="Enter your password" name="password" class="form-control @error('password') is-invalid @enderror" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input  type="password" placeholder="Confirm your password" name="password_confirmation" required>
            
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
