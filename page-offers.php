<?php $page = get_page_by_path( 'home' );
 define('HOMEID', $page->ID); ?>

<?php get_header(); ?>
<!-- Fim Header -->

<div class="scroll">

<section>
    <div class="container" style="margin-top: 60px; margin-bottom: 50px;">
        <div class="row">
            
        </div>
    </div>
</section>



<!-- Bloco 10 -->
<section class="section-list bg-white bg-seta">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2><?php the_field('s10_titulo') ?></h2>
            </div>
        </div>
        <div class="row">

            <?php if(have_rows('selos')): ?>
            <?php while(have_rows('selos')): the_row(); ?>

                <div class="col-sm-6 col-md-4 col-xs-12">
                    <div class="col-xs-3 col-md-3">
                        <img src="<?php the_sub_field('icone'); ?>" alt="" class="img-responsive list-icon">
                    </div>
                    <div class="col-xs-9 col-md-9 list-column">
                        <span class="list-titles"><?php the_sub_field('titulo'); ?></span>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- Fim Bloco 10 -->

<div class="detalhes detalhe-pixels_0"></div>

<!-- Bloco de Garantia -->
<section class="section-guarantee bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2><?php the_field('s11_titulo') ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src=<?php the_field('s11_imagem') ?> alt="" class="img-responsive">
            </div>
            <div class="col-sm-8 col-md-9">
                <?php the_field('s11_texto'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Fim Bloco de Garantia -->

<div class="section-order-pattern" id="order-inner"></div>

<!-- Bloco de Ofertas -->
<!-- Bloco de Ofertas -->
<section class="section-order offers" >
    <div id="order" class="anchor-home"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2><?php the_field('titulo_checkout') ?></h2>
                </div>
            </div>
            <div class="row">

                <!-- ID DO PRODUTO  -->
                <?php $_product = wc_get_product(ID_PRODUTO); 
                $product_variations = $_product->get_available_variations();

                // FAZ A CONTAGEM DE VARIAÇÃOES DO PRODUTO
                $count = 0;                
                // se estiver na home limita o loop a 3 iterações
                if( is_page('home') ){
                    $count = 4;
                }else{
                    foreach ($product_variations as $key => $value) {
                        $count++;
                    }
                }

                // LOOP PREÇO VARIANTE
                $i = 1;
                foreach ($product_variations as $variation): ?>

                    <!-- PEGA VALORES DE VARIANTES -->
                    <?php
                        $regular_price = get_product_regular_price($variation['variation_id']);
                        $min_price = get_product_min_price($variation['variation_id']);
                        $descri_prod = get_product_descricao($variation['variation_id']);
                        $frascos = get_product_ref($variation['variation_id']);
                        $economia = $regular_price - $min_price;
                        $link_comprar =  get_site_url() . '/?add-to-cart=' . ID_PRODUTO . "&variation_id=" . $variation['variation_id'];
                    ?>

                    <!-- CHECA SE LOOP ESTÁ NO MAIS POPULAR -->
                    <?php if ($i === 2): ?>
                        <div id="combo-block-<?=$i?>" class="<?= $count == 3 ? 'col-md-4' : 'col-md-3'; ?> text-center">
                            <div class="popular">
                                MAIS POPULAR
                            </div>
                            <div class="featured">
                            <?php else: ?>
                                <div class="<?= $count == 3 ? 'col-md-4' : 'col-md-3'; ?> offers-common text-center">
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
                                        <p class="product woocommerce add_to_cart_inline ">
                                            <del>
                                                <span class="retail">Preço era: </span>
                                                <span class="amount">
                                                    R$ <?php echo number_format($regular_price, 2, ',', ' '); ?>
                                                </span>
                                            </del>
                                            <ins>
                                                <span class="amount" style="white-space: nowrap; letter-spacing: 0px;">
                                                <?php
                                                    $card_parcels = maxInstallmentsPagarme();
                                                    $valor = $min_price / $card_parcels;
                                                ?>
                                                <?= $card_parcels ?>x R$ <?php echo  number_format( $valor, 2, ',', ' ' ) ?>
                                                </span>
                                            </ins>
                                            <span class="save">Você economiza:
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        R$ <?php echo number_format($economia, 2, ',', ' '); ?>
                                                    </span>
                                                </span>
                                            </span>
                                        </p>
                                        <?php  $purchase_status = get_field('enable_disable_purchase', 'option'); ?>
                                        <?php if( $purchase_status[0] == 'enable'): ?>
                                            <a href="<?= $link_comprar ?>">
                                        <?php else: ?>
                                            <a onclick="alert('Infelizmente, estamos sem estoque!')">
                                        <?php endif; ?>
                                        <button  id="form-cad-deliveri" type="submit" class="btn btn-secondary btn-buy add_to_cart_button product_type_simple">
                                            <strong>COMPRAR JÁ</strong>
                                        </button>
                                        </a>
                                    </div>
                    <div class="shipping">ENVIO IMEDIATO</div>
                </div>
            </div>            
            <?php
                if(is_page('home') && $i == 4){
                    break;
                }
                
                $i++; endforeach;
            ?>

        </div>
    </div>
</section>

<!-- Fim Bloco de Ofertas -->




<?php get_footer();

