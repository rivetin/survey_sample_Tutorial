var barChartData = {
    labels: ['Python', 'JavaScript', 'C/C++', 'Java', 'PHP', 'C#', 'Kotlin', 'Swift', 'Pearl', 'HTML/CSS'],
    datasets: [{
        label: 'INTREST',
        backgroundColor: window.chartColors.red,
        data: [
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0
        ]
    }, {
        label: 'KNOWLEDGE',
        backgroundColor: window.chartColors.blue,
        data: [
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0
        ]
    }]

};
window.onload = function () {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            title: {
                display: true,
                text: 'Intrest Knoledge | Bar Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });
};

document.getElementById('FetchButton').addEventListener('click', function () {

    window.myBar.update();


    // barChartData.datasets.forEach(function (dataset) {
    //     dataset.data = dataset.data.map(function () {
    //         return randomScalingFactor();
    //     });
    // });

});


