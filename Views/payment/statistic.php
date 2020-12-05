<!-- BEGIN: Content-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="app-content content">
    <div class="content-wrapper">
                <div class="content-header row mb-1">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">Sales Statistics</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Sales Statistics
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div id="piechart1"></div>
                                </div>
                                <div class="col-6">
                                    <div id="piechart2"></div>
                                </div>
                            </div>
                            <div id="piechart3"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- DOM - jQuery events table -->
        </div>

    </div>
    <!-- END: Content-->

    <script type="text/javascript">
        function chart1() {
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                let data = google.visualization.arrayToDataTable([
                    ['Coin', 'Total'],
                    ['1st Quarter', <?= (int)$quarterly[0]?>],
                    ['2nd Quarter', <?= (int)$quarterly[1] ?>],
                    ['3rd Quarter', <?= (int)$quarterly[2] ?>],
                    ['4th Quarter', <?= (int)$quarterly[3] ?>]
                ]);

                // Optional; add a title and set the width and height of the chart
                let options = {'title':'Quarterly Statistics', 'width':650, 'height':550};

                // Display the chart inside the <div> element with id="piechart"
                let chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                chart.draw(data, options);
            }
        }

        function chart2() {
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                let data = google.visualization.arrayToDataTable([
                    ['Coin', 'Total'],
                    ['Month 1-6', <?= (int)$hy1?>],
                    ['Month 7-12', <?= (int)$hy2?>]
                ]);

                // Optional; add a title and set the width and height of the chart
                let options = {'title':'Half A Year Statistics', 'width':650, 'height':550};

                // Display the chart inside the <div> element with id="piechart"
                let chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                chart.draw(data, options);
            }
        }

        function chart3() {
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                let data = google.visualization.arrayToDataTable([
                    ['Coin', 'Total'],
                    <?php
                        foreach ($month as $item) { ?>
                            ['Month <?= $item->month ?>', <?= (int)$item->total?>],
                        <?php
                        }
                    ?>
                ]);

                // Optional; add a title and set the width and height of the chart
                let options = {'title':'Monthly Statistics', 'width':650, 'height':550};

                // Display the chart inside the <div> element with id="piechart"
                let chart = new google.visualization.PieChart(document.getElementById('piechart3'));
                chart.draw(data, options);
            }
        }

        chart1();
        chart2();
        chart3();

    </script>