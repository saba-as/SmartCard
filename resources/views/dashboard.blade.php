@extends('layout.app')

@section('pageTitle', 'الرئيسية')

@section('content')



    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="flex justify-center items-center">
          <div class="flex justify-center items-center p-2 h-24 w-60 border rounded-xl mx-2">
               <div class="flex justify-center items-center bg-slate-100 h-full w-5/12 rounded-xl text-slate-600">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                   </svg>
               </div>
               <div class="mr-4 w-7/12">
                   <h1>عدد الطلاب</h1>
                   <p class="text-3xl font-bold">204</p>
               </div>
           </div>
   
   
           <div class="flex justify-center items-center p-2 h-24 w-60 border rounded-xl mx-2">
             <div class="flex justify-center items-center bg-blue-100 h-full w-5/12 rounded-xl text-blue-600">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
             </div>
             <div class="mr-4 w-7/12">
                 <h1>عدد المستخدمين</h1>
                 <p class="text-3xl font-bold">6</p>
             </div>
         </div>
   
   
         <div class="flex justify-center items-center p-2 h-24 w-60 border rounded-xl mx-2">
             <div class="flex justify-center items-center bg-green-100 h-full w-5/12 rounded-xl text-green-600">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                  </svg>
             </div>
             <div class="mr-4 w-7/12">
                 <h1>طلاب جدد</h1>
                 <p class="text-3xl font-bold">30</p>
             </div>
         </div>
        </div>


        <div class="w-6/12 mt-32">
             <h1 class="font-bold text-2xl">نظام سمارت كارد لادارة هويات الطلاب</h1>
             <p class="mt-3">يقوم نظام سمارت كارد باتمتت بيانات الطلاب وهوياتهم ليسهل على الادارة الغاء او تجديد بطاقة الطالب وايضا يسهل من عملية التأكد من بيانات الطالب ولا يمكن تزوير الهويات نهائيا</p>
        </div>
    </div>

    @include('layout.navbar')

@endsection
