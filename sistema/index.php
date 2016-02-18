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
			
			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Sistema de pesquisa Comunika</h1>					
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- callout -->
					<div class="callout callout-background wpb_content_element">
						<div class="icon"><i class="fa fa-laptop"></i></div>
						<div class="callout-wrapper">
							<div class="callout-content">
								<div class="title">Bem vindo ao sistema de pesquisa da Comunika!</div>
								<div class="subtitle">Para realizar uma pesquisa vá ao menu <b> Realizar pesquisa</b> ou clique no botão a seguir.</div>
							</div>
							<div class="callout-button">
								<a href="pesquisa.php" class="button">Realizar pesquisa</a>
							</div>
						</div>
					</div>
					<!--/ callout -->
				</div>
				<div class="grid-row">
					<div class="grid-col grid-col-9">
											
						<!-- milestones -->
						<div class="widget-title">Estatísticas dos sistema</div>
						<div class="vc_row-fluid">
							<div class="vc_span6">
									<div class="milestone clearfix">
										<div class="icon"><i class="fa fa-users"></i></div>
										<div class="title">3200</div>
										Entrevistadores
									</div>
							</div>
							<div class="vc_span6">
									<div class="milestone clearfix">
										<div class="icon"><i class="fa fa-building-o"></i></div>
										<div class="title">1700</div>
										Cidades
									</div>
							</div>
						</div>
						<div class="vc_row-fluid">
							<div class="vc_span6">
									<div class="milestone milestone-alt clearfix">
										<div class="icon"><i class="fa fa-bar-chart"></i></div>
										<div class="title">55000</div>
										Pesquisas realizadas
									</div>
							</div>
							<div class="vc_span6">
									<div class="milestone milestone-alt clearfix">
										<div class="icon"><i class="fa fa-user"></i></div>
										<div class="title">1400</div>
										Usuários
									</div>
							</div>
						</div>
						<div class="vc_row-fluid">
							<div class="vc_span6">
									<div class="milestone clearfix">
										<div class="icon"><i class="fa fa-street-view"></i></div>
										<div class="title">10000</div>
										Entrevistados
									</div>
							</div>
							<div class="vc_span6">
									<div class="milestone clearfix">
										<div class="icon"><i class="fa fa-building-o"></i></div>
										<div class="title">1700</div>
										Cidades
									</div>
							</div>
						</div>
						<!--/ milestones -->
												
					</div>
					<div class="grid-col grid-col-3">
						<!-- testimonial -->
						<div class="wpb_content_element">
							<div class="widget-title">Lembrete</div>
							<div class="testimonial">
								<div class="clearfix">
									<p>Revisar a pesquisa realizada no dia 15/02 na cidade de Viçosa - MG, além de atualizar a populção da cidade de acordo com Senso 2015.</p>								
								</div>
								<div class="author">Luís Felipe Fontes</div>
							</div>
						</div>
						<!--/ testimonial -->
						
						<!-- calendar -->
						<section class="widget widget-calendar">
							<div class="widget-title">Calendário</div>
							<div id="calendar"></div>
						</section>
						<!--/ calendar -->
						
							
					</div>	
				</div>					
			</main>
			<!--/ page content -->

			<?php
				include("modulos/rodape.php");
			?>	

		</div>
		<?php
			include("modulos/plugins.php");
		?>
	</body>
</html>