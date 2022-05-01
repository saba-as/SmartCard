@extends('layout.app')

@section('pageTitle', 'المستخدمين')

@section('content')



    <div
        class="fixed top-0 w-screen z-50 flex px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40 justify-between items-center">
        <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <span class="mr-1">
                المستخدمين
            </span>
        </h2>
        <a href="{{ route('newUser')}}" class="bg-blue-50 text-blue-500 px-3 py-1 rounded-xl border border-blue-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <span class="mr-1">
                اضافة مستخدم
            </span>
        </a>
    </div>
    

    <div class="container mx-auto px-4 sm:px-8 max-w-5xl mt-10 mb-40">
        
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full border rounded-lg overflow-hidden">
                    @if (\Session::has('userDeleted'))
                    <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                            {!! \Session::get('userDeleted') !!}
                        
                        </div>
                    </div>

                    @endif

                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    اسم المستخدم
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    البريد الالكتروني
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    تاريخ الانشاء
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                
                            

                                <tr>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$user->name}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$user->email}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$user->created_at->format('Y/m/d')}}
                                        </p>
                                    </td>

                                    @if ($user->id == Auth::user()->id)
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div>
                                            <div class="text-slate-500 hover:text-indigo-900">
                                                لا يمكنك حذف حسابك
                                            </div>

                                        </div>
                                    </td>

                                    @else
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div>
                                            <a href="{{ route('updateUser', ['id' => $user->id])}}" class="text-blue-600 hover:text-indigo-900">
                                                تغيير كلمة السر
                                            </a>
                                            |
                                            <a href="{{ route('deleteUser', ['id' => $user->id])}}" class="text-red-600 hover:text-indigo-900">
                                                حذف
                                            </a>

                                        </div>
                                    </td>
                                        
                                    @endif

                                    

                                   
                                </tr>

                                    

                                @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>





    @include('layout.navbar')


@endsection
