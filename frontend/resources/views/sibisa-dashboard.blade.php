<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="grid grid-cols-12 gap-6">
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
                            <div class="intro-y">
                                <div class="box px-8 py-8 mb-3 flex items-center zoom-in">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="users"
                                        data-lucide="users" class="lucide lucide-users report-box__icon text-primary">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6">
                                        </path>
                                    </svg>
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
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-8 py-8 mb-3 flex items-center zoom-in">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="archive"
                                        data-lucide="archive"
                                        class="lucide lucide-archive report-box__icon text-primary">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6">
                                        </path>
                                    </svg>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-lg">Kecamatan</div>
                                        <div class="text-slate-500 text-sm mt-0.5">
                                            Sub-District</div>
                                    </div>
                                    <div
                                        class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                        {{ number_format($kecamatan) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y">
                            <div class="intro-y">
                                <div class="box px-8 py-8 mb-3 flex items-center zoom-in">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" icon-name="archive"
                                        data-lucide="archive"
                                        class="lucide lucide-archive report-box__icon text-primary">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6">
                                        </path>
                                    </svg>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium text-lg">Desa/Kelurahan</div>
                                        <div class="text-slate-500 text-xs mt-0.5">
                                            Village</div>
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
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Chart
        </h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
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
</x-app-layout>

<script>
    var options = {
        series: [{
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
{{-- <script src="public/apex-charts/dist/apexcharts.min.js"></script> --}}
