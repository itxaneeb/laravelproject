@extends('layouts.app')

@section('content')
    <section>
        <div class="w-4/5 mx-auto my-8">
        <div class="w-full flex flex-col items-center justify-center gap-6">
            <h1 class="text-2xl font-semibold uppercase mx-auto">
            Links To Earn
            </h1>
            @foreach ($user as $link)
            <div class="space-y-4">
                <span class="flex justify-center gap-2 w-full p-3 border-2 shadow-lg border-l-8 border-l-blue-600" >
                        <a href="" class="text-gray-500">{{ $link->url }}</a><br>
                </span>
            </div>
            @endforeach
        </div>
        <span
        class="flex justify-center gap-2 w-full p-3 border-2 shadow-lg border-l-8 border-l-blue-600"
    >
        <p class="text-xl font-medium">Unlock @ Level 2</p>
    </span>
    <span
        class="flex justify-center gap-2 w-full p-3 border-2 shadow-lg border-l-8 border-l-blue-600"
    >
        <p class="text-xl font-medium">Unlock @ Level 2</p>
    </span>
        </div>
    </section>
@endsection