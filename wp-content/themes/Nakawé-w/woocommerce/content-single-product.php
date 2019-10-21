






<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="main-about__content main-about__content--xs">
  <div class="main-about__item">
    <?php
      /**
       * Hook: woocommerce_before_single_product_summary.
       *
       * @hooked woocommerce_show_product_sale_flash - 10
       * @hooked woocommerce_show_product_images - 20
       */
      do_action( 'woocommerce_before_single_product_summary' );
      ?>
   
  </div>
  <div class="main-about__item">
    <div class="main-about__text">
      <div class="main-general__title">
        <p><?php the_title(); ?></p>
      </div>
      <div class="main-about__description">
        <p class="main-about__description--categories"> <?php echo $product->get_categories(); ?></p>
        <p class="main-about__description--categories"> <?php echo $product->get_price_html(); ?></p>
        <p><?php the_content(); ?></p>
      </div>

          <?php
      /**
       * Hook: woocommerce_single_product_summary.
       *
       * @hooked woocommerce_template_single_title - 5
       * @hooked woocommerce_template_single_rating - 10
       * @hooked woocommerce_template_single_price - 10
       * @hooked woocommerce_template_single_excerpt - 20
       * @hooked woocommerce_template_single_add_to_cart - 30
       * @hooked woocommerce_template_single_meta - 40
       * @hooked woocommerce_template_single_sharing - 50
       * @hooked WC_Structured_Data::generate_product_data() - 60
       */
      do_action( 'woocommerce_single_product_summary' );
      ?>
    </div>
  </div>
</div>

<section class="product-related">
  <div class="main-general__title">
    <p>Productos Relacionados</p>
  </div>
  <div class="main-search__content">
    <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-product__item">
          <div class="card-product">
            <img alt="" class="img-product" src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="body-product">
            <h2 class="title-product"><?php the_title(); ?></h2>
            <div class="description-product">
              <?php the_content(); ?>
            </div>
            <a class="btn btn_custom btn--medium btn--filled" href="<?php the_permalink();?>">Ver Más</a>
          </div>
          </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>


