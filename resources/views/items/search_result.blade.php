@extends('pages.base')
@section('content')
<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>items found</h2>
       
        </div>

        <div class="row">
         <h4>Search result {{$search_count}} matching</h4>
         @if($item->isNotEmpty())
         @foreach ($item as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              
              <h4>{{$item->item}}</h4>
              <span>{{$item->docNumber}}</span>
              <span>{{$item->Received_date}}</span>
              <span>{{$item->Received_email}}</span>
              <p>
              </p>
              <div class="social">
              <a href="{{route('claim',$item->id)}}"><button class="btn btn-info btn-sm">claim</button></a>
              </div>
            </div>
          </div>
          @endforeach
          @else 
          <div>
            <h2>No Item Matching your search</h2>
         </div>
         @endif

          
    
       
          

         

        
        </div>

      

    

    </section>
@endsection