
        <script language="JavaScript">
                var sess = document.getElementById('inicio').setAttribute("class", "active"); //Pega elemento da ABA e atribui a classe ATIVO

                var tit = document.getElementById('titulo').innerHTML = "Colégio DEER - Início"; //Pega o TITLE e atribui um Valor
        </script>

    <!-- Homepage Slider -->
        <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg1">
                        <?php
                            foreach($slides as $sli){
                                echo "<h2 class='title'>".$sli->titulo."</h2>";
                                echo "<h3 class='subtitle'>".$sli->descricao."</h3>";
                            }
                        ?>
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg2">
						<?php
                            foreach($slides as $sli){
                                echo "<h2 class='title'>".$sli->titulo2."</h2>";
                                echo "<h3 class='subtitle'>".$sli->descricao2."</h3>";
                            }
                        ?>
					</li>
					<!-- End Slide 2 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- End Homepage Slider -->

		<!-- Services -->
        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php base_url(); ?>assets/comum/img/servicos/diamond.png" alt="Service 1">
                            <?php
                                foreach($blocos as $blo){
                                    echo "<h3>".$blo->titulo."</h3>";
                                    echo "<p>".$blo->descricao."</p>";
                                }
                            ?>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php base_url(); ?>assets/comum/img/servicos/ruler.png" alt="Service 2">
		        			<?php
                                foreach($blocos as $blo){
                                    echo "<h3>".$blo->titulo2."</h3>";
                                    echo "<p>".$blo->descricao2."</p>";
                                }
                            ?>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php base_url(); ?>assets/comum/img/servicos/box.png" alt="Service 3">
		        			<?php
                                foreach($blocos as $blo){
                                    echo "<h3>".$blo->titulo3."</h3>";
                                    echo "<p>".$blo->descricao3."</p>";
                                }
                            ?>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->
