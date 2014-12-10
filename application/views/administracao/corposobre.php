<script language="JavaScript">
    var sess = document.getElementById('sobre').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Sobre"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Sobre <small>Editar</small></h1>
                    <p>Edite as informações da área <i>Sobre</i> do website.</p>
                </div>
                <div class="col-lg-6">
                    <?php
                        foreach($sobre as $sob){

                            $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formlogin');
                            echo form_open(base_url().'administracao/sobre/editar/'.$sob->id_sobre,$atributos);

                            echo form_label('Título', 'titulo');
                            $titulo1 = array('name'=>'titulo', 'class' => 'form-control', 'value' => $sob->titulo);
                            echo form_input($titulo1);

                            echo form_label('Texto', 'descricao');
                            $texto1 = array('name'=>'descricao', 'class'=>'form-control', 'value' => $sob->descricao);
                            echo form_textarea($texto1);

                            echo form_label('Imagem', 'imagem');
                            $titulo2 = array('name'=>'imagem', 'class' => 'form-control', 'value' => $sob->imagem);
                            echo form_input($titulo2)."<br>";

                            echo "<img src='$sob->imagem' class='imagemsobre'/>";

                            $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                            echo form_submit($enviar);

                            echo form_fieldset_close();
                            echo form_close();

                        }
                    ?>
                </div>
            </div>
</div>
