@extends('admin.users.base')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit user {{$user->name}}</div>
                 <div class="card-body">
               <form action="{{route('admin.users.update',$user)}}" method="POST" enctype="multipart/form-data">
    @csrf
       @method('PUT')
        @foreach($roles as $role)
        <div class="form-check">
            <input type="checkbox" name="roles[]" value={{$role->id}}>
            <label for="role">{{$role->name}}</label>
        </div>
        @endforeach
        <button class="btn btn-primary">
            Update
        </button>

    </form>
</div>


                
            </div>
        </div>
    </div>
</div>
              </div>

@endsection
            

















