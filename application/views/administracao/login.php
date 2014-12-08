<div class="section">
	    	<div class="container">
				<div class="row">
                    <div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="basic-login">
                            <?php
                                $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formlogin');
                                echo form_open(base_url().'administracao/restrito/login',$atributos);
                                echo form_fieldset('Efetuar Login');
                                echo form_label('Usuário', 'usuario');
                                $usuario = array('name'=>'usuario', 'class' => 'form-control', 'id'=>'login-username');
                                echo form_input($usuario);
                                echo form_label('Senha', 'senha');
                                $senha = array('name'=>'senha', 'class'=>'form-control', 'id'=>'login-password');
                                echo form_password($senha).'<br>';
                                $enviar = array('name'=>'btnSubmit', 'value'=>'Enviar', 'class'=>'btn pull-right');
                                echo form_submit($enviar);
                                echo form_fieldset_close();
                                echo form_close();
                            ?>
                            <h4><a href="<?php echo base_url(); ?>"> << Voltar </a></h4>
						</div>
					</div>
                    <div class="col-sm-4"></div>
				</div>
			</div>
		</div>
