<?php
/**
 * Side Cart Header
 *
 * This template can be overridden by copying it to yourtheme/templates/side-cart-woocommerce/xoo-wsc-header.php.
 *
 * HOWEVER, on occasion we will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen.
 * @see     https://docs.xootix.com/side-cart-woocommerce/
 * @version 2.1
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

extract( Xoo_Wsc_Template_Args::cart_header() );

?>
<style>
<?php 
echo "<link href='site_url()."/wp-content/plugins/side-cart-woocommerce/assets/css/xoo-wsc-style.css.";' >" 
?> 
</style>

<style>
.xoo-wsc-header {
	color: white !important;
    background-color: #217e53 !important;
}

.xoo-wsc-ft-buttons-cont{
    width: 90% !important;
    margin: 0px 0px 0px 20px !important;
    background-color: #079D4A !important;
    border-radius: 20px !important;
}

a.xoo-wsc-ft-btn-checkout{
	color: white !important;
    font-family: 'Rubik' !important;
    font-size: 16px !important;
    font-weight: 400 !important;
	text-transform: none !important;
}
    
.xoo-wsch-top{
	float:left !important;	
}
.xoo-wsch-text{
    font-family: 'Fahkwang' !important;
    font-family: 600 !important;
	margin-left:0px;
}

.xoo-wsc-product{
	border-bottom:0px solid !important;
}

span.xoo-wsc-pname, span.xoo-wsc-pname a {
    font-size: 14px !important;
    font-family: 'Rubik' !important;
    font-weight: 400 !important;
}

.earthlyvibesBtn{
	border-radius:20px !important;
    text-transform: capitalize !important;
	font-family:'Rubik' !important;
}
</style>
<div class="xoo-wsch-top">

	<?php if( $showNotifications ): ?>
		<?php xoo_wsc_cart()->print_notices_html( 'cart' ); ?>
	<?php endif; ?>

	<?php if( $showBasket ): ?>
		<div class="xoo-wsch-basket">
			<!--<span class="xoo-wscb-icon xoo-wsc-icon-bag2"></span>--><!--<i class="fa fa-arrow-circle-o-left" style="font-size:30px;" aria-hidden="true"></i>-->
			<span class="xoo-wscb-count"><?php //echo xoo_wsc_cart()->get_cart_count() ?></span>
		</div>
	<?php endif; ?>

	<?php if( $heading ): ?>
		<span class="xoo-wsch-text"><a href="<?php echo site_url('/#shop'); ?>"><img style="height:34px;" src="<?php echo site_url('/wp-content/plugins/side-cart-woocommerce/assets/images/Left Arrow.svg'); ?>"></img></a>&nbsp;&nbsp;Cart</span>
	<?php endif; ?>

	<?php if( $showCloseIcon ): ?>
		<!--<span class="xoo-wsch-close xoo-wsc-icon-cross"></span>-->
	<?php endif; ?>

</div>