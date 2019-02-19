<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

?>

<!-- Fim Header -->


<!-- Lista de beneficios -->
<div class="scroll">

<section class="section-main bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-6">
				<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/topo.png alt="" class="img-desejo">
				<!-- <img src="<?php //echo get_field('como_funciona_imagem', $ID_PRODUTO); ?>" alt="" class="img-desejo"> -->
			</div>
			<div class="col-md-6  content-text-bloco-1">
				<h1>A Maneira Mais Rápida e Segura de Aumentar os Níveis de Testosterona e Recuperar a Sua Vitalidade</h1>
				<h3 style="padding: 0; text-align: left">Benefícios Clinicamente Comprovados</h3>
				<ul class="col-md-12 ul-beneficios">
					<li><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/massa-muscular.png />Aumenta massa muscular</li>
					<li><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/reducao-medidas.png />Reduz gordura abdominal</li>
					<li><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/desempenho-sexual.png />Melhora o desempenho sexual</li>
					<li><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/mais-energia.png />Mais energia e vitalidade</li>
					<li><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/qualidade-de-vida.png />Mais saúde e qualidade de vida</li>
				</ul>

				<!-- CTA desktop -->

				<a href="#order" class="btn btn-secondary cta-1 page-scroll btn-buy hidden-sm hidden-xs">
					<p><strong>Teste e Surpreenda-se!</strong></p>100% Satisfação ou Seu Dinheiro de Volta!
				</a>

				<!-- Fim CTA desktop -->

			</div>

			<div class="col-md-6 col-md-pull-6 col-lg-6 col-lg-pull-6 col-sm-6 col-sm-pull-6 content-img-bloco-1">
				<a href="#order" class="page-scroll btn-buy"><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/frascos/frasco-sem-sombra.png alt="" class="img-responsive img-responsive-topo"></a>
			</div>

			<!-- CTA desktop Mobile -->

			<a href="#order" class="btn btn-secondary cta-1 cta-1-1 page-scroll btn-buy hidden-md hidden-lg">
				<p><strong>Teste e Surpreenda-se!</strong></p>100% Satisfação ou Seu Dinheiro de Volta!
			</a>

			<!-- Fim CTA mobile -->

		</div>
	</div>
</section>
<div class="detalhes detalhe-pixels_0"></div>
<!-- Fim da Lista de beneficios -->

<!-- ============================== -->


<!-- Bloco 2 -->

<!-- <section class="section-text bg-gray bg-seta">
	<div class="container">
		<div class="row">
			<h2><?php// echo get_field('como_funciona_titulo', $ID_PRODUTO); ?></h2>
			<div class="col-md-12 col-lg-12 col-md-offset linhas">
				<?php// echo get_field('como_funciona', $ID_PRODUTO, true, false); ?>
			</div>

		</div>
	</div>
</section> -->

<!-- Fim do Bloco 2 -->



<div class="detalhes detalhe-pixels_0"></div>

<!-- Lista de beneficios 2 - Bloco 3 -->

<section class="section-bullets bg-white ">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2>O Primeiro Passo Para Sentir-se Mais Jovem e Saudável Começa Aqui</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					Androzene é um poderoso nutracêutico da MedRx, projetado cientificamente com compostos bioativos que funcionam sinergicamente para elevar gradativamente os níveis de testosterona e aumentar a vitalidade e o bem-estar geral.
				</p>
				<ul>
					<li><strong>Ajuda Restaurar a Produção Natural de Testosterona</strong></li>
					<li><strong>Sem Relatos de Efeitos Colaterais</strong></li>
					<li><strong>Resultados Rápidos e Comprovados</strong></li>
					<li><strong>Compostos Apoiados Por Estudos Científicos</strong></li>
					<li><strong>Fórmula Potente (Alta Concentração de Ativos)</strong></li>
					<li><strong>Pureza, Eficiência e Segurança Garantidas</strong></li>
				</ul>
			</div>
		</div>

		<!-- CTA -->

		<!-- <div class="row">
			<div class="big-text mobile-390">
				<a href="#order" class="btn btn-secondary cta-2 page-scroll btn-buy">
					<p><strong>Garanta o Seu Androzene Hoje Mesmo!</strong></p>
					Você Merece Um Corpo Magro e Saudável!
				</a>
			</div>

			<div class="big-text mobile-390-m">
				<a href="#order" class="btn btn-secondary cta-2 page-scroll btn-buy">
					<p><strong>Garanta Já o Seu Androzene!</strong></p>
					Você Merece Um Corpo Magro e Saudável!
				</a>
			</div>
		</div> -->

		<!-- fim do CTA -->

	</div>
