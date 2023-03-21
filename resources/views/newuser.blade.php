@extends('admin.admindashboard');

@section('content')
    
        @livewire('approve')
    
@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script> --}}
{{-- <script>
    
    function approved(id){
        // alert("sdff");
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        const approved = {
            user_id:id
        }
        fetch ('newuserrr',{
            method : 'POST',
            headers:{
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
                     },
            body: JSON.stringify(approved)
        })
        .then(data => {
                return data.json();
        })
            .then(post => {
                window.location.reload();
             });

    }
</script> --}}