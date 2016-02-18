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
						<a href="usuario.php">Usuários</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Adicionar usuários</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
								
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<a href="usuario_insert_update.php" title="Adicionar usuários" class="wpb_button wpb_regularsize">Adicionar</a>
						<a href="usuario.php" title="Listar usuários" class="wpb_button wpb_regularsize">Listar</a>
						<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
						<!-- feedback -->
						<article class="feedback">																

							<form action="confirma_cadastro.php" method="post" id="cadastroForm">
								<fieldset>																														
									<div class="clearfix">
										<div class="input">
											<label>Nome: *</label>
											<input type="text" name="email" placeholder="Ex.: Luís Felipe da Silveira Fontes">
										</div>
										<div class="input">
											<label>Email: *</label>
											<input type="text" name="email" placeholder="Ex.: luisfelipe@gmail.com">
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Senha: *</label>
											<input type="password" name="senha" placeholder="Ex.: &#8226;&#8226;&#8226;&#8226;&#8226;&#8226;">
										</div>
										<div class="input">
											<label>Repetir senha: *</label>
											<input type="password" name="senha2" placeholder="Ex.: &#8226;&#8226;&#8226;&#8226;&#8226;&#8226;">
										</div>
									</div>
									
									<label>Descrição:</label>
									<textarea rows="6" name="descricao"></textarea>
									
									<div class="clearfix captcha">	
										<button type="submit" class="button" value="Salvar">Salvar</button>
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