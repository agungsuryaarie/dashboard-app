<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <x-profile-dinsos></x-profile-dinsos>
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Data Penduduk Kabupaten Batu Bara
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i>Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 mb-5">
                                    <div class="">
                                        <div class="px-2 py-2 flex items-center">
                                            <i data-lucide="users" class="report-box__icon text-danger"></i>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium text-lg">Total Penduduk</div>
                                                <div class="text-slate-500 text-xs mt-0.5">Total Population</div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                                {{ number_format($penduduk) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 mb-5">
                                    <div class="">
                                        <div class="px-2 py-2 flex items-center">
                                            <i data-lucide="archive" class="report-box__icon text-danger"></i>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium text-lg">Kecamatan</div>
                                                <div class="text-slate-500 text-xs mt-0.5">Sub-District</div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                                {{ number_format($kecamatan) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 mb-5">
                                    <div class="">
                                        <div class="px-2 py-2 flex items-center">
                                            <i data-lucide="archive" class="report-box__icon text-danger"></i>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium text-lg">Desa/Kelurahan</div>
                                                <div class="text-slate-500 text-xs mt-0.5">Village</div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                                {{ $kelurahan }}</div>
                                        </div>
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
        <div class="intro-y grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Penduduk Per Kecamatan
                        </h2>
                    </div>
                    <div id="data_penduduk" class="p-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    var options = {
        series: [{
            name: "Jumlah",
            data: @json($kecamatanpenduduk)
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
                columnWidth: '45%',
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
            categories: @json($namakecamatan),
            labels: {
                style: {
                    // colors: colors,
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#data_penduduk"), options);
    chart.render();
</script>
