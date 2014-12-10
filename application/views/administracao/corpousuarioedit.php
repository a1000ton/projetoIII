<script language="JavaScript">
    var sess = document.getElementById('usuarios').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Usuários"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Usuários <small>EDITAR</small></h1>
                    <p>Continue a Edição de seu usuário.</p>
                </div>

                <div class="col-lg-6">
                    <p>Editar</p>
                    <?php
                        foreach($usuarios as $usr){
                            $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formadd');
                            echo form_open(base_url().'administracao/usuarios/editarcompleto/'.$usr->id_usuario,$atributos);

                            form_hidden('id_usuario', $usr->id_usuario);

                            echo form_label('Nome', 'usuario');
                            $nome = array('name'=>'usuario', 'class' => 'form-control', 'value'=>$usr->usuario);
                            echo form_input($nome);

                            echo form_label('Senha', 'senha');
                            $senha = array('name'=>'senha', 'class'=>'form-control', 'value'=>$usr->senha);
                            echo form_password($senha)."<br>";

                            $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                            echo form_submit($enviar);

                            echo "<button class='btn btn-novo btn-voltar'><a href='".base_url()."administracao/usuarios' class='nop'>Cancelar</a></button>";

                            echo form_fieldset_close();
                            echo form_close();
                        }
                    ?>
                </div>
            </div>
</div>
