@extends('partials.admin')

@section('admin')
    <div class="justify-between flex bg-[#49D7F5] w-full pr-10 pl-10 py-3 ">
        <div class="flex justify-center items-center font-semibold text-white">
            Home
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
    <div class="mt-5 mb-2 text-2xl font-bold pl-12">
        Progres Keuangan
    </div>
    <div class="pr-10 py-5 pl-10 border bg-white mx-10  h-auto ">
        <div class="mb-5">
            <div class="text-xl">
                Semua
            </div>          
            <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
            </div>
        </div>
        <div class="flex w-full justify-between space-x-4">
            <div class="mt-4 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Nadira Mutia Safa
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-red-600">
                            Masih Sedikit
                        </div>
                        <div>
                            <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 16C16 16 14.5 14 12 14C9.5 14 8 16 8 16M15 9H15.01M9 9H9.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-red-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 20%"> 20%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 300.000 / Rp 1.500.000
                </div>
            </div>
            <div class="mt-4 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Muhammad Nayaka Putra
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-yellow-500">
                            Sudah Setengah
                        </div>
                        <div>
                            <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15H16M15 9H15.01M9 9H9.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-yellow-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 50%"> 50%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 750.000 / Rp 1.500.000
                </div>
            </div>
            
        </div>   
        <div class="flex w-full justify-between space-x-4">
            <div class="mt-6 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Rai Yananndika Putra
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-red-600">
                            Masih Kosong
                        </div>
                        <div>
                            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                class="w-5" viewBox="0 0 106.06 106.06"
                                xml:space="preserve">
                            <g>
                                <path d="M15.515,15.512C-5.172,36.199-5.17,69.857,15.517,90.547c20.682,20.685,54.34,20.685,75.028-0.005
                                    c20.686-20.685,20.684-54.341,0.002-75.023C69.857-5.172,36.199-5.172,15.515,15.512z M84.759,84.758
                                    c-17.494,17.493-45.963,17.495-63.456,0.003c-17.498-17.498-17.496-45.967,0-63.461C38.795,3.807,67.263,3.805,84.761,21.302
                                    C102.255,38.795,102.253,67.264,84.759,84.758z M77.018,74.001c0.656,1.521-0.043,3.286-1.563,3.944
                                    c-1.521,0.659-3.286-0.042-3.944-1.562c-2.894-6.689-9.73-11.013-17.42-11.013c-7.869,0-14.748,4.32-17.523,11.006
                                    c-0.48,1.152-1.596,1.85-2.771,1.851c-0.385,0-0.773-0.074-1.15-0.23c-1.531-0.637-2.256-2.393-1.619-3.922
                                    c3.709-8.932,12.764-14.703,23.064-14.703C64.175,59.371,73.175,65.113,77.018,74.001z M29.633,37.667
                                    c-0.676-1.176-0.27-2.676,0.906-3.351l9.045-5.196c1.176-0.674,2.676-0.268,3.352,0.907c0.676,1.176,0.27,2.676-0.906,3.351
                                    l-9.045,5.194C31.808,39.247,30.308,38.842,29.633,37.667z M43.668,37.772c1.688,1.689,1.688,4.429,0,6.115
                                    c-1.688,1.688-4.426,1.688-6.117-0.002c-1.688-1.688-1.688-4.426,0-6.113C39.24,36.083,41.979,36.083,43.668,37.772z
                                    M58.369,23.089c0.121-1.35,1.313-2.347,2.662-2.226l10.392,0.934c1.35,0.121,2.348,1.313,2.225,2.664
                                    c-0.121,1.351-1.312,2.347-2.664,2.225l-10.389-0.933C59.244,25.632,58.246,24.438,58.369,23.089z M69.462,37.701
                                    c1.688,1.688,1.688,4.426,0,6.113c-1.691,1.69-4.431,1.69-6.117,0.002c-1.688-1.687-1.688-4.426,0-6.115
                                    C65.033,36.011,67.771,36.011,69.462,37.701z"/>
                            </g>
                            </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 0%"> 0%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 0 / Rp 1.500.000
                </div>
            </div>
            <div class="mt-6 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Afriza Dwi Amanda
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-green-500">
                            Sudah Selesai
                        </div>
                        <div>
                            <svg fill="#000000" class="w-6" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                                <path d="M960 1807.059c-467.125 0-847.059-379.934-847.059-847.059 0-467.125 379.934-847.059 847.059-847.059 467.125 0 847.059 379.934 847.059 847.059 0 467.125-379.934 847.059-847.059 847.059M960 0C430.645 0 0 430.645 0 960s430.645 960 960 960 960-430.645 960-960S1489.355 0 960 0M854.344 1157.975 583.059 886.69l-79.85 79.85 351.135 351.133L1454.4 717.617l-79.85-79.85-520.206 520.208Z" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-green-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 100%"> 100%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 1.500.000 / Rp 1.500.000
                </div>
            </div>
            
        </div>   
        <div class="flex w-full justify-between space-x-4">
            <div class="mt-6 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Diva Akbar
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-red-600">
                            Masih Sedikit
                        </div>
                        <div>
                            <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 16C16 16 14.5 14 12 14C9.5 14 8 16 8 16M15 9H15.01M9 9H9.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-red-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 20%"> 20%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 300.000 / Rp 1.500.000
                </div>
            </div>
            <div class="mt-6 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Nazwa Aswalani
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-yellow-500">
                            Sudah Setengah
                        </div>
                        <div>
                            <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15H16M15 9H15.01M9 9H9.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-yellow-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 45%"> 45%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 750.000 / Rp 1.500.000
                </div>
            </div>
            
        </div>   
        <div class="flex w-full justify-between space-x-4">
            <div class="mt-6 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Ahmad Fadhlan
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-red-600">
                            Masih Sedikit
                        </div>
                        <div>
                            <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 16C16 16 14.5 14 12 14C9.5 14 8 16 8 16M15 9H15.01M9 9H9.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-red-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 20%"> 20%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 300.000 / Rp 1.500.000
                </div>
            </div>
            <div class="mt-6 w-full">
                <div class="flex justify-between">
                    <div class="text-xl">
                        Muhammad Aqsa Sitompul
                    </div> 
                    <div class=" flex justify-center space-x-1  items-center">
                        <div class="font-semibold text-yellow-500">
                            Sudah Setengah
                        </div>
                        <div>
                            <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15H16M15 9H15.01M9 9H9.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                    </div> 
                </div>         
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-yellow-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full animate-progress" style="--progress-width: 45%"> 45%</div>
                </div>
                <div class="font-bold text-sm">
                    Rp 750.000 / Rp 1.500.000
                </div>
            </div>
            
        </div>   
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
           // Simulasi login berhasil
           showToast();
       
           function showToast() {
               const toast = document.getElementById('toast');
               toast.classList.add('toast-show');
       
               setTimeout(() => {
                   toast.classList.remove('toast-show');
                   toast.classList.add('toast-hidden');
               }, 3000);
           }
       
           window.dismissToast = function() {
               const toast = document.getElementById('toast');
               toast.classList.remove('toast-show');
               toast.classList.add('toast-hidden');
           };
       });
       
       </script>
@endsection