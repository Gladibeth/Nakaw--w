<?php get_header();?>
        <div class="main-search__content">
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
        </div>
          
        <?php get_footer();?>