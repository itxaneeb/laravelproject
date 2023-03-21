@extends('layouts.app')

@section('content')
    <section>
        <div class="w-4/5 lg:w-1/2 mx-auto my-8">
            <div class="w-full flex flex-col items-center justify-center gap-6">
                <div class="w-full flex items-center justify-between gap-8">
                <a
                    href="{{ route('profile') }}"
                    class="flex items-center justify-center flex-1 h-24 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md"
                >
                    <h5
                    class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                    Profile
                    </h5>
                </a>
                <a
                    href="{{ route('wallet') }}"
                    class="flex items-center justify-center flex-1 h-24 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md"
                >
                    <h5
                    class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                    Wallet
                    </h5>
                </a>
                </div>
                <div>
                <a
                    href="{{ route('link') }}"
                    class="flex w-32 items-center justify-center flex-1 h-24 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md"
                >
                    <h5
                    class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                    $
                    </h5>
                </a>
                </div>
                <div class="w-full flex items-center justify-between gap-8">
                <a
                    href="{{ route('task') }}"
                    class="flex items-center justify-center flex-1 h-24 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md"
                >
                    <h5
                    class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                    Task
                    </h5>
                </a>
                <a
                    href="{{ route('product') }}"
                    class="flex items-center justify-center flex-1 h-24 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md"
                >
                    <h5
                    class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                    Sell & <br />
                    Buy
                    </h5>
                </a>
                </div>
                <div>
                    <form
                        action="{{ route('logout') }}"  method="post" class="flex w-32 items-center justify-center flex-1 h-24 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md">
                        @csrf
                        <h5 class="text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <button>Logout</button>
                        </h5>
                    </form>
                 </div>
            </div>
        </div>
     </section>
@endsection