</section>
<div class="detalhes detalhe-pixels_0" id="comofunciona"></div>
<!-- Fim da Lista de beneficios 2 - Bloco 3 -->

<!-- ============================== -->

<!-- Lista de resultados -->

<section class="section-benefit bg-gray bg-seta" >
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2><?php echo get_field('como_funciona_secao_2_titulo', $ID_PRODUTO); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<?php echo get_field('como_funciona_secao_2_texto', $ID_PRODUTO); ?>
				</p>
			</div>
		</div>
		<div class="row benefit-item">
			<div class="col-md-4 benefit-name">
				<?php echo get_field('cf2_item_1_titulo', $ID_PRODUTO); ?> </div>
				<div class="col-md-8 benefit-text">
					<p><?php echo get_field('cf2_item_1', $ID_PRODUTO); ?></p>
				</div>
			</div>
			<div class="row benefit-item">
				<div class="col-md-4 benefit-name">
					<?php echo get_field('cf2_item_2_titulo', $ID_PRODUTO); ?> </div>
					<div class="col-md-8 benefit-text">
						<p><?php echo get_field('cf2_item_2', $ID_PRODUTO); ?></p>
					</div>
				</div>
				<div class="row benefit-item">
					<div class="col-md-4 benefit-name">
						<?php echo get_field('cf2_item_3_titulo', $ID_PRODUTO); ?> </div>
						<div class="col-md-8 benefit-text">
							<p><?php echo get_field('cf2_item_3', $ID_PRODUTO); ?></p>
						</div>
					</div>
					<div class="row benefit-item">
						<div class="col-md-4 benefit-name">
							<?php echo get_field('cf2_item_4_titulo', $ID_PRODUTO); ?> </div>
							<div class="col-md-8 benefit-text">
								<p><?php echo get_field('cf2_item_4', $ID_PRODUTO); ?></p>
							</div>
						</div>
						<!-- <div class="row benefit-item">
							<div class="col-md-4 benefit-name">
								<?php //echo get_field('cf2_item_5_titulo', $ID_PRODUTO); ?> </div>
								<div class="col-md-8 benefit-text">
									<p><?php //echo get_field('cf2_item_5', $ID_PRODUTO); ?></p>
								</div>
							</div> -->
						</section>

						<!-- Fim da Lista de resultados -->
			<div class="detalhes detalhe-pixels_0" id="ingredientes"></div>

			<!-- Bloco lista de ingredientes -->

			<section class="section-ingredients bg-white bg-seta" >
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<h2><?php echo get_field('ingredientes_titulo_area', $ID_PRODUTO); ?><strong></strong></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p>Androzene contém ingredientes de alta qualidade, sem aditivos sintéticos e comprovados clinicamente para garantir a segurança de cada consumidor e ajudar as pessoas a alcançar os melhores resultados.</p>
						</div>
					</div>
					<div class="row igredient-row">
						<div class="col-sm-4 col-md-3">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/ingredientes/maca_peruana.jpg alt="" class="img-responsive">
						</div>
						<div class="col-sm-8 col-md-9">
							<h3><?php echo get_field('ingredientes_1_titulo', $ID_PRODUTO); ?></h3>
							<div id="ac-1" class="ac"></div>
							<p><?php echo get_field('ingredientes_1', $ID_PRODUTO); ?></p>
						</div>
					</div>
					<div class="row igredient-row">
						<div class="col-sm-4 col-md-3">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/ingredientes/guarana.jpg alt="" class="img-responsive">
						</div>
						<div class="col-sm-8 col-md-9">
							<h3><?php echo get_field('ingredientes_2_titulo', $ID_PRODUTO); ?></h3>
							<div id="ac-1" class="ac"></div>
							<p><?php echo get_field('ingredientes_2', $ID_PRODUTO); ?></p>
						</div>
					</div>
					<div class="row igredient-row">
						<div class="col-sm-4 col-md-3">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/ingredientes/zma.jpg alt="" class="img-responsive">
						</div>
						<div class="col-sm-8 col-md-9">
							<h3><?php echo get_field('ingredientes_3_titulo', $ID_PRODUTO); ?></h3>
							<div id="ac-1" class="ac"></div>
							<p><?php echo get_field('ingredientes_3', $ID_PRODUTO); ?></p>
						</div>
					</div>
					<div class="row igredient-row">
						<div class="col-sm-4 col-md-3">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/ingredientes/vitamina_d3.jpg alt="" class="img-responsive">
						</div>
						<div class="col-sm-8 col-md-9">
							<h3><?php echo get_field('ingredientes_4_titulo', $ID_PRODUTO); ?></h3>
							<div id="ac-1" class="ac"></div>
							<p><?php echo get_field('ingredientes_4', $ID_PRODUTO); ?></p>
						</div>
					</div>
					<div class="row igredient-row last-ingredient-row">
						<div class="col-sm-4 col-md-3">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/ingredientes/boro.jpg alt="" class="img-responsive">
						</div>
						<div class="col-sm-8 col-md-9">
							<h3><?php echo get_field('ingredientes_5_titulo', $ID_PRODUTO); ?></h3>
							<div id="ac-1" class="ac"></div>
							<p><?php echo get_field('ingredientes_5', $ID_PRODUTO); ?></p>
						</div>
					</div>
				</div>
			</section>

			<!-- Fim Bloco lista de ingredientes -->
			<!-- ============================== -->

			<div class="detalhes detalhe-pixels_0"></div>

			<!-- Bloco 6 -->

			<section class="section-stats bg-gray ">
				<div class="container">
					<div class="row">
						<h2>Por Que Escolher Androzene?</h2>
						<div class="hidden-md hidden-lg col-xs-12 col-sm-12">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/medic-seriousness.png alt="" class="img-medic img-medic-m">
						</div>
						<div class="col-md-8 col-lg-8 col-md-offset">
							<p>Androzene é o resultado de uma longa investigação que determinou uma fórmula perfeita para quem realmente deseja ter uma produção saudável de testosterona e sentir-se jovem novamente.</p>
							<p><strong>COMPLETA: </strong>Nenhuma outra fórmula contém ingredientes 100% puros, seguros e eficazes, reunidos em uma perfeita combinação capaz de proporcionar benefícios clinicamente comprovados.</p>
							<p><strong>COMPROVADA: </strong>Numerososestudos realizados comprovam a capacidade única de cada composto de contribuir significativamente para a saúde masculina.</p>
							<p><strong>POTENTE: </strong>Uma mistura única que reúne as melhores substâncias aprovadas pela ANVISA, na dosagem exata, resultou em uma fórmula altamente potente capaz de oferecer resultados reais e duradouros.</p>
							<p><strong>SINÉRGICA: </strong> Cadacomponente foi cuidadosamente selecionado, com base em várias pesquisas científicas para ser capaz de trabalhar em perfeita sinergia e promover mais saúde e qualidade de vida.</p>
						</div>
						<div class="col-md-4 col-lg-4 hidden-xs hidden-sm">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/medic-seriousness.png alt="" class="img-medic">
						</div>
					</div>

					<!-- CTA do bloco 6 -->

					<div class="big-text mobile-460">
						<a href="#order" class="btn btn-secondary cta-2 page-scroll">
							<p><strong>Garanta Já o Seu Androzene!</strong></p>
							E TENHA MAIS SAÚDE E QUALIDADE DE VIDA!
						</a>
					</div>
					<div class="big-text mobile-460-m">
						<a href="#order" class="btn btn-secondary cta-2 page-scroll">
							<p><strong>Garanta Já o Androzene!</strong></p>
							E TENHA MAIS SAÚDE E QUALIDADE DE VIDA!
						</a>
					</div>

					<!-- Fim CTA do bloco 6 -->

				</div>
			</section>

			<!-- Fim do Bloco 6 -->

						



			<!-- ============================== -->
