@extends('layout.app')

@section('pageTitle', 'اضافة مستخدم')

@section('content')


    <div
        class="fixed top-0 w-screen z-50 flex px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40 justify-between items-center">
        <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <span class="mr-1">
                اضافة مستخدم
            </span>
        </h2>
        <a href="{{ route('users') }}"
            class="bg-red-50 text-red-500 px-3 py-1 rounded-xl border border-red-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="mr-1">
                الغاء
            </span>
        </a>
    </div>


    <div class="mt-24">

        <div class="m-auto md:col-span-2 w-8/12 border bg-white rounded-xl">

            @if (\Session::has('userAdded'))
                    <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                            {!! \Session::get('userAdded') !!}
                        
                        </div>
                    </div>

                    @endif

                    @if (\Session::has('error'))
                    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                            {!! \Session::get('error') !!}
                        
                        </div>
                    </div>

                    @endif

            <form action="{{ route('addNewUser') }}" method="POST">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">اسم المستخدم</label>
                                <input type="text" name="name" id="name" autocomplete="given-name"
                                    class="@error('name')
                                    border-red-500 border
                                @enderror bg-indigo-50 px-4 py-2 outline-none rounded-md w-full mt-2">

                                @error('name')
                                    <span class="text-red-500">{{ $message }}</span>

                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">البريد الالكتروني</label>
                                <input type="email" name="email" id="email" autocomplete="given-name"
                                    class="@error('email')
                                    border-red-500 border
                                @enderror bg-indigo-50 px-4 py-2 outline-none rounded-md w-full mt-2">

                                @error('email')
                                    <span class="text-red-500">{{ $message }}</span>

                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">كلمة السر</label>
                                <input type="password" name="password" id="password" autocomplete="given-name"
                                    class="@error('password')
                                    border-red-500 border
                                @enderror bg-indigo-50 px-4 py-2 outline-none rounded-md w-full mt-2">

                                @error('password')
                                    <span class="text-red-500">{{ $message }}</span>

                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">اعادة
                                    كتابة كلمة السر</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    autocomplete="given-name"
                                    class="@error('password_confirmation')
                                    border-red-500 border
                                @enderror bg-indigo-50 px-4 py-2 outline-none rounded-md w-full mt-2">


                                @error('password_confirmation')
                                    <span class="text-red-500">{{ $message }}</span>

                                @enderror
                            </div>



                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            اضافة
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>



    @include('layout.navbar')


@endsection
