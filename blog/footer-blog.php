      <footer class="footer-v2 content-info" role="contentinfo">
         <div class="menu">
            <div class="container">
               <div class="row top brand-logo">
                  <div class="col-sm-9 col-md-8 menu-links">
                     <div class="row">
                        <div class="col-xs-12  col-sm-6">
                           <ul id="menu-footer-menu-left" class="">
                              <li class="active menu-footer-v2"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                              <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
                              <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/sobre-nos">Sobre Nós</a></li>
                              <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/contato">Atendimento ao Cliente</a></li>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                           <ul id="menu-footer-menu-right" class="">
                              <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/termos-condicoes">Termos  &amp; Condições</a></li>
                              <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/politica-privacidade">Política de Privacidade</a></li>
                              <li class="menu-footer-v2"><a href="<?php echo get_site_url(); ?>/garantia">Política de Reembolso</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="col-xs-12 col-sm-3 col-md-4 logo">
                     <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                     ?>

                     <a id="site-brand" class="navbar-brand" href="<?php echo get_site_url(); ?>">
                       <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="">
                     </a>
                  </div>
               </div>
               <div class="row bottom">
                  <div class="col-sm-12">
                     <small id="ll">Os resultados podem variar de pessoa para pessoa *</small>
                     <p class="copyright">N1 SUPPLEMENTS COMÉRCIO E DISTRIBUIÇÃO LTDA, CNPJ: 15.301.011/0001-89 | &copy; <?php echo date("Y")." ".get_bloginfo(); ?>. Todos direitos reservados.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <?php wp_footer();  ?>
      
   </body>
</html>