@extends('pages.base')
@section('content')
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          
          
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
            @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            @include('flash-message')
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Item:</h4>
                <p>{{$Claim->item}}</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Bearer's name:</h4>
                <p>{{$Claim->bearer}}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Received by contact:</h4>
                <p>{{$Claim->Received_email}}</p>
              </div>

              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('submitclaim', $Claim->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <br><br><br>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name"><h5>Your Name</h5> </label>
                  <input type="text" name="claimant_name" class="form-control"  />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Your Email</h5> </label>
                  <input type="email" class="form-control" name="claimant_email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Contact Number</h5> </label>
                  <input type="text" name="claimant_phone" class="form-control"    />
                  <div class="validate"></div>
                </div>

                
              </div>
              
            
            
              <div class="text-center "><button type="submit">Send claim</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
@endsection