<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Profile Layout
                </h2>
            </div>
            <!-- BEGIN: Profile Info -->
            <div class="intro-y box px-5 pt-5 mt-5">
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit bg-cover relative">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/batubara.png">
                        </div>
                        <div class="ml-5">
                            <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">DPM-PTSP
                            </div>
                            <div class="text-slate-500">Pemerintah Kabupaten batu Bara</div>
                        </div>
                    </div>
                    <div
                        class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail"
                                    class="w-4 h-4 mr-2"></i> dpmptsp@batubarakab.go.id </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i
                                    data-lucide="instagram" class="w-4 h-4 mr-2"></i> - </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="youtube"
                                    class="w-4 h-4 mr-2"></i> - </div>
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
                    <li id="settings-tab" class="nav-item" role="presentation">
                        <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#settings"
                            aria-selected="false" role="tab"> <i class="w-4 h-4 mr-2" data-lucide="settings"></i>
                            Settings </a>
                    </li>
                </ul>
            </div>
            <!-- END: Profile Info -->
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Dashboard Perizinan
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw"
                                class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="33% Higher than last month"> 33% <i data-lucide="chevron-up"
                                                    class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                    <div class="text-base text-slate-500 mt-1">Target</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer"
                                                title="2% Lower than last month"> 2% <i data-lucide="chevron-down"
                                                    class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                    <div class="text-base text-slate-500 mt-1">Realisasi</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                title="12% Higher than last month"> 12% <i data-lucide="chevron-up"
                                                    class="w-4 h-4 ml-0.5"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                    <div class="text-base text-slate-500 mt-1">Capaian</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
    <!-- END: Content -->
    <div class="intro-y mt-8">
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Sebaran Data NIB Per-Kecamatan
                        </h2>
                    </div>
                    <div id="perizinan" class="p-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



<script>
    var options = {
        series: [{
            data: [1121, 2322, 5410, 3228, 5616, 3121, 4213, 1830, 2114, 1125, 3362, 3311]
        }],
        chart: {
            height: 350,
            type: 'bar',
            events: {
                click: function(chart, w, e) {
                    // console.log(chart, w, e)
                }
            }
        },
        // colors: colors,
        plotOptions: {
            bar: {
                columnWidth: '35%',
                distributed: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: [
                ['Laut tador'],
                ['Sei Suka'],
                ['Medang Deras'],
                ['Air Putih'],
                ['Lima Puluh'],
                ['Lima Puluh'],
                ['Datuk Lima Puluh'],
                ['Lima Puluh Pesisir'],
                ['Nibung Hangus'],
                ['Sei Balai'],
                ['Talawi'],
                ['Tanjung Tiram'],
            ],

            labels: {
                style: {
                    // colors: colors,
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#perizinan"), options);
    chart.render();
</script>
