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
<body class="w-full bg-white">
    <div class="w-full h-20 bg-[#38B5D0] top-0 flex">
        <div class="pl-24 pr-[108px] flex justify-between w-full">
            <div class="items-center flex">
                <img src="/img/torologo.png" class="w-44 h-auto" alt="">
            </div>
            <div class="flex w-full justify-end pl-20 py-5">
                <div class="flex hover:text-slate-200 text-white h-full justify-center items-center w-24">
                    <a class="font-bold w-full h-full items-center flex justify-center" href="">Home</a>
                </div>
                <div class="flex hover:text-slate-200 text-white h-full justify-center items-center w-24">
                    <a class="font-bold w-full h-full items-center flex justify-center" href="#about-us">Teams</a>
                    {{-- <svg viewBox="0 0 24 24" height="24" fill="#000000" stroke=""><path d="M16.6,8.6L12,13.2L7.4,8.6L6,10l6,6l6-6L16.6,8.6z"></path></svg> --}}
                </div>
                <div class="flex hover:text-slate-200 text-white h-full justify-center items-center w-24">
                    <a class="font-bold w-full h-full items-center flex justify-center" href="#fitur">Fitur</a>
                    {{-- <svg viewBox="0 0 24 24" height="24" fill="#000000" stroke=""><path d="M16.6,8.6L12,13.2L7.4,8.6L6,10l6,6l6-6L16.6,8.6z"></path></svg> --}}
                </div>
                <div class="flex hover:bg-[#49D7F5] hover:text-slate-100 text-white bg-[#8ADDEF] h-auto rounded-md justify-center items-center w-24">
                    <a class="font-bold w-full h-full items-center flex justify-center" href="{{route('login.index')}}">Login</a>
                    {{-- <svg viewBox="0 0 24 24" height="24" fill="#000000" stroke=""><path d="M16.6,8.6L12,13.2L7.4,8.6L6,10l6,6l6-6L16.6,8.6z"></path></svg> --}}
                </div>
                
            </div>
            
            {{-- <div  class="items-center flex text-white">
                <a class="font-bold w-full h-full items-center flex justify-center" href="">Login</a>
            </div> --}}
        </div>
    </div>
    @yield('body')
</body>
</html>