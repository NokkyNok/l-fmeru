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
              <h4>BEARER'S NAME:</h4><span>kibet Michael</span>
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
    </section><!-- End Team Section -->

@endsection