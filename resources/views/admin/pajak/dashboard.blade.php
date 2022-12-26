<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Profile Layout
                </h2>
            </div>
            <div class="intro-y box px-5 pt-5 mt-5">
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-24 image-fit bg-cover relative">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/logobb2.png">
                        </div>
                        <div class="ml-5">
                            <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">BAPENDA
                            </div>
                            <div class="text-slate-500">Pemerintah Kabupaten Batu Bara</div>
                        </div>
                    </div>
                    <div
                        class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail"
                                    class="w-4 h-4 mr-2"></i> bapenda@batubarakab.go.id </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i
                                    data-lucide="smartphone" class="w-4 h-4 mr-2"></i> - </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="globe"
                                    class="w-4 h-4 mr-2"></i>www.bapenda.batubarakab.go.id </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
                    role="tablist">
                    <li id="profile-tab" class="nav-item" role="presentation">
                        <a href="javascript:;" class="nav-link py-4 flex items-center active" data-tw-target="#profile"
                            aria-controls="profile" aria-selected="true" role="tab"> <i class="w-4 h-4 mr-2"
                                data-lucide="user"></i> Profile </a>
                    </li>
                </ul>
            </div>
            <!-- END: Profile Info -->
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Dashboard Pajak Daerah
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw"
                                class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit  rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-medium text-danger">PBB</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">BPHTB</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">RESTORAN</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">HOTEL</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">HIBURAN</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">REKLAME</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">PENERANGAN JALAN</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">PAJAK PBB P2</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">PARKIR</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">AIR TANAH</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-danger">SARANG BURUNG WALET</div>
                                        <div class="text-slate-500 text-xs mt-0.5 mb-2">80.000.000.000
                                        </div>
                                        <div class="font-medium text-xs mt-2">REALISASI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">14.211.500</div>
                                        <div class="font-medium text-xs mt-2">REALISASI SAMPAI HARI INI</div>
                                        <div class="text-slate-500 text-xs mt-0.5">57.899.765.098</div>
                                        <div class="font-medium text-xs mt-2">SISA TARGET</div>
                                        <div class="text-slate-500 text-xs mt-0.5">10 February 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
