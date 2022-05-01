@extends('layout.app')

@section('pageTitle', 'الطالب | ' . $student->name)

@section('content')



    <div
        class="fixed top-0 w-screen z-50 flex px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40 justify-between items-center">
        <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
            <span class="mr-1">
                معلومات الطالب : {{$student->name}}
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
                خروج
            </span>
        </a>
    </div>


    <div class="mt-24 h-screen">
        <div class="m-auto md:col-span-2 w-8/12 bg-white rounded-xl">

            <div class="w-full bg-slate-50 border-2 border-slate-500 border-dashed p-3 flex justify-between rounded-lg">

                <div class="flex">
                    <img class="w-40 h-40 object-center object-cover rounded-lg" width="200" height="200"
                        src="{{ url('/') . '/' . $student->image }}" alt="">

                    <div class="mr-3">
                        <div class="text-2xl font-bold ">{{ $student->name }}</div>
                        <div class="mt-1">{{ $student->department }}</div>
                        <div class="mt-1">{{ $student->study }}</div>
                        <div class="flex items-center mt-4">
                            <div class="ml-3">رقم الهوية</div>
                            <div class="px-3 py-1 rounded border-dashed border-slate-900  border-2 ">
                                {{ $student->id_number }}</div>
                        </div>

                    </div>
                </div>

                <div class="flex flex-col">

                    <div>حالة الطالب</div>

                    <div class="px-3 py-1 font-semibold rounded-lg text-center text-green-900 bg-green-200 leading-tight">



                        {{ $student->student_status }}

                    </div>



                </div>

            </div>



        </div>
        
    </div>

    



    @include('layout.navbar')


@endsection
