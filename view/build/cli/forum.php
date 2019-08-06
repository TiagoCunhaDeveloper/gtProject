<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Catálogo Tempário - Fórum de discussão</title>

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
  <link rel="stylesheet" href="../css/separate/pages/project.min.css">
   <link rel="stylesheet" href="../css/separate/pages/chat.min.css">
      <link rel="stylesheet" href="../css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="../css/separate/vendor/datatables-net.min.css">
    <link rel="stylesheet" href="../css/lib/datatables-net/datatables.min.css">
    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body class="horizontal-navigation">

	<?php
        $menu=5;
        include "naveg.php";
    ?>
	<div class="page-content">
	    <div class="container-fluid">
        <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Fórum de discussão</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Fórum de discussão</a></li>&nbsp;/
								
							</ol>
						</div>						
					</div>
				</div>
			</header>
       <div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Adicionar nova sugestão</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h5><i class="fa fa-car"></i> Veículo</h5>
                          
        <div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria*</label>
							
							<select class="form-control">
                                       <option value="" disabled="" selected="">Categoria*</option>
                                       <option id="des" value="11">CAMINHÕES</option><option id="des" value="4">MOTOS</option><option id="des" value="10">TRATORES</option><option id="des" value="6">UTILITÁRIOS - 4 X 2</option><option id="des" value="9">UTILITÁRIOS - 4 X 4</option><option id="des" value="8">UTILITÁRIOS - VANS</option><option id="des" value="3">VEÍCULOS LEVES</option>                                    </select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInputPassword1">Marca*</label>
							<select class="form-control">
                                       <option value="" disabled="" selected="">Selecione*</option>
                                      </select>
							
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputPassword1">Modelo*</label>
							<select class="form-control">
                                       <option value="" disabled="" selected="">Selecione*</option>
                                      </select>
						</fieldset>
					</div>
				</div>
       <h5><i class="fa fa-cog"></i> Serviço</h5>
       
        <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Grupo*</label>
							<select class="form-control" required="">
                                       <option value="" disabled="" selected="">Selecione o grupo</option>
                                    </select>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputEmail1">Serviço*</label>
						<select class="form-control" >
                                       <option value="" disabled="" selected="">Selecione o serviço</option>
                                       
                                    </select>
						</fieldset>
					</div>					
				</div>
     <h5><i class="fa fa-clock-o"></i> Tempo de serviço</h5>
    
      <div class="row">
					<div class="col-lg-6">
					<label class="form-label semibold" for="exampleInputEmail1">Tempo*</label>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<span class="fa fa-clock-o"></span>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="HH:MM">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputEmail1">Justificativa*</label>
							<textarea rows="4" class="form-control" ></textarea>
						</fieldset>
					</div>					
				</div>
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" >Adicionar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>
        <section class="tabs-section">
				<div class="tabs-section-nav tabs-section-nav-icons">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active show" href="#tabs-1-tab-1" role="tab" data-toggle="tab" aria-selected="true">
									<span class="nav-link-in">
										<i class="fa fa-question-circle"></i>
										Fórum
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab" aria-selected="false">
									<span class="nav-link-in">
										<span class="fa fa-comments"></span>
										Sugestões
									</span>
								</a>
							</li>							
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active show" id="tabs-1-tab-1">
					    <div class="box-typical chat-container">
			

				<section class="chat-area" style="float: none;width:auto;margin-left: -300px;">
					<div class="chat-area-in">
						<div class="chat-area-header">
							<div class="chat-list-item">
								<div class="chat-list-item-photo">
									<img src="../img/avatar-1-64.png" alt="">
								</div>
								<div class="chat-list-item-name">
									<span class="name">Administrador</span>
								</div>								
							</div>
						</div><!--.chat-area-header-->

						<div class="chat-dialog-area scrollable-block">
							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
									<section class="proj-page-section">
							<header class="proj-page-subtitle">
								<h3>Anexos</h3>
							</header>
							<div class="proj-page-attach">
								<i class="font-icon fa fa-file-picture-o"></i>
								<p class="name">Print Sugestão.png</p>
								<p class="date">7,5 Mb</p>
								<p>
									<a href="#">Ver</a>
									<a href="#">Baixar</a>
								</p>
							</div>
							<div class="proj-page-attach">
								<i class="font-icon font-icon-pdf"></i>
								<p class="name">Print Sugestão.pdf</p>
								<p class="date">10,5 Mb</p>
								<p>
									<a href="#">Ver</a>
									<a href="#">Baixar</a>
								</p>
							</div>
						</section>
									
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-1-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Administrador</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Olá, pelo menu Fórum de discussão > Sugestões > Adicionar nova sugestão</div>
									<div class="chat-message quote">
										<div class="chat-message-photo">
											<img src="../img/avatar-2-64.png" alt="">
										</div>
										<div class="chat-message-header">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-name">Eu</div>
												<div class="tbl-cell tbl-cell-date">16/08/2018</div>
											</div>
										</div>
										<div class="chat-message-content">
											<div class="chat-message-txt">Como eu faço uma sugestão?</div>
										</div>
									</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
								</div>
							</div><!--.chat-message-->

							<div class="chat-message">								
								<div class="chat-message-photo">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">Eu</div>
										<div class="tbl-cell tbl-cell-date">16/08/2018</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">Como eu faço uma sugestão?</div>
								</div>
							</div><!--.chat-message-->
						</div><!--.chat-dialog-area-->

						<div class="chat-area-bottom">
							<form class="write-message">
								<div class="avatar">
									<img src="../img/avatar-2-64.png" alt="">
								</div>
								<div class="form-group">
									<textarea rows="2" class="form-control" placeholder="Escreva uma mensagem"></textarea>
								</div>
								<button type="submit" class="btn btn-rounded float-left">Enviar</button>
								<button type="reset" class="btn btn-rounded btn-default float-left">Limpar</button>
								<div class="dropdown dropdown-typical dropup attach">
									<a class="dropdown-toggle dropdown-toggle-txt"
									   id="dd-chat-attach"
									   data-target="#"
									   data-toggle="dropdown"
									   aria-haspopup="true"
									   aria-expanded="false">
										<span class="lbl">Anexar</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-attach">
										<a class="dropdown-item" href="#"><i class="font-icon font-icon-page"></i>Documento</a>
				             		</div>
								</div>
							</form>
						</div><!--.chat-area-bottom-->
					</div><!--.chat-area-in-->
				</section><!--.chat-area-->
			</div><!--.chat-container-->
					</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">					
					    <div class='row'>
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-inline" style="float:right" data-toggle="modal" data-target="#myModal2"><i class="fa fa-plus"></i> Adicionar nova sugestão</button>
                            </div>
                            
                        </div>
                        <section class="card">
				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
						</tfoot>
						<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011/04/25</td>
							<td>$320,800</td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>63</td>
							<td>2011/07/25</td>
							<td>$170,750</td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td>2009/01/12</td>
							<td>$86,000</td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2012/03/29</td>
							<td>$433,060</td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>33</td>
							<td>2008/11/28</td>
							<td>$162,700</td>
						</tr>
						<tr>
							<td>Brielle Williamson</td>
							<td>Integration Specialist</td>
							<td>New York</td>
							<td>61</td>
							<td>2012/12/02</td>
							<td>$372,000</td>
						</tr>
						<tr>
							<td>Herrod Chandler</td>
							<td>Sales Assistant</td>
							<td>San Francisco</td>
							<td>59</td>
							<td>2012/08/06</td>
							<td>$137,500</td>
						</tr>
						<tr>
							<td>Rhona Davidson</td>
							<td>Integration Specialist</td>
							<td>Tokyo</td>
							<td>55</td>
							<td>2010/10/14</td>
							<td>$327,900</td>
						</tr>
						<tr>
							<td>Colleen Hurst</td>
							<td>Javascript Developer</td>
							<td>San Francisco</td>
							<td>39</td>
							<td>2009/09/15</td>
							<td>$205,500</td>
						</tr>
						<tr>
							<td>Sonya Frost</td>
							<td>Software Engineer</td>
							<td>Edinburgh</td>
							<td>23</td>
							<td>2008/12/13</td>
							<td>$103,600</td>
						</tr>
						<tr>
							<td>Jena Gaines</td>
							<td>Office Manager</td>
							<td>London</td>
							<td>30</td>
							<td>2008/12/19</td>
							<td>$90,560</td>
						</tr>
						<tr>
							<td>Quinn Flynn</td>
							<td>Support Lead</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2013/03/03</td>
							<td>$342,000</td>
						</tr>
						<tr>
							<td>Charde Marshall</td>
							<td>Regional Director</td>
							<td>San Francisco</td>
							<td>36</td>
							<td>2008/10/16</td>
							<td>$470,600</td>
						</tr>
						<tr>
							<td>Haley Kennedy</td>
							<td>Senior Marketing Designer</td>
							<td>London</td>
							<td>43</td>
							<td>2012/12/18</td>
							<td>$313,500</td>
						</tr>
						<tr>
							<td>Tatyana Fitzpatrick</td>
							<td>Regional Director</td>
							<td>London</td>
							<td>19</td>
							<td>2010/03/17</td>
							<td>$385,750</td>
						</tr>
						<tr>
							<td>Michael Silva</td>
							<td>Marketing Designer</td>
							<td>London</td>
							<td>66</td>
							<td>2012/11/27</td>
							<td>$198,500</td>
						</tr>
						<tr>
							<td>Paul Byrd</td>
							<td>Chief Financial Officer (CFO)</td>
							<td>New York</td>
							<td>64</td>
							<td>2010/06/09</td>
							<td>$725,000</td>
						</tr>
						<tr>
							<td>Gloria Little</td>
							<td>Systems Administrator</td>
							<td>New York</td>
							<td>59</td>
							<td>2009/04/10</td>
							<td>$237,500</td>
						</tr>
						<tr>
							<td>Bradley Greer</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>41</td>
							<td>2012/10/13</td>
							<td>$132,000</td>
						</tr>
						<tr>
							<td>Dai Rios</td>
							<td>Personnel Lead</td>
							<td>Edinburgh</td>
							<td>35</td>
							<td>2012/09/26</td>
							<td>$217,500</td>
						</tr>
						<tr>
							<td>Jenette Caldwell</td>
							<td>Development Lead</td>
							<td>New York</td>
							<td>30</td>
							<td>2011/09/03</td>
							<td>$345,000</td>
						</tr>
						<tr>
							<td>Yuri Berry</td>
							<td>Chief Marketing Officer (CMO)</td>
							<td>New York</td>
							<td>40</td>
							<td>2009/06/25</td>
							<td>$675,000</td>
						</tr>
						<tr>
							<td>Caesar Vance</td>
							<td>Pre-Sales Support</td>
							<td>New York</td>
							<td>21</td>
							<td>2011/12/12</td>
							<td>$106,450</td>
						</tr>
						<tr>
							<td>Doris Wilder</td>
							<td>Sales Assistant</td>
							<td>Sidney</td>
							<td>23</td>
							<td>2010/09/20</td>
							<td>$85,600</td>
						</tr>
						<tr>
							<td>Angelica Ramos</td>
							<td>Chief Executive Officer (CEO)</td>
							<td>London</td>
							<td>47</td>
							<td>2009/10/09</td>
							<td>$1,200,000</td>
						</tr>
						<tr>
							<td>Gavin Joyce</td>
							<td>Developer</td>
							<td>Edinburgh</td>
							<td>42</td>
							<td>2010/12/22</td>
							<td>$92,575</td>
						</tr>
						<tr>
							<td>Jennifer Chang</td>
							<td>Regional Director</td>
							<td>Singapore</td>
							<td>28</td>
							<td>2010/11/14</td>
							<td>$357,650</td>
						</tr>
						<tr>
							<td>Brenden Wagner</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>28</td>
							<td>2011/06/07</td>
							<td>$206,850</td>
						</tr>
						<tr>
							<td>Fiona Green</td>
							<td>Chief Operating Officer (COO)</td>
							<td>San Francisco</td>
							<td>48</td>
							<td>2010/03/11</td>
							<td>$850,000</td>
						</tr>
						<tr>
							<td>Shou Itou</td>
							<td>Regional Marketing</td>
							<td>Tokyo</td>
							<td>20</td>
							<td>2011/08/14</td>
							<td>$163,000</td>
						</tr>
						<tr>
							<td>Michelle House</td>
							<td>Integration Specialist</td>
							<td>Sidney</td>
							<td>37</td>
							<td>2011/06/02</td>
							<td>$95,400</td>
						</tr>
						<tr>
							<td>Suki Burks</td>
							<td>Developer</td>
							<td>London</td>
							<td>53</td>
							<td>2009/10/22</td>
							<td>$114,500</td>
						</tr>
						<tr>
							<td>Prescott Bartlett</td>
							<td>Technical Author</td>
							<td>London</td>
							<td>27</td>
							<td>2011/05/07</td>
							<td>$145,000</td>
						</tr>
						<tr>
							<td>Gavin Cortez</td>
							<td>Team Leader</td>
							<td>San Francisco</td>
							<td>22</td>
							<td>2008/10/26</td>
							<td>$235,500</td>
						</tr>
						<tr>
							<td>Martena Mccray</td>
							<td>Post-Sales support</td>
							<td>Edinburgh</td>
							<td>46</td>
							<td>2011/03/09</td>
							<td>$324,050</td>
						</tr>
						<tr>
							<td>Unity Butler</td>
							<td>Marketing Designer</td>
							<td>San Francisco</td>
							<td>47</td>
							<td>2009/12/09</td>
							<td>$85,675</td>
						</tr>
						<tr>
							<td>Howard Hatfield</td>
							<td>Office Manager</td>
							<td>San Francisco</td>
							<td>51</td>
							<td>2008/12/16</td>
							<td>$164,500</td>
						</tr>
						<tr>
							<td>Hope Fuentes</td>
							<td>Secretary</td>
							<td>San Francisco</td>
							<td>41</td>
							<td>2010/02/12</td>
							<td>$109,850</td>
						</tr>
						<tr>
							<td>Vivian Harrell</td>
							<td>Financial Controller</td>
							<td>San Francisco</td>
							<td>62</td>
							<td>2009/02/14</td>
							<td>$452,500</td>
						</tr>
						<tr>
							<td>Timothy Mooney</td>
							<td>Office Manager</td>
							<td>London</td>
							<td>37</td>
							<td>2008/12/11</td>
							<td>$136,200</td>
						</tr>
						<tr>
							<td>Jackson Bradshaw</td>
							<td>Director</td>
							<td>New York</td>
							<td>65</td>
							<td>2008/09/26</td>
							<td>$645,750</td>
						</tr>
						<tr>
							<td>Olivia Liang</td>
							<td>Support Engineer</td>
							<td>Singapore</td>
							<td>64</td>
							<td>2011/02/03</td>
							<td>$234,500</td>
						</tr>
						<tr>
							<td>Bruno Nash</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>38</td>
							<td>2011/05/03</td>
							<td>$163,500</td>
						</tr>
						<tr>
							<td>Sakura Yamamoto</td>
							<td>Support Engineer</td>
							<td>Tokyo</td>
							<td>37</td>
							<td>2009/08/19</td>
							<td>$139,575</td>
						</tr>
						<tr>
							<td>Thor Walton</td>
							<td>Developer</td>
							<td>New York</td>
							<td>61</td>
							<td>2013/08/11</td>
							<td>$98,540</td>
						</tr>
						<tr>
							<td>Finn Camacho</td>
							<td>Support Engineer</td>
							<td>San Francisco</td>
							<td>47</td>
							<td>2009/07/07</td>
							<td>$87,500</td>
						</tr>
						<tr>
							<td>Serge Baldwin</td>
							<td>Data Coordinator</td>
							<td>Singapore</td>
							<td>64</td>
							<td>2012/04/09</td>
							<td>$138,575</td>
						</tr>
						<tr>
							<td>Zenaida Frank</td>
							<td>Software Engineer</td>
							<td>New York</td>
							<td>63</td>
							<td>2010/01/04</td>
							<td>$125,250</td>
						</tr>
						<tr>
							<td>Zorita Serrano</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>56</td>
							<td>2012/06/01</td>
							<td>$115,000</td>
						</tr>
						<tr>
							<td>Jennifer Acosta</td>
							<td>Junior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>43</td>
							<td>2013/02/01</td>
							<td>$75,650</td>
						</tr>
						<tr>
							<td>Cara Stevens</td>
							<td>Sales Assistant</td>
							<td>New York</td>
							<td>46</td>
							<td>2011/12/06</td>
							<td>$145,600</td>
						</tr>
						<tr>
							<td>Hermione Butler</td>
							<td>Regional Director</td>
							<td>London</td>
							<td>47</td>
							<td>2011/03/21</td>
							<td>$356,250</td>
						</tr>
						<tr>
							<td>Lael Greer</td>
							<td>Systems Administrator</td>
							<td>London</td>
							<td>21</td>
							<td>2009/02/27</td>
							<td>$103,500</td>
						</tr>
						<tr>
							<td>Jonas Alexander</td>
							<td>Developer</td>
							<td>San Francisco</td>
							<td>30</td>
							<td>2010/07/14</td>
							<td>$86,500</td>
						</tr>
						<tr>
							<td>Shad Decker</td>
							<td>Regional Director</td>
							<td>Edinburgh</td>
							<td>51</td>
							<td>2008/11/13</td>
							<td>$183,000</td>
						</tr>
						<tr>
							<td>Michael Bruce</td>
							<td>Javascript Developer</td>
							<td>Singapore</td>
							<td>29</td>
							<td>2011/06/27</td>
							<td>$183,000</td>
						</tr>
						<tr>
							<td>Donna Snider</td>
							<td>Customer Support</td>
							<td>New York</td>
							<td>27</td>
							<td>2011/01/25</td>
							<td>$112,000</td>
						</tr>
						</tbody>
					</table>
				</div>
			</section>
					</div><!--.tab-pane-->					
				</div><!--.tab-content-->
			</section>
        </div>
	</div><!--.page-content-->

	<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="../js/lib/popper/popper.min.js"></script>
	<script src="../js/lib/tether/tether.min.js"></script>
	<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>

	<script type="text/javascript" src="../js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="../js/lib/match-height/jquery.matchHeight.min.js"></script>
	
<script src="../js/lib/datatables-net/datatables.min.js"></script>
	<script>
		$(function() {
			$('#example').DataTable();			
		});
    </script>

<script src="../js/app.js"></script>
</body>
</html>