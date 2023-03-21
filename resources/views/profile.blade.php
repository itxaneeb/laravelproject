@extends('layouts.app')

@section('content')
    <section>
        <div class="w-4/5 lg:w-1/2 mx-auto my-16">
        <div
            class="w-full flex flex-col relative items-center justify-end p-4 pt-20 text-center gap-1 bg-white border border-gray-200 rounded-lg shadow-md"
        >
            <div
            class="absolute -top-12 w-28 h-28 rounded-full border-4 border-blue-700"
            >
            <img
                src=".admin/assets/avatar4.jpg"
                alt=""
                class="w-full h-full rounded-full object-cover"
            />
            {{-- @dd($user); --}}
            </div>
            <h3 class="text-lg font-medium">{{ $user->f_name }}</h3>
            <h3 class="text-lg font-medium">{{ $user->email }}</h3>
            <h3 class="text-lg font-medium">{{ $user->Package->Name }}</h3>
            <h2 class="text-2xl font-medium"> Level : {{ $user->level_id }}</h2>
            <a  
            href=""
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 mr-2 mb-2"
            >
            Total Earning
            </a>
            <button  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 mr-2 mb-2"   onclick="copyinvite('http://127.0.0.1:8000/invite/{{Crypt::encrypt(auth()->user()->id)}}')" >Copy Invite</button>
        </div>
        </div>
    </section>


<script>
    function copyinvite(link){
        navigator.clipboard.writeText(link);
    };
</script>
@endsection