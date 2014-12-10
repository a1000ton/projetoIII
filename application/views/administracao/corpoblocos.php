<script language="JavaScript">
    var sess = document.getElementById('blocos').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Blocos"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Blocos <small>Editar</small></h1>
                </div>

                <div class="col-lg-12">
                    <?php
                        foreach($blocos as $blo){

                            $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formlogin');
                            echo form_open(base_url().'administracao/blocos/editar/'.$blo->id_bloco,$atributos);

                            echo "<div class='col-lg-4'>";

                            echo "<img src='".base_url()."assets/comum/img/servicos/diamond.png' class='centerit'><br>";
                            echo form_label('Título', 'titulo');
                            $titulo1 = array('name'=>'titulo', 'class' => 'form-control', 'value' => $blo->titulo);
                            echo form_input($titulo1);

                            echo form_label('Texto', 'descricao');
                            $texto1 = array('name'=>'descricao', 'class'=>'form-control', 'value' => $blo->descricao);
                            echo form_textarea($texto1);

                            echo "</div>";
                            echo "<div class='col-lg-4'>";

                            echo "<img src='".base_url()."assets/comum/img/servicos/ruler.png' class='centerit'><br>";
                            echo form_label('Título', 'titulo2');
                            $titulo1 = array('name'=>'titulo2', 'class' => 'form-control', 'value' => $blo->titulo2);
                            echo form_input($titulo1);

                            echo form_label('Texto', 'descricao2');
                            $texto1 = array('name'=>'descricao2', 'class'=>'form-control', 'value' => $blo->descricao2);
                            echo form_textarea($texto1);

                            echo "</div>";
                            echo "<div class='col-lg-4'>";

                            echo "<img src='".base_url()."assets/comum/img/servicos/box.png' class='centerit'><br>";
                            echo form_label('Título', 'titulo3');
                            $titulo1 = array('name'=>'titulo3', 'class' => 'form-control', 'value' => $blo->titulo3);
                            echo form_input($titulo1);

                            echo form_label('Texto', 'descricao3');
                            $texto1 = array('name'=>'descricao3', 'class'=>'form-control', 'value' => $blo->descricao3);
                            echo form_textarea($texto1)."<br>";

                            echo "</div>";

                            $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                            echo form_submit($enviar);

                            echo form_fieldset_close();
                            echo form_close();

                        }
                    ?>
                </div>
            </div>
</div>
