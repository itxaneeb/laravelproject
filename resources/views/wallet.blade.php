@extends('layouts.app')

@section('content')
    <section>
        
        <div class="w-4/5 lg:w-1/2 mx-auto my-8">
       
        <div class="w-full flex flex-col  items-center justify-center gap-6">
            <h1 class="text-2xl font-semibold uppercase mx-auto">Your Wallet</h1>
            <div class="w-full grid grid-cols-2 gap-4">
            <span
                class="flex flex-col text-center h-32 justify-between gap-2 w-full p-3 border-2 shadow-lg rounded-lg"
            >
                <h2 class="text-xl font-semibold">
                Total <br />
                Earning
                </h2>
                <h3 class="text-xl font-medium">1500</h3>
            </span>
            <span
                class="flex flex-col text-center h-32 justify-between gap-2 w-full p-3 border-2 shadow-lg rounded-lg"
            >
                <h2 class="text-xl font-semibold">
                Current <br />
                Balance
                </h2>
                <h3 class="text-xl font-medium">{{ $user->total_earning }}</h3>
            </span>
            <span
                class="flex flex-col text-center h-32 justify-between gap-2 w-full p-3 border-2 shadow-lg rounded-lg"
            >
                <h2 class="text-xl font-semibold">
                Task <br />
                Earning
                </h2>
                <h3 class="text-xl font-medium">{{ $user->task_earning }}</h3>
            </span>
            <span
                class="flex flex-col text-center h-32 justify-between gap-2 w-full p-3 border-2 shadow-lg rounded-lg"
            >
                <h2 class="text-xl font-semibold">
                Team <br />
                Earning
                </h2>
                <h3 class="text-xl font-medium">{{ $user->team_earning }}</h3>
              
            </span>
            <span
                class="flex col-span-2 flex-col text-center h-32 justify-between gap-2 w-full p-3 border-2 shadow-lg rounded-lg"
            >
                <h2 class="text-xl font-semibold">
                Pending <br />
               Withdraw
                </h2>
                <h3 class="text-xl font-medium"></h3>
            </span>
            </div>
            <div class="flex flex-col">
            <a
                href="{{ route('withdraw') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 text-center focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-1.5 mr-2 mb-2"
            >
                Withdraw Money
            </a>
            <a
                href="{{ route('withdrawHistroy') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 text-center focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-1.5 mr-2 mb-2"
            >
                Show History
            </a>
            </div>
        </div>
       
        </div>
       
    </section>
@endsection