<div class="detalhes detalhe-pixels_0"></div>
			<!-- Bloco 7 -->

			<section class="section-text bg-white bg-seta">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Inúmeros Clientes Satisfeitos Não Podem Estar Errados</h2>
							<p>Quem experimentou aprovou!</p>
							<p>Milhares de homens já experimentaram os incríveis benefícios que androzene pode oferecer.</p>
							<p>E você, quando vai se juntar a eles?</p>
						</div>
					</div>
				</div>
			</section>

			<!-- Fim Bloco 7 -->

			<div class="detalhes detalhe-pixels_0"  id="historias"></div>

			<!-- Bloco de testemunhos -->

			<!-- <section class="section-testimonials test006new bg-gray bg-seta">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<h2><?php //echo get_field('historias_de_sucesso_titulo_area', $ID_PRODUTO); ?><strong></strong></h2>
						</div>
					</div>
					Testemunhos
					<div class="row testimonials">
						Testemunho 1
						<div class="testimony col-sm-4">
							<a href="#testimony-67177" class="fancybox" rel="testimonials">
								<div class="panel-group">
									<div class="panel panel-default">
										<div class="panel-heading clearfix">
											<div class="testimony-title col-xs-12" style="white-space: nowrap;">
												<?php //echo get_field('historias_de_sucesso_1_titulo', $ID_PRODUTO); ?></div>
											</div>
											<div class="panel-body-q">
												<div class="testimony-image">
													<img class="img-responsive" src="<?php //echo get_field('historias_de_sucesso_imagem_1', $ID_PRODUTO); ?> " alt=""/>
												</div>
											</div>
											<div class="panel-footer clearfix">
												<div class="testimony-rating col-xs-12">
													<div class='5-star'><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star"
														aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
													</div>
													<div class="testimony-excerpt col-xs-12">
														<p><?php //echo get_field('historias_de_sucesso_1', $ID_PRODUTO); ?> </p>
													</div>
			                                    <div class="testimony-meta-right text-right col-xs-12">
			                                    Marina de Carvalho - Santos/SP</div>
			                                </div>
			                            </div>
			                        </div>
			                    </a>
			                </div>
			                Fim Testemunho 1
			
			                Testemunho 2
			                <div class="testimony col-sm-4">
			                	<a href="#testimony-67177" class="fancybox" rel="testimonials">
			                		<div class="panel-group">
			                			<div class="panel panel-default">
			                				<div class="panel-heading clearfix">
			                					<div class="testimony-title col-xs-12" style="white-space: nowrap;">
			                						<?php //echo get_field('historias_de_sucesso_titulo_2', $ID_PRODUTO); ?></div>
			                					</div>
			                					<div class="panel-body-q">
			                						<div class="testimony-image">
			                							<img class="img-responsive" src="<?php //echo get_field('historias_de_sucesso_imagem_2', $ID_PRODUTO); ?> " alt=""/>
			                						</div>
			                					</div>
			                					<div class="panel-footer clearfix">
			                						<div class="testimony-rating col-xs-12">
			                							<div class='5-star'><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star"
			                								aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
			                							</div>
			                							<div class="testimony-excerpt col-xs-12">
			                								<p><?php //echo get_field('historias_de_sucesso_2', $ID_PRODUTO); ?> </p>
			                							</div>
			                                    <div class="testimony-meta-right text-right col-xs-12">
			                                    Marina de Carvalho - Santos/SP</div>
			                                </div>
			                            </div>
			                        </div>
			                    </a>
			                </div>
			                Fim Testemunho 2
			
			                Testemunho 3
			                <div class="testimony col-sm-4">
			                	<a href="#testimony-67177" class="fancybox" rel="testimonials">
			                		<div class="panel-group">
			                			<div class="panel panel-default">
			                				<div class="panel-heading clearfix">
			                					<div class="testimony-title col-xs-12" style="white-space: nowrap;">
			                						<?php //echo get_field('historias_de_sucesso_titulo_3', $ID_PRODUTO); ?></div>
			                					</div>
			                					<div class="panel-body-q">
			                						<div class="testimony-image">
			                							<img class="img-responsive" src="<?php //echo get_field('historias_de_sucesso_imagem_3', $ID_PRODUTO); ?> " alt=""/>
			                						</div>
			                					</div>
			                					<div class="panel-footer clearfix">
			                						<div class="testimony-rating col-xs-12">
			                							<div class='5-star'><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star"
			                								aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
			                							</div>
			                							<div class="testimony-excerpt col-xs-12">
			                								<p><?php //echo get_field('historias_de_sucesso_3', $ID_PRODUTO); ?> </p>
			                							</div>
			                                    <div class="testimony-meta-right text-right col-xs-12">
			                                    Marina de Carvalho - Santos/SP</div>
			                                </div>
			                            </div>
			                        </div>
			                    </a>
			                </div>
			                Fim Testemunho 3
			            </div> -->
            <!-- Fim Testemunhos -->

            <!-- <div class="big-text mobile-440">
            	<div class="col-md-10 col-md-offset-1">
            		<h2>98,6% de APROVAÇÃO!</h2>
            	</div>
            
            	CTA do bloco testemunhos mobile
            
            	<a href="#order" class="btn btn-secondary cta-2 page-scroll btn-buy">
            		<p><strong>Experimente Você Também!</strong></p>
            		O próximo resultado de sucesso pode ser o seu!
            	</a>
            
            	Fim CTA do bloco testemunhos mobile
            
            </div>
            
            <div class="big-text mobile-440-m">
            	<div class="col-md-10 col-md-offset-1">
            		<h2>98,6% de APROVAÇÃO!</h2>
            	</div>
            
            	CTA do bloco testemunhos Desktop
            
            	<a href="#order" class="btn btn-secondary cta-2 page-scroll" >
            		<p><strong>Experimente Você Também!</strong></p>
            		Você pode ser o próximo! 
            	</a>
            
            	Fim CTA do bloco testemunhos Desktop
            
            </div>
                    </div>
                </section> -->


