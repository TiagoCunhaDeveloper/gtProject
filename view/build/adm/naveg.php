<header class="site-header">
	    <div class="container-fluid">
        
	     
	        
	         <a href="#" class="site-logo">
	             <img class="hidden-md-down" src="../img/logo-2.png" alt="">
	            <img class="hidden-lg-down" src="../img/logo-2-mob.png" alt="">
	        </a>
	        
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	        
	                    
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="../img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                         
	                            <a class="dropdown-item" href="perfil.php"><span class="font-icon glyphicon glyphicon-user"></span>Meu perfil</a>
	                           
	                            <a class="dropdown-item" target="_blank" href="ManualCLIENTE.pdf"><span class="font-icon glyphicon glyphicon-question-sign"></span>Manual</a>
	                            <div class="dropdown-divider"></div>
	                            
	                            <a class="dropdown-item" href="../../contact.html"><span class="font-icon glyphicon glyphicon-log-out"></span>Sair</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        
	                      
	                        
	
	                        <div class="dropdown">
	                            <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Filtro
	                            </button>
	                            <div class="dropdown-menu" aria-labelledby="dd-header-add">
	                                <a class="dropdown-item" href="#">Usuários</a>
	                                <a class="dropdown-item" href="#">Modelos</a>
	                                <a class="dropdown-item" href="#">Marcas</a>
	                            </div>
	                        </div>
	                       
	                        
	                        <div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text" placeholder="Pesquisar"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->
	<div class="mobile-menu-left-overlay"></div>
	<ul class="main-nav nav nav-inline">
		<li class="nav-item">
			<a class="nav-link <?php if($menu==1){ echo 'active';}?>" href="index.php">Home</a>
		</li>
 		<li class="nav-item">
			<a class="nav-link <?php if($menu==2){ echo 'active';}?>" href="usuarios.php">Usuários</a>
		</li>	
		<li class="nav-item">
			<a class="nav-link <?php if($menu==3){ echo 'active';}?>" href="veiculos.php">Veículos</a>
		</li>	
		<li class="nav-item">
			<a class="nav-link <?php if($menu==4){ echo 'active';}?>" href="planos.php">Planos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if($menu==5){ echo 'active';}?>" href="categorias.php">Categorias</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if($menu==6){ echo 'active';}?>" href="grupos.php">Grupos de serviço</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if($menu==7){ echo 'active';}?>" href="servicos.php">Serviços</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle <?php if($menu==8){ echo 'active';}?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tempo de serviços</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="cadTempos.php">Cadastrar tempos</a>
				<a class="dropdown-item" href="temposCadastrados.php">Tempos cadastrados(ajustes)</a>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if($menu==9){ echo 'active';}?>" href="forum.php">Fórum</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle <?php if($menu==10){ echo 'active';}?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Configurações</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="notificacoes.php">Notificações</a>
				<a class="dropdown-item" href="atualizarContrato.php">Atualizar contrato</a>
			</div>
		</li>
	</ul>