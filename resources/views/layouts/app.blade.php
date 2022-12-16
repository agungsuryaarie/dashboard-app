<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css"  />

    @vite(['resource/css/app.css', 'resource/js/app.js'])
    @stack('style')
</head>

<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
    @include('layouts.sidebar')
    <div class="content">
        @include('layouts.header')
        @yield('container')
        {{-- @include('../components/dark-mode-switcher')
        @include('../components/main-color-switcher') --}}
    </div>
    </div>
    @stack('scripts')


    <script src="dist/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            series: [{
                data: [21, 22, 10, 28, 16, 21, 13, 30]
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
                categories: [
                    ['HAPPY WEDDING','INDAH', 'ZULKARNAIN'],
                    ['Joe', 'Smith'],
                    ['Jake', 'Williams'],
                    'Amber',
                    ['Peter', 'Brown'],
                    ['Mary', 'Evans'],
                    ['David', 'Wilson'],
                    ['Lily', 'Roberts'],
                ],
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
</body>

</html>
