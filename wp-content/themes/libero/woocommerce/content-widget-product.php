<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product; ?>
<li>
	<span class="mkd-product-list-image">
		<a href="<?php echo esc_url( $product->get_permalink() ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<?php echo wp_kses_post($product->get_image()); ?>
		</a>
	</span>
	<span class="mkd-product-list-content">
		<a href="<?php echo esc_url( $product->get_permalink() ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<span class="product-title"><?php echo esc_attr($product->get_title()); ?></span>
		</a>
		<?php if ( ! empty( $show_rating ) ) echo esc_attr($product->get_average_rating()); ?>
		<span class="mkd-product-list-price-holder">
			<?php echo wp_kses_post($product->get_price_html()); ?>
		</span>
	</span>
</li>