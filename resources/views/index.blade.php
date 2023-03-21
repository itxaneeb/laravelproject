@extends('layouts.app')

@section('content')
    <section>
        <div class="w-4/5 lg:w-1/2 mx-auto my-8">
        <form action="" class="flex flex-col gap-4">
            <h1 class="text-2xl font-semibold uppercase mx-auto">
            Create New Account
            </h1>
            <input
            class="rounded-md"
            type="text"
            name="f_name"
            placeholder="First Name"
            />
            <input
            class="rounded-md"
            type="text"
            name="l_name"
            placeholder="Last Name"
            />
            <input
            class="rounded-md"
            type="email"
            name="email"
            placeholder="Email"
            />
            <input
            class="rounded-md"
            type="tel"
            name="phone"
            placeholder="Phone"
            />
            <input
            class="rounded-md"
            type="password"
            name="password"
            placeholder="Password"
            />
            <input
            class="rounded-md"
            type="password"
            name="c_pass"
            placeholder="Confirm Password"
            />
            <textarea
            class="rounded-md"
            name="address"
            id=""
            rows="3"
            placeholder="Address"
            ></textarea>
            <a
            href=""
            class="uppercase text-lg font-semibold bg-blue-500 self-end px-4 py-1 text-white rounded-md"
            type="submit"
            >next</a
            >
        </form>
        </div>
    </section>
@endsection