<div class="detalhes detalhe-pixels_0"></div>
    <!-- Bloco 9 -->

    <section class="section-list bg-white bg-seta">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
    				<h2>Agora Você Pode Ter Mais Saúde e Bem-Estar</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-6 col-md-4">
    				<div class="col-xs-3 col-md-3">
    					<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/facil-usar.png alt="" class="img-responsive list-icon">
    				</div>
    				<div class="col-xs-9 col-md-9 list-column">
    					<span class="list-titles">PRODUTO FÁCIL DE USAR</span></div>
    				</div>
    				<div class="clearfix visible-xs-block"></div>
    				<div class="col-sm-6 col-md-4">
    					<div class="col-xs-3 col-md-3">
    						<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/garantia.png alt="" class="img-responsive list-icon">
    					</div>
    					<div class="col-xs-9 col-md-9 list-column"><span class="list-titles">GARANTIA DE SATISFAÇÃO</span></div>
    				</div>
    				<div class="clearfix visible-xs-block"></div>
    				<div class="clearfix visible-sm-block"></div>
    				<div class="col-sm-6 col-md-4">
    					<div class="col-xs-3 col-md-3">
    						<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/desconto.png alt="" class="img-responsive list-icon">
    					</div>
    					<div class="col-xs-9 col-md-9 list-column">
    						<span class="list-titles">ECONOMIA NA COMPRA DE MAIS POTES</span></div>
    					</div>
    					<div class="clearfix visible-xs-block"></div>
    					<div class="col-sm-6 col-md-4">
    						<div class="col-xs-3 col-md-3">
    							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/entrega.png alt="" class="img-responsive list-icon">
    						</div>
    						<div class="col-xs-9 col-md-9 list-column"><span class="list-titles">ENTREGA RÁPIDA PARA TODO BRASIL</span></div>
    					</div>
    					<div class="clearfix visible-xs-block"></div>
    					<div class="clearfix visible-sm-block"></div>
    					<div class="col-sm-6 col-md-4">
    						<div class="col-xs-3 col-md-3">
    							<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/seguranca.png alt="" class="img-responsive list-icon">
    						</div>
    						<div class="col-xs-9 col-md-9 list-column">
    							<span class="list-titles">COMPRA 100% SEGURA</span></div>
    						</div>
    						<div class="clearfix visible-xs-block"></div>
    						<div class="clearfix visible-sm-block"></div>
    						<div class="col-sm-6 col-md-4">
    							<div class="col-xs-3 col-md-3">
    								<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/icones/privacidade.png alt="" class="img-responsive list-icon">
    							</div>
    							<div class="col-xs-9 col-md-9 list-column">
    								<span class="list-titles">PRIVACIDADE PROTEGIDA</span></div>
    							</div>
    							<div class="clearfix visible-xs-block"></div>
    						</div>
    					</div>
    				</section>

    				<!-- Fim Bloco 9 -->

    				<!-- ============================== -->

    				

    				




    <!-- Bloco de Garantia -->
			<div class="detalhes detalhe-pixels_0"></div>

    				<section class="section-guarantee bg-gray">
    					<div class="container">
    						<div class="row">
    							<div class="col-md-10 col-md-offset-1">
    								<h2>Você Ainda Não Sabe? Nós Garantimos a Sua Satisfação!</h2>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-sm-4 col-md-3">
    								<img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/imagens/selos/selo_garantia.png alt="" class="img-responsive">
    							</div>
    							<div class="col-sm-8 col-md-9">
    								<p>Isso mesmo!</p>
    								<p>Nós estamos realmente confiantes quanto à qualidade e a eficácia de nossos produtos. Tanto que garantimos...</p>
    								<p><strong>100% Satisfação ou Seu Dinheiro de Volta!</strong></p>
    								<p>Isso quer dizer que, se você adquirir o nosso produto hoje e por algum motivo não ficar satisfeito, basta entrar em contato conosco por e-mail ou telefone, dentro do prazo estipulado, solicitar o reembolso e devolver o produto (mesmo que o pote esteja vazio).</p>
    								<p><a href="#">Veja outras informações na Política de Reembolso.</a></p>
    							</div>
    							<div class="col-md-12">
    								<h3 class="text-center"><strong>Experimente o Poder do Androzene Hoje Mesmo!</strong></h3>
    							</div>
    						</div>
    					</div>
    				</section>

    				<!-- Fim Bloco de Garantia -->

