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
					<h1>Cidades</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Cadastro</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Cidades</a>&nbsp;&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">

				<div class="grid-row">
					<a href="cidade_insert_update.php" title="Adicionar cidades" class="wpb_button wpb_regularsize">Adicionar</a>
					<a href="cidade.php" title="Listar cidades" class="wpb_button wpb_regularsize">Listar</a>
					<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
					<div class="dataTable">					
						<table class="dataTableInit display responsive nowrap cell-border table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Cidade/Estado</th>
									<th>Habitantes</th>
									<th>Eleitores</th>
									<th style="background: none; width: 62px;"></th>
								</tr>
							</thead>
			
							<tbody>
								<tr>
									<td>Viçosa - MG</td>
									<td>21.500</td>
									<td>18.000</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Ponte Nova - MG</td>
									<td>50.000</td>
									<td>43.200</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Cajuri - MG</td>
									<td>7.500</td>
									<td>3.000</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
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
							<p style="line-height: 40px;">Este módulo tem como objetivo cadastrar, consultar e alterar os dados das cidades. Para adicionar uma nova cidade, clique em <strong>Adicionar</strong>. Na tabela será exibida a lista de cidades cadastradas. Nesta tela, clique em <a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a> para editá-lo e em <a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a> para visualizar o dados da cidade ou em <a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a> para excluí-lo. </p>
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