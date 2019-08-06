<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Gt Project - Projetos</title>

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
      <link rel="shortcut icon" href="../img/logo-2-mob.png">
      <link rel="stylesheet" href="../css/separate/pages/gallery.min.css">
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
							<h3>Projetos</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Projetos</a></li>&nbsp; /
								
							</ol>
						</div>
					</div>
				</div>
			</header>
                  	<section class="tabs-section">
				<div class="tabs-section-nav tabs-section-nav-icons">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<i class="font-icon fa fa-paste"></i>
										Em planejamento
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<span class="fa fa-clock-o"></span>
										Em andamento
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										<i class="fa fa-check-square"></i>
										Concluidos
									</span>
								</a>
							</li>							
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">
					    <div class="box-typical-body">
					<div class="gallery-grid">
						<div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer">
								<img class="gallery-picture" src="../img/newP.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 50px;background: rgba(148, 148, 148, 0.9);">
										<h4>NOVO PROJETO</h4>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                           <div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer" onclick="window.location.href='indexProjeto.php'">
								<img class="gallery-picture" src="../img/gall-img-1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 15px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">Nome do projeto <i class="fa fa-sort-desc" style="color:red;float:right;font-size:30px"></i></p>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Gerente</p>
										<div class="btn-group" style="pointer-events:none;">
											<button type="button" class="btn">
												<i class="fa fa-clock-o"></i>Tempo estimado: 1500h
												
											</button>										
										</div>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Cliente <i class="font-icon-mail" style="float:right"></i></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                           <div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer">
								<img class="gallery-picture" src="../img/gall-img-1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 15px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">Nome do projeto <i class="fa fa-sort-asc" style="color:green;float:right;font-size:30px"></i></p>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Gerente</p>
										<div class="btn-group" style="pointer-events:none;">
											<button type="button" class="btn" >
												<i class="fa fa-clock-o"></i>Tempo estimado: 1500h
												
											</button>										
										</div>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Cliente <i class="font-icon-mail" style="float:right"></i></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                           <div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer">
								<img class="gallery-picture" src="../img/gall-img-1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 15px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">Nome do projeto <i class="fa fa-sort-asc" style="color:green;float:right;font-size:30px"></i></p>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Gerente</p>
										<div class="btn-group" style="pointer-events:none;">
											<button type="button" class="btn">
												<i class="fa fa-clock-o"></i>Tempo estimado: 1500h
												
											</button>										
										</div>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Cliente <i class="font-icon-mail" style="float:right"></i></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                           <div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer">
								<img class="gallery-picture" src="../img/gall-img-1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 15px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">Nome do projeto <i class="fa fa-sort-asc" style="color:green;float:right;font-size:30px"></i></p>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Gerente</p>
										<div class="btn-group" style="pointer-events:none;">
											<button type="button" class="btn">
												<i class="fa fa-clock-o"></i>Tempo estimado: 1500h
												
											</button>										
										</div>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Cliente <i class="font-icon-mail" style="float:right"></i></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                           <div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer">
								<img class="gallery-picture" src="../img/gall-img-1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 15px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">Nome do projeto <i class="fa fa-sort-asc" style="color:green;float:right;font-size:30px"></i></p>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Gerente</p>
										<div class="btn-group" style="pointer-events:none;">
											<button type="button" class="btn">
												<i class="fa fa-clock-o"></i>Tempo estimado: 1500h
												
											</button>										
										</div>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Cliente <i class="font-icon-mail" style="float:right"></i></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                           <div class="gallery-col">
							<article class="gallery-item" style="cursor:pointer">
								<img class="gallery-picture" src="../img/gall-img-1.jpg" alt="" height="158">
								<div class="gallery-hover-layout">
									<div class="gallery-hover-layout-in" style="padding: 15px;background: rgba(148, 148, 148, 0.9);">
										<p class="gallery-item-title">Nome do projeto <i class="fa fa-sort-asc" style="color:green;float:right;font-size:30px"></i></p>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Gerente</p>
										<div class="btn-group" style="pointer-events:none;">
											<button type="button" class="btn">
												<i class="fa fa-clock-o"></i>Tempo estimado: 1500h
												
											</button>										
										</div>
										<p><img src="../img/icon1.svg" width="19px" height="19px"> Cliente <i class="font-icon-mail" style="float:right"></i></p>
									</div>
								</div>
							</article>
						</div><!--.gallery-col-->
                            </div>
                        </div>
					</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
					    
					</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
					    
					</div><!--.tab-pane-->
					
				</div><!--.tab-content-->
			</section><!--.tabs-section-->
	       	       
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