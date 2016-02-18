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
						<a href="pesquisa.php">Pesquisas</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Adicionar pesquisa</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content vc_responsive">
			
				<div class="grid-row">

					<a href="questionario_insert_update.php" title="Adicionar pesquisa" class="wpb_button wpb_regularsize">Adicionar</a>
					<a href="pesquisa.php" title="Listar pesquisas" class="wpb_button wpb_regularsize">Listar</a>
					<a href="salvar_pesquisa.php" title="Salvar pesquisa" class="wpb_button_primary wpb_regularsize">Salvar Pesquisa</a>
					<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>	
					
					<div class="widget-title">Dados da cidade</div>
					
					<!-- feedback -->
					<article class="feedback callout-background" style="padding: 20px 20px 10px 20px; margin-bottom: 30px;">																

						<form action="confirma_cadastro.php" method="post" id="cadastroForm">
							<fieldset>																														
								<div class="clearfix">
									<div class="input">
										<label>Cidade: </label>
										<select name="cidade">
											<option value="vicosa">Viçosa</option>
											<option value="cajuri">Cajuri</option>
										</select>
									</div>
									<div class="input">
										<label>Data da pesquisa: *</label>
										<span class="widget widget-calendar">
											<input type="text" name="data" placeholder="Ex.: 30/02/2015" class="showDate">
										</span>
									</div>
								</div>
								<div class="clearfix">
									<div class="input">
										<label>Eleitores: </label>
										<input type="text" name="eleitores" placeholder="Ex.: 20.000">
									</div>
									<div class="input">
										<label>Questionário: *</label>
										<input type="text" name="questionario" placeholder="Ex.: 400">
									</div>
								</div>																
																
							</fieldset>
						</form>							
					</article>
					<!--/ feedback -->
					
					<div class="widget-title">Questionários</div>

					<div class="dataTable callout-background" style="padding: 20px 20px 10px 20px; margin-bottom: 30px;">					
						<table class="dataTableInit display responsive nowrap cell-border table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Código</th>
									<th>Sexo</th>
									<th>Faixa Etária</th>
									<th>Grau de instrução</th>
									<th>Renda familiar</th>
									<th>Região</th>
									<th style="background: none; width: 62px;"></th>
								</tr>
							</thead>
			
							<tbody>
								<tr>
									<td>1</td>
									<td>Masculino</td>
									<td>19 - 24</td>
									<td>Anafalbeto</td>
									<td>Até 1 salário</td>
									<td>R1</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Masculino</td>
									<td>19 - 24</td>
									<td>Anafalbeto</td>
									<td>Até 1 salário</td>
									<td>R1</td>
									<td style="text-align: center;">
										<a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a>
										<a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a>
										<a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>Masculino</td>
									<td>19 - 24</td>
									<td>Anafalbeto</td>
									<td>Até 1 salário</td>
									<td>R1</td>
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
							<p style="line-height: 40px;">Esta estapa do módulo tem como objetivo cadastrar, consultar, alterar os questionários da pesquisa. Para adicionar um novo questionário, clique em <strong>Adicionar</strong>. Na tabela será exibida a lista de questionários já inseridos e algumas informações relevantes sobre a cidade. Nesta tela, clique em <a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a> para editá-lo, em <a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a> para visualizar o dados do questionário ou em <a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a> para excluí-la. Clique em <b>Salvar pesquisa</b> para salvar a pesquisa.</p>
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