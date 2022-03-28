@extends('layout.app')

@section('pageTitle', 'تسجيل الدخول')

@section('content')

  <!-- component -->
<div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex flex-col justify-center items-center w-full">
    <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
    <div class="space-y-4">
        <h1 class="text-center text-2xl font-semibold text-gray-600">تسجيل دخول المستخدم</h1>
    @if($errors->any())
    <h4 class="text-red-500">{{$errors->first()}}</h4>
    @endif
    <form onsubmit="{{route('doLogin')}}" method="post">
        @csrf
      
        
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">البريد الالكتروني</label>
            <input type="email" name="email" autocomplete="true" class="@error('email')
                border-red-500 border
            @enderror bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
            @error('email')
            <span class="text-red-500">{{ $message }}</span>
                
            @enderror
          </div>
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">كلمة السر</label>
            <input name="password" type="password" class="@error('password')
            border-red-500 border
        @enderror bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
        @error('password')
        <span class="text-red-500">{{ $message }}</span>
                
            @enderror
          </div>
        </div>
        <button class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">دخول</button>
      </div>
    </form>
  </div>
@endsection
