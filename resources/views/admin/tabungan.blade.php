@extends('partials.admin')

@section('admin')
<div class="justify-between flex bg-[#49D7F5] pr-10 pl-10 py-3 ">
    <div class="flex justify-center items-center font-semibold text-white">
        Tabungan
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
<div class=" mt-5 w-auto h-auto px-32">
    <div class="bg-white border p-6 space-y-6">
        <form class="space-y-6" action="{{route('nabung.admin')}}" method="POST">
            @csrf
            <div>
                <label for="nama" class="block font-bold text-sm">Nama</label>
                <select class="bg-gray-100 mt-2 rounded-sm p-2 outline outline-gray-300 outline-1 focus:outline-[#8ADDEF] focus:outline-2 font-semibold text-sm w-full" name="nama" id="nama">
                    <option value=""><< Pilih nama penabung >></option>
                    @foreach($member as $members)
                    <option value="{{$members->id_torodir}}">{{$members->nama}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div>
                <label for="kategori" class="block font-bold text-sm">Kategori</label>
                <select class="bg-gray-100 mt-2 rounded-sm p-2 outline outline-gray-300 outline-1 focus:outline-[#8ADDEF] focus:outline-2 font-semibold text-sm w-full" name="kategori" id="kategori">
                    <option value=""><< Pilih kategori menabung >></option>
                    <option value="Harian">Harian</option>
                    <option value="Mingguan">Mingguan</option>
                    <option value="Bulanan">Bulanan</option>
                </select>
            </div>
            <div>
                <label for="uang" class="block font-bold text-sm">Jumlah Uang</label>
                <input name="uang" class="bg-gray-100 mt-2 rounded-sm p-2 outline outline-gray-300 outline-1 focus:outline-[#8ADDEF] focus:outline-2 font-semibold text-sm w-full " type="number">
            </div>
            <div>
                <label for="tanggal" class="block font-bold text-sm">Tanggal dan Waktu</label>
                <input name="tanggal" class="bg-gray-100 mt-2 rounded-sm p-2 outline outline-gray-300 outline-1 focus:outline-[#8ADDEF] focus:outline-2 font-semibold text-sm w-full " type="datetime-local">
            </div>
            <input type="hidden" name="admin" value="Nadira Mutia Safa">
            <div class="bg-[#8ADDEF] flex justify-center p-2 rounded-md hover:bg-[#49D7F5] hover:text-slate-100">   
                <button type="submit" class="w-full font-bold text-white">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection