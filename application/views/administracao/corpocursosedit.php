<script language="JavaScript">
    var sess = document.getElementById('cursos').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Cursos"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Cursos <small>EDITAR</small></h1>
                    <p>Continue a Edição de seu Curso.</p>
                </div>

                <div class="col-lg-6">
                    <p>Editar</p>
                    <?php
                        foreach($cursos as $cur){
                            $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formadd');
                            echo form_open(base_url().'administracao/cursos/editarcompleto/'.$cur->id_curso,$atributos);

                            form_hidden('id_curso', $cur->id_curso);

                            echo form_label('Nome', 'curso');
                            $nome = array('name'=>'curso', 'class' => 'form-control', 'value' => $cur->curso);
                            echo form_input($nome);

                            echo form_label('Slug', 'slug_curso');
                            $slug = array('name'=>'slug_curso', 'class' => 'form-control', 'value' => $cur->slug_curso);
                            echo form_input($slug);

                            echo form_label('Descrição', 'descricao');
                            $desc = array('name'=>'descricao', 'class' => 'form-control', 'value' => $cur->descricao);
                            echo form_textarea($desc);

                            echo form_label('Imagem', 'imagem');
                            $img = array('name'=>'imagem', 'class' => 'form-control', 'value' => $cur->imagem);
                            echo form_input($img);

                            $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                            echo form_submit($enviar);

                            echo "<button class='btn btn-novo btn-voltar'><a href='".base_url()."administracao/cursos' class='nop'>Cancelar</a></button>";

                            echo form_fieldset_close();
                            echo form_close();
                        }
                    ?>
                </div>
            </div>
</div>
