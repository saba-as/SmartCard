


<div class="fixed w-full flex justify-center items-start bottom-10">

    <div class=" border rounded-xl p-3 bg-opacity-40 bg-white backdrop-blur-lg">
        

           <div class="flex items-center bg-slate-100 w-full px-3 py-2 rounded-xl text-slate-400">
            <a class="ml-3 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </a>
            <input type="text" placeholder="ابحث عن طالب" class="bg-slate-100 outline-none">

           </div>
          
      

            <nav class="mt-2">
                
                <ul class="flex text-slate-700">
                    <a href="{{route('dashboard')}}" class="text-blue-500 hover:text-blue-700 font-bold">SmartCard</a>
                    <li class="mr-4">
                        <a href="{{route('dashboard')}}" class="  @if(Route::current()->getName() == 'dashboard' ) text-blue-500 font-semibold @endif hover:text-blue-500 text-sm">الرئيسية</a>
                    </li>
                    <li class="mr-4">
                        <a href="{{route('students')}}" class=" @if(Route::current()->getName() == 'students' ) text-blue-500 font-semibold @endif hover:text-blue-500 text-sm">الطلاب</a>
                    </li>
                    <li class="mr-4">
                        <a href="{{route('users')}}" class=" @if(Route::current()->getName() == 'users' ) text-blue-500 font-semibold @endif hover:text-blue-500 text-sm">المستخدمين</a>
                    </li>
                    <li class="mr-4">
                        <a href="{{route('logout')}}" class=" text-red-500 hover:text-red-800 text-sm">تسجيل خروج</a>
                    </li>
                </ul>
            </nav>
       
    </div>
    
</div>

<!--
<div class="fixed flex justify-center items-center h-screen w-screen z-50 bg-neutral-900 top-0 left-0 right-0 backdrop-blur-lg">
    <button class="fixed top-0 right-0">X</button>
    <form action="">
        <input class="border-2 px-3 py-2 rounded-md" type="text" placeholder="اكتب اسم الطالب" value="">
    </form>
</div>
-->
