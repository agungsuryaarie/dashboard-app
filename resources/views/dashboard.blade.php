<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Data Penduduk Kabupaten Batu Bara
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" icon-name="refresh-ccw" data-lucide="refresh-ccw"
                                class="lucide lucide-refresh-ccw w-4 h-4 mr-3">
                                <path d="M3 2v6h6"></path>
                                <path d="M21 12A9 9 0 006 5.3L3 8"></path>
                                <path d="M21 22v-6h-6"></path>
                                <path d="M3 12a9 9 0 0015 6.7l3-2.7"></path>
                            </svg> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="intro-y">
                                    <div class="box h-32 px-4 py-4 mb-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="users"
                                            data-lucide="users"
                                            class="lucide lucide-users report-box__icon text-pending">
                                            <rect x="1" y="4" width="22" height="16"
                                                rx="2" ry="2"></rect>
                                            <line x1="1" y1="10" x2="23" y2="10"></line>
                                        </svg>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-semibold text-lg">Total Penduduk</div>
                                            <div class="text-slate-500 text-xs mt-0.5">Total Population</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                            1.370</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="intro-y">
                                    <div class="box h-32 px-4 py-4 mb-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="archive"
                                            data-lucide="archive"
                                            class="lucide lucide-archive report-box__icon text-pending">
                                            <rect x="1" y="4" width="22" height="16"
                                                rx="2" ry="2"></rect>
                                            <line x1="1" y1="10" x2="23" y2="10"></line>
                                        </svg>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-semibold text-lg">Kecamatan</div>
                                            <div class="text-slate-500 text-xs mt-0.5">
                                                sub-district</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                            12</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="intro-y">
                                    <div class="box h-32 px-4 py-4 mb-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="archive"
                                            data-lucide="archive"
                                            class="lucide lucide-archive report-box__icon text-pending">
                                            <rect x="1" y="4" width="22" height="16"
                                                rx="2" ry="2"></rect>
                                            <line x1="1" y1="10" x2="23" y2="10">
                                            </line>
                                        </svg>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-semibold text-lg">Kelurahan/Desa</div>
                                            <div class="text-slate-600 text-sm mt-0.5">
                                                village</div>
                                        </div>
                                        <div
                                            class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                            141</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y mt-8">
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 lg:col-span-8">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Izin Terbit
                        </h2>
                        <h2 class="font-medium text-base">Total izin terbit<span
                                class="block text-center">15.111</span></h2>
                    </div>
                    <div id="chart" class="p-5">
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Realisasi Anggaran
                        </h2>
                    </div>
                    <div id="realisasi" class="p-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
