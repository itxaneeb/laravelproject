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
            <form action="{{ route('savelinks') }}" method="post">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Links</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="basic-default-name" name="url" placeholder="paste a link here" />
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Reward</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="reward" placeholder="Enter Reward" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Package ID</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="basic-default-name" name="packageid">
                            <option value="">Select Package ID</option>
                            @foreach($packages as $package)
                                <option value="{{ $package->id }}">{{ $package->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Level ID</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="basic-default-name" name="levelid">
                            <option value=""> Level ID</option>
                            @foreach($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->Name }}</option>
                            @endforeach
                        </select>
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