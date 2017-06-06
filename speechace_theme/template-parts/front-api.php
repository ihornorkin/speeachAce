<?php if(get_theme_mod('sa_disable') != 'on' ){ ?>  
    <div id="api" class="section-api">
      <div class="container">
        <div class="section-api__top-description text-center">
          <div class="section-heading">
            <?php $sa_title = get_theme_mod('sa_title'); ?>
            <h2><?php echo esc_html($sa_title); ?></h2>
            <div class="section-heading__duplicate">
              <span class="section-heading__heading"><?php echo esc_html($sa_title); ?></span>
            </div>
          </div>
          <?php $sa_subtitle = get_theme_mod('sa_subtitle'); ?>
          <h3><?php echo esc_html($sa_subtitle); ?></h3>
        </div>
        <div class="col-md-12 section-api__wrapper">
          <div class="api-steps">
          <?php
            for ($i=1; $i < 6; $i++) {
              $sa_image = get_theme_mod('sa_image'.$i);            
          ?>    
            <div class="api-steps__item">
              <img src="<?php echo esc_url($sa_image)?>" data-rjs="3" class="img-responsive" />
            </div>
          <?php } ?>
          </div>
        </div>
        <div class="col-md-8 col-md-push-2">
          <div class="section-api__bottom-description text-center">
          <?php $sa_text = get_theme_mod('sa_text'); ?>
            <p><?php echo esc_html($sa_text); ?></p>
          </div>
        </div>
        <div class="col-md-12 text-center">
          <button data-toggle="modal" data-target="#contact-form-api" class="btn sa-btn">Contact Us</button>
        </div>
               
      </div>

    </div>
        <div id="contact-form-api" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal fade">
          <div role="document" class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                  <i class="icon-cancel"></i>
                </button>
                <div class="section-heading">
                  <h2>Contact Us API!</h2>
                  <div class="section-heading__duplicate">
                    <span class="section-heading__heading">Contact Us API!</span>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                   <?php
                    $sa_contact = get_theme_mod('sa_contact');
                    echo do_shortcode($sa_contact);
                   ?>
              </div>
            </div>
          </div>
        </div>     
    <?php } ?>