@extends('layout.app')

@section('pageTitle', 'اضافة مستخدم')

@section('content')

<div
        class="fixed top-0 w-screen z-50 px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40">
        <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span class="mr-1">
                حسابي
            </span>
        </h2>
    </div>




@include('layout.navbar')


@endsection
