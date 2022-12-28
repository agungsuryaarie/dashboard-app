<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <x-profile-perizinan></x-profile-perizinan>
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
                                        <i data-lucide="target" class="report-box__icon text-danger"></i>
                                        <div class="ml-auto">
                                            <div class="text-base font-semibold text-primary mt-1">Target</div>

                                            <div class="text-3xl font-medium leading-8 mt-3">4.710</div>
                                        </div>
                                    </div>
                                    <div class="text-xs text-slate-500 mt-1">Target Minimal Penerbitan NIB 2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="pie-chart" class="report-box__icon text-danger"></i>
                                        <div class="ml-auto">
                                            <div class="text-base font-semibold text-primary mt-1">Realisasi</div>

                                            <div class="text-3xl font-medium leading-8 mt-3">4.710</div>
                                        </div>
                                    </div>
                                    <div class="text-xs text-slate-500 mt-1">Realisasi Penerbitan NIB 2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="text-base font-semibold text-emerald-900 mt-1">Capaian</div>

                                            <div class="text-3xl font-medium leading-8 mt-3">4.710</div>
                                        </div>
                                    </div>
                                    <div class="text-xs text-slate-500 mt-1">Target Minimal Penerbitan NIB 2023</div>
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
            name: "sales",
            data: [{
                x: 'Laut Tador',
                y: 400
            }, {
                x: 'Sei Suka',
                y: 430
            }, {
                x: 'Medang Deras',
                y: 448
            }, {
                x: 'Air Putih',
                y: 470
            }, {
                x: 'Lima Puluh',
                y: 540
            }, {
                x: 'Datuk Lima Puluh',
                y: 580
            }, {
                x: 'Lima Puluh Pesisir',
                y: 690
            }, {
                x: 'Datuk Tanah Datar',
                y: 111
            }, {
                x: 'Talawi',
                y: 222
            }, {
                x: 'Tanjung Tiram',
                y: 333
            }, {
                x: 'Nibung Hangus',
                y: 444
            }, {
                x: 'Sei Balai',
                y: 555
            }]
        }],
        chart: {
            type: 'bar',
            height: 480,
        },
        plotOptions: {
            bar: {
                columnWidth: '45%',
                // distributed: true,
            }
        },
        tooltip: {
            x: {
                formatter: function(val) {
                    return "Q" + dayjs(val).quarter() + " " + dayjs(val).format("YYYY")
                }
            }
        },
    };

    var chart = new ApexCharts(document.querySelector("#perizinan"), options);
    chart.render();
</script>
