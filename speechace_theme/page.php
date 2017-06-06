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
        <div id="contact-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal fade">
          <div role="document" class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                  <i class="icon-cancel"></i>
                </button>
                <div class="section-heading">
                  <h2>Contact Us!</h2>
                  <div class="section-heading__duplicate">
                    <span class="section-heading__heading">Contact Us!</span>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                   <?php
                    $team_contact = get_theme_mod('team_contact');
                    echo do_shortcode($team_contact);
                   ?>
              </div>
            </div>
          </div>
        </div>
<?php get_footer(); ?>
