        <script language="JavaScript">
            var sess = document.getElementById('contato').setAttribute("class", "active");

            var tit = document.getElementById('titulo').innerHTML = "Colégio DEER - Contato"; //Pega o TITLE e atribui um Valor
        </script>

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
	        		<div class="col-sm-5">
	        			<!-- Map -->
	        			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3554.329869757068!2d-48.634507500000055!3d-27.019740499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8b67e5f7df8dd%3A0x668da8f288a7f3ff!2sR.+Santa+Terezinha%2C+Cambori%C3%BA+-+SC!5e0!3m2!1spt-BR!2sbr!4v1418050482505" width="400" height="300" frameborder="0" style="border:0"></iframe>
	        			<!-- End Map -->

	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<b>Endereço:</b> Rua Santa Terezinha, Bairro São Francisco de Assis, n 90<br/>
                            <b>Localização</b> Camboriú, Santa Catarina </br>
	        				<b>Telefone:</b> (47) 9914-2887<br/>
	        				<b>E-mail:</b> <a href="mailto:amiltonbjr@gmail.com">amiltonbjr@gmail.com</a>
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

                                echo form_label('Mensagem', 'mensagem');
                                $mensagem = array('name'=>'mensagem', 'class'=>'form-control', 'id'=>'contact-message');
                                echo form_textarea($mensagem).'<br>';

                                $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn pull-right');
                                echo form_submit($enviar);
                                echo form_fieldset_close();
                                echo form_close();
                            ?>
		        		</div>
		        		<!-- End Contact Info -->
	        		</div>
	        	</div>
	    	</div>
	    </div>
