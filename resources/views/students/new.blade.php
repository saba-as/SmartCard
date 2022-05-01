@extends('layout.app')

@section('pageTitle', 'اضافة طالب')

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
                اضافة طالب
            </span>
        </h2>
        <a href="{{ route('students') }}"
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


    <div class="mt-24 h-screen">
        <div class="m-auto md:col-span-2 w-8/12 border bg-white rounded-xl">

            @if ($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif


            <form action="{{ route('addNewStudent') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">اسم الطالب</label>
                                <input type="text" name="name" id="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="department" class="block text-sm font-medium text-gray-700">القسم</label>
                                <input type="text" name="department" id="department"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="id_number" class="block text-sm font-medium text-gray-700">رقم الهوية</label>
                                <input type="text" name="id_number" id="id_number"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="study" class="block text-sm font-medium text-gray-700">الدراسة</label>
                                <select id="study" name="study"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-1 rounded-md">
                                    <option>الدراسة الصباحية</option>
                                    <option>الدراسة المسائية</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="expire_at" class="block text-sm font-medium text-gray-700">تاريخ
                                    الانتهاء</label>
                                <input type="date" name="expire_at" id="expire_at"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-2 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="student_status" class="block text-sm font-medium text-gray-700">حالة
                                    الطالب</label>
                                <select id="student_status" name="student_status"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 border block w-full shadow-sm sm:text-sm border-gray-300 px-3 py-1 rounded-md">
                                    <option>طالب</option>
                                    <option>متخرج</option>
                                    <option>مفصول</option>
                                    <option>مطلوب في الادارة</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label class="block text-sm font-medium text-gray-700">
                                    صورة الطالب
                                </label>
                                <div
                                    class="mt-1 w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm justify-center text-gray-600">
                                            <label for="image"
                                                class="text-center relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>تحميل الملف</span>
                                                <input id="image" name="image" type="file" class="sr-only" />
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            الملفات المسموح بها
                                            PNG, JPG حتى 10MB
                                        </p>
                                    </div>
                                </div>

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
