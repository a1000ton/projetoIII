<script language="JavaScript">
    var sess = document.getElementById('slides').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Slides"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Slides <small>Editar</small></h1>
                    <p>Edite o título e o corpo do texto dos slides na Home do seu site.</p>
                </div>
                <div class="col-lg-6">
                    <?php
                        foreach($slides as $sli){

                            $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formlogin');
                            echo form_open(base_url().'administracao/slides/editar/'.$sli->id_slide,$atributos);

                            echo form_label('Título Slide 1', 'titulo');
                            $titulo1 = array('name'=>'titulo', 'class' => 'form-control', 'value' => $sli->titulo);
                            echo form_input($titulo1);

                            echo form_label('Texto Slide 1', 'descricao');
                            $texto1 = array('name'=>'descricao', 'class'=>'form-control', 'value' => $sli->descricao);
                            echo form_textarea($texto1);

                            echo form_label('Título Slide 2', 'titulo2');
                            $titulo2 = array('name'=>'titulo2', 'class' => 'form-control', 'value' => $sli->titulo2);
                            echo form_input($titulo2);

                            echo form_label('Texto Slide 2', 'descricao2');
                            $texto2 = array('name'=>'descricao2', 'class'=>'form-control', 'value' => $sli->descricao2);
                            echo form_textarea($texto2)."<br>";

                            $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                            echo form_submit($enviar);

                            echo form_fieldset_close();
                            echo form_close();

                        }
                    ?>
                </div>
            </div>
</div>
