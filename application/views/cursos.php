<script language="JavaScript">
    var sess = document.getElementById('cursos').setAttribute("class", "active");
    var tit = document.getElementById('titulo').innerHTML = "Colégio DEER - Cursos"; //Pega o TITLE e atribui um Valor
</script>

<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Portfolio - 3 Columns (Option 1)</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
                    <?php
                        foreach($cursos as $cur){
                            echo "<div class='col-md4 col-sm-6'>";
                                echo "<div class='portfolio-item'>";
                                    echo "<div class='portfolio-image'>";
                                        echo "<a href='#'><img src='$cur->imagem' class='imgcurso' alt='$cur->curso'></a>";
                                    echo "</div>";
                                    echo "<div class='portfolio-info-fade'>";
                                        echo "<ul>";
                                            echo "<li class='portfolio-project-name'>$cur->curso</li>";
                                            echo "<li>$cur->descricao</li>";
                                            echo "<li class='read-more'><a href='#' class='btn'>Leia mais</a>";
                                        echo "</ul>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        }
                    ?>
				</div>
			</div>
		</div>
