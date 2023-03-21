@extends('admin.admindashboard')


@section('content')

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">   Add Packages  </h5>
            </div>
            <div class="card-body">
            <form action="{{ route('updateeditpackageslist' , $user->id) }}" method="post">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="basic-default-name" name="Name"  value="{{ $user->Name }}" placeholder="Enter you Name" />
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="price" value="{{ $user->price }}" placeholder="Enter Your Price" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Waiting Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="waiting_description" value="{{ $user->waiting_description }}" placeholder="Enter Your Second person name" />
                    </div>
                </div>             
                <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
  

@endsection