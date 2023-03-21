@extends('layouts.app')

@section('content')
    <form action="{{ route('paymentstore') }}" method="POST" class="flex flex-col gap-4">
        @csrf
           <select name="package_id" id=""> 
            <option value="">Select Package</option>
                @foreach ($user as $user)
                    <option value="{{ $user->id }}">{{ $user->Name }}</option>
                @endforeach
            </select> 
        <input class="rounded-md" type="number" name="trx_id" placeholder="trx_id" id="name" type="text"  />
        <input class="rounded-md"type="number" name="sendernumber" placeholder="Sender Number" />
        <button class="uppercase text-lg font-semibold bg-blue-500 self-end px-4 py-1 text-white rounded-md"  type="submit"> Submit</button>
    </form>
@endsection