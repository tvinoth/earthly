<?php
/**
 * Plugin Premium Offer Page
 *
 * @package Blog Designer - Post and Widget Pro
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wrap">

	<h2><?php _e( 'Blog Designer - Post and Widget with ', 'blog-designer-for-post-and-widget' ); ?><span class="h-blue"><?php _e( 'Essential Plugin Bundle', 'blog-designer-for-post-and-widget' ); ?></span></h2>

	<style>
		.wpos-plugin-pricing-table thead th h2{font-weight: 400; font-size: 2.4em; line-height:normal; margin:0px; color: #2ECC71;}
		.wpos-plugin-pricing-table thead th h2 + p{font-size: 1.25em; line-height: 1.4; color: #999; margin:5px 0 5px 0;}

		table.wpos-plugin-pricing-table{width:100%; text-align: left; border-spacing: 0; border-collapse: collapse; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}

		.wpos-plugin-pricing-table th, .wpos-plugin-pricing-table td{font-size:14px; line-height:normal; color:#444; vertical-align:middle; padding:12px;}
		.wpos-about-epb-table td{padding: 12px 12px 60px;position: relative;}

		.wpos-plugin-pricing-table colgroup:nth-child(1) { width: 31%; border: 0 none; }
		.wpos-plugin-pricing-table colgroup:nth-child(2) { width: 22%; border: 1px solid #ccc; }
		.wpos-plugin-pricing-table colgroup:nth-child(3) { width: 25%; border: 10px solid #2ECC71; }

		/* Tablehead */
		.wpos-plugin-pricing-table thead th {background-color: #fff; background:linear-gradient(to bottom, #ffffff 0%, #ffffff 100%); text-align: center; position: relative; border-bottom: 1px solid #ccc; padding: 1em 0 1em; font-weight:400; color:#999;}
		.wpos-plugin-pricing-table thead th:nth-child(1) {background: transparent;}
		.wpos-plugin-pricing-table thead th:nth-child(3) p{color:#000;}	
		.wpos-plugin-pricing-table thead th p.promo {font-size: 14px; color: #fff; position: absolute; bottom:0; left: -17px; z-index: 1000; width: 100%; margin: 0; padding: .625em 17px .75em; background-color: #ca4a1f; box-shadow: 0 2px 4px rgba(0,0,0,.25); border-bottom: 1px solid #ca4a1f;}
		.wpos-plugin-pricing-table thead th p.promo:before {content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 0 7px 7px 0; border-color: transparent #900 transparent transparent; bottom: -7px; left: 0;}
		.wpos-plugin-pricing-table thead th p.promo:after {content: ""; position: absolute; display: block; width: 0px; height: 0px; border-style: solid; border-width: 7px 7px 0 0; border-color: #900 transparent transparent transparent; bottom: -7px; right: 0;}
		.wpos-about-epb-table{margin:10px 0;}
		.wpos-about-epb-table, .wpos-about-epb-table td{border:1px solid #ccc;}
		.wpos-about-epb-table th {background: #ff4081 !important; font-size:18px; font-weight:100%;  color:#fff; border-bottom: 1px solid #ccc !important;  padding:10px !important; color:#fff !important;}
		.wpos-about-epb-table th, .wpos-about-epb-table td{text-align:left !important; vertical-align:top;}
		.wpos-about-epb-table td ul{list-style:none;}		
		.wpos-about-epb-table ul li::before {content: "\2022";color:#ff2700 ;font-weight: bold;display: inline-block;width: 15px;}
		
		/* Tablebody */
		.wpos-plugin-pricing-table tbody th{background: #fff; border-left: 1px solid #ccc; font-weight: 600;}
		.wpos-plugin-pricing-table tbody th span{font-weight: normal; font-size: 87.5%; color: #999; display: block;}

		.wpos-plugin-pricing-table tbody td{background: #fff; text-align: center;}
		.wpos-plugin-pricing-table tbody td .dashicons{height: auto; width: auto; font-size:30px;}
		.wpos-plugin-pricing-table tbody td .dashicons-no-alt{color: #ff2700;}
		.wpos-plugin-pricing-table tbody td .dashicons-yes{color: #2ECC71;}

		.wpos-plugin-pricing-table tbody tr:nth-child(even) th,
		.wpos-plugin-pricing-table tbody tr:nth-child(even) td { background: #f5f5f5; border: 1px solid #ccc; border-width: 1px 0 1px 1px; }
		.wpos-plugin-pricing-table tbody tr:last-child td {border-bottom: 0 none;}

		/* Table Footer */
		.wpos-plugin-pricing-table tfoot th, .wpos-plugin-pricing-table tfoot td{text-align: center; border-top: 1px solid #ccc;}
		.wpos-plugin-pricing-table tfoot a, .wpos-plugin-pricing-table thead a{font-weight: 600; color: #fff; text-decoration: none; text-transform: uppercase; display: inline-block; padding: 1em 2em; background: #ff2700; border-radius: .2em;}
		a.epb-cutom-button{font-weight: 600; color: #fff; text-decoration: none; text-transform: uppercase; display: inline-block; padding: 1em 2em; background: #ff2700; border-radius: .2em;}
		.wpos-epb{color:#ff2700 !important;}

		.wp-plugin-icon{position: absolute;bottom: 15px;}
		.wp-plugin-icon img {margin: 0 5px;}
		.wp-plugin-icon span{font-size: 14px;font-style: italic;color: red;display: block;}
		.wp-icons {margin-bottom: 20px;text-align: center;}
		.wp-icons img{vertical-align: top;}
		.wp-icons ul{margin: 0;}
		.wp-icons li{display: inline-block;margin-right: 5px;}
		
		/* SideBar */
		.wpos-sidebar .wpos-epb-wrap{background:#0055fb; color:#fff; padding:15px;}
		.wpos-sidebar .wpos-epb-wrap  h2{font-size:24px !important; color:#fff; margin:0 0 15px 0; padding:0px !important;}
		.wpos-sidebar .wpos-epb-wrap  h2 span{font-size:20px !important; color:#ffff00 !important;}
		.wpos-sidebar .wpos-epb-wrap ul li{font-size:16px; margin-bottom:8px;}
		.wpos-sidebar .wpos-epb-wrap ul li span{color:#ffff00 !important;}
		.wpos-sidebar .wpos-epb-wrap ul{list-style: decimal inside none;}
		.wpos-sidebar .wpos-epb-wrap b{font-weight:bold !important;}
		.wpos-sidebar .wpos-epb-wrap p{font-size:16px;}
		.wpos-sidebar .wpos-epb-wrap .button-yellow{font-weight: 600;color: #000; text-align:center;text-decoration: none;display:block;padding: 1em 2em;background: #ffff00;border-radius: .2em;}
		.wpos-sidebar .wpos-epb-wrap .button-orange{font-weight: 600;color: #fff; text-align:center;text-decoration: none;display:block;padding: 1em 2em;background: #ff2700;border-radius: .2em;}
		.larger-font{font-size:24px; line-height:35px; margin:0px;}
		.h-blue{color:#0055fb ;}
		.h-orange{color:#FF5D52 ;}
	</style>
<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<h3 class="larger-font"><?php _e( 'Well <span style="color:#388e3c"> optimized</span>, <span style="color:#7b1fa2">light weight</span> & <span style="color:#3e50b4">expandable</span> plugins <br /> for <span style="background:#ff4081; color:#fff;">web site, landing pages &amp; conversions</span>', 'blog-designer-for-post-and-widget' ); ?></h3>
				<h3 class=""><?php _e( 'Multiple pre-built template options with <span class="h-orange"> Gutenberg, DIVI, Elementor, Avada, VC/WPbakery </span>etc page builder/themes', 'blog-designer-for-post-and-widget' ); ?></h3>
				<h3 class="larger-font"><?php _e( '<span class="h-blue">46 plugins</span>, <span class="h-blue">10 sliders</span> with <span class="h-blue">2000+</span> pre-built templates in <span class="h-blue">Essential Bundle</span>', 'blog-designer-for-post-and-widget' ); ?></h3>
				<h3 style="text-align:center;"><?php _e( 'Top plugins category wise:', 'blog-designer-for-post-and-widget' ); ?></h3>
				
				<table class="wpos-plugin-pricing-table wpos-about-epb-table">
					<thead>
						<tr>
							<th>Web Site</th>
							<th>Landing Pages</th>
							<th>Conversions</th>	    		
						</tr>
						<tr>
							<td>
								<ul>
									<li>Logo Showcase Responsive Slider</li>
									<li>Responsive Recent Post Slider</li>
									<li>Slick Slider and Image Carousel</li>
									<li>News and Scrolling Widgets</li>
									<li>Blog Designer – Post and Widget</li>
									<li>Album and Image Gallery plus Lightbox</li>
									<li>Team Showcase and Slider</li>
									<li>Essential Security</li>
								</ul>
								<div class="wp-plugin-icon">
									<img src="<?php echo BDPW_URL; ?>assets/images/utility-50.png" width="26">
									<img src="<?php echo BDPW_URL; ?>assets/images/security-icon.png" width="26">
								</div>
							</td>
							<td>
								<ul>
									<li>Popup Anything – A Marketing Popup</li>
									<li>Countdown Timer Ultimate</li>
									<li>Testimonial with Widget</li>
									<li>Woo Product Slider and Carousel</li>
									<li>Hero Banner Ultimate</li>
									<li>Pricing Table Ultimate Pro</li>
									<li> Social Proof</li>
									<li> Whatsapp Chat Support</li>
									
								</ul>
								<div class="wp-plugin-icon">
									<img src="<?php echo BDPW_URL; ?>assets/images/utility-50.png" width="26">
									<img src="<?php echo BDPW_URL; ?>assets/images/inboundwp-50.png" width="26">
								</div>
							</td>
							<td>
								<ul>
									<li>Popup Anything – A Marketing Popup</li>
									<li>Countdown Timer Ultimate</li>
									<li>SlidersPack</li>									
									<li>Testimonial with Widget</li>
								
									<li>Pricing Table Ultimate Pro</li>
									<li>Social Proof</li>
									<li>Whatsapp Chat Support</li>
									<li>Essential Security</li>
								</ul>
								<div class="wp-plugin-icon">
									<img src="<?php echo BDPW_URL; ?>assets/images/utility-50.png" width="26">
									<img src="<?php echo BDPW_URL; ?>assets/images/inboundwp-50.png" width="26">
									<img src="<?php echo BDPW_URL; ?>assets/images/SlidersPack-50.png" width="26">
									<img src="<?php echo BDPW_URL; ?>assets/images/security-icon.png" width="26">
								</div>
							</td>
						</tr>
					</thead>
				</table>
				<div class="wp-icons">
					<ul>
						<li><img src="<?php echo BDPW_URL; ?>assets/images/utility-50.png" width="18"> - Utility Plugin (Total 39), </li>
						<li><img src="<?php echo BDPW_URL; ?>assets/images/inboundwp-50.png" width="15">  -  Inbound Maketing (Total 6), </li>
						<li><img src="<?php echo BDPW_URL; ?>assets/images/SlidersPack-50.png" width="16">  -  SlidersPack (Total 10), </li>
						<li><img src="<?php echo BDPW_URL; ?>assets/images/security-icon.png" width="16">  -  Essnetial Security</li>
					</ul>
					<a class="epb-cutom-button" href="<?php echo BDPW_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Blog-Designer&utm_campaign=Upgrade-PRO-Top-Cat" target="_blank">Buy Now</a>
				</div>
				
				<h3 style="text-align:center"><?php _e( 'Compare "Blog Designer - Post and Widget" Free VS Pro', 'blog-designer-for-post-and-widget' ); ?></h3>
				<table class="wpos-plugin-pricing-table">
					<colgroup></colgroup>
					<colgroup></colgroup>
					<colgroup></colgroup>	
						<thead>
						<tr>
							<th></th>
							<th>
								<h2><?php _e( 'Free', 'blog-designer-for-post-and-widget' ); ?></h2>
							</th>
							<th>
								<h2 class="wpos-epb"><?php _e( 'Premium', 'blog-designer-for-post-and-widget' ); ?></h2>
								<p><?php echo sprintf( __( 'Gain access to <strong>Blog Designer - Post and Widget</strong> included in <br /><strong class="wpos-epb">Essential Plugin Bundle</strong>', 'blog-designer-for-post-and-widget' ) ); ?></p>
								<a href="<?php echo BDPW_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Blog-Designer&utm_campaign=Upgrade-PRO" target="_blank">Buy Now</a></td>
							</th>	    		
						</tr>
					</thead>

					<tfoot>
						<tr>
							<th></th>
							<td></td>
							<td><p><?php echo sprintf( __( 'Gain access to <strong>Blog Designer - Post and Widget</strong> included in <br /><strong>Essential Plugin Bundle</strong>', 'blog-designer-for-post-and-widget' ) ); ?></p>
							<a href="<?php echo BDPW_SITE_LINK; ?>/pricing/?utm_source=WP&utm_medium=Blog-Designer&utm_campaign=Upgrade-PRO" target="_blank">Buy Now</a></td>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<th><?php _e( 'Designs ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Designs that make your website better', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td>4</td>
							<td>130+</td>
						</tr>
						<tr>
							<th><?php _e( 'Shortcodes ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Shortcode provide output to the front-end side', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><?php _e( '2 - (Post Grid, Post Slider)', 'blog-designer-for-post-and-widget' ); ?></td>
							<td><?php _e( '9 - (Post Grid, Post List, Post Slider, Post Carousel, Recent Post, Post Ticker, Post GridBox, Post GridBox Slider, Post Masonry)', 'blog-designer-for-post-and-widget' ); ?></td>
						</tr>
						<tr>
							<th><?php _e( 'Shortcode Parameters ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Add extra power to the shortcode', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td>14</td>
							<td>30+</td>
						</tr>
						<tr>
							<th><?php _e( 'WP Templating Features ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'You can modify plugin html/designs in your current theme.', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Ticker View ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Display post in a Ticker view', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Masonry View ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Display post in a masonry view', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Shortcode Generator ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Play with all shortcode parameters with preview panel. No documentation required!!', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Widgets', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"> <?php _e( 'WordPress Widgets to your sidebars.', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><?php _e( '1 Widget', 'blog-designer-for-post-and-widget' ); ?></td>
							<td><?php _e( '5 Widgets', 'blog-designer-for-post-and-widget' ); ?></td>
						</tr>
						<tr>
							<th><?php _e( 'Drag &amp; Drop Post Order Change ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Arrange your desired post with your desired order and display', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Gutenberg Block Supports ', 'blog-designer-for-post-and-widget' ); ?><span><?php _e( 'Use this plugin with Gutenberg easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-yes"></i></td>
							<td><i class="dashicons dashicons-yes"></i></td>
						</tr>
						<tr>
							<th><?php _e( 'Elementor Page Builder Support', 'blog-designer-for-post-and-widget' ); ?><em class="wpos-new-feature">New</em> <span><?php _e( 'Use this plugin with Elementor easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"></i></td>
							<td><i class="dashicons dashicons-yes"></i></td>
						</tr>
						<tr>
							<th><?php _e( 'Bevear Builder Support', 'blog-designer-for-post-and-widget' ); ?><em class="wpos-new-feature">New</em> <span><?php _e( 'Use this plugin with Bevear Builder easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"></i></td>
							<td><i class="dashicons dashicons-yes"></i></td>
						</tr>
						<tr>
							<th><?php _e( 'SiteOrigin Page Builder Support', 'blog-designer-for-post-and-widget' ); ?><em class="wpos-new-feature">New</em> <span><?php _e( 'Use this plugin with SiteOrigin easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"></i></td>
							<td><i class="dashicons dashicons-yes"></i></td>
						</tr>
						<tr>
							<th><?php _e( 'Divi Page Builder Native Support', 'blog-designer-for-post-and-widget' ); ?><em class="wpos-new-feature">New</em> <span><?php _e( 'Use this plugin with Divi Builder easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-yes"></i></td>
							<td><i class="dashicons dashicons-yes"></i></td>
						</tr>
						<tr>
							<th><?php _e( 'Fusion Page Builder (Avada) native support', 'blog-designer-for-post-and-widget' ); ?><em class="wpos-new-feature">New</em> <span><?php _e( 'Use this plugin with Fusion Page Builder (Avada) easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-yes"></i></td>
							<td><i class="dashicons dashicons-yes"></i></td>
						</tr>
						<tr>
							<th><?php _e( 'WPBakery Page Builder Supports ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Use this plugin with Visual Composer/WPBakery page builder easily', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Custom Read More link for Post ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Redirect post to third party destination if any', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Display Desired Post ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Display only the post you want', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Display Post for Particular Categories ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Display only the posts with particular category', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Exclude Some Posts ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Do not display the posts you want', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Exclude Some Categories ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Do not display the posts for particular categories', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-no-alt"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Post Order / Order By Parameters ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Display post according to date, title and etc', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-yes"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Multiple Slider Parameters ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Slider parameters like autoplay, number of slide, sider dots and etc.', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-yes"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Slider RTL Support ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Slider supports for RTL website', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><i class="dashicons dashicons-yes"> </i></td>
							<td><i class="dashicons dashicons-yes"> </i></td>
						</tr>
						<tr>
							<th><?php _e( 'Automatic Update ', 'blog-designer-for-post-and-widget' ); ?><span><?php _e( 'Get automatic  plugin updates ', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><?php _e( 'Lifetime', 'blog-designer-for-post-and-widget' ); ?></td>
							<td><?php _e( 'Lifetime', 'blog-designer-for-post-and-widget' ); ?></td>
						</tr>
						<tr>
							<th><?php _e( 'Support ', 'blog-designer-for-post-and-widget' ); ?><span class="subtext"><?php _e( 'Get support for plugin', 'blog-designer-for-post-and-widget' ); ?></span></th>
							<td><?php _e( 'Limited', 'blog-designer-for-post-and-widget' ); ?></td>
							<td><?php _e( '1 Year', 'blog-designer-for-post-and-widget' ); ?></td>
						</tr>
						</tbody>
				</table>
			</div>	
				<!--Upgrad to Pro HTML -->
					<div id="postbox-container-1" class="postbox-container wpos-sidebar">
						<div class="wpos-epb-wrap">
							<h2><span>Well, What's inside our</span> Essential Plugin Bundle?</h2>
							<ul>
								<li><b>40+ Utility Plugins</b> including <span><?php echo BDPW_NAME; ?> premium </span> version.</li>
								<li><b>Inbound Marketing</b> with popup anything - a marketing popup tools that makes your visitors engage.</li>
								<li><b>10+ Sliderspack</b> for the best post, image &amp; logo sliders.</li>
								<li><b>Popup Anything a Marketing Popup</b> engage with customers, subscribers, leads and sales with Popup Anything.</li>
							</ul>			
							<p>with the best themes compatibility</b> & at the most <b>competitive price</b> ever the <b>ultimate bundle</b> with all our premium <b>essential plugins</b> in one single bundle.</p>
							<a class="button-yellow button-orange" style="margin-bottom:0px;" href="<?php echo BDPW_SITE_LINK; ?>/essential-bundle/?utm_source=WP&utm_medium=Blog-Designer&utm_campaign=EPB-Upgrade-PRO" target="_blank">Buy Now</a>
						</div>
					</div><!-- #post-container-1 -->
			</div>
		</div>			
</div>