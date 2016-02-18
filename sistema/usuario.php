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
					<h1>Usuários</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Cadastro</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Usuários</a>&nbsp;&nbsp;
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">

				<div class="grid-row">
					<a href="usuario_insert_update.php" title="Adicionar usuários" class="wpb_button wpb_regularsize">Adicionar</a>
					<a href="usuario.php" title="Listar usuários" class="wpb_button wpb_regularsize">Listar</a>
					<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
					<div class="dataTable">					
						<table class="dataTableInit display responsive nowrap cell-border table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Email</th>
									<th style="background: none; width: 62px;"></th>
								</tr>
							</thead>
			
							<tbody>
								<tr>
									<td>Luís Felipe Fontes</td>
									<td>luisfelipe@gmail.com</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Pedro Still Telles</td>
									<td>still02@gmail.com</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>Carlos Henrique Souza</td>
									<td>cadusouza@gmail.com</td>
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
							<p style="line-height: 40px;">Este módulo tem como objetivo cadastrar, consultar e alterar os dados dos usuários. Para adicionar um novo usuários, clique em <strong>Adicionar</strong>. Na tabela será exibida a lista de usuários cadastradas. Nesta tela, clique em <a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a> para editá-lo e em <a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a> para visualizar os dados dos usuários ou em <a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a> para excluí-lo. </p>
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