<x-app-layout>
    @section('container')
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Data Dasawisma Kabupaten Batu Bara
                            </h2>
                            <a href="{{ route('dasawisma') }}" class="ml-auto flex items-center text-primary"> <svg
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
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                                data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ number_format($warga) }}
                                        </div>
                                        <div class="text-base text-slate-500 mt-1">Warga</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                                data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ number_format($keluarga) }}
                                        </div>
                                        <div class="text-base text-slate-500 mt-1">Keluarga</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                                data-lucide="user" class="lucide lucide-user report-box__icon text-success">
                                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ number_format($krt) }}</div>
                                        <div class="text-base text-slate-500 mt-1">Kepala Rumah Tangga</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                                                data-lucide="user"
                                                class="lucide lucide-user report-box__icon text-success">
                                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ number_format($dasawisma) }}
                                        </div>
                                        <div class="text-base text-slate-500 mt-1">Kelompok Dasawisma</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Grafik
            </h2>
        </div>
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Warga Per Kecamatan
                        </h2>
                    </div>
                    <div id="chart-warga" class="p-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Keluarga Per Kecamatan
                        </h2>
                    </div>
                    <div id="chart-keluarga" class="p-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Kepala Rumah Tangga Per Kecamatan
                        </h2>
                    </div>
                    <div id="chart-krt" class="p-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Kelompok Dasawisma Per Kecamatan
                        </h2>
                    </div>
                    <div id="chart-dasawisma" class="p-5">
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
@stack('scripts')
<script src="dist/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [{
            name: "Jumlah",
            data: @json($wargaKecamatan)
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
            categories: @json($namaKecamatan),
            labels: {
                style: {
                    // colors: colors,
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart-warga"), options);
    chart.render();
</script>
<script>
    var options = {
        series: [{
            name: "Jumlah",
            data: @json($keluargaKecamatan)
        }],
        chart: {
            height: 350,
            type: 'bar',
            events: {
                click: function(chart, w, e) {}
            }
        },
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
            categories: @json($namaKecamatan),
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart-keluarga"), options);
    chart.render();
</script>
<script>
    var options = {
        series: [{
            name: "Jumlah",
            data: @json($krtKecamatan)
        }],
        chart: {
            height: 350,
            type: 'bar',
            events: {
                click: function(chart, w, e) {}
            }
        },
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
            categories: @json($namaKecamatan),
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart-krt"), options);
    chart.render();
</script>
<script>
    var options = {
        series: [{
            name: "Jumlah",
            data: @json($dasawismaKecamatan)
        }],
        chart: {
            height: 350,
            type: 'bar',
            events: {
                click: function(chart, w, e) {}
            }
        },
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
            categories: @json($namaKecamatan),
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart-dasawisma"), options);
    chart.render();
</script>
