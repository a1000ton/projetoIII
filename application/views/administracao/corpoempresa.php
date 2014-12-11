<script language="JavaScript">
    var sess = document.getElementById('empresa').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Empresa"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Empresa <small>Editar</small></h1>
                </div>

                <div class="col-lg-6">
                    <?php
                        foreach($empresa as $emp){

                            $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formlogin');
                            echo form_open(base_url().'administracao/empresa/editar/'.$emp->id_empresa,$atributos);

                            echo form_label('Imagem', 'logo');
                            $logo = array('name'=>'logo', 'class' => 'form-control', 'value' => $emp->logo);
                            echo form_input($logo)."<br>";

                            echo "<img src='$emp->logo' style='padding-left: 100px'/>"."<br>";

                            echo form_label('Endereço', 'rua');
                            $rua = array('name'=>'rua', 'class' => 'form-control', 'value' => $emp->rua);
                            echo form_input($rua);

                            echo form_label('Localização', 'cidade');
                            $cidade = array('name'=>'cidade', 'class' => 'form-control', 'value' => $emp->cidade);
                            echo form_input($cidade);

                            echo form_label('Telefone', 'telefone');
                            $telefone = array('name'=>'telefone', 'class' => 'form-control', 'value' => $emp->telefone);
                            echo form_input($telefone);

                            echo form_label('E-mail', 'email');
                            $email = array('name'=>'email', 'class' => 'form-control', 'value' => $emp->email);
                            echo form_input($email)."<br>";



                            $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                            echo form_submit($enviar);

                            echo form_fieldset_close();
                            echo form_close();

                        }
                    ?>
                </div>
            </div>

</div>
