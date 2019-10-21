<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<section class="">
	<style>
	.pagination {
    width: 100%;
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    justify-content: center;
    margin-top: 1em;
}

.pagination .page-numbers {
    border-radius: 3px;
    background: #ececec;
    color: rgba(0, 0, 0, 0.8);
    line-height: 2.2;
    margin: 0 0.2em;
    padding: 0 0.9em;
    transition: all 0.15s ease;
}

.pagination a.page-numbers:hover,
.pagination .page-numbers.current {
    background: #3d9be9;
    color: #FFF;
}
  </style>
    <div class="main-product">
    <div class="main-product__content">
      <div class="main-product__filter">
        <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
          		<?php $args = array(

            'orderby' => 'slug',
            'order' => 'ASC',
	         'posts_per_page' => 7
            );
            $product_categories = get_terms('product_cat', $args);

        foreach ($product_categories as $product_category): ?>
          <a aria-controls="v-pills-home" aria-selected="true" data-toggle="pill" href="<?php echo $url_category = get_term_link( $product_category ); ?>"  role="tab"><?php echo $product_category->name; ?></a>
        <?php endforeach; ?>
        </div>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div aria-labelledby="v-pills-home-tab" class="tab-pane fade show active" id="v-pills-home" role="tabpanel">
          <div class="main-product__box">
            <?php while ( have_posts() ) : the_post(); global $product; ?>
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
            <!-- <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Anillos</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1530189955154-fb007ea08a76?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Anillos</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1518954588695-59b8deeb40b1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Anillos</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1501461342471-13e68faa90a4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Anillos</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1466684921455-ee202d43c1aa?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Anillos</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div aria-labelledby="v-pills-profile-tab" class="tab-pane fade" id="v-pills-profile" role="tabpanel">
          <div class="main-product__box">
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1547738238-5ddb16bef15f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Collares</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div aria-labelledby="v-pills-messages-tab" class="tab-pane fade" id="v-pills-messages" role="tabpanel">
          <div class="main-product__box">
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1475179593777-bd12fd56b85d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Aretes</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div aria-labelledby="v-pills-settings-tab" class="tab-pane fade" id="v-pills-settings" role="tabpanel">
          <div class="main-product__box">
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1552234914-13f6e51124ec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Pulseras</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="main-product__item">
              <div class="card-product">
                <img alt="" class="img-product" src="https://images.unsplash.com/photo-1547738238-5ddb16bef15f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60">
                <div class="body-product">
                  <h2 class="title-product">Pulseras</h2>
                  <div class="description-product">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ut saepe corporis quas inventore doloremque aut, ducimus vero expedita nisi distinctio dolorem veniam iusto perspiciatis, libero delectus quaerat eaque assumenda?
                    </p>
                  </div>
                  <a class="btn btn_custom btn--medium btn--filled" href="details_product.html">Ver Más</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
	 <div class="pagination"><?php echo paginate_links( $args ); ?></div>
</section>