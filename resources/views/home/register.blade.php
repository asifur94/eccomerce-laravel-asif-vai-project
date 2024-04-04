@extends('home.layouts.master-layout')

@section('title')
    Register Page
@endsection

@section('main-content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6  mx-auto py-24 ">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create a account
                    </h1>
                    @if (session("invalidLogin"))
                        <p class="text-danger">{{session("invalidLogin")}}</p>
                    @endif
                    <form class="space-y-4 md:space-y-6" action="{{route("user.register")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("post")
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your name" value="{{ old("name") }}">
                                @error('name')
                                    <p class="text-red-600">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Write your email address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ old("email") }}"
                                >
                                @error('email')
                                    <p class="text-red-600">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter your password</label>
                            <input type="password" name="password" id="password" placeholder="Write your password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                                @error('password')
                                    <p class="text-red-600">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" name="address" id="address" placeholder="Write your address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ old("address") }}"
                                >
                                @error('address')
                                    <p class="text-red-600">{{ $message }}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="avata"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Picture</label>
                            <input type="file" name="avatar" id="avatar" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                >
                                @error('avatar')
                                    <p class="text-red-600">{{ $message }}</p>
                                @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create a Account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Have an account aready? <a href="{{route("user.login")}}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign In</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
