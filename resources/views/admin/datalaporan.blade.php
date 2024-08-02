@extends('partials.admin')
@section('admin')
<div class="justify-between flex bg-[#49D7F5] pr-10 pl-10 py-3 ">
    <div class="flex justify-center items-center font-semibold text-white">
        Data Tabungan
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
<div class="px-6 pt-3 pb-3 flex justify-between">
    <div>
        <input type="text"  placeholder="Cari..." class="px-3 py-2 border border-gray-300 focus:outline-none focus:ring focus:border-blue-300 rounded-md w-80">
    </div>
    <div class="w-auto">
        <select class="bg-gray-100 mt-2 rounded-sm p-2 outline outline-gray-300 outline-1 focus:outline-[#8ADDEF] focus:outline-2 font-semibold text-sm w-full" name="kategori" id="kategori" onchange="toggleDivs()">
            <option value="Semua">Semua</option>
            <option value="Harian">Harian</option>
            <option value="Mingguan">Mingguan</option>
            <option value="Bulanan">Bulanan</option>
        </select>
    </div>
</div>
<div class="px-6" id="semua">
    <table class=" bg-gray-100 border w-full">
        <thead class="bg-[#49D7F5]">
            <tr>
                <th class="py-2 px-4 border border-black">Nama</th>
                <th class="py-2 px-4 border border-black">Kategori</th>
                <th class="py-2 px-4 border border-black">Jumlah Uang</th>
                <th class="py-2 px-4 border border-black">Tanggal dan Waktu</th>
                <th class="py-2 px-4 border border-black">Admin</th>
            </tr>
        </thead>
        <tbody class="divide-y justify-center border divide-gray-200">
            <!-- Contoh data transaksi -->
            @forelse($tabung as $tabungs)
                <tr>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->torodir->nama}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->kategori}}</td>
                    <td class="py-2 border text-center border-black px-4">Rp {{ number_format($tabungs->jumlah_uang, 0, ',', '.') }}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->tanggal_dan_waktu}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->nama_admin}}</td> 
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-2 border text-center border-black px-4">Empty</td>
                </tr>
            @endforelse
            
            <!-- Akhir contoh data -->
        </tbody>
    </table>
</div>
<div class="px-6" id="harian">
    <table class=" bg-gray-100 border w-full">
        <thead class="bg-[#49D7F5]">
            <tr>
                <th class="py-2 px-4 border border-black">Nama</th>
                <th class="py-2 px-4 border border-black">Kategori</th>
                <th class="py-2 px-4 border border-black">Jumlah Uang</th>
                <th class="py-2 px-4 border border-black">Tanggal dan Waktu</th>
                <th class="py-2 px-4 border border-black">Admin</th>
            </tr>
        </thead>
        <tbody class="divide-y justify-center border divide-gray-200">
            @foreach($tabung as $tabungs)
            @if($tabungs->kategori === 'Harian')
                <tr>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->torodir->nama}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->kategori}}</td>
                    <td class="py-2 border text-center border-black px-4">Rp {{ number_format($tabungs->jumlah_uang, 0, ',', '.') }}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->tanggal_dan_waktu}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->nama_admin}}</td> 
                </tr>
            @else
                <tr>
                    <td colspan="5" class="py-2 border text-center border-black px-4">Empty</td>
                </tr>
            @endif
            @endforeach
            
            <!-- Akhir contoh data -->
        </tbody>
    </table>
</div>

<div class="px-6" id="mingguan">
    <table class=" bg-gray-100 border w-full">
        <thead class="bg-[#49D7F5]">
            <tr>
                <th class="py-2 px-4 border border-black">Nama</th>
                <th class="py-2 px-4 border border-black">Kategori</th>
                <th class="py-2 px-4 border border-black">Jumlah Uang</th>
                <th class="py-2 px-4 border border-black">Tanggal dan Waktu</th>
                <th class="py-2 px-4 border border-black">Admin</th>
            </tr>
        </thead>
        <tbody class="divide-y justify-center border divide-gray-200">
            <!-- Contoh data transaksi -->
            @foreach($tabung as $tabungs)
            @if($tabungs->kategori === 'Mingguan')
                <tr>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->torodir->nama}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->kategori}}</td>
                    <td class="py-2 border text-center border-black px-4">Rp {{ number_format($tabungs->jumlah_uang, 0, ',', '.') }}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->tanggal_dan_waktu}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->nama_admin}}</td> 
                </tr>
            @else
                <tr>
                    <td colspan="5" class="py-2 border text-center border-black px-4">Empty</td>
                </tr>
            @endif
            @endforeach
            
            <!-- Akhir contoh data -->
        </tbody>
    </table>
</div>
<div class="px-6" id="bulanan">
    <table class=" bg-gray-100 border w-full">
        <thead class="bg-[#49D7F5]">
            <tr>
                <th class="py-2 px-4 border border-black">Nama</th>
                <th class="py-2 px-4 border border-black">Kategori</th>
                <th class="py-2 px-4 border border-black">Jumlah Uang</th>
                <th class="py-2 px-4 border border-black">Tanggal dan Waktu</th>
                <th class="py-2 px-4 border border-black">Admin</th>
            </tr>
        </thead>
        <tbody class="divide-y justify-center border divide-gray-200">
            @foreach($tabung as $tabungs)
            @if($tabungs->kategori === 'Bulanan')
                <tr>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->torodir->nama}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->kategori}}</td>
                    <td class="py-2 border text-center border-black px-4">Rp {{ number_format($tabungs->jumlah_uang, 0, ',', '.') }}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->tanggal_dan_waktu}}</td>
                    <td class="py-2 border text-center border-black px-4">{{$tabungs->nama_admin}}</td> 
                </tr>
            @else
                <tr>
                    <td colspan="5" class="py-2 border text-center border-black px-4">Empty</td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
<script>
    function toggleDivs() {
        var kategori = document.getElementById("kategori").value;
        var harian = document.getElementById("harian");
        var mingguan = document.getElementById("mingguan");
        var bulanan = document.getElementById("bulanan");
        var semua = document.getElementById("semua");

        harian.classList.add('hidden');
        mingguan.classList.add('hidden');
        bulanan.classList.add('hidden');
        semua.classList.add('hidden');

        if (kategori === "Semua") {
            semua.classList.remove('hidden');
            mingguan.classList.add('hidden');
            bulanan.classList.add('hidden');
            harian.classList.add('hidden');
        } else if (kategori === "Harian") {
            harian.classList.remove('hidden');
            bulanan.classList.add('hidden');
            semua.classList.add('hidden');
            mingguan.classList.add('hidden');
        } else if (kategori === "Mingguan") {
            mingguan.classList.remove('hidden');
            bulanan.classList.add('hidden');
            semua.classList.add('hidden');
            harian.classList.add('hidden');
        } else if (kategori === "Bulanan") {
            bulanan.classList.remove('hidden');
            harian.classList.add('hidden');
            mingguan.classList.add('hidden');
            semua.classList.add('hidden');
        }
    }

    // Set default to show Harian on page load
    document.addEventListener("DOMContentLoaded", function() {
        toggleDivs();
    });
</script>
@endsection