<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full bg-slate-100">
    <div class="flex w-full h-full">
        <div class="w-60 left-0 top-0 h-full fixed border px-2   bg-white">
            <div class="px-4 flex justify-center items-center  mt-5">
                <img src="/img/torologo.png" class="w-32" alt="">
            </div>
            <a href="{{route('dashboard.admin')}}">
                <div class="flex mt-10 space-x-4 px-7 h-10 w-auto {{ request()->routeIs('dashboard.admin') ? 'bg-[#38B5D0] rounded-md' : 'hover:bg-slate-100 rounded-md hover:text-black' }}">
                    <div class="flex items-center justify-center ">
                        <svg class="w-6" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                        <path fill='{{ request()->routeIs('dashboard.admin') ? '#000000' : '#71717a' }}' fill-rule="evenodd" clip-rule="evenodd" d="M12.2796 3.71579C12.097 3.66261 11.903 3.66261 11.7203 3.71579C11.6678 3.7311 11.5754 3.7694 11.3789 3.91817C11.1723 4.07463 10.9193 4.29855 10.5251 4.64896L5.28544 9.3064C4.64309 9.87739 4.46099 10.0496 4.33439 10.24C4.21261 10.4232 4.12189 10.6252 4.06588 10.8379C4.00765 11.0591 3.99995 11.3095 3.99995 12.169V17.17C3.99995 18.041 4.00076 18.6331 4.03874 19.0905C4.07573 19.536 4.14275 19.7634 4.22513 19.9219C4.41488 20.2872 4.71272 20.5851 5.07801 20.7748C5.23658 20.8572 5.46397 20.9242 5.90941 20.9612C6.36681 20.9992 6.95893 21 7.82995 21H7.99995V18C7.99995 15.7909 9.79081 14 12 14C14.2091 14 16 15.7909 16 18V21H16.17C17.041 21 17.6331 20.9992 18.0905 20.9612C18.5359 20.9242 18.7633 20.8572 18.9219 20.7748C19.2872 20.5851 19.585 20.2872 19.7748 19.9219C19.8572 19.7634 19.9242 19.536 19.9612 19.0905C19.9991 18.6331 20 18.041 20 17.17V12.169C20 11.3095 19.9923 11.0591 19.934 10.8379C19.878 10.6252 19.7873 10.4232 19.6655 10.24C19.5389 10.0496 19.3568 9.87739 18.7145 9.3064L13.4748 4.64896C13.0806 4.29855 12.8276 4.07463 12.621 3.91817C12.4245 3.7694 12.3321 3.7311 12.2796 3.71579ZM11.1611 1.79556C11.709 1.63602 12.2909 1.63602 12.8388 1.79556C13.2189 1.90627 13.5341 2.10095 13.8282 2.32363C14.1052 2.53335 14.4172 2.81064 14.7764 3.12995L20.0432 7.81159C20.0716 7.83679 20.0995 7.86165 20.1272 7.88619C20.6489 8.34941 21.0429 8.69935 21.3311 9.13277C21.5746 9.49916 21.7561 9.90321 21.8681 10.3287C22.0006 10.832 22.0004 11.359 22 12.0566C22 12.0936 22 12.131 22 12.169V17.212C22 18.0305 22 18.7061 21.9543 19.2561C21.9069 19.8274 21.805 20.3523 21.5496 20.8439C21.1701 21.5745 20.5744 22.1701 19.8439 22.5496C19.3522 22.805 18.8274 22.9069 18.256 22.9543C17.706 23 17.0305 23 16.2119 23H15.805C15.7972 23 15.7894 23 15.7814 23C15.6603 23 15.5157 23.0001 15.3883 22.9895C15.2406 22.9773 15.0292 22.9458 14.8085 22.8311C14.5345 22.6888 14.3111 22.4654 14.1688 22.1915C14.0542 21.9707 14.0227 21.7593 14.0104 21.6116C13.9998 21.4843 13.9999 21.3396 13.9999 21.2185L14 18C14 16.8954 13.1045 16 12 16C10.8954 16 9.99995 16.8954 9.99995 18L9.99996 21.2185C10 21.3396 10.0001 21.4843 9.98949 21.6116C9.97722 21.7593 9.94572 21.9707 9.83107 22.1915C9.68876 22.4654 9.46538 22.6888 9.19142 22.8311C8.9707 22.9458 8.75929 22.9773 8.6116 22.9895C8.48423 23.0001 8.33959 23 8.21847 23C8.21053 23 8.20268 23 8.19495 23H7.78798C6.96944 23 6.29389 23 5.74388 22.9543C5.17253 22.9069 4.64769 22.805 4.15605 22.5496C3.42548 22.1701 2.8298 21.5745 2.4503 20.8439C2.19492 20.3523 2.09305 19.8274 2.0456 19.2561C1.99993 18.7061 1.99994 18.0305 1.99995 17.212L1.99995 12.169C1.99995 12.131 1.99993 12.0936 1.99992 12.0566C1.99955 11.359 1.99928 10.832 2.1318 10.3287C2.24383 9.90321 2.42528 9.49916 2.66884 9.13277C2.95696 8.69935 3.35105 8.34941 3.87272 7.8862C3.90036 7.86165 3.92835 7.83679 3.95671 7.81159L9.22354 3.12996C9.58274 2.81064 9.89467 2.53335 10.1717 2.32363C10.4658 2.10095 10.781 1.90627 11.1611 1.79556Z" fill="#0F1729"/>
                        </svg>
                    </div>
                    <div class="flex items-center justify-center {{ request()->routeIs('dashboard.admin') ? 'text-[#000000]' : 'text-[#71717a] ' }}">
                        <h1 class="text-sm font-semibold">
                            <span>Home</span>
                        </h1>
                    </div>
                </div>
            </a>
            <a class="hover:bg-[#8ADDEF]" href="{{route('tabungan.admin')}}">
                <div class="flex mt-3 space-x-4 px-7 h-10 w-auto {{ request()->routeIs('tabungan.admin') ? 'bg-[#38B5D0] rounded-md' : 'hover:bg-slate-100  rounded-md hover:text-black' }}">
                    <div class="flex items-center justify-center">
                        <svg class="w-6" fill="{{ request()->routeIs('tabungan.admin') ? '#000000' : '#71717a' }}"  viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31,7H1A1,1,0,0,0,0,8V24a1,1,0,0,0,1,1H31a1,1,0,0,0,1-1V8A1,1,0,0,0,31,7ZM25.09,23H6.91A6,6,0,0,0,2,18.09V13.91A6,6,0,0,0,6.91,9H25.09A6,6,0,0,0,30,13.91v4.18A6,6,0,0,0,25.09,23ZM30,11.86A4,4,0,0,1,27.14,9H30ZM4.86,9A4,4,0,0,1,2,11.86V9ZM2,20.14A4,4,0,0,1,4.86,23H2ZM27.14,23A4,4,0,0,1,30,20.14V23Z"/>
                            <path d="M7.51.71a1,1,0,0,0-.76-.1,1,1,0,0,0-.61.46l-2,3.43a1,1,0,0,0,1.74,1L7.38,2.94l5.07,2.93a1,1,0,0,0,1-1.74Z"/>
                            <path d="M24.49,31.29a1,1,0,0,0,.5.14.78.78,0,0,0,.26,0,1,1,0,0,0,.61-.46l2-3.43a1,1,0,1,0-1.74-1l-1.48,2.56-5.07-2.93a1,1,0,0,0-1,1.74Z"/>
                            <path d="M16,10a6,6,0,1,0,6,6A6,6,0,0,0,16,10Zm0,10a4,4,0,1,1,4-4A4,4,0,0,1,16,20Z"/>
                        </svg>
                    </div>
                    <div class="flex items-center justify-center {{ request()->routeIs('tabungan.admin') ? 'text-[#000000]' : 'text-[#71717a] ' }}">
                        <h1 class="text-sm font-semibold">
                            <span>Tabungan</span>
                        </h1>
                    </div>
                </div>
            </a>
            <a class="hover:bg-[#8ADDEF]" href="{{route('laporan.admin')}}">
                <div class="flex mt-3    space-x-4 px-7 h-10 w-auto {{ request()->routeIs('laporan.admin', 'laporantoro.admin') ? 'bg-[#38B5D0] rounded-md' : 'hover:bg-slate-100 rounded-md hover:text-black' }}">
                    <div class="flex items-center justify-center">
                        <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="{{ request()->routeIs('laporan.admin', 'laporantoro.admin') ? '#000000' : '#71717a' }}" fill-rule="evenodd" clip-rule="evenodd" d="M23 4C23 3.11596 21.855 2.80151 21.0975 2.59348C21.0279 2.57437 20.9616 2.55615 20.8997 2.53848C19.9537 2.26818 18.6102 2 17 2C15.2762 2 13.8549 2.574 12.8789 3.13176C12.7296 3.21707 12.5726 3.33492 12.4307 3.44143C12.2433 3.58215 12.0823 3.70308 12 3.70308C11.9177 3.70308 11.7567 3.58215 11.5693 3.44143C11.4274 3.33492 11.2704 3.21707 11.1211 3.13176C10.1451 2.574 8.72378 2 7 2C5.38978 2 4.0463 2.26818 3.10028 2.53848C3.04079 2.55547 2.97705 2.57302 2.91016 2.59144C2.156 2.79911 1 3.11742 1 4V17C1 17.3466 1.17945 17.6684 1.47427 17.8507C1.94329 18.1405 2.56224 17.8868 3.11074 17.662C3.30209 17.5835 3.48487 17.5086 3.64972 17.4615C4.4537 17.2318 5.61022 17 7 17C8.2613 17 9.20554 17.4161 9.9134 17.8517C10.0952 17.9636 10.279 18.1063 10.4676 18.2527C10.9338 18.6148 11.4298 19 12 19C12.5718 19 13.0653 18.6162 13.5307 18.2543C13.7195 18.1074 13.9037 17.9642 14.0866 17.8517C14.7945 17.4161 15.7387 17 17 17C18.3898 17 19.5463 17.2318 20.3503 17.4615C20.5227 17.5108 20.7099 17.5898 20.9042 17.6719C21.4443 17.9 22.0393 18.1513 22.5257 17.8507C22.8205 17.6684 23 17.3466 23 17V4ZM3.33252 4.55749C3.13163 4.62161 3 4.81078 3 5.02166V14.8991C3 15.233 3.32089 15.4733 3.64547 15.3951C4.53577 15.1807 5.67777 15 7 15C8.76309 15 10.0794 15.5994 11 16.1721V5.45567C10.7989 5.29593 10.5037 5.08245 10.1289 4.86824C9.35493 4.426 8.27622 4 7 4C5.41509 4 4.12989 4.30297 3.33252 4.55749ZM17 15C15.2369 15 13.9206 15.5994 13 16.1721V5.45567C13.2011 5.29593 13.4963 5.08245 13.8711 4.86824C14.6451 4.426 15.7238 4 17 4C18.5849 4 19.8701 4.30297 20.6675 4.55749C20.8684 4.62161 21 4.81078 21 5.02166V14.8991C21 15.233 20.6791 15.4733 20.3545 15.3951C19.4642 15.1807 18.3222 15 17 15Z" fill="#0F0F0F"/>
                            <path fill="{{ request()->routeIs('laporan.admin', 'laporantoro.admin') ? '#000000' : '#71717a' }}" d="M2.08735 20.4087C1.86161 19.9047 2.08723 19.3131 2.59127 19.0873C3.05951 18.8792 3.54426 18.7043 4.0318 18.5478C4.84068 18.2883 5.95911 18 7 18C8.16689 18 9.16285 18.6289 9.88469 19.0847C9.92174 19.1081 9.95807 19.131 9.99366 19.1534C10.8347 19.6821 11.4004 20 12 20C12.5989 20 13.1612 19.6829 14.0012 19.1538C14.0357 19.1321 14.0708 19.1099 14.1066 19.0872C14.8291 18.6303 15.8257 18 17 18C18.0465 18 19.1647 18.2881 19.9732 18.548C20.6992 18.7814 21.2378 19.0122 21.3762 19.073C21.8822 19.2968 22.1443 19.8943 21.9118 20.4105C21.6867 20.9106 21.0859 21.1325 20.5874 20.9109C20.1883 20.7349 19.7761 20.5855 19.361 20.452C18.6142 20.2119 17.7324 20 17 20C16.4409 20 15.9037 20.3186 15.0069 20.8841C14.2635 21.3529 13.2373 22 12 22C10.7619 22 9.73236 21.3521 8.98685 20.8829C8.08824 20.3173 7.55225 20 7 20C6.27378 20 5.39222 20.2117 4.64287 20.4522C4.22538 20.5861 3.80974 20.7351 3.4085 20.9128C2.9045 21.1383 2.31305 20.9127 2.08735 20.4087Z" fill="#0F0F0F"/>
                            </svg>
                    </div>
                    <div class="flex items-center justify-center {{ request()->routeIs('laporan.admin', 'laporantoro.admin') ? 'text-[#000000]' : 'text-[#71717a] ' }}">
                        <h1 class="text-sm font-semibold">
                            <span>Laporan</span>
                        </h1>
                    </div>
                </div>
            </a>
            <a href="{{route('logout')}}">
                <div class="flex mt-60 mb-7 space-x-4 px-7 h-10 w-auto {{ request()->routeIs('laporan.admin', 'tabungan.admin', 'dashboard.admin', 'laporantoro.admin' ) ? 'bg-[#38B5D0] rounded-md' : 'hover:bg-slate-100 rounded-md hover:text-black' }}">
                    <div class="flex items-center justify-center">
                        <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5 12H9.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5 9L8.5 12L11.5 15" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </div>
                    <div class="flex items-center justify-center">
                        <h1 class="text-sm font-semibold">
                            <span>Logout</span>
                        </h1>
                    </div>
                </div>
            </a>
    
            @if(session('Berhasil'))
    <div id="toast" role="alert" class="fixed top-5 right-14 rounded-2xl border border-gray-100 bg-white p-6 shadow-xl dark:border-gray-800 dark:bg-gray-900 transition duration-700 hidden"> 
        <div class="flex items-start gap-4">
            <span class="text-emerald-600" style="color: green;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <div class="flex-1">
                <div class="text-center bg-white border-b-0 rounded-t-2xl" style="color: green;">
                    <strong class="block font-medium text-gray-900 dark:text-white">Login Berhasil</strong>

                </div>
                <p class="mt-1 text-sm text-gray-700 dark:text-gray-200" style="color: green;">{{ session('Berhasil') }}</p>
            </div>
            
        </div>
    </div>
    @endif
        </div>
        <div class="ml-60  w-full h-full">
            @yield('admin')
        </div>
    </div>
</body>
</html>