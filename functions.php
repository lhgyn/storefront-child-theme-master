<?php
/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );
/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}
/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

show_admin_bar( false );

$wc_query = new WP_Query(array('posts_per_page' => 5, 'post_type' => 'product'));
if ($wc_query->have_posts()){
    while ($wc_query->have_posts()){
        $wc_query->the_post();
        define("ID_PRODUTO", get_the_ID());
    }
    wp_reset_postdata();
}



if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Personalização do Thema',
        'menu_title'    => 'Customizar',
        'menu_slug'     => 'theme-custom',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}





function get_product_regular_price($variation_id) {

    global $woocommerce; 
    $product = new WC_Product_Variation($variation_id);
    return $product->get_regular_price(); 
}

function get_product_min_price($variation_id) {

    global $woocommerce; 
    $product = new WC_Product_Variation($variation_id);
    return $product->get_price(); 
}

function get_product_descricao($variation_id) {

    global $woocommerce; 
    $product = new WC_Product_Variation($variation_id);
    return $product->get_variation_attributes(); 
}

function get_product_ref($variation_id) {

    global $woocommerce; 
    $product = new WC_Product_Variation($variation_id);
    return $product->get_description(); 
}

add_action( 'get_sidebar', 'remove_woocommerce_sidebar', 1, 1 );
function remove_woocommerce_sidebar( $name ){
    if ( is_woocommerce() && empty( $name ) )
        exit();
}

add_action( 'get_header', 'remove_storefront_sidebar' );

function remove_storefront_sidebar() {
    if ( is_shop() ) {
        remove_action( 'storefront_sidebar', 'storefront_get_sidebar',          10 );
    }
}

// REDIRECIONA CART PARA CHECKOUT
function bbloomer_redirect_checkout_add_cart( $url ) {
    $url = get_permalink( get_option( 'woocommerce_checkout_page_id' ) ); 
    return $url;
}
 
add_filter( 'woocommerce_add_to_cart_redirect', 'bbloomer_redirect_checkout_add_cart' );

// REMOVER FIELDS DESNECESSARIOS DO ONE PAGE CHECKOUT
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
     unset($fields['order']['order_comments']);
     unset($fields['billing']['billing_company']);

     return $fields;
}
// REMOVE O ALERTA DE CUPOM
add_action( 'woocommerce_before_checkout_form', 'remove_checkout_coupon_form', 9 );
function remove_checkout_coupon_form(){
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
}

// REMOVE O AVISO VERDE PRODUTO ADD NO CARRINHO
add_filter( 'wc_add_to_cart_message_html', '__return_null' );


// REDIRECIONA SHOP -> INDEX
function custom_shop_page_redirect() {
    if( is_shop() ){
        wp_redirect( home_url('/') );
        exit();
    }
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );


// REMOVE TODAS AS OPÇÕES DE PRODUTOS, MENOS OPÇÃO VARIAVEL
add_filter( 'product_type_selector', 'remove_product_types' );

function remove_product_types( $types ){
    unset( $types['grouped'] );
    unset( $types['external'] );
    unset( $types['simple'] );

    return $types;
}

// TROCA BOTÃO DE LUGAR
function output_payment_button() {
    $order_button_text = apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) );
    echo '<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" />';
}

add_action( 'woocommerce_checkout_shipping', 'output_payment_button' );

function remove_woocommerce_order_button_html() {
    return '';
}

add_filter( 'woocommerce_order_button_html', 'remove_woocommerce_order_button_html' );

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );


add_action( 'woocommerce_checkout_billing', 'woocommerce_checkout_payment', 5 );
// fim trocar botão


// GARANTIA ESTENDIDA

add_action( 'wp_footer', 'woocommerce_add_gift_box' );
function woocommerce_add_gift_box() {
    if (is_checkout()) {
    ?>
    <script type="text/javascript">
    jQuery( document ).ready(function( $ ) {
        $('#add_gift_box').click(function(){
            jQuery('body').trigger('update_checkout');
        });

        var taxa_garantia = "<?php echo number_format(get_field('garantia_custo_extra', 'option'), 2, '.', ','); ?>"; //pega o valor do custo extra no custom fields - customizações do thema 
        var parcelas = $('#pagarme-installments option:last').val();
        var calc = ( parseFloat(taxa_garantia) / parcelas ); calc = calc.toFixed(2).replace('.', ',');
        $('#extra-cost-label').html('Proteja sua entrega por apenas '+ parcelas +'x de R$ '+ calc);
    });
    </script>
    <?php
    }
}

add_action( 'woocommerce_cart_calculate_fees', 'woo_add_cart_fee' );
function woo_add_cart_fee( $cart ){
    if ( ! $_POST || ( is_admin() && ! is_ajax() ) ) {
        return;
    }

    if ( isset( $_POST['post_data'] ) ) {
        parse_str( $_POST['post_data'], $post_data );
    } else {
        $post_data = $_POST; // fallback for final checkout (non-ajax)
    }

    if (isset($post_data['add_gift_box'])) {
        $extracost = get_field('garantia_custo_extra', 'option'); // not sure why you used intval($_POST['state']) ?
        WC()->cart->add_fee( 'Proteção de entrega', $extracost );
    }

}

