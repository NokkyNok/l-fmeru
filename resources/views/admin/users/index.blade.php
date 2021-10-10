@extends('admin.users.base')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Orders</h3>
                            <p class="text-muted">all order list <code></code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">USER ID</th>
                                            <th class="border-top-0">USER NAME</th>
                                            <th class="border-top-0">EMAIL ADDRESS</th>

                                            <th class="border-top-0">edit role</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users  as $user)
                                        <tr>
                                            
                                            <td>{{$user ->id}}</td>
                                            <td>{{$user ->name}}</td>
                                            <td>{{$user ->email}}</td>
                                            <td>{{implode (',', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                            <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary btn-sm text-lowercase" > <i class="fas fa-file animated rotateIn"></i>Edit Role</a></td>
                                            
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
            