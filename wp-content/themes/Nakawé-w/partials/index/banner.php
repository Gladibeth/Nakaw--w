<div class="main-banner">
  <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__text">
            <div class="main-banner__title">
              <p><?php the_title(); ?></p>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img src="https://images.unsplash.com/photo-1450297166380-cabe503887e5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=745&amp;q=80">
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>