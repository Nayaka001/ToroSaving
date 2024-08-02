@extends('partials.admin')

@section('admin')
<div class="justify-between flex bg-[#49D7F5] pr-10 pl-10 py-3 ">
    <div class="flex justify-center items-center font-semibold text-white">
        Laporan
    </div>
    <div class="flex justify-center items-center ">
        <div>
            <svg class="w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.4" d="M12.1207 12.78C12.0507 12.77 11.9607 12.77 11.8807 12.78C10.1207 12.72 8.7207 11.28 8.7207 9.50998C8.7207 7.69998 10.1807 6.22998 12.0007 6.22998C13.8107 6.22998 15.2807 7.69998 15.2807 9.50998C15.2707 11.28 13.8807 12.72 12.1207 12.78Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path opacity="0.34" d="M18.7398 19.3801C16.9598 21.0101 14.5998 22.0001 11.9998 22.0001C9.39977 22.0001 7.03977 21.0101 5.25977 19.3801C5.35977 18.4401 5.95977 17.5201 7.02977 16.8001C9.76977 14.9801 14.2498 14.9801 16.9698 16.8001C18.0398 17.5201 18.6398 18.4401 18.7398 19.3801Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
        </div>
        <div class="ml-2">
            <div>
                <h1 class="font-semibold text-white">
                    <span>Nadira Mutia Safa</span>
                </h1>
            </div>
            <div>
                <h1 class="text-sm text-white">
                    <span>Admin</span>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="mt-3 px-32 ">
    <div class="bg-white py-6 px-10 flex ">
        <div class="grid grid-cols-2 ">
            @foreach($member as $members)
                <div class="mx-3 mt-3">
                    <a href="{{route('laporantoro.admin', $members->id_torodir)}}">
                        <div class="flex bg-[#8ADDEF] w-full items-center p-3 space-x-4 rounded-lg">
                            <div>
                                <img src="{{ asset('img/' . $members->foto) }}" class="w-20 h-20 object-cover rounded-full" alt="">
                            </div>
                            <div class="font-bold text-white">
                                {{$members->nama}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>  
    </div>
</div>
@endsection