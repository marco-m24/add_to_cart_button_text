// Cambiare add to cart nella pagina del singolo prodotto
add_filter( 'woocommerce_product_single_add_to_cart_text', 'mrc_woocommerce_custom_single_add_to_cart_text' ); 
function mrc_woocommerce_custom_single_add_to_cart_text() {
    return __( 'Compra ora', 'woocommerce' ); 
}


// Cambiare add to cart nelle pagine di archivio e shop
add_filter( 'woocommerce_product_add_to_cart_text', 'mrc_woocommerce_custom_product_add_to_cart_text' );  
function mrc_woocommerce_custom_product_add_to_cart_text() {
    return __( 'Compra adesso!', 'woocommerce' );
}
