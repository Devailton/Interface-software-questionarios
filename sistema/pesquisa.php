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
					<h1>Pesquisas</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Pesquisas</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">

				<div class="grid-row">
					<a href="pesquisa_insert_update.php" title="Realizar pesquisa" class="wpb_button wpb_regularsize">Realizar pesquisa</a>
					<a href="pesquisa.php" title="Listar pesquisas" class="wpb_button wpb_regularsize">Listar</a>
					<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
					<div class="dataTable">					
						<table class="dataTableInit display responsive nowrap cell-border table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Cidade/Estado</th>
									<th>Data</th>
									<th>Questionários</th>
									<th>Entrevistados</th>
									<th style="background: none; width: 62px;"></th>
								</tr>
							</thead>
			
							<tbody>
								<tr>
									<td>Viçosa - MG</td>
									<td>26/03/2015</td>
									<td>400</td>
									<td>18.000</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-warning fa fa-print" title="Imprimir"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Ponte Nova - MG</td>
									<td>02/04/2015</td>
									<td>400</td>
									<td>43.200</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-warning fa fa-print" title="Imprimir"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Cajuri - MG</td>
									<td>11/10/2015</td>
									<td>400</td>
									<td>3.000</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-warning fa fa-print" title="Imprimir"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>		

				</div>
			</main>
			<!--/ page content -->
			
			<!-- Modal -->
			<div id="modalAjuda" class="white-popup-block mfp-hide">
				<div class="get-code-window">
					<h1>Ajuda</h1>
					<section class="widget widget-details">
						<div class="text">
							<p style="line-height: 40px;">Este módulo tem como objetivo cadastrar, consultar, alterar e imprimir relatórios referente à pesquisas. Para realizar uma nova pesquisa, clique em <strong>Realizar pesquisa</strong>. Na tabela será exibida a lista de pesquisas já realizadas. Nesta tela, clique em <a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a> para editá-lo, em <a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a> para visualizar o dados da pesquisa, em <a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a> para excluí-la ou em <a href="#" class="soc-icon-mini-warning fa fa-print" title="Excluir"></a> para visualizar o relatório da pesquisa realizada. </p>
						</div>
					</section>
					<span class="mfp-botao-fechar"><button title="Fechar" class="wpb_button wpb_regularsize popup-modal-dismiss">Fechar</button ></span>
					<a title="Fechar (Esc)" type="button" class="mfp-close"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<!--/ Modal -->

			<?php
				include("modulos/rodape.php");
			?>

		</div>
		
		<?php
			include("modulos/plugins.php");
		?>
	</body>
</html>