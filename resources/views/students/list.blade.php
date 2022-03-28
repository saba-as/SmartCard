@extends('layout.app')

@section('pageTitle', 'الطلاب')

@section('content')


    <div
        class="fixed top-0 w-screen z-50 flex px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40 justify-between items-center">
        <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="mr-1">
                الطلاب
            </span>
        </h2>
        <a href="{{ route('newStudent') }}"
            class="bg-blue-50 text-blue-500 px-3 py-1 rounded-xl border border-blue-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <span class="mr-1">
                اضافة طالب
            </span>
        </a>
    </div>

    <div class="container mx-auto px-4 sm:px-8 max-w-5xl mt-10 mb-40">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full border rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    اسم الطالب
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    القسم
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    رقم الهوية
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    الدراسة
                                </th>

                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    حالة الطالب
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <a href="#" class="block relative">
                                                    <img alt="profil" src=" {{ $student->image }}"
                                                        class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                </a>
                                            </div>
                                            <div class="mr-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $student->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $student->department }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $student->id_number }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $student->study }}
                                        </p>
                                    </td>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden="true"
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                            </span>
                                            <span class="relative">
                                                {{ $student->student_status }}
                                            </span>
                                        </span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                                        <a href="#" class="text-red-600 hover:text-indigo-900">
                                            حذف
                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                        <div class="flex items-center">
                            
                                {{$students->links()}}
                       

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @include('layout.navbar')


@endsection
