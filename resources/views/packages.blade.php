s@extends('layouts.app')

@section('content')
    <section>
        <div class="w-4/5 mx-auto my-8">
        <div class="flex flex-col items-center justify-center gap-6">
            <span
            type="button"
            data-modal-toggle="staticModal"
            class="w-28 h-28 cursor-pointer rounded-full border-4 font-medium border-blue-500 flex items-center justify-center text-xl shadow-xl"
            >
            <h2>Gold</h2>
            </span>
            <span
            class="w-28 h-28 cursor-pointer rounded-full border-4 font-medium border-blue-500 flex items-center justify-center text-xl shadow-xl"
            >
            <h2>Diamond</h2>
            </span>
            <span
            class="w-28 h-28 cursor-pointer rounded-full border-4 font-medium border-blue-500 flex items-center justify-center text-xl shadow-xl"
            >
            <h2>Platinum</h2>
            </span>
        </div>
        </div>
    </section>
@endsection