      <footer class="footer-v2">
         <div class="menu">
            <div class="container">
               <div class="row menu-links">
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <h4 class="title-footer">PHENATRIM</h4>
                     <ul>
                        <li class="active menu-footer-v2"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                        <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
                        <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre Nós</a></li>
                     </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <h4 class="title-footer">INFORMAÇÕES</h4>
                     <ul>
                        <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/termos-condicoes">Termos  &amp; Condições</a></li>
                        <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/politica-privacidade">Política de Privacidade</a></li>
                        <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/garantia">Política de Reembolso</a></li>
                     </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <h4 class="title-footer">CONTATE-NOS</h4>
                     <ul>
                        <li class="menu-footer-v2">(62) 3639-2978</li>
                        <li class="menu-footer-v2">sac@phenatrim.com.br</li>
                        <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/contato">Atendimento ao Cliente</a></li>
                     </ul>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-3">
                     <h4 class="title-footer">ÚLTIMAS PUBLICAÇÕES</h4>
                     
                     <?php $latest = new WP_Query(['post_type'=>'post', 'posts_per_page'=>3]); ?>

                     <?php if($latest->have_posts()): ?>
                        <?php while($latest->have_posts()): $latest->the_post(); ?>
                           <div class="list-ultimos-posts-footer">
                              <figure>
                                <?php
                                   if(get_the_post_thumbnail()){
                                      the_post_thumbnail( 'thumbnail', ['class'=>'img-responsive img-post-footer-v2', 'style'=>'width:50px;height:50px;object-fit:cover;'] );
                                   }else{
                                      echo '<img src="'.get_stylesheet_directory_uri().'/blog/assets/default-image.jpg" class="img-responsive img-post-footer-v2" style="width:50px;height:50px;object-fit:cover;">';
                                   }
                                ?>
                              </figure>
                              <div class="info-posts-footer">
                                 <h6><?php echo mb_strimwidth(get_the_title(), 0, 16, '...'); ?></h6>
                                 <p><?php echo mb_strimwidth(get_the_excerpt(), 0, 14, '...'); ?></p>
                              </div>
                           </div>
                        <?php endwhile; ?>
                     <?php endif; wp_reset_postdata(); ?>
                  </div>

                  <div class="row row-logo-footer-v2">
                     <div class="img-logo-footer-v2 col-sm-12 col-md-12">
                        <div class="col-md-2">
                           <?php echo get_custom_logo(); ?>
                        </div>
                        <div class="content-copy col-md-10">
                           <p class="copy-cnpj">N1 SUPPLEMENTS COMÉRCIO E DISTRIBUIÇÃO LTDA, CNPJ: 15.301.011/0001-89</p>
                           <p class="copy-year">&copy; <?php echo date("Y")." ".get_bloginfo(); ?>. Todos direitos reservados.</p>
                        </div>
                     </div>                     
                  </div>
                  <div class="row content-bottom-footer-v2">
                     <div class="copy-info col-xs-12 col-sm-12 col-md-9 col-lg-10">
                        <p>Phenatrim é um suplemento dietético que não se destina a diagnosticar, tratar, curar ou previnir qualquer doença.*</p>
                        <p>Os resultados podem variar de pessoa para pessoa.*</p>
                     </div>
                     <div class="content-deadline hidden-xs hidden-sm col-md-3 col-lg-2">
                        <h4 class="title-footer">PRAZO DE ENTREGA</h4>
                        <p class="deadline">7 à 15 dias úteis</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <?php wp_footer();  ?>
      
   </body>
</html>