// FIM garantia


add_filter('woocommerce_billing_fields', 'custom_woocommerce_billing_fields');

function custom_woocommerce_billing_fields( $fields ) {

     $fields['billing_first_name']['class'] = array( 'form-row-wide' );
     $fields['billing_last_name']['class'] = array( 'form-row-wide' );
     $fields['billing_address_1']['class'] = array( 'form-row-wide' );
     $fields['billing_neighborhood']['class'] = array( 'form-row-wide' );
     $fields['billing_number']['class'] = array( 'form-row-wide' );
     $fields['billing_address_2']['class'] = array( 'form-row-wide' );
     $fields['billing_city']['class'] = array( 'form-row-wide' );
     $fields['billing_postcode']['class'] = array( 'form-row-wide' );

     return $fields;
}

// modificar classe de form para ocupar linha inteira
add_filter( 'woocommerce_checkout_fields' , 'custom_wc_checkout_fields' );

function custom_wc_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['autofocus'] = false;
    $fields['shipping']['shipping_first_name']['autofocus'] = false;
    return $fields;

}


/* TROCAR NOME BOTÃO FINALIZAR COMPRA */

add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' ); 

function woo_custom_order_button_text() {
    return __( 'FINALIZAR PEDIDO', 'woocommerce' ); 
}

add_filter( 'woocommerce_cart_item_name', 'cart_variation_description', 20, 3);
function cart_variation_description( $name, $cart_item, $cart_item_key ) {
    // Get the corresponding WC_Product
    $product_item = $cart_item['data'];

    if(!empty($product_item) && $product_item->is_type( 'variation' ) ) {
        // WC 3+ compatibility
        $descrition = version_compare( WC_VERSION, '3.0', '<' ) ? $product_item->get_variation_description() : $product_item->get_description();
        $result = __( '', 'woocommerce' ) . mb_strtolower($descrition);
        return  $result;
    } else
        return $name;
}


// tirar persistencia cart items
add_filter( 'woocommerce_persistent_cart_enabled', '__return_false' );


function wc_remove_persistent_cart($value, $id, $key) { 
if ($key == '_woocommerce_persistent_cart') { 
return false; 
} 
return $value; 
} 
add_filter('get_user_metadata', 'wc_remove_persistent_cart', 10, 3); 
add_filter('update_user_metadata', 'wc_remove_persistent_cart', 10, 3); 
add_filter('add_user_metadata', 'wc_remove_persistent_cart', 10, 3);



// mudar ENTREGA para FRETE
add_filter( 'woocommerce_shipping_package_name' , 'woocommerce_replace_text_shipping_to_delivery', 10, 3);

/**
 * 
 * Function to replace shipping text to delivery text
 * 
 * @param $package_name
 * @param $i
 * @param $package
 *
 * @return string
 */
function woocommerce_replace_text_shipping_to_delivery($package_name, $i, $package){

    return sprintf( _nx( 'Frete', 'Frete %d', ( $i + 1 ), 'shipping packages', 'fenbuterol.com' ), ( $i + 1 ) );
}

// PERMITIR SOMENTE UM PRODUTO NO CART
add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}



// only copy opening php tag if needed
// Adds "per package" after each product price throughout the shop
function sv_change_product_price_display( $price ) {
    $price = '6x de ';
    return $price;
}
add_filter( 'woocommerce_cart_item_price', 'sv_change_product_price_display' );



// EM TEORIA ERA PRA CHECAR O STATUS DA ORDEM E SOMENTE IR PARA A PAGINA SEGUINTE CASO O STATUS MUDE PARA 
// FAILED OU PROCESSING, MAS NÃO ESTÁ FUNCIONANDO MUITO BEM
add_action( 'woocommerce_checkout_order_processed', 'is_express_delivery',  1, 1  );
function is_express_delivery( $order_id ){
   $order = new WC_Order( $order_id );
   if($order->has_status('pending')){
    sleep(5);
   }
   else {

   return;
    }
}




// define the woocommerce_review_order_before_payment callback 
function action_woocommerce_review_order_before_payment(  ) {
    ?>
        <script>
            parcelas = $('#pagarme-installments option:last').val();
            $('#pagarme-installments option:last').prop('selected',true);            
            //$('#pagarme-installments option:contains("6x")').prop('selected',true);            
            // $("label[for='shipping_method_0_flat_rate4']").text(function(index,text){
            //     return text.replace(':','6x de ');
            // });
            $("label[for='pagarme-card-holder-name']").html("Nome impresso no cartão");
            $("#billing_address_2_field > label").html("Complemento");

           $('#pagarme-installments').change(function(event) {

              var active = $(this, 'option:selected').val();
              
              $( document ).ajaxComplete(function(){
                $("#pagarme-installments option").each(function(){
                    if ($(this).val() == active) {
                        $(this).prop('selected',true);
                    }    
                });
              });

            });
        </script>
    <?php
}; 
         
add_action( 'woocommerce_review_order_before_submit', 'action_woocommerce_review_order_before_payment', 10, 0 ); 