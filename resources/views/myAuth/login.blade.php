@extends('templates.app')

@section('title')
Register
@endsection

@section('main')
<div class="flex bg-gray-50 w-full h-screen items-center justify-center">
    <div
        class="grid lg:grid-cols-2 p-10 bg-white shadow-xl w-full lg:w-2/3 mx-5 lg:mx-0 rounded-sm gap-10 lg:h-3/4 h-auto">

        <!-- Columna del formulario -->
        <form action="{{ route('login') }}" method="POST" class="h-full">
            @csrf
            <div class="flex flex-col h-full justify-around">
                <div>
                    <h2 class="text-3xl text-center font-light mb-5">Login Form</h2>

                    <div class="flex flex-col mb-4">
                        <label class="text-gray-500 text-md" for="email">Email Address</label>
                        <x-input-b-b-text name="email" value="" id="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500 text-md" for="password">Password</label>
                        <x-input-b-b-password name="password" id="password" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex justify-left mb-5 items-center gap-1 mt-2">
                        <input type="checkbox" name="remember-password" id="remember-password"
                            class="bg-gray-100 border-gray-200 rounded h-2 w-2">
                        <label for="remember-password" class="text-gray-500 text-sm">Remember Password?</label>
                    </div>

                    <div class="flex justify-center">
                        <input type="submit" value="Login"
                            class="bg-black hover:bg-white border border-black text-white hover:text-black transition-colors duration-200 w-2/3 p-2 cursor-pointer">
                    </div>
                </div>
                <div class="flex flex-col w-full border-t border-gray-300 mt-5 p-5">
                    <h2 class="text-center text-gray-500 text-sm">Don't have an account yet?</h2>
                    <a href="{{ route('register.view') }}"
                        class="text-center text-gray-500 text-sm underline hover:text-green-500">Register now</a>
                </div>
            </div>
        </form>

        <!-- Columna de la imagen -->
        <div class="hidden lg:block border-2 border-gray-400  overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('img/espa-2.jpg') }}" alt="spa">
        </div>
    </div>
</div>
@endsection