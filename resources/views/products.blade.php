@extends('layouts.app')
   

@section('content')
<section>
    <div class="w-4/5 lg:w-1/2 mx-auto my-8">
    <div class="w-full flex flex-col items-center justify-center gap-6">
        <h1 class="text-2xl font-semibold uppercase mx-auto">Products</h1>
        <div class="w-full grid grid-cols-1 xl:grid-cols-2 gap-4">
            @foreach ($user as $user)
              <div class="flex flex-col text-center h-auto justify-between gap-2 p-3 border-2 shadow-lg rounded-lg">
                <span class="w-full h-4/5">
                  <img src="{{ $user->image }}" alt="" class="w-full h-full object-cover">
                </span>
                <span class="flex justify-start">
                  <h3 class="text-xl font-semibold">{{ $user->price }}</h3>
                </span>
                <div>
                  <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg w-full px-4 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="buy({{ $user->id }})">
                    Buy
                  </button>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        </div>
    </div>
    </div>
 </section>
@endsection

<script>
    
        function buy(id){
            
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            const buy = {
                product_id:id
            }
            fetch ('buyproduct',{
                method : 'POST',
                headers:{
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                         },
                body: JSON.stringify(buy)
            })
            .then(data => {
                    return data.json();
            })
                .then(post => {
                    window.location.reload();
                 });
}
</script>