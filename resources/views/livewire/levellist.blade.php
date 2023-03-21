<div class="card">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h5 class="card-header">    Level   </h5>
    <a href="{{ route('addlevel') }}" class="btn btn-primary " style="width: 200px">Add level</a>
    <div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>First Person commission</th>
            <th>Second Person commission</th>
            <th>Third Person commission</th>
            <th>Total Members</th>
            <th>withdrawlimit</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
         
            @foreach ($levellist as $levellist)
            
            <tr>
                <td>{{ $levellist->id }}</td>
                <td>{{ $levellist->Name }}</td>
                <td>{{ $levellist->firstperson }}</td>
                <td>{{ $levellist->secondperson	 }}</td>
                <td>{{ $levellist->thirdperson }}</td>
                <td>{{ $levellist->totalmember }}</td>
                <td>{{ $levellist->withdrawlimit }}</td>
                <td>
                    <a href="{{ route('editlevellist', $levellist->id )}}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach     
        </tbody>
    </table>
    </div>
</div>