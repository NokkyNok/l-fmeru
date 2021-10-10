@extends('pages.base')
@section('content')
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Upload Lost Item</h2>
          <p></p>
        </div>

        <div class="row">

          
          
          <div class="col-lg-12 col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            
            <form action="{{route('found.store')}}" class="found-form" method="POST" enctype="multipart/form-data">
            @csrf
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
            <h3 class="head">Document Information</h3>
              <div class="form-row">
              
                <div class="form-group col-md-6">
                  <label for="name"><h5>Item found</h5> </label>
                   
                  <input  type="text" name="item" placeholder=""   class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Bearer's Name</h5> </label>
                  <input type="text" class="form-control"  placeholder="" name="bearer"  />
                  <div class="validate"></div>
                </div>
               
               
                

                <div class="form-group col-md-6">
                  <select name="doc_type" id="">
                   
                    @foreach($document_type as $type)
                    <option value="{{$type->type}}">{{$type->type}}</option>
                    @endforeach

                  </select>

                  
                </div>
               
              </div>
                
                
              
              <label for="formFileLg" class="form-label"><h5>Sample Upload</h5> </label>
              <input class="form-control form-control-lg" name="sample_image" id="formFileLg" type="file" />
              <div class="form-group">
                <label for="name"><h5>Additional information</h5> </label>
                <textarea class="form-control" name="short_description"></textarea>
                <div class="validate"></div>
              </div>
              <br><br><br>


              <h2>Dates and  Addresses</h2>
              <div class="form-row">
              
                <div class="form-group col-md-6">
                  <label for="name"><h5>Location found</h5> </label>
                  <input type="text" name="location" placeholder="" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Location Description</h5> </label>
                  <input type="text" class="form-control"  placeholder="" name="location_desc"  />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Date found</h5> </label>
                  <input type="text" name="Received_date" placeholder="" class="form-control" id="name" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Time found</h5> </label>
                  <input type="text" name="Received_time"  placeholder="" class="form-control" id="name" />
                  <div class="validate"></div>
                </div>
               
                

                
                
              </div>
              <br><br><br>






              <h3 class="head">Personal information</h3>
              <div class="form-row">
              
                <div class="form-group col-md-6">
                  <label for="name"><h5>Email</h5> </label>
                  <input type="email" name="Received_email" value="{{ Auth::user()->name }}" disabled="disabled"  class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Current Location</h5> </label>
                  <input type="text" name="Received_location"  placeholder="" class="form-control" id="name" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name"><h5>Phone Number</h5> </label>
                  <input type="text" class="form-control"  placeholder="" name="phone"  />
                  <div class="validate"></div>
                </div>
               
              </div>
           
              <div class="text-center"><button type="submit" >Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section

@endsection