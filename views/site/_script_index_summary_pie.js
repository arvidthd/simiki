$(function () {
    // Build the pie chart
    $('#graph-kdtp-pie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Persentase Kehadiran Anak<br/>Per Ibadah Raya'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}% <i>({point.y} Kali)</i></b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Persentase',
            colorByPoint: true,
            data: [{
                name: 'Ibadah Raya 1, Sabtu 18.00',
                y: 56.33
            }, {
                name: 'Ibadah Raya 2, Minggu 10.30',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Ibadah Raya 3, Minggu 13.00',
                y: 10.38
            }, {
                name: 'Ibadah Raya 4, Minggu 16.30',
                y: 4.77
            }, {
                name: 'Ibadah Raya 5, Minggu 19.00',
                y: 0.91
            }]
        }]
    });

});