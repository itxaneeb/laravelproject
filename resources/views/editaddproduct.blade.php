@extends('admin.admindashboard')


@section('content')

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            
        <div class="card mb-4">
            <div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">   Add Products  </h5>
            </div>
            <div class="card-body">
            <form action="{{ route('updateaddproduct',$user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="basic-default-name" name="image"  />
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="price"  value='{{ $user->price }}' placeholder="Enter Your Price" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Reward</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="reward" value="{{ $user->reward }}" placeholder="Reward" />
                    </div>
                </div>  
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Package ID</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="basic-default-name" name="packageid">
                            <option value="">Select Package ID</option>
                            @foreach($packages as $package)
                            <option value="{{ $package->id }}" @if ($package->id == $user->packageid) selected @endif>{{ $package->Name }}</option>
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
                             <option value="{{ $level->id }}" @if ($level->id == $user->levelid) selected @endif>{{ $level->Name }}</option>
                            @endforeach
                        </select>
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