<!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Navegar</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="<?php base_url(); ?>">Início</a></li>
		    				<li><a href="<?php base_url(); ?>sobre">Sobre a Escola</a></li>
		    				<li><a href="<?php base_url(); ?>produtos">Cursos</a></li>
		    				<li><a href="<?php base_url(); ?>contato">Contato</a></li>
		    			</ul>
		    		</div>

		    		<div class="col-footer col-md-5 col-xs-6">
		    			<h3>Contato</h3>
                        <p class="contact-us-details">
                            <?php
                                foreach ($empresa as $emp){
                                    echo "<b>Endereço:</b> ".$emp->rua."<br/>";
                                    echo "<b>Localização:</b> ".$emp->cidade."<br/>";
                                    echo "<b>Telefone:</b> ".$emp->telefone."<br/>";
                                    echo "<b>E-mail:</b><a href='mailto:amiltonbjr@gmail.com'> ".$emp->email."</a><br/>";
                                }
                            ?>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Acesse nossas Redes Sociais</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="https://www.facebook.com/amilton.junior.54966" class="facebook"></a></li>
		    				<li><a href="https://plus.google.com/u/0/+AmiltonBaracyJr" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; IFC - Camboriú - TSI13. Todos direitos reservados.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>
