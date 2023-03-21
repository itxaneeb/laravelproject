@extends('layouts.app')


@section('content')
    <section>
        <div class="w-4/5 lg:w-1/2 mx-auto my-8">
        <div class="w-full flex flex-col items-center justify-center gap-6">
            <h1 class="text-2xl font-semibold uppercase mx-auto">
            Withdraw History
            </h1>

            <div class="relative w-full shadow-md sm:rounded-lg">
            <table
                class="w-full text-base text-center text-blue-100 dark:text-blue-100"
            >
                <thead
                class="text-sm text-white uppercase bg-blue-600 dark:text-white"
                >
                <tr>
                    <th scope="col" class="p-2 lg:p-4">Withdraw Date</th>
                    <th scope="col" class="p-2 lg:p-4">Withdraw Amount</th>
                    <th scope="col" class="p-2 lg:p-4">Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($withdrawals as $withdrawal)
                    {{-- @dd($withdrawal); --}}
                        <tr class="bg-blue-500 border-b border-blue-400">
                            <td class="p-2 lg:p-4">{{ $withdrawal->created_at->format('Y/m/d') }}</td>
                            <td class="p-2 lg:p-4">{{ $withdrawal->Amount }}</td>
                            <td class="p-2 lg:p-4">{{ $withdrawal->status }}</td>
                            
                        </tr>
                      @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </section>
@endsection