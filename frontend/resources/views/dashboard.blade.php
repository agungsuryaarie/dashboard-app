<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Data People
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
                                <div class="box p-5 mb-5">
                                    <div class="">
                                        <div class="px-2 py-2 flex items-center">
                                            <i data-lucide="shopping-cart" class="report-box__icon text-danger"></i>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium text-lg"> Data People</div>
                                                <div class="text-slate-500 text-xs mt-0.5">Total Population</div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                                text</div>
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
                                            <i data-lucide="shopping-cart" class="report-box__icon text-danger"></i>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium text-lg"> Data People</div>
                                                <div class="text-slate-500 text-xs mt-0.5">Sub-District</div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                                text</div>
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
                                            <i data-lucide="shopping-cart" class="report-box__icon text-danger"></i>
                                            <div class="ml-4 mr-auto">
                                                <div class="font-medium text-lg"> Data People</div>
                                                <div class="text-slate-500 text-xs mt-0.5">Village</div>
                                            </div>
                                            <div
                                                class="py-1 px-2 rounded-full text-lg bg-success text-white cursor-pointer font-medium">
                                                text</div>
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
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Chart
        </h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-8">
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        People
                    </h2>
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
                <div id="r_anggaran" class="p-5">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    var options = {
        series: [{
            data: [14, 34, 23, 65, 78, 43, 15]
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
            categories: ["Indonesia", "Malaysia", "Singapore", "Thailand", "Australia", "Korea Selatan", "Jepang"],
            labels: {
                style: {
                    // colors: colors,
                    fontSize: '12px'
                }
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>

<script>
    var options = {
        series: [67],
        chart: {
            height: 350,
            type: 'radialBar',
            offsetY: -10
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                dataLabels: {
                    name: {
                        fontSize: '16px',
                        color: undefined,
                        offsetY: 120
                    },
                    value: {
                        offsetY: 76,
                        fontSize: '22px',
                        color: undefined,
                        formatter: function(val) {
                            return val + "%";
                        }
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                shadeIntensity: 0.15,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 65, 91]
            },
        },
        stroke: {
            dashArray: 4
        },
        labels: ['Realisasi Anggaran'],
    };

    var chart = new ApexCharts(document.querySelector("#r_anggaran"), options);
    chart.render();
</script>
