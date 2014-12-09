

        <script language="JavaScript">
            var sess = document.getElementById('sobre').setAttribute("class", "active");

            var tit = document.getElementById('titulo').innerHTML = "Colégio DEER - Sobre"; //Pega o TITLE e atribui um Valor
        </script>

    <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Sobre nós</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6">
                        <?php
                            foreach ($sobre as $sob){
                                echo "<h3>".$sob->titulo."</h3>";
                                echo "<p>".$sob->descricao."</p>";
                            }
                        ?>
					</div>
					<div class="col-sm-6">
						<img class="imagemsobre" src="<?php foreach($sobre as $sob){ echo $sob->imagem; } ?>">
					</div>
				</div>
			</div>
		</div>
