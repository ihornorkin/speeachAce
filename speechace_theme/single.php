<?php get_header(); ?>
</div>
</div>
<div class="single-page">
<div class="container">
  <div class="row">
    <?php while (have_posts()): the_post();?>
      <div class="col-md-12 text-center">
      <div class="what-we-do__top-description text-center">
        <div class="section-heading">
          <div class="section-heading__duplicate">
            <span class="section-heading__heading"><?php the_title(); ?></span>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-8 col-md-push-2">
        <div class="what-we-do__bottom-description">
          <p><?php the_content(); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
</div>
<?php get_footer(); ?>
