<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Catálogo Tempário - Home</title>

	<link href="../img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="../img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="../img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="../img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="../img/favicon.png" rel="icon" type="image/png">
	<link href="../img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<link rel="stylesheet" href="../css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="../css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="../css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="../css/separate/pages/widgets.min.css">

    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body class="horizontal-navigation">

	<?php
        $menu=1;
        include "naveg.php";
    ?>
	<div class="page-content">
	    <div class="container-fluid">
        <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Home</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>&nbsp;/
								
							</ol>
						</div>
					</div>
				</div>
			</header>
	        <div class="row">
	            <div class="col-xl-6">
	                <div class="chart-statistic-box">
	                    <div class="chart-txt">
	                        <div class="chart-txt-top">
	                            <p><span class="number">127</span></p>
	                            <p class="caption">Usuários</p>
	                        </div>
	                    
	                    </div>
	                    <div class="chart-container">
	                        <div class="chart-container-in">
	                            <div id="chart_div"></div>
	                            <header class="chart-container-title">Numeros de acessos</header>
	                            <div class="chart-container-x">
	                                <div class="item"></div>
	                                <div class="item">Segunda</div>
	                                <div class="item">Terça</div>
	                                <div class="item">Quarta</div>
	                                <div class="item">Quinta</div>
	                                <div class="item">Sexta</div>
	                                <div class="item">Sábado</div>
	                                <div class="item">Domingo</div>
	                                <div class="item"></div>
	                            </div>
	                            <div class="chart-container-y">
	                                <div class="item">400</div>
	                                <div class="item"></div>
	                                <div class="item">300</div>
	                                <div class="item"></div>
	                                <div class="item">200</div>
	                                <div class="item"></div>
	                                <div class="item">100</div>
	                                <div class="item"></div>
	                                <div class="item">50</div>
	                                <div class="item"></div>
	                                <div class="item">0</div>
	                                <div class="item"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div><!--.chart-statistic-box-->
	            </div><!--.col-->
	            <div class="col-xl-6">
	                <div class="row">
	                    <div class="col-sm-6">
	                        <article class="statistic-box red">
	                            <div>
	                                <div class="number">150</div>
	                                <div class="caption"><div>Marcas</div></div>
	                              
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box purple">
	                            <div>
	                                <div class="number">350</div>
	                                <div class="caption"><div>Modelos</div></div>
	                             
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box yellow">
	                            <div>
	                                <div class="number">3256</div>
	                                <div class="caption"><div>Serviços</div></div>
	                               
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                    <div class="col-sm-6">
	                        <article class="statistic-box green">
	                            <div>
	                                <div class="number">52471</div>
	                                <div class="caption"><div>Tempos cadastrados</div></div>
	                            </div>
	                        </article>
	                    </div><!--.col-->
	                </div><!--.row-->
	            </div><!--.col-->
	        </div><!--.row-->
	
	  <div class="row">
	            <div class="col-xl-12 dahsboard-column">
	               <section class="box-typical">
				<header class="box-typical-header">
					<div class="tbl-row">
						<div class="tbl-cell tbl-cell-title">
							<h3>Serviços por marca</h3>
						</div>
						
					</div>
				</header>
				<div class="box-typical-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									
									<th>Marca</th>
									<th>Modelos</th>
									
									<th>Tempos</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Fiat</td>
									<td>350 modelos</td>
									<td>3805 tempos cadastrados</td>
								</tr>
								<tr>
									<td>Gm</td>
									<td>750 modelos</td>
									<td>2750 tempos cadastrados</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!--.box-typical-body-->
			</section>
	        
	            </div><!--.col-->
            </div>	       
	    </div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="../js/lib/popper/popper.min.js"></script>
	<script src="../js/lib/tether/tether.min.js"></script>
	<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>

	<script type="text/javascript" src="../js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="../js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function(){
		

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						},
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>


<script src="../js/app.js"></script>
</body>
</html>