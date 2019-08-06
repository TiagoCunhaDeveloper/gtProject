<?php
    session_start(); 
    if(isset($_SESSION['login']) && $_SESSION['login']==true && $_SESSION['tipo']==0){
        include "../../../model/usuario.class.php";    
    }
    else{
        header("Location:../erros/erro_401.html");    
    }   
?>
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
	                    <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm "
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notificações
	                              
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="../img/avatar-2-64.png" alt="">
	                                    </div>
	                                   
	                                    <a>Gustavo</a> Completou uma atividade 
	                                    <div class="color-blue-grey-lighter">Gt Websites - 16:43 | 10/08/2018</div>
	                                </div>
	                               <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="../img/avatar-2-64.png" alt="">
	                                    </div>
	                                   
	                                    <a>Gustavo</a> Completou uma atividade 
	                                    <div class="color-blue-grey-lighter">Gt Websites - 16:43 | 10/08/2018</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="../img/avatar-2-64.png" alt="">
	                                    </div>
	                                   
	                                    <a>Gustavo</a> Completou uma atividade 
	                                    <div class="color-blue-grey-lighter">Gt Websites - 16:43 | 10/08/2018</div>
	                                </div>
	                            </div>
	                            
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-notification messages">
	                        <a href="#"
	                           class="header-alarm "
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                            <div class="dropdown-menu-messages-header">
	                                <ul class="nav" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                           Avisos
	                                            
	                                        </a>
	                                    </li>	                                   
	                                </ul>
	                                <!--<button type="button" class="create">
	                                    <i class="font-icon font-icon-pen-square"></i>
	                                </button>-->
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="../img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Gerente - Nome projeto</span>
	                                            <span class="mess-item-txt">Olá preciso de uma mudança urgente...</span>
	                                        </a>
	                                       <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="../img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Gerente - Nome projeto</span>
	                                            <span class="mess-item-txt">Olá preciso de uma mudança urgente...</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="../img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Gerente - Nome projeto</span>
	                                            <span class="mess-item-txt">Olá preciso de uma mudança urgente...</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="../img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Gerente - Nome projeto</span>
	                                            <span class="mess-item-txt">Olá preciso de uma mudança urgente...</span>
	                                        </a>
	                                    </div>
	                                </div>
	                                
	                            </div>
	                           
	                        </div>
	                    </div>
	
	                    
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <?php
                                    $usuarios = new Usuario();
                                    $listar=$usuarios->listar($_SESSION['id_usuario']);
                                    $imgUsuario=$listar[1];
                                    if($imgUsuario==""){
                                        echo '<img src="../img/avatar-2-64.png" alt=""/>';
                                    }
                                    else{
                                        echo '<img src="../img/imagensUsuarios/'.$imgUsuario.'" alt=""/>';
                                    }
                                ?>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                          
	                            <a class="dropdown-item" href="perfil.php"><span class="font-icon glyphicon glyphicon-user"></span>Meu perfil</a>
	                            <a class="dropdown-item" href="configuracoes.php"><span class="font-icon fa fa-gear"></span>Configurações</a>
	                            <div class="dropdown-divider"></div>
	                            
	                            <a class="dropdown-item" href="logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Sair</a>
	                        </div>
	                    </div>
	
	                   
	                </div><!--.site-header-shown-->
	
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->
	<div class="mobile-menu-left-overlay"></div>
	<ul class="main-nav nav nav-inline">
		<li class="nav-item">
			<a class="nav-link <?php if($menu==1){ echo 'active';}?>" href="index.php">Projetos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if($menu==2){ echo 'active';}?>" href="equipes.php">Colaboradores</a>
		</li>		
		<li class="nav-item">
			<a class="nav-link <?php if($menu==3){ echo 'active';}?>" href="minhasAtividades.php">Minhas atividades</a>
		</li>		
	</ul>
