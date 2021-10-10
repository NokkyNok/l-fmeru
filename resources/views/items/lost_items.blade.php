@extends('pages.base')
@section('content')
<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>items found</h2>
       
        </div>

        <div class="row">
          @foreach($items as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              
              <h4>{{$item->item}}</h4>
              <span>Received date: {{$item->created_at}}</span>
              <span>Received email: {{$item->Received_email}}</span>
              <span>Received phone: {{$item->phone}}</span>
              <p>
                {{$item->description}}
              </p>
              <div class="social">
              <a href="{{route('claim',$item->id)}}"><button class="btn btn-info btn-sm">claim</button></a>
              </div>
            </div>
          </div>
          @endforeach

         

        
        </div>

      

    

    </section>
@endsection