<x-app-layout>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <x-profile-bkad></x-profile-bkad>
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Dashboard Sipande
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw"
                                class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <x-card2>
                            <div class="font-medium text-danger mb-3">PENDAPATAN</div>
                            <div class="font-medium text-primary text-xs mt-2">ANGGARAN</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.2.894.611.047.718.00</div>
                            <div class="font-medium text-primary text-xs mt-2">REALISASI</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.57.899.765.098</div>
                            <div class="text-2xl text-success font-semibold mt-2">73.12%</div>
                        </x-card2>

                        <x-card2>
                            <div class="font-medium text-danger mb-3">BELANJA</div>
                            <div class="font-medium text-primary text-xs mt-2">ANGGARAN</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.2.894.611.047.718.00</div>
                            <div class="font-medium text-primary text-xs mt-2">REALISASI</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.57.899.765.098</div>
                            <div class="text-2xl text-success font-semibold mt-2">73.12%</div>
                        </x-card2>

                        <x-card2>
                            <div class="font-medium text-danger mb-3">PEMBIAYAAN PENGELUARAN</div>
                            <div class="font-medium text-primary text-xs mt-2">ANGGARAN</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.2.894.611.047.718.00</div>
                            <div class="font-medium text-primary text-xs mt-2">REALISASI</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.57.899.765.098</div>
                            <div class="text-2xl text-success font-semibold mt-2">73.12%</div>
                        </x-card2>

                        <x-card2>
                            <div class="font-medium text-danger mb-3">PEMBIAYAAN PENGELUARAN</div>
                            <div class="font-medium text-primary text-xs mt-2">ANGGARAN</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.2.894.611.047.718.00</div>
                            <div class="font-medium text-primary text-xs mt-2">REALISASI</div>
                            <div class="font-medium text-slate-700 text-sm mt-0.5"> Rp.57.899.765.098</div>
                            <div class="text-2xl text-success font-semibold mt-2">73.12%</div>
                        </x-card2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y mt-8">
        <div class="intro-y grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Realisasi belanja SKPD
                        </h2>
                    </div>
                    <div id="realisasi_b" class="p-5">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-table>
        <table class="table table-bordered table-hover" id="myTable">
            <thead>
                <tr>
                    <th>Peringkat</th>
                    <th>Nama SKPD</th>
                    <th>Nilai Anggaran</th>
                    <th>Nilai Realisasi</th>
                    <th>Persentase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dinas Kependudukan dan Pencatatan Sipil</td>
                    <td>Rp. 11.894.611.047.718.00</td>
                    <td>Rp. 9.894.611.047.718.00</td>
                    <td>83.31%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>DInas Koperasi, Usaha kecil dan menengah</td>
                    <td>Rp. 8.894.611.047.718.00</td>
                    <td>Rp. 6.894.611.047.718.00</td>
                    <td>89.10%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dinas Komunikasi dan Informatika</td>
                    <td>Rp. 12.894.611.047.718.00</td>
                    <td>Rp. 10.894.611.047.718.00</td>
                    <td>90.01%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Dinas Kesehatan Pengendalian Penduduk dan Keluarga Berencana</td>
                    <td>Rp. 20.894.611.047.718.00</td>
                    <td>Rp. 15.894.611.047.718.00</td>
                    <td>75.80%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dinas sosial, Pemberdayaan Perempuan dan Perlindungan anak</td>
                    <td>Rp. 17.894.611.047.718.00</td>
                    <td>Rp. 13.894.611.047.718.00</td>
                    <td>77.90%</td>
                </tr>
            </tbody>
        </table>
    </x-table>
</x-app-layout>


<script>
    var options = {
        series: [{
            data: [400, 430, 448, 470, 540, ]
        }],
        chart: {
            type: 'bar',
            height: 280
        },
        plotOptions: {
            bar: {
                barHeight: '100%',
                distributed: true,
                horizontal: true,
                dataLabels: {
                    position: 'bottom'
                },
            }
        },
        colors: ['#00988b'],
        dataLabels: {
            enabled: true,
            textAnchor: 'start',
            style: {
                colors: ['#fff']
            },
            formatter: function(val, opt) {
                return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
            },
            offsetX: 0,
            dropShadow: {
                enabled: true
            }
        },
        stroke: {
            width: 1,
            colors: ['#fff']
        },
        xaxis: {
            categories: ['Disdukcapil', 'Diskopukm', 'Diskominfo', 'Dinkesp3a', 'Dinsosp3a'],
        },
        yaxis: {
            labels: {
                show: true
            }
        },
        // title: {
        //     text: 'Custom DataLabels',
        //     align: 'center',
        //     floating: true
        // },
        // subtitle: {
        //     text: 'Category Names as DataLabels inside bars',
        //     align: 'center',
        // },
        tooltip: {
            theme: 'dark',
            x: {
                show: false
            },
            y: {
                title: {
                    formatter: function() {
                        return ''
                    }
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#realisasi_b"), options);
    chart.render();
</script>
