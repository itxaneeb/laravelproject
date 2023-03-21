@extends('admin.admindashboard')


@section('content')

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">   Edit user Table </h5>
            </div>
            <div class="card-body">
            <form action="{{ route('updateusertable', $users->id) }}" method="post">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Name</label>
                <div class="col-sm-10">
                   
                    <input type="text" class="form-control" id="basic-default-name" name="f_name"  value="{{ $users->f_name }}" placeholder="Enter you Name" />
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name" >Last Name</label>
                    <div class="col-sm-10">
                       
                        <input type="text" class="form-control" id="basic-default-name" name="l_name"  value="{{ $users->l_name }}" placeholder="Enter you Name" />
                    </div>
                      
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name" >Email</label>
                        <div class="col-sm-10">
                           
                            <input type="text" class="form-control" id="basic-default-name" name="email"  value="{{ $users->email}}" placeholder="Enter you Name" />
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name" >PHONE</label>
                            <div class="col-sm-10">
                               
                                <input type="text" class="form-control" id="basic-default-name" name="phone"  value="{{ $users->phone }}" placeholder="Enter you Name" />
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name" >ADDRESS</label>
                                <div class="col-sm-10">
                                   
                                    <input type="text" class="form-control" id="basic-default-name" name="address"  value="{{ $users->address }}" placeholder="Enter you Name" />
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name" >SENDER NUMBER</label>
                                    <div class="col-sm-10">
                                       
                                        <input type="text" class="form-control" id="basic-default-name" name="sendernumber"  value="{{ $users->sendernumber }}" placeholder="Enter you Name" />
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="basic-default-name" >PACKAGE ID	</label>
                                        <div class="col-sm-10">
                                           
                                            <input type="text" class="form-control" id="basic-default-name" name="package_id"  value="{{ $users->package_id }}" placeholder="Enter you Name" />
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name" >TXR_ID	</label>
                                            <div class="col-sm-10">
                                               
                                                <input type="text" class="form-control" id="basic-default-name" name="trx_id"  value="{{ $users->trx_id }}" placeholder="Enter you Name" />
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