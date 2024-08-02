<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-slate-200">
    <div class="h-screen flex justify-center items-center ">
        <div class="bg-white w-[425px] h-auto rounded-md border py-6">
            
            <div class=" justify-center items-center w-full h-auto ">
                <div class="flex">
                    <div>
                        <a href="/">
                            <svg class="w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" fill="white"/>
                                <path d="M14.5 17L9.5 12L14.5 7" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center justify-center ml-24">
                        <img src="/img/torologo.png" class="w-32 items-center" alt="">
                    </div>
                </div>
                <div class="mt-4">
                    <h1 class="text-2xl  ml-9 font-bold">
                        <span>Welcome Torodir</span>
                    </h1>
                    <h1 class=" text-sm ml-9">
                        <span>Masuk ke akun torodir menggunakan kode</span>
                    </h1>
                </div>
            </div>
            <div class="h-full mt-8 mx-9">
                <form action="{{route('login.action')}}" method="POST">
                    @csrf
                    <div class="mb-6 pb-2">
                        <label for="kode" class="block text-base font-semibold">Kode Akun</label>
                        <input class="w-full text-sm outline outline-1 outline-slate-200 placeholder:font-semibold  rounded-lg mt-3 bg-gray-50 p-2.5 focus:outline-2 text-gray-900 block focus:ring-[#49D7F5] focus:outline-[#8ADDEF] focus:border-[#49D7F5]" type="text" name="kode" placeholder="Masukkan Kode">
                    </div>
                    <div class="mb-2 flex">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 " >
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 ">Remember me</label>
                        </div>
                    </div>
                    <div class="flex justify-center ">
                        <button type="submit" class="bg-[#8ADDEF] w-full font-semibold text-white hover:bg-[#49D7F5] hover:text-slate-100 py-2 rounded-md">Masuk</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>