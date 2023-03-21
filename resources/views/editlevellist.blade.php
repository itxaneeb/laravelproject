@extends('admin.admindashboard')


@section('content')

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">   Add Levels  </h5>
            </div>
            <div class="card-body">
            <form action="{{ route('updatelevellist', $user->id) }}" method="post">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="basic-default-name" name="Name" placeholder="John Doe" value="{{ $user->Name }}"/>
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">First Person Commision</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="firstperson" placeholder="Enter Your First person  COMMISSION"  value="{{ $user->firstperson }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Second person  COMMISSION</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="secondperson" placeholder="Enter Your Second person  COMMISSION" value="{{ $user->secondperson }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Third person  COMMISSION</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="thirdperson" placeholder="Enter Your third person  COMMISSION" value="{{ $user->thirdperson }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Total Member</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="totalmember" placeholder="Total Member" value="{{ $user->totalmember }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">withdraw MOney</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="withdrawlimit" placeholder="withdraw MOney" value="{{ $user->withdrawlimit }}" />
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