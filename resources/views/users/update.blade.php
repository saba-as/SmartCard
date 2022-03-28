@extends('layout.app')

@section('pageTitle', 'تغيير كلمة السر')

@section('content')


    <div
        class="fixed top-0 w-screen z-50 flex px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40 justify-between items-center">
        <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            <span class="mr-1">
                تغيير كلمة السر
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
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            

                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">كلمة السر الجديدة</label>
                                <input type="password" name="password" id="password" autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">اعادة كتابة كلمة السر الجديدة</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-2 rounded-md">
                            </div>
                           

                            
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            تعديل
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>



    @include('layout.navbar')


@endsection
