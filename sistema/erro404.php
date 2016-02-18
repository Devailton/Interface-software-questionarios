<!DOCTYPE html>
<html>
	<head>
		<?php 
			include("modulos/init.php"); 
		?>
	</head>
	
	<body>
		<div class="page">

			<?php
				include("modulos/topo.php");
			?>
			
			<?php
				include("modulos/busca.php");
			?>

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Página não encontrada</h1>
				</div>
			</section>
			<!--/ page title -->

			<!-- page content -->
			<main class="page-content vc_responsive">
				<div class="grid-row">
					<div id="header-404">
						<a>
							404 - Ah, não!
						</a>
					</div>
					<div id="block-404">
						<div id="block-404-substrate">
						</div>
						<div id="block-404-icon">
						</div>
					</div>
					<div id="text-404">
						<div class="wpb_row vc_row-fluid">
						<!-- Full width column -->	
									<div class="vc_span12 wpb_column column_container">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element">
												<div class="wpb_wrapper">
												<h1>
												Não encontramos a página que você tentou acessar.
												</h1>
												Continue navegando pelo GUIA.
												</div>
											</div>
										</div>
									</div>
						<!--/ Full width column -->	
						</div>
					</div>
					<div id="button-404">
						<a class="wpb_button wpb_wpb_button wpb_btn-arrow-right wpb_regularsize" href="index.php">voltar à página inicial</a>
					</div>
				</div>
			</main>
			<!-- page content -->

			<?php
				include("modulos/rodape.php");
			?>

		</div>
		
		<?php
			include("modulos/plugins.php");
		?>
	</body>
</html>