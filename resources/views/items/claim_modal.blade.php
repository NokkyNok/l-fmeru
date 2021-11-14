@extends('pages.base')
@section('content')
<a href="#modal1" class="js-modal">Claim item</a>
<div id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titles">
    <div class="modal-wrapper">
        <form action="">
        <h3 class="head">Personal information</h3>
        <div class="form-row">
              
              <div class="form-group col-md-6">
                <label for="name"><h5>Email</h5> </label>
                <input type="email" name="Received_email" value="" disabled="disabled"  class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
            <div class="button"><button class="btn btn-info btn-lg"  >Submit claim search</button></div>
        </form>
    </div>

</div>

@endsection