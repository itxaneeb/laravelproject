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
            <form action="{{ route('addlevellist') }}" method="post">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="basic-default-name" name="Name" placeholder="John Doe" />
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">FIRST PERSON COMMISSION</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="firstperson" placeholder="FIRST PERSON COMMISSION" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">SECOND PERSON COMMISSION</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="secondperson" placeholder="SECOND PERSON COMMISSION" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">THIRD PERSON COMMISSION</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="thirdperson" placeholder="THIRD PERSON COMMISSION" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Total Member</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="totalmember" placeholder="Total Member" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">withdraw MOney</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="withdrawlimit" placeholder="withdraw MOney" />
                    </div>
                </div>

                <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
  

@endsection