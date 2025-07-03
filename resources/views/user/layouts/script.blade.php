<!-- Initial  Javascript -->
    <!-- jQuery -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('lib/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/script.js') }}"></script>

    <!-- ApexCharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Dashboard overview Line Chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_overview_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [
                                ['2023-02-01', 25000],
                                ['2023-02-02', 28000],
                                ['2023-02-03', 31000],
                                ['2023-02-04', 24000],
                                ['2023-02-05', 28000],
                                ['2023-02-06', 25000],
                                ['2023-02-07', 25000],
                                ['2023-02-08', 31000],
                                ['2023-02-09', 27000],
                                ['2023-02-10', 20000],
                                ['2023-02-11', 25000],
                                ['2023-02-12', 30000],
                                ['2023-02-13', 25000],
                                ['2023-02-14', 24000],
                                ['2023-02-15', 33400],
                                ['2023-02-16', 40000],
                                ['2023-02-17', 50000],
                                ['2023-02-18', 30000],
                                ['2023-02-19', 25000],
                                ['2023-02-20', 50000],
                                ['2023-02-21', 30000],
                                ['2023-02-22', 35000],
                                ['2023-02-23', 30000],
                                ['2023-02-24', 25000],
                                ['2023-02-25', 50000],
                                ['2023-02-26', 60000],
                                ['2023-02-27', 70000],
                                ['2023-02-28', 30000],
                                ['2023-02-29', 40000],
                                ['2023-02-30', 60000],
                                ['2023-02-31', 40000],
                                ['2023-03-01', 70000],
                                ['2023-03-02', 60000],
                                ['2023-03-03', 45000],
                                ['2023-03-04', 45000],
                                ['2023-03-05', 40000],
                                ['2023-03-06', 35000],
                                ['2023-03-07', 30000],
                                ['2023-03-08', 25000],
                                ['2023-03-09', 30000],
                                ['2023-03-10', 25000],
                                ['2023-03-11', 25000],
                                ['2023-03-12', 20000],
                                ['2023-03-13', 30000],
                                ['2023-03-14', 40000],
                                ['2023-03-15', 50000],
                                ['2023-03-16', 45000],
                                ['2023-03-17', 30000],
                                ['2023-03-18', 40000],
                                ['2023-03-19', 30000],
                                ['2023-03-20', 20000],
                                ['2023-03-21', 50000],
                                ['2023-03-22', 60000],
                                ['2023-03-23', 20000],
                                ['2023-03-24', 40000],
                                ['2023-03-25', 30000],
                                ['2023-03-26', 40000],
                                ['2023-03-27', 25000],
                                ['2023-03-28', 60000],
                                ['2023-03-29', 70000],
                                ['2023-03-30', 65000],
                                ['2023-04-01', 55000],
                                ['2023-04-02', 44000],
                                ['2023-04-03', 33000],
                                ['2023-04-04', 39000],
                                ['2023-04-05', 25000],
                                ['2023-04-06', 31000],
                                ['2023-04-07', 44000],
                                ['2023-04-08', 25000],
                                ['2023-04-09', 28000],
                                ['2023-04-10', 34000],
                                ['2023-04-11', 36000],
                                ['2023-04-12', 45000],
                                ['2023-04-13', 58000],
                                ['2023-04-14', 40000],
                                ['2023-04-15', 50000],
                                ['2023-04-16', 60000],
                                ['2023-04-17', 66000],
                                ['2023-04-18', 68000],
                                ['2023-04-19', 52000],
                                ['2023-04-20', 45000],
                                ['2023-04-21', 50000],
                                ['2023-04-22', 60000],
                                ['2023-04-23', 70000],
                                ['2023-04-24', 25000],
                                ['2023-04-25', 35000],
                                ['2023-04-26', 40000],
                                ['2023-04-27', 50000],
                                ['2023-04-28', 52000],
                                ['2023-04-29', 55000],
                                ['2023-04-30', 66000],
                            ],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#6271eb'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    grid:{
                        borderColor: '#00000014',  
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        }, 
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0.5,
                            opacityTo: 0.5,
                            stops: [0, 90, 100],
                        },
                    },
                    xaxis: {
                        type: 'datetime',
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            formatter: function (y) {
                                return y.toFixed(0) + ' $';
                            },
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // dashboard small chart 1
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_dashboard_small_chart_1') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [90, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,90, 85, 105, 130, 92, 110, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#23CB62'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0,
                            opacityTo: 0,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    xaxis: {
                        show: false,
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // d2c_dashboard_small_chart_2
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_dashboard_small_chart_2') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [90, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,90, 85, 105, 130, 92, 110, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#FC76B7'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0,
                            opacityTo: 0,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    xaxis: {
                        show: false,
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // d2c_dashboard_small_chart_3
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_dashboard_small_chart_3') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [90, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,90, 85, 105, 130, 92, 110, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#23CB62'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0,
                            opacityTo: 0,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    xaxis: {
                        show: false,
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        document.addEventListener('DOMContentLoaded', function() {
        function showField(type) {
            document.getElementById('aadhaarField').classList.add('d-none');
            document.getElementById('panField').classList.add('d-none');
            document.getElementById('dlField').classList.add('d-none');
            if(type === 'aadhaar') document.getElementById('aadhaarField').classList.remove('d-none');
            if(type === 'pan') document.getElementById('panField').classList.remove('d-none');
            if(type === 'dl') document.getElementById('dlField').classList.remove('d-none');
        }
        document.querySelectorAll('input[name="kyc_type"]').forEach(radio => {
            radio.addEventListener('change', function() {
                showField(this.value);
            });
        });
        showField(document.querySelector('input[name="kyc_type"]:checked').value);
    });
    document.getElementById('kycForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const token = '{{ auth()->user()->currentAccessToken()->plainTextToken ?? '' }}'; // Or get from JS variable

    try {
        const res = await fetch('{{ url("/api/kyc-submit") }}', {
            method: 'POST',
            headers: {
                'Authorization': 'Bearer ' + token,
                'Accept': 'application/json'
            },
            body: formData
        });

        const data = await res.json();
        alert(data.message);
        location.reload();
    } catch (err) {
        console.error(err);
        alert('Something went wrong.');
    }
});
    </script>
</body>

</html>
