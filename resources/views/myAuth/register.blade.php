@extends('templates.app')

@section('title')
Register
@endsection

@section('main')
<div class="flex bg-gray-50 w-full h-screen items-center justify-center">
    <div
        class="grid lg:grid-cols-2 p-10 bg-white shadow-xl w-full lg:w-2/3 mx-5 lg:mx-0 rounded-sm gap-10 lg:h-3/4 h-auto">
        <!-- Columna de la imagen -->
        <div class="hidden lg:block border-2 border-gray-400  overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ asset('img/espa.jpg') }}" alt="spa">
        </div>

        <!-- Columna del formulario -->
        <form action="{{ route('register') }}" method="POST" class="h-full">
            @csrf
            <h2 class="text-3xl font-light mb-5">Registration Form</h2>

            <!-- Fila 1 -->
            <div class="flex flex-col lg:flex-row w-full lg:gap-1">
                <div class="flex lg:w-1/2 flex-col mb-4">
                    <label class="text-gray-500 text-md" for="name">Name</label>
                    <x-input-b-b-text name="name" value="" id="name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="flex lg:w-1/2 flex-col mb-4">
                    <label class="text-gray-500 text-md" for="last_name">Last Name</label>
                    <x-input-b-b-text name="last_name" value="" id="last_name" required 
                        autocomplete="last_name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
            </div>

            <!-- Campos adicionales del formulario -->
            <div class="flex flex-col mb-4">
                <label class="text-gray-500 text-md" for="username">Username</label>
                <x-input-b-b-text name="username" value="" id="username" required  autocomplete="username" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <div class="flex flex-col mb-4">
                <label class="text-gray-500 text-md" for="email">Email Address</label>
                <x-input-b-b-text name="email" value="" id="email" required  autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex flex-col mb-4">
                <label class="text-gray-500 text-md" for="gender">Gender</label>
                <select class="border-0 border-b border-gray-400" name="gender">
                    <option value="" disabled selected>Choose gender</option>
                    <option value="1">Woman</option>
                    <option value="2">Men</option>
                </select>
            </div>

            <div class="flex flex-col mb-4">
                <label class="text-gray-500 text-md" for="password">Password</label>
                <x-input-b-b-password name="password" value="" id="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex flex-col mb-4">
                <label class="text-gray-500 text-md" for="password_confirmation">Confirm Password</label>
                <x-input-b-b-password name="password_confirmation" value="" id="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex justify-center">
                <input type="submit" value="Sign Up"
                    class="bg-black hover:bg-white border text-white hover:text-black transition-colors duration-200 w-2/3 p-2 cursor-pointer">
            </div>
            <div class="flex flex-col w-full border-t border-gray-300 mt-5 p-5">
                <h2 class="text-center text-gray-500 text-sm">You have an account?</h2>
                <a href="{{ route('login.view') }}"
                    class="text-center text-gray-500 text-sm underline hover:text-green-500">Sing in</a>
            </div>
        </form>
    </div>
</div>
@endsection