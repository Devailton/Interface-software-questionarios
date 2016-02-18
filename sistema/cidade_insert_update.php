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
						<a href="cidade.php">Cidades</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Adicionar cidades</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
								
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<a href="cidade_insert_update.php" title="Adicionar cidades" class="wpb_button wpb_regularsize">Adicionar</a>
						<a href="cidade.php" title="Listar cidades" class="wpb_button wpb_regularsize">Listar</a>
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
											<label>Estado: *</label>
											<select name="estado">
								                        	<option value=""> - Escolha um estado - </option>                  
								                        	<option value="AC">ACRE</option>
								                        	<option value="AL">ALAGOAS</option>
								                        	<option value="AM">AMAZONAS</option>
								                        	<option value="AP">AMAP&Aacute;</option>
								                        	<option value="BA">BAHIA</option>
								                        	<option value="CE">CEAR&Aacute;</option>
								                        	<option value="DF">DISTRITO FEDERAL</option>
								                        	<option value="ES">ESP&Iacute;RITO SANTO</option>
								                        	<option value="GO">GOI&Aacute;S</option>
								                        	<option value="MA">MARANH&Atilde;O</option>
								                        	<option value="MT">MATO GROSSO</option>
								                        	<option value="MS">MATO GROSSO DO SUL</option>
								                        	<option value="MG">MINAS GERAIS</option>
								                        	<option value="PA">PAR&Aacute;</option>
								                        	<option value="PB">PARA&Iacute;BA</option>
								                        	<option value="PR">PARAN&Aacute;</option>
								                        	<option value="PE">PERNAMBUCO</option>
								                        	<option value="PI">PIAU&Iacute;</option>
								                        	<option value="RJ">RIO DE JANEIRO</option>
								                        	<option value="RN">RIO GRANDE DO NORTE</option>
								                        	<option value="RO">ROND&Ocirc;NIA</option>
								                        	<option value="RS">RIO GRANDE DO SUL</option>
								                        	<option value="RR">RORAIMA</option>
								                        	<option value="SC">SANTA CATARINA</option>
								                        	<option value="SE">SERGIPE</option>
								                        	<option value="SP">S&Atilde;O PAULO</option>
									                        <option value="TO">TOCANTINS</option>
								                    	</select>
										</div>
									</div>
												
									<div class="clearfix">
										<div class="input">
											<label>Habitantes: *</label>
											<input type="text" name="habitantes" placeholder="Ex.: 50.000">
										</div>
										<div class="input">
											<label>Eleitores: </label>
											<input type="text" name="eleitores" placeholder="Ex.: 40.000 ">
										</div>
									</div>
																		
									<label>Descrição:</label>
									<textarea rows="6" name="descricao"></textarea>
									
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