@extends('pages.base')
@section('content')

<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Sample of items lost and found over the past one month. Sample items and claim for you or your frieds</p>
        </div>

        <div class="row">
        @foreach($items as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              
              <h4>{{$item->item}}</h4>
              <h4>BEARER'S NAME:</h4><span>{{$item->bearer}}</span>
              <p>
                found at EC06 engineering complex. The ID bears the name kibet michael and an ID NUMBER 34526728. additional items found with it are a wallet, Ksh 500 and 2 safaricom simcards.
              </p>
              <div class="social">
                <a href="{{route('claim',$item->id)}}"><button class="btn btn-info btn-sm">claim</button></a>
              </div>
            </div>
          </div>

        @endforeach

        </div>

      </div>




      <!-- modals -->
@guest
 <a href="#modal1" id="modals" class="js-modal"></a>
<div id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

@else

  <a href="#modal1" id="modals" class="js-modal"></a>
<div id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
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
        <label for="name"><h5>Unique No(Reg, ID.Number, Passport No)</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="docNumber"  />
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
 
    <div class="text-center"><button class= "btn btn-info" type="submit" >Submit</button></div>
  </form>
</div>

</div>

    </div>
	

</div>

@endguest




@guest
 <a href="#modal2" id="modals" class="js-modal">Claim item</a>
<div id="modal2" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

@else

  <a href="#modal2" id="modals" class="js-modal"></a>
<div id="modal2" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

          
          
<div class="col-lg-12 col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
  
<form action="{{route('search')}}" class="found-form" method="GET" enctype="multipart/form-data">
  @csrf
  
  @include('flash-message')
  
    <h3 class="head">Search Document by Unique Id(Reg.No, ID.No)</h3>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="name"><h5>Number</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="search"  />
        <div class="validate"></div>
      </div>
     
    </div>
 
    <div class="text-center"><button class= "btn btn-info" type="submit" >Submit</button></div>
  </form>
</div>

</div>

    </div>
	

</div>

@endguest










<!-- Have lost an item? -->
@guest
 <a href="#modal3" id="modals" class="js-modal"></a>
<div id="modal3" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm"></button>
      <div class="row">

@else

  <a href="#modal3" id="modals" class="js-modal"></a>
<div id="modal3" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles" style="display:none;"  >
    <div class="modal-wrapper stopm">
      <button class="closem btn btn-info btn-sm">close</button>
      <div class="row">

          
          
<div class="col-lg-12 col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
  
<form action="{{route('lost.store')}}" class="found-form" method="POST" enctype="multipart/form-data">
  @csrf
  
  @include('flash-message')
  
    <h3 class="head">Lost an Document?(Place submission)</h3>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Doc_unique ID</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="doc"  />
        <div class="validate"></div>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
      <select name="category" id="">
         
         @foreach($document_type as $type)
         <option value="{{$type->type}}">{{$type->type}}</option>
         @endforeach

       </select>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Holder's Name</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="name"  />
        <div class="validate"></div>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Email Address</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="email"  />
        <div class="validate"></div>
      </div>
     
    </div>
    <div class="form-row">
  
      <div class="form-group col-md-6">
        <label for="doc"><h5>Holder's Nationality</h5> </label>
        <input type="text" class="form-control"  placeholder="" name="nationality"  />
        <div class="validate"></div>
      </div>
     
    </div>
 
    <div class="text-center"><button class= "btn btn-info" type="submit" >Submit</button></div>
  </form>
</div>

</div>

    </div>
	

</div>

@endguest

    </section><!-- End Team Section -->

@endsection