<script language="JavaScript">
    var sess = document.getElementById('usuarios').setAttribute("class", "selected");
    var tit = document.getElementById('titulo').innerHTML = "Admin DEER - Usuários"; //Pega o TITLE e atribui um Valor
</script>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Usuários <small>Adicionar - Editar -  Excluir</small></h1>
                    <p>Adicione ou Exclua usuários do seu sistema.</p>
                </div>
                <div class="col-lg-6">
                    <table class="tabelanova">
                        <tr>
                            <td class="headtable">Excuir</td>
                            <td class="headtable">Editar</td>
                            <td class="headtable">Usuário</td>
                            <td class="headtable">Data de cadastro</td>
                        </tr>
                        <?php
                            foreach($usuarios as $usr){
                                echo "<tr>";
                                    echo "<td class='bodytable special'><a href='".base_url()."administracao/usuarios/excluir/".$usr->id_usuario."'><img src='".base_url()."assets/administracao/img/delete.png' class='icontable'></td>";

                                    echo "<td class='bodytable special'><a href='".base_url()."administracao/usuarios/editar/".$usr->id_usuario."'><img src='".base_url()."assets/administracao/img/edit.png' class='icontable'></td>";

                                    echo "<td class='bodytable'>".$usr->usuario."</td>";
                                    echo "<td class='bodytable'>".$usr->cadastrado_em."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>

                <div class="col-lg-6">
                    <p>Adicionar Novo</p>
                    <?php
                        $atributos = array('class' => 'formlogin gradiente1 radius shadow', 'id' => 'formadd');
                        echo form_open(base_url().'administracao/usuarios/adicionar',$atributos);

                        echo form_label('Nome', 'usuario');
                        $nome = array('name'=>'usuario', 'class' => 'form-control');
                        echo form_input($nome);

                        echo form_label('Senha', 'senha');
                        $senha = array('name'=>'senha', 'class'=>'form-control');
                        echo form_password($senha)."<br>";

                        $enviar = array('name'=>'submit', 'value'=>'Enviar', 'class'=>'btn btn-novo');
                        echo form_submit($enviar);

                        echo form_fieldset_close();
                        echo form_close();
                    ?>
                </div>
            </div>
</div>
