<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
           <?php $lang = qtrans_getLanguage(); ?>
           
           <?php if($lang == 'en'): ?>
           
               <div style="padding-top:20px; font-size:13px;"> 

<strong>We deliver in Skopje</strong> on the same day until 07 pm. Orders placed <strong>after 08 pm</strong> are delivered the next day. The delivery price and card are included in the price of the product.
           </div>
           <?php else : ?>
        
        <div style="padding-top:20px; font-size:13px;"><strong>Испораката во Скопје</strong> е истиот ден од нарачката, <strong>до 19 часот навечер</strong>.
Нарачките<strong> после 20 часот</strong> се пренесуваат наредниот ден. Испораките за <strong>внатрешноста не се извршуваат во недела</strong>. <strong>Испораките за Скопје</strong> се извршуваат во недела.
Цената на испораката и картичката за посвета се влезени во цената на проиводот. </div>


<div style="padding-top:20px; font-size:13px;"><strong>Напомена</strong>- во случај на недостапност на видот и бојата на цвеќето во цветниот аранжман кој е одбран, 
	истите ги менуваме според тоа со што располагаме во моментот на нарачката - во истата вредност.
Во случај на <strong>неточен телефонски број</strong> на примач, не извршуваме нарачки.</div>


<?php endif; ?>


<?php if ( is_product() && has_term( 'podaroci', 'product_cat' ) ) {
		//echo '<div style="padding-top:10px; font-size:13px;"> Доколку <strong>нарачате и цвеќе</strong> испораката на подарокот е вкучена во цената соодветно локацијата за достава.Доколку сакате да го купите <strong>само подарокот</strong>, испораката на истиот чини <strong>300ден</strong>.</div>';
	} ?>


	</div><!-- .summary -->

	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
