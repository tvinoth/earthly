<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<style>
	.show-password-input{
		display:none !important;
	}
</style>

<div class="u-columns col2-set" id="customer_login">
	<br><br>
	<div class="u-column1 col-1 loginbg">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-5">
				<img style="width: 75px;height: 75px;" src="<?php echo esc_url( '/earthly/wp-content/uploads/elementor/thumbs/table-pjmo2bv2b2ymasqknyf5a4ft5h28k4s94mxbgq89uo.png' ); ?>"></img>
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-5" style="padding-top:10px;">
				<h3 class="earthlyrubik" style="font-weight:400;">Login</h3>
				<p class="earthlyrubik">Hello, there would you mind giving us your email? </p>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<img style="width: 50px;height: 50px;" src="<?php echo esc_url( '/earthly/wp-content/uploads/elementor/thumbs/bee-2-pjagw3oeqjl716widsfv6afcabkje42zplz7vhrbzi.png' ); ?>"></img>
				</div>
			</div>
		</div>
	</div>
	
	<div class="u-column2 col-2">
		<!--<h2><?php// esc_html_e( 'Login', 'woocommerce' ); ?></h2>-->
		<form class="woocommerce-form woocommerce-form-login login" method="post" style="border:0px solid;">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!--<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>-->
				<input type="text" placeholder="Enter your email id" class="woocommerce-Input woocommerce-Input--text custominput input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!--<label for="password" class="control-label"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>-->
				<input placeholder="Enter your password" class="woocommerce-Input woocommerce-Input--text input-text custominput" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<!--<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php //esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
				</label>-->
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="loginBtn woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">Continue</button>
				<span><a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" style="color:#13473C"><u><?php esc_html_e( 'Forgot password?', 'woocommerce' ); ?></u></a></span>
			</p>
			<hr>
			<p style="color:#13473C;padding-left: 10px;">
				Don't have an account? <a href="<?php echo esc_url( '/earthly/register' ); ?>" style="color:#13473C"><u>Create One</u></a>
			</p>
			<?php do_action( 'woocommerce_login_form_end' ); ?>
		</form>
	</div>
</div>
<div class="container-fluid" style="
    margin: 0px -118px -70px -120px;
    padding-right: 0px !important;
    padding-left: 0px !important;">
	<img src="<?php echo esc_url( '/earthly/wp-content/uploads/2022/01/Website-Image-Crop-leaves.png' ); ?>"></img>
</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