<!-- Bloco de Ofertas -->
    				<div class="section-order-pattern" id="order-inner"></div>

						<section class="section-order" >
							<div id="order" class="anchor-home"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<h2>Você Pode Mudar a Sua Realidade Agora Mesmo!</h2>
									</div>
								</div>

								<div class="row">
									<!-- ID DO PRODUTO  -->
									<?php $_product = wc_get_product($ID_PRODUTO); 
									$product_variations = $_product->get_available_variations(); 
								// LOOP PREÇO VARIANTE
									foreach ($product_variations as $variation): $i++; ?>


									<!-- PEGA VALORES DE VARIANTES -->

									<?php   $regular_price = get_product_regular_price($variation['variation_id']);
									$min_price = get_product_min_price($variation['variation_id']);
									$descri_prod = get_product_descricao($variation['variation_id']);
									$frascos = get_product_ref($variation['variation_id']);
									$economia = $regular_price - $min_price;
									$link_comprar =  get_site_url() . '/?add-to-cart=' . $ID_PRODUTO . "&variation_id=" . $variation['variation_id'];
									?>  

									<!-- CHECA SE LOOP ESTÁ NO MAIS POPULAR -->

									<?php if ($i % 2 === 0): ?>
										<div class="col-md-4 text-center">
											<div class="popular">
											MAIS POPULAR
											</div>

											<div class="featured">

											<?php else: ?>

												<div class="col-md-4 text-center">
													<div class="no">


													<?php endif; ?>

													<div class="product-image">
														<img src="<?php echo $variation['image']['url']; ?>">                    
													 </div>
														<div class="title">
															<h3 class="product-title"><?php echo $frascos ?></h3>
															<p>
																<span class="product-short-desc"></span>
															</p>
														</div>
														<div class="buy-now">
															<p class="product woocommerce add_to_cart_inline "><del><span class="retail">Preço era: </span> <span class="amount">

																R$ <?php echo number_format($regular_price, 2, ',', ' '); ?>


															</span></del> <ins><span class="amount precofinal" style="white-space: nowrap; letter-spacing: 0px;">

															R$ <?php echo number_format($min_price, 2, ',', ' '); ?>


														</span></ins> <span class="save">Você economiza: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">

														R$ <?php echo number_format($economia, 2, ',', ' '); ?>

													</span>



												</span>
											</span>
										</p>
										<a href="<?php echo $link_comprar ?>">
										<button  id="form-cad-deliveri" type="submit" class="btn btn-secondary btn-buy add_to_cart_button product_type_simple">
											<strong>COMPRAR JÁ</strong>
										</button>
										</a>
									</div>
									<div class="shipping">ENVIO IMEDIATO</div>
								</div>
							</div>



						<?php endforeach; ?>

					</div>
				</div>
			</section>

			<!-- Fim Bloco de Ofertas -->
    <!-- Fim Bloco de testemunhos -->
