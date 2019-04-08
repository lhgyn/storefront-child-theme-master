<?php
if(is_page(13)):
?> 

<footer class="content-info" role="contentinfo">
  <div class="content-info"></div>
  <div class="row">
		<div class="col-md-12" style="color: #848484; font-size: 13px;">
		 	&copy; <?php echo date("Y")." ".get_bloginfo(); ?>. Todos direitos reservados.
    </div>
  </div>
</footer>


<script type="text/javascript">
  jQuery(document).ready(function($){
    $("#billing_address_2").attr('maxlength','20');
  });
</script>

<?php if ( is_order_received_page()): ?>

<!-- parcelamento pagina thank you -->
<script type="text/javascript">  
  $( document ).ready(function(){
    parcelas = $('#pagarme-installments option:last').val(); //$('.woocommerce-message span').text().slice(-3);
    parcelas = parseFloat(parcelas.charAt(0));
    if (parcelas != 1) {
    $(".amount").each( function() {
       var real = parseFloat($(this).text().replace('R$', '').replace(',', '.') / parcelas) ;
        if (real > 1) {
          $(this).html(parcelas + 'x de R$ ' + real.toFixed(2).replace('.', ','));
        }
      })
    };
  });
</script>


<?php else: ?>

<!-- scroll para erro formulario pagarme -->
<script type="text/javascript">

  $('#place_order').on('click',function(){
    setTimeout(function(){
      //if is any error found. then do this
      $(document).scrollTop($('.woocommerce-error').offset().top);
    }, 100);
  });

</script>

<script type="text/javascript">
  $( document ).ajaxComplete(function(){
    parcelas = $('#pagarme-installments option:last').val();
    $(".amount").each( function() {
      var real = parseFloat($(this).text().replace('R$', '').replace(',', '.')) / parcelas;
      if (real > 1) {

        $(this).html(parcelas+'x de &nbsp;&nbsp;&nbsp; R$ ' + real.toFixed(2).replace('.', ','));
      }
    });
  });
</script>

<?php endif; ?>

<!-- mudar nome de entrega para frente -->

 <?php else:
?>

<footer class="content-info" role="contentinfo">
  <div class="content-info"></div>
  <div class="sampleClass"></div>
  <div class="container text-center">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <ul id="menu-footer-portugues" class="list-inline">
      		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8042 current_page_item menu-item-8548 active"><a title="Home" class="page-scroll" href="<?php echo get_site_url(); ?>">Home</a></li>
      		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8549"><a title="Termos e Condições" class="page-scroll" href="<?php echo get_site_url(); ?>/termos-condicoes/">Termos &amp; Condições</a></li>
      		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8550"><a title="Política de Privacidade" class="page-scroll" href="<?php echo get_site_url(); ?>/politica-privacidade/">Política de Privacidade</a></li>
      		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8551"><a title="Garantia" class="page-scroll" href="<?php echo get_site_url(); ?>/garantia/">Garantia</a></li>
      		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8552"><a title="Sobre Nós" class="page-scroll" href="<?php echo get_site_url(); ?>/sobre-nos/">Sobre Nós</a></li>
      		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8553"><a title="Atendimento ao Cliente" class="page-scroll" href="<?php echo get_site_url(); ?>/contato/">Atendimento ao Cliente</a></li>
      	</ul>
      </div>
    </div>

    <div class="row">
  		<div class="col-md-12" style="color: #848484; font-size: 13px;">
  		 	&copy; <?php echo date("Y")." ".get_bloginfo(); ?>. Todos direitos reservados.
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">
  $( document ).ready(function(){
    parcelas = $('#pagarme-installments option:last').val();
    $(".precofinal").each( function() {
       var real = parseFloat($(this).text().replace('R$', '').replace(',', '.')) / parcelas;
       $(this).html(parcelas+'x R$ ' + real.toFixed(2).replace('.', ','));
      });
  });
</script>



<?php endif; ?>

<?php do_action( 'storefront_after_footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>