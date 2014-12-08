        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
			        		<li><a href="<?php echo base_url(); ?>administracao/restrito">Admin</a></li>

			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/comum/img/logo-site.png" alt="Multipurpose Twitter Bootstrap Template" style="width: auto; height: 45px;"></a></li>
						<li id="inicio">
							<a href="<?php echo base_url(); ?>">Início</a>
						</li>
						<li id="sobre">
							<a href="<?php echo base_url(); ?>sobre">Sobre o Colégio</a>
						</li>
						<li class="has-submenu" id="cursos">
							<a href="#">Cursos</a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner">
									<div>
                                        <h4><a href="<?php echo base_url(); ?>cursos">Todos os cursos</a></h4>
										<h6>
                                        <?php
                                            foreach($categorias as $cat){
                                                echo "<a href='".base_url().$cat->slug_categoria."'>".$cat->categoria."</a>";
                                            }
                                        ?>
                                        </h6>

                                    </div>
								</div><!-- /mainmenu-submenu-inner -->
							</div><!-- /mainmenu-submenu -->
						</li>
                        <li id="contato">
							<a href="<?php echo base_url(); ?>contato">Contato</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