<div class="detalhes detalhe-pixels_0" id="faq"></div>
    <!-- ============================== -->
    <!-- SEÇÃO PERGUNTAS FREQUENTES  -->

    <section class="section-faq bg-white " >
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
    				<h2>DÚVIDAS FREQUENTES</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">

    				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    					<?php $i = 0;?>
    					<?php while ($i < $NUMERO_PERGUNTAS): ?>
    						<?php $i++; ?>

    						<div class="panel panel-default">
    							<div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
    								<h4 class="panel-title">
    									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>"><?php echo get_field('pergunta_'. $i, $ID_PRODUTO); ?></a>                     
    								</h4>
    							</div>
    							<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" aria-expanded="false">
    								<div class="panel-body">
    									<p><?php echo get_field('resposta_'. $i, $ID_PRODUTO); ?></p>
    								</div>
    							</div>
    						</div>

    					<?php endwhile; ?>




    				</div>
    			</div>
    		</div>

    	</div>
    </section>

    <!-- ============================== -->

    				<!-- Bloco FAQ -->



    				<!-- Fim do Bloco FAQ -->

    				<!-- ============================== -->

    				<!-- Bloco referencias -->

    				<section class="section-references bg-gray ">
    					<div class="container">
    						<div class="row">
    							<div class="col-md-10 col-md-offset-1">
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12 references-box">
    								<div class="ref-title">Referências Clínicas</div>
    								<ul>
    									<li>
    										<div id="a-1" class="anchor-bottom"></div>
    										<span class="anchor-ref">1</span>
    										<p><strong>Ethnobiology and Ethnopharmacology of Lepidiummeyenii (Maca), a Plant from the Peruvian Highlands. </strong>Gustavo F. Gonzales. <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3184420" target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3184420</a></p>
    									</li>
    									<li>
    										<div id="a-2" class="anchor-bottom"></div>
    										<span class="anchor-ref">2</span>
    										<p>Isidori, A.M. at all. <strong>Effectsoftestosteroneon sexual function in men: resultsof a meta-analysis.; </strong>ClinEndocrinol (Oxf). 2005 Oct;63(4):381-94. <a href="https://www.ncbi.nlm.nih.gov/pubmed/16181230" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/16181230</a></p>
    									</li>
    									<li>
    										<div id="a-3" class="anchor-bottom"></div>
    										<span class="anchor-ref">3</span>
    										<p><strong>Zinc status and serum testosterone levels of healthy adults. </strong> Prasad AS, Mantzoros CS, Beck FW, Hess JW, Brewer GJ. <a href="https://www.ncbi.nlm.nih.gov/pubmed/8875519" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/8875519</a></p>
    									</li>
    									<li>
    										<div id="a-4" class="anchor-bottom"></div>
    										<span class="anchor-ref">4</span>
    										<p>Zenico, T et al. <strong>SubjectiveeffectsofLepidiummeyenii (Maca) extractonwell-beingandsexual performances in patientswithmilderectiledysfunction: a randomised, double-blindclinicaltrial.</strong> Andrologia. 2009; 41(2): 95-9. <a href="https://www.ncbi.nlm.nih.gov/pubmed/19260845" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/19260845</a></p>
    									</li>
    									<li>
    										<div id="a-5" class="anchor-bottom"></div>
    										<span class="anchor-ref">5</span>
    										<p><a href="https://www.ncbi.nlm.nih.gov/pubmed/12472620" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/12472620</a></p>
    									</li>
    									<li>
    										<div id="a-6" class="anchor-bottom"></div>
    										<span class="anchor-ref">6</span>
    										<p><a href="https://www.ncbi.nlm.nih.gov/pubmed/11753476" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/11753476</a></p>
    									</li>
    									<li>
    										<div id="a-7" class="anchor-bottom"></div>
    										<span class="anchor-ref">7</span>
    										<p><a href="https://www.ncbi.nlm.nih.gov/pubmed/21129941" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/21129941</a></p>
    									</li>
    									<li>
    										<div id="a-8" class="anchor-bottom"></div>
    										<span class="anchor-ref">8</span>
    										<p><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4712861" target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4712861</a></p>
    									</li>
    									<li>
    										<div id="a-9" class="anchor-bottom"></div>
    										<span class="anchor-ref">9</span>
    										<p><a href="https://www.ncbi.nlm.nih.gov/pubmed/20050857" target="_blank">https://www.ncbi.nlm.nih.gov/pubmed/20050857</a></p>
    									</li>
    								</ul>
    							</div>
    						</div>
    					</div>
    				</section>

    				<!-- Fim do Bloco referencias -->

    				<!-- ============================== -->


    				<?php get_footer();
