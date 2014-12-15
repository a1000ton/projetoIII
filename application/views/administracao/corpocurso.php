<script language="JavaScript">
    var sess = document.getElementById('cursos').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Cursos"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Cursos <small>Adicionar - Editar - Excluir</small></h1>
                </div>
                <div class="col-lg-6">
                    <table class="tabelanova">
                        <tr>
                            <td class="headtable">Excuir</td>
                            <td class="headtable">Editar</td>
                            <td class="headtable">Curso</td>
                            <td class="headtable">Slug</td>
                        </tr>
                        <?php
                            foreach($cursos as $cur){
                                echo "<tr>";
                                    echo "<td class='bodytable special'><a href='".base_url()."administracao/cursos/excluir/".$cur->id_curso."'><img src='".base_url()."assets/administracao/img/delete.png' class='icontable'></td>";

                                    echo "<td class='bodytable special'><a href='".base_url()."administracao/cursos/editar/".$cur->id_curso."'><img src='".base_url()."assets/administracao/img/edit.png' class='icontable'></td>";

                                    echo "<td class='bodytable'>".$cur->curso."</td>";
                                    echo "<td class='bodytable'>".$cur->slug_curso."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>

                <div class="col-lg-6">
                    <p>Adicionar Novo</p>
                    <?php
                        $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formadd');
                        echo form_open(base_url().'administracao/cursos/adicionar',$atributos);

                        echo form_label('Nome', 'curso');
                        $nome = array('name'=>'curso', 'class' => 'form-control');
                        echo form_input($nome);

                        echo form_label('Slug', 'slug_curso');
                        $slug = array('name'=>'slug_curso', 'class' => 'form-control');
                        echo form_input($slug);

                        echo form_label('Descrição', 'descricao');
                        $desc = array('name'=>'descricao', 'class' => 'form-control');
                        echo form_textarea($desc);

                        echo form_label('Imagem', 'imagem');
                        $img = array('name'=>'imagem', 'class' => 'form-control');
                        echo form_input($img);

                        $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                        echo form_submit($enviar);

                        echo form_fieldset_close();
                        echo form_close();
                    ?>
                </div>
            </div>
</div>
