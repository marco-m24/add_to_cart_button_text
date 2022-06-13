// Cambiare add to cart nella pagina del singolo prodotto
add_filter( 'woocommerce_product_single_add_to_cart_text', 'mrc_woocommerce_custom_single_add_to_cart_text' ); 
function mrc_woocommerce_custom_single_add_to_cart_text() {
	global $product;
	$product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
    
    if ( in_array( 11, $product_cats_ids ) ) {
    	return __( 'Ascolta Ora', 'woocommerce' );
    } else if ( in_array( 10, $product_cats_ids ) ) {
    	return __( 'Iscriviti Ora', 'woocommerce' );
    } else {
    	return __( 'Compra Ora', 'woocommerce' );
    }      
}





// Cambiare add to cart nelle pagine di archivio e shop
add_filter( 'woocommerce_product_add_to_cart_text', 'mrc_woocommerce_custom_product_add_to_cart_text' );  
function mrc_woocommerce_custom_product_add_to_cart_text() {
	global $product;
	$product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );
    
    if ( in_array( 11, $product_cats_ids ) ) {
    	return __( 'Ascolta Ora', 'woocommerce' );
    }
    else if ( in_array( 10, $product_cats_ids ) ) {
    	return __( 'Iscriviti Ora', 'woocommerce' );
    }
    else {
    	return __( 'Compra Ora', 'woocommerce' );
    } 
}
