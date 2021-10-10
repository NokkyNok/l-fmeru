@extends('admin.l$fitems.base')
@section('content')

<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">ITEMS</h3>
                            <p class="text-muted">all item list <code></code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ITEM</th>
                                            <th class="border-top-0">SNAPSHOT</th>
                                            <th class="border-top-0">DATE_RECEIVED</th>

                                            <th class="border-top-0">RECEIVED_FROM</th>
                                            <th class="border-top-0">STATUS</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items  as $item)
                                        <tr>
                                            
                                            <td>{{$item->item}}</td>
                                            <td>{{$item ->sample_image}}</td>
                                            <td>{{$item ->Received_date}}</td>
                                            <td>{{$item ->Received_email}}</td>
                                            
                                            <td><a href="" class="btn btn-primary btn-sm text-lowercase" > <i class="fas fa-file animated rotateIn"></i>Not claimed</a></td>
                                            
                                        </tr>
                                    @endforeach
                                   
                                        

                                    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>


@endsection