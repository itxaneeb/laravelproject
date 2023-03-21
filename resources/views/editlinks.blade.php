@extends('admin.admindashboard')


@section('content')

    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            
        <div class="card mb-4">
            <div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">  Update and edit Links  </h5>
            </div>
            <div class="card-body">
            <form action="{{ route('updatelinks',$user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name" >Links</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="basic-default-name" name="url" value="{{ $user->url }}" }} />
                </div>
                </div>
               
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Reward</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="reward" value="{{ $user->reward }}" placeholder="Reward" />
                    </div>
                </div>  
                {{-- @dd($user); --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Package ID</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="basic-default-name" name="package_id">
                            <option value="">Select Package ID</option>
                            @foreach($packages as $package)
                            <option value="{{ $package->id }}" @if ($package->id == $user->pacakge_id) selected @endif>{{ $package->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Level ID</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="basic-default-name" name="level_id">
                            <option value=""> Level ID</option>
                            @foreach($levels as $level)
                             <option value="{{ $level->id }}" @if ($level->id == $user->level_id) selected @endif>{{ $level->Name }}</option>
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