      <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Entre em Contato</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
	        	<div class="row">
	        		<div class="col-sm-7">
	        			<!-- Map -->
	        			<div id="contact-us-map">

	        			</div>
	        			<!-- End Map -->
	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<b>Endereço:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Telefone:</b> +44 123 654321<br/>
	        				<b>E-mail:</b> <a href="mailto:getintoutch@yourcompanydomain.com">amiltonbjr@gmail.com</a>
	        			</p>
	        			<!-- End Contact Info -->
	        		</div>
	        		<div class="col-sm-5">
	        			<!-- Contact Form -->
	        			<h3>Fale conosco</h3>
	        			<div class="contact-form-wrapper">

                            <?php
                                $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formlogin');
                                echo form_open(base_url().'administracao/restrito/login',$atributos);
                                echo form_label('Nome', 'nome');
                                $nome = array('name'=>'nome', 'class' => 'form-control', 'id'=>'Name');
                                echo form_input($nome);

                                echo form_label('E-mail', 'email');
                                $email = array('name'=>'email', 'class'=>'form-control', 'id'=>'contact-email');
                                echo form_input($email);

                                echo form_label('Tópico', 'topico');
                                $opcoes = array('duvida'=>'Dúvida', 'sugestao'=>'Sugestão', 'reclamacao'=>'Reclamação');
                                $topico = array('name'=>'topico', 'class'=>'form-control', 'id'=>'prependedInput');
                                echo form_dropdown('topicos', $opcoes).'<br>';


                                echo form_label('Mensagem', 'mensagem');
                                $mensagem = array('name'=>'mensagem', 'class'=>'form-control', 'id'=>'contact-message');
                                echo form_textarea($mensagem).'<br>';

                                $enviar = array('name'=>'btnSubmit', 'value'=>'Enviar', 'class'=>'btn pull-right');
                                echo form_submit($enviar);
                                echo form_fieldset_close();
                                echo form_close();
                            ?>

		        			<form class="form-horizontal" role="form">
		        				 <div class="form-group">
		        				 	<label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>
		        				 	<div class="col-sm-9">
										<input class="form-control" id="Name" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>
									<div class="col-sm-9">
										<input class="form-control" id="contact-email" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Select Topic</b></label>
									<div class="col-sm-9">
										<select class="form-control" id="prependedInput">
											<option>Please select topic...</option>
											<option>General</option>
											<option>Services</option>
											<option>Orders</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>
									<div class="col-sm-9">
										<textarea class="form-control" rows="5" id="contact-message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn pull-right">Send</button>
									</div>
								</div>
		        			</form>
		        		</div>
		        		<!-- End Contact Info -->
	        		</div>
	        	</div>
	    	</div>
	    </div>

        <script language="JavaScript">
                var sess = document.getElementById('contato');
                sess.setAttribute("class", "active");
        </script>
