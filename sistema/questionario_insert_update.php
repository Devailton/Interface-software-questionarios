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
					<h1>Questionário</h1>
					
					<nav class="bread-crumbs">						
						<a href="index.php">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="pesquisa.php">Pesquisas</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="pesquisa_insert_update.php">Adicionar pesquisa</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="">Questionário</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
								
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<a href="questionario_insert_update.php" title="Adicionar questionário" class="wpb_button wpb_regularsize">Adicionar</a>
						<a href="pesquisa_insert_update.php" title="Listar pesquisas" class="wpb_button wpb_regularsize">Listar</a>
						<a href="#modalAjuda" title="Ajuda" class="popup-modal wpb_button wpb_regularsize">Ajuda</a>
						<!-- feedback -->
						<article class="feedback">																

							<form action="confirma_cadastro.php" method="post" id="cadastroForm">
								<fieldset>
									<div class="clearfix">
										<div class="input">
											<label>Entrevistador: </label>
											<select name="entrevistador">
												<option value="1">Amanda Bonni Ferreira</option>
												<option value="2">Rafaela Souza Frision</option>
											</select>
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Sexo: *</label>
																					
											<input type="radio" name="sexo" value="m">
											<label>Masculino</label>
											
											<input type="radio" name="sexo" value="f">
											<label>Feminino</label>
											
										</div>
									</div>	
									<div class="clearfix">
										<div class="input2">
										
											<label>Faixa etária: *</label>
																					
											<input type="radio" name="faixa" value="16_24">
											<label>16 a 24</label>
											
											<input type="radio" name="faixa" value="25_34">
											<label>25 a 34</label>
											
											<input type="radio" name="faixa" value="35_44">
											<label>35 a 44</label>
											
											<input type="radio" name="faixa" value="45_59">
											<label>45 a 59</label>
											
											<input type="radio" name="faixa" value="60">
											<label>60 ou mais</label>
											
										</div>
									</div>	
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Grau de instrução: *</label>
																					
											<input type="radio" name="grau" value="analfabeto">
											<label>Analfabeto</label>
											
											<input type="radio" name="grau" value="4_serie">
											<label>Até 4ª série</label>
											
											<input type="radio" name="grau" value="5_9_serie">
											<label>de 5ª a 9ª série</label>
											
											<input type="radio" name="grau" value="ensino_medio">
											<label>Ensino médio incompleto e completo</label>
											
											<input type="radio" name="grau" value="superior_incompleto_mais">
											<label>Superior incompleto ou mais</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Renda familiar: *</label>
																					
											<input type="radio" name="renda" value="1_salario">
											<label>Até 1 salário</label>
											
											<input type="radio" name="renda" value="2_salario">
											<label>Até 2 salários</label>
											
											<input type="radio" name="renda" value="5_salario">
											<label>Até 5 salários</label>
											
											<input type="radio" name="renda" value="10_salario">
											<label>Até 10 salários</label>
											
											<input type="radio" name="renda" value="nao_opinou">
											<label>Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Bairro ou região:</label>
																					
											<input type="radio" name="bairro" value="r1">
											<label>R1</label>
											
											<input type="radio" name="bairro" value="r2">
											<label>R2</label>
											
											<input type="radio" name="bairro" value="r3">
											<label>R3</label>
											
											<input type="radio" name="bairro" value="r4">
											<label>R4</label>
											
											<input type="radio" name="bairro" value="r5">
											<label>R5</label>
											
											<input type="radio" name="bairro" value="r6">
											<label>R6</label>
											
											<input type="radio" name="bairro" value="r7">
											<label>R7</label>
											
											<input type="radio" name="bairro" value="r8">
											<label>R8</label>
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Qual a sua opinião sobre as informações publicadas nos jornais da cidade sobre a atual administração?</label>
																					
											<input type="radio" name="publica" value="verdadeiras">
											<label>Verdadeiras</label>
											
											<input type="radio" name="publica" value="vezes_verdadeiras">
											<label>Às vezes verdadeiras</label>
											
											<input type="radio" name="publica" value="critica">
											<label>Crítica sem fundamento</label>
											
											<input type="radio" name="publica" value="falsa">
											<label>Falso</label>
											
											<input type="radio" name="publica" value="ns_nr">
											<label>NS/NR</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>De modo geral, como você avalia a atual administração da prefeitura?</label>
																					
											<input type="radio" name="administracao" value="otimo">
											<label>Ótimo</label>
											
											<input type="radio" name="administracao" value="boa">
											<label>Boa</label>
											
											<input type="radio" name="administracao" value="regular">
											<label>Regular</label>
											
											<input type="radio" name="administracao" value="ruim">
											<label>Ruim</label>
											
											<input type="radio" name="administracao" value="pessimo">
											<label>Péssimo</label>
											
											<input type="radio" name="administracao" value="no">
											<label>Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>E com relação à conduta da pessoa do prefeito, como você avalia?</label>
																					
											<input type="radio" name="conduta" value="honesto">
											<label>Honesto</label>
											
											<input type="radio" name="conduta" value="trabalhador">
											<label>Trabalhador</label>
											
											<input type="radio" name="conduta" value="simpatico">
											<label>Simpático/Educado</label>
											
											<input type="radio" name="conduta" value="no">
											<label>Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Você teria alguma crítica a fazer?</label>										
											<input type="text" name="melhoria" placeholder="Ex.: Asfaltar a cidade">
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Em sua opnião, a cidade esta?</label>
																					
											<input type="radio" name="cidade" value="melhorando">
											<label>Melhorando</label>
											
											<input type="radio" name="cidade" value="piorando">
											<label>Piorando</label>
											
											<input type="radio" name="cidade" value="mesmo_jeito">
											<label>Do mesmo jeito, nem melhor, nem pior</label>
											
											<input type="radio" name="cidade" value="no">
											<label>Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Os secretários da prefeitura atendem às expectativas da população?</label>
																					
											<input type="radio" name="secretario" value="sim">
											<label>Sim</label>
											
											<input type="radio" name="secretario" value="piorando">
											<label>Não</label>
											
											<input type="radio" name="secretario" value="no">
											<label>Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Qual é o principal problema da cidade, que a prefeitura pode resolver?</label>
																					
											<input type="radio" name="problema" value="saude">
											<label>Saúde</label>
											
											<input type="radio" name="problema" value="educacao">
											<label>Educação</label>
											
											<input type="radio" name="problema" value="transporte">
											<label>Transporte</label>
											
											<input type="radio" name="problema" value="moradia">
											<label>Moradia</label>
											
											<input type="radio" name="problema" value="seguranca">
											<label>Segurança</label>
											
											<input type="radio" name="problema" value="meio_ambiente">
											<label>Meio ambiente</label>
											
											<input type="radio" name="problema" value="emprego">
											<label>Emprego</label>
											
											<input type="radio" name="problema" value="saneamento">
											<label>Saneamento</label>
											
											<input type="radio" name="problema" value="pavimentacao">
											<label>Pavimentação</label>
											
											<input type="radio" name="problema" value="comunicacao">
											<label>Comunicação</label>
											
											<input type="radio" name="problema" value="outro">
											<label>Outro</label>
											
											<input type="radio" name="problema" value="no">
											<label>Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Outro problema?</label>										
											<input type="text" name="outro_problema" placeholder="Ex.: Limpeza na cidade">
											
										</div>
									</div>
									
									<div class="callout callout-background" style="margin-bottom: 20px;"> 
										<div class="clearfix">
											<div class="input2">
												<label style="font-size: 120%; margin-bottom: 20px;">Você acha que houve melhorias na:</label>
												<label>Área da saúde?</label>
																						
												<input type="radio" name="area_saude" value="sim_muitas">
												<label>Sim, muitas melhorias</label>
												
												<input type="radio" name="area_saude" value="sim_poucas">
												<label>Sim, poucas melhorias</label>
												
												<input type="radio" name="area_saude" value="nao_houve">
												<label>Não houve melhorias</label>
												
												<input type="radio" name="area_saude" value="indeciso">
												<label>Indeciso</label>
												
												<input type="radio" name="area_saude" value="no">
												<label>Não opinou</label>
												
											</div>
										</div>
										
										<div class="clearfix">
											<div class="input2">
												<label>Área da educação?</label>
																						
												<input type="radio" name="area_educacao" value="sim_muitas">
												<label>Sim, muitas melhorias</label>
												
												<input type="radio" name="area_educacao" value="sim_poucas">
												<label>Sim, poucas melhorias</label>
												
												<input type="radio" name="area_educacao" value="nao_houve">
												<label>Não houve melhorias</label>
												
												<input type="radio" name="area_educacao" value="indeciso">
												<label>Indeciso</label>
												
												<input type="radio" name="area_educacao" value="no">
												<label>Não opinou</label>
												
											</div>
										</div>
										
										<div class="clearfix">
											<div class="input2">
												<label>Área e lazer e eventos?</label>
																						
												<input type="radio" name="area_lazer" value="sim_muitas">
												<label>Sim, muitas melhorias</label>
												
												<input type="radio" name="area_lazer" value="sim_poucas">
												<label>Sim, poucas melhorias</label>
												
												<input type="radio" name="area_lazer" value="nao_houve">
												<label>Não houve melhorias</label>
												
												<input type="radio" name="area_lazer" value="indeciso">
												<label>Indeciso</label>
												
												<input type="radio" name="area_lazer" value="no">
												<label>Não opinou</label>
												
											</div>
										</div>
										
										<div class="clearfix">
											<div class="input2">
												<label>Área de assistência social?</label>
																						
												<input type="radio" name="area_assistencia" value="sim_muitas">
												<label>Sim, muitas melhorias</label>
												
												<input type="radio" name="area_assistencia" value="sim_poucas">
												<label>Sim, poucas melhorias</label>
												
												<input type="radio" name="area_assistencia" value="nao_houve">
												<label>Não houve melhorias</label>
												
												<input type="radio" name="area_assistencia" value="indeciso">
												<label>Indeciso</label>
												
												<input type="radio" name="area_assistencia" value="no">
												<label>Não opinou</label>
												
											</div>
										</div>
										
										<div class="clearfix">
											<div class="input2">
												<label>Organização e limpeza da cidade?</label>
																						
												<input type="radio" name="area_limpeza" value="sim_muitas">
												<label>Sim, muitas melhorias</label>
												
												<input type="radio" name="area_limpeza" value="sim_poucas">
												<label>Sim, poucas melhorias</label>
												
												<input type="radio" name="area_limpeza" value="nao_houve">
												<label>Não houve melhorias</label>
												
												<input type="radio" name="area_limpeza" value="indeciso">
												<label>Indeciso</label>
												
												<input type="radio" name="area_limpeza" value="no">
												<label>Não opinou</label>
												
											</div>
										</div>
									
									</div>	
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Em sua opinião qual foi a maior mudança na atual administração?</label>										
											<input type="text" name="mudanca_admin" placeholder="Ex.: Reforma da Praça Armindo Fraga">
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Você sente falta de algum tipo de informação sobre a prefeitura ou sobre seus projetos e ações?</label>								
											<input type="radio" name="info_prefeitura" value="nao">
											<label>Não</label>
												
											<input type="radio" name="info_prefeitura" value="sim">
											<label>Sim</label>
													
											<input type="text" name="projeto_acoes" placeholder="Ex.: Sinto falta de informações sobre os gastos da prefeitura">
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Para deputado federal você votou no candidato da sua cidade?</label>								
											<input type="radio" name="candidato_cidade" value="sim">
											<label>Sim</label>
												
											<input type="radio" name="candidato_cidade" value="nao">
											<label>Não</label>
											
											<input type="radio" name="candidato_cidade" value="no">
											<label>Não votou / Branco / Nulo / Não lembra</label>													

										</div>
									</div>	
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Se sim, qual o nome do Deputado Federal em que votou?</label>										
											<input type="text" name="deputado_federal" placeholder="Ex.: Rodrigo de Castro">
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Caso as eleições fosem hoje, em que você votaria para prefeito?</label>										
											<input type="text" name="votaria_prefeito" placeholder="Ex.: Antônio Chequer">
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>Outra resposta?</label>										

											<input type="radio" name="nao_prefeito" value="no">
											<label>Branco / Nulo / Não opinou</label>
											
										</div>
									</div>
									
									<div class="clearfix">
										<div class="input2">
										
											<label>E para vereador? Você votaria no mesmo candidato que votou na última eleição? Ou você espera novos candidatos?</label>					
											<input type="radio" name="ultima_eleicao" value="votaria_mesmo">
											<label>Votaria no mesmo</label>
												
											<input type="radio" name="ultima_eleicao" value="espero_novos">
											<label>Espero novos candidatos</label>
											
											<input type="radio" name="ultima_eleicao" value="nao_opinou">
											<label>Não opinou</label>													

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
							<p style="line-height: 40px;">Este módulo tem como objetivo cadastrar, consultar e alterar os dados dos entrevistadores. Para adicionar um novo entrevistador, clique em <strong>Adicionar</strong>. Na tabela será exibida a lista de entrevistadores cadastrados. Nesta tela, clique em <a href="#" class="soc-icon-mini fa fa-pencil-square-o" title="Editar"></a> para editá-lo e em <a href="#" class="soc-icon-mini-info fa fa-search" title="Visualizar"></a> para visualizar o dados do entrevistador ou em <a href="#" class="soc-icon-mini-danger fa fa-times" title="Excluir"></a> para exclui-lo. </p>
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