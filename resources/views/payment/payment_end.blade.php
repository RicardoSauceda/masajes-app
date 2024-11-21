@extends('templates.app')

@section('title')
{{ $plan->title }}
@endsection

@section('main')
<div class="grid grid-cols-1 lg:grid-cols-2 w-full gap-2 bg-white p-10">
    <div class="col-span-1 border rounded-md min-h-screen p-5 flex flex-col gap-5">
        <h1 class="font-bold text-lg text-black">Contact information</h1>
        {{-- NAME --}}
        <div class="grid grid-cols-3">
            <div class="col-span-1">Your Name:</div>
            <div class="col-span-2 flex gap-5">
                <div class="flex flex-col w-1/2">
                    <input type="text" name="name" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="name">Name</label>
                </div>
                <div class="flex flex-col w-1/2">
                    <input type="text" name="lastname" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="lastname">Lastname</label>
                </div>
            </div>
        </div>

        {{-- EMAIL --}}
        <div class="grid grid-cols-3">
            <div class="col-span-1">Your Email:</div>
            <div class="col-span-2 flex gap-5">
                <div class="flex flex-col w-full">
                    <input type="email" name="email" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="email">example@example.com</label>
                </div>
            </div>
        </div>

        <h1 class="font-bold text-lg text-black">Address data</h1>
        {{-- Street --}}
        <div class="grid grid-cols-3">
            <div class="col-span-1">Street Address:</div>
            <div class="col-span-2 flex gap-5">
                <div class="flex flex-col w-full">
                    <input type="text" name="street" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="street">Street Address</label>
                </div>
            </div>
        </div>

        {{-- City --}}
        <div class="grid grid-cols-3">
            <div class="col-span-1">City</div>
            <div class="col-span-2 flex gap-5">
                <div class="flex flex-col w-1/2">
                    <input type="text" name="city" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="city">City</label>
                </div>
                <div class="flex flex-col w-1/2">
                    <input type="text" name="state" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="state"> State / Province</label>
                </div>
            </div>
        </div>

        {{-- Postal --}}
        <div class="grid grid-cols-3">
            <div class="col-span-1">Postal:</div>
            <div class="col-span-2 flex gap-5">
                <div class="flex flex-col w-full">
                    <input type="text" name="postal" class="p-2 border border-slate-300 rounded-md">
                    <label class="text-sm text-slate-500 p-1" for="postal">Postal / Zip Code</label>
                </div>
            </div>
        </div>

    </div>

    <form action="{{ route('payment.storage', ['plan_id'=>$plan->id]) }}" method="POST" id="payment-form">
        @csrf
        <div class="col-span-1 border rounded-md min-h-screen p-5 flex flex-col gap-5">
            <input type="text" hidden readonly id="user_name" name="user_name" value="{{ $user->name }}">
            <input type="text" hidden readonly id="public_key" name="public_key" value="{{ $public_key }}">
            {{-- Product Info --}}
            <h1 class="font-bold text-lg text-black">Product information</h1>
            <div class="border p-5">
                <div class="font-bold text-lg"> {{ $plan->title }} </div>
                <div> {{ $plan->price }} USD / <span class="text-slate-400 text-sm">{{ $plan->period }}</span></div>
                <div> {{ $plan->description }} </div>
                <input type="text" name="planid" readonly hidden value="{{ $plan->id }}">
            </div>

            <h1 class="font-bold text-lg text-black">Method of payment</h1>

            {{-- <div class="grid grid-cols-2 gap-2"> --}}
                {{-- <div class="col-span-1 flex flex-col"> --}}
                    {{-- <input type="text" name="name-card" class="p-2 border border-slate-300 rounded-md"> --}}
                    {{-- <label class="text-sm text-slate-500 p-1" for="name-card">Name</label> --}}
                    {{-- </div> --}}
                {{-- <div class="col-span-1 flex flex-col"> --}}
                    {{-- <input type="text" name="lastname-card" class="p-2 border border-slate-300 rounded-md"> --}}
                    {{-- <label class="text-sm text-slate-500 p-1" for="lastname-card">Lastname</label> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- --}}
            {{-- <div class="grid grid-cols-2 gap-2"> --}}
                {{-- <div class="col-span-1 flex flex-col"> --}}
                    {{-- <input type="number" name="card-number" class="p-2 border border-slate-300 rounded-md" --}}
                        {{-- placeholder="**** **** **** ****"> --}}
                    {{-- <label class="text-sm text-slate-500 p-1" for="card-number">Card Number</label> --}}
                    {{-- </div> --}}
                {{-- <div class="col-span-1 flex flex-col"> --}}
                    {{-- <input type="password" name="card-cvv" class="p-2 border border-slate-300 rounded-md"
                        placeholder="CVV"> --}}
                    {{-- <label class="text-sm text-slate-500 p-1" for="card-cvv">Securtity Code</label> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- <div class="grid grid-cols-2 gap-2"> --}}
                {{-- <div class="col-span-1 flex flex-col"> --}}
                    {{-- <input type="text" name="card-expiration" class="p-2 border border-slate-300 rounded-md" --}}
                        {{-- placeholder="MM/YY"> --}}
                    {{-- <label class="text-sm text-slate-500 p-1" for="card-expiration">Card Expiration</label> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- <input type="submit" value="Subscribe"
                class="w-100 bg-orange-500 hover:bg-orange-600 transition-all ease-in-out duration-300 text-white text-2xl p-2 rounded-lg cursor-pointer">
            --}}
            <div id="card-element" class="border border-gray-300 rounded p-4 mb-4">
                <!-- Stripe.js coloca aquí el campo de tarjeta -->
            </div>
            <button id="card-button" type="submit" data-secret="{{ $client_secret }}" class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition-colors">
                Subscribe
            </button>
        </div>
    </form>
</div>
@endsection

<script src="{{ asset('js/stripe.js') }}"></script>