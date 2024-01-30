 // use business name for order instead of F_name L_name
add_filter( 'woocommerce_admin_order_buyer_name', function ($buyer, $order) {

	$company = $order->get_billing_company();
	$city = $order->get_billing_city();

        if ( ! empty( $company ) ) {
            $buyer =  $company . ' - ' . $city;
        }

	return $buyer;

}, 10, 2 );