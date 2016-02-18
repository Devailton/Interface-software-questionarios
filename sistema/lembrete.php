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
					<h1>Lembretes</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Lembretes</a>&nbsp;&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">

				<div class="grid-row">
					<a href="lembrete_insert_update.php" title="Criar lembrete" class="wpb_button wpb_regularsize">Adicionar</a>
					<a href="lembrete.php" title="Listar lembretes" class="wpb_button wpb_regularsize">Listar</a>
					<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
					<div class="dataTable">					
						<table class="dataTableInit display responsive nowrap cell-border table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Lembrete</th>
									<th>Autor</th>
									<th>Publicado</th>
									<th style="background: none; width: 62px;"></th>
								</tr>
							</thead>
			
							<tbody>
								<tr>
									<td>As mensalidades irão aumentar no dia 26/03/2022</td>
									<td>Calor Drumond</td>
									<td>Sim</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Novo usuário criado hoje 26/03/2015</td>
									<td>Tácio Genro</td>
									<td>Não</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Lembre de cadastrar o entrevistador João</td>
									<td>Rafaela Scarpelli</td>
									<td>Sim</td>
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
							<p style="line-height: 40px;">Este módulo tem como objetivo lançar, consultar e alterar os dados de um lembrete. Para adicionar um lembrete, clique em <strong>Adicionar</strong>. Na tabela será exibida a lista de lembretes lançados. Nesta tela, clique em <a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a> para editá-lo e em <a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a> para visualizar o lembrete ou em <a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a> para excluí-lo. </p>
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