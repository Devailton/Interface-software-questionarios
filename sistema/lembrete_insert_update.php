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
					<h1>Criar lembrete</h1>
					
					<nav class="bread-crumbs">
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="lembrete.php">Lembrete</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Criar lembrete</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
								
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<a href="lembrete_insert_update.php" title="Criar lembretes" class="wpb_button wpb_regularsize">Adicionar</a>
						<a href="lembrete.php" title="Listar lembretes" class="wpb_button wpb_regularsize">Listar</a>
						<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
						<!-- feedback -->
						<article class="feedback">																

							<form action="confirma_cadastro.php" method="post" id="cadastroForm">
								<fieldset>
									
									<label>Lembrete:</label>
									<textarea rows="6" name="descricao"></textarea>
																																							
									<div class="clearfix">
										<div class="input">
											<label>Autor: *</label>
											<input type="text" name="email" placeholder="Ex.: Luís Felipe da Silveira Fontes">
										</div>
										<div class="input">
											<label>Publicado: *</label>
											<select name="publicado">               
								                        	<option value="sim">Sim</option>
								                        	<option value="nao">Não</option>
								                    	</select>
										</div>
									</div>											
									
									<div class="clearfix captcha">	
										<button type="submit" class="button" value="Enviar">Enviar</button>
										<button type="button" class="wpb_button wpb_btn-alt buttonVoltar">Voltar</button>							
									</div>
								</fieldset>
							</form>							
						</article>
						<!--/ feedback -->

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