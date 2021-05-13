<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/chart.css">
    <meta name="discription" content="Survey For Dev | Simplest survey application">
    <link rel="icon" href="./images/icon.ico">
    <link rel="stylesheet" href="style/sliderstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@090;200;400;500;600&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!--<script src="main.js" ></script>-->
    <script src="utils.js"></script>
    <script type="text/javascript" id="display"></script>
    <script type='text/javascript'>


        // function fetch_new() {
        //     $.ajax({

        //         type: 'POST',
        //         url: 'ajax.php',
        //         data: { fetchChartData: 1 },
        //         success: function (html) {
        //             document.getElementById('display').innerHTML = html;
        //          alert(html)


        //         }
        //     });
        // }

    </script>

    <title>Developer.WTF | Survey</title>
</head>

<body">
    <header>
        <div>
            <img class="logo-img" src="images/logo.png" alt="developers.wtf-logo" height="50px">
        </div>
        <div>
            <h1>Developers.WTF | Survey</h1>
        </div>
    </header>
    <main class="main-section">

        <div id="container" style="width: 75%">
            <canvas id="canvas"></canvas>
        </div>
        <button id="FetchButton" class="FetchButton">FetchButton</button>
        <script src="main.js">
        </script>


    </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        let intrest, knowledge;
        let btnClick = document.getElementById("FetchButton")
        btnClick.addEventListener('click', () => {
            console.log('button');
            fetch_new();
        });


        setInterval(function () { btnclick(); }, 10000);

        function fetch_new() {
            $.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: { fetchChartData: 1 },
                success: function (returnInterest) {
                    console.log(intrest)
                    intrest = returnInterest.split(',')
                }
            }).done($.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: { fetchChartData: 2 },
                success: function (returnKnowledge) {
                    console.log(knowledge)
                    knowledge = returnKnowledge.split(',');
                    renderHtml();
                }
            })
            )


        }

        function btnclick() { document.getElementById('FetchButton').click(); }

        function renderHtml() {
            var barChartData = {
                labels: ['Python', 'JavaScript', 'C/C++', 'Java', 'PHP', 'C#', 'Kotlin', 'Swift', 'Pearl', 'HTML/CSS'],
                datasets: [{
                    label: 'INTREST',
                    backgroundColor: window.chartColors.red,
                    data: intrest,
                }, {
                    label: 'KNOWLEDGE',
                    backgroundColor: window.chartColors.blue,
                    data: knowledge,
                }]

            };

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
    </script>



</html>