$(function () {
    $('#graph').highcharts({
        chart: {
            type: 'area'
        },
        navigator: {
          height: 30
        },
        rangeSelector: {
            selected: 1
        },
        title: {
            text: 'Total Kehadiran Global'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli', 'Agust', 'Sept', 'Okt', 'Nov', 'Des'],
            tickmarkPlacement: 'on',
            title: {
                enabled: true
            }
        },
        yAxis: {
            title: {
                text: 'Jumlah Anak'
            },
            
        },
        tooltip: {
            split: true,
            valueSuffix: ''
        },
        plotOptions: {
            area: {
                lineColor: '#668866',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#006666'
                }
            }
        },
        series: [{
            name: 'APL Tower',
            data: [502, 635, 809, 947, 1402, 3634, 5268]
        }, {
            name: 'Neo Soho',
            data: [106, 107, 111, 133, 221, 767, 1766]
        }, {
            name: 'Grand Pelita',
            data: [163, 203, 276, 408, 547, 729, 628]
        }, {
            name: 'The Star',
            data: [18, 31, 54, 156, 339, 818, 1201]
        }, {
            name: 'Paragon Mall',
            data: [2, 2, 2, 6, 13, 30, 46]
        }]
    });
});