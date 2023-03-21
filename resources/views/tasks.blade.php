@extends('layouts.app')

@section('content')
    <section>
        <div class="w-4/5 lg:w-1/2 mx-auto my-8">
        <div class="w-full flex flex-col items-center justify-center gap-6">
            <div class="flex items-center justify-center gap-4">
            <div
                class="overflow-hidden relative w-10 h-10 bg-gray-100 rounded-full dark:bg-gray-600"
            >
                <svg
                class="absolute -left-1 w-12 h-12 text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    fill-rule="evenodd"
                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd"
                ></path>
                </svg>
            </div>
            <h1 class="text-lg font-semibold uppercase mx-auto">Username</h1>
            </div>
            <div class="space-y-4">
            <div
                class="border-gray-200 border-2 p-4 space-y-2 rounded-lg text-center shadow-lg"
            >
                <h2 class="text-2xl font-medium">Daily Task</h2>
                <p class="text-lg capitalize text-left">
                Make 10 Referals in 24 hours to claim reward
                </p>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div
                    class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 80%"
                >
                    8/10
                </div>
                </div>
            </div>
            <div
                class="border-gray-200 border-2 p-4 space-y-2 rounded-lg text-center shadow-lg"
            >
                <h2 class="text-2xl font-medium">Weekly Task</h2>
                <p class="text-lg capitalize text-left">
                Make 10 Referals in 24 hours to claim reward
                </p>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div
                    class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 70%"
                >
                    7/10
                </div>
                </div>
            </div>
            <div
                class="border-gray-200 border-2 p-4 space-y-2 rounded-lg text-center shadow-lg"
            >
                <h2 class="text-2xl font-medium">Monthly Task</h2>
                <p class="text-lg capitalize text-left">
                Make 10 Referals in 24 hours to claim reward
                </p>
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div
                    class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                    style="width: 60%"
                >
                    6/10
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection