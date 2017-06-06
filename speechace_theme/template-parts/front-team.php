    <?php if(get_theme_mod('team_disable') != 'on' ){ ?>     
    <div class="our-team">
      <div class="our-team__img-map">
        <img src="<?php echo get_template_directory_uri(); ?>/images/world-map-2.png" />
      </div>
      <div class="container">
        <div id="team" class="our-team__top-description text-center">
          <div class="section-heading section-heading section-heading--white">
          <?php $team_title = get_theme_mod('team_title'); ?>
            <h2><?php echo esc_html($team_title); ?></h2>
            <div class="section-heading__duplicate">
              <span class="section-heading__heading"><?php echo esc_html($team_title); ?></span>
            </div>
          </div>
          <?php $team_subtitle = get_theme_mod('team_subtitle'); ?>
          <h3><?php echo esc_html($team_subtitle); ?></h3>
        </div>
        <div class="our-team__team-gallery">
          <div class="row">
            <div class="team-gallery">
            <?php
            $team_count = get_theme_mod('team_count');

            for( $i = 1; $i < $team_count+1; $i++ ){
              $team_image = get_theme_mod('team_im'.$i);
              $team_name = get_theme_mod('team_name'.$i);
              $team_spec = get_theme_mod('team_spec'.$i);
            ?>  
              <div class="team-gallery__item">
                <div class="team-gallery__wrapper">
                  <?php if($team_image){ ?>  
                  <img src="<?php echo esc_url($team_image); ?>" />
                  <?php } else {?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/item-7-placeholder-1.png" />
                  <?php } ?>
                  <div class="team-gallery__person-info">
                    <div class="team-gallery__name">
                    <?php if($team_name): 
                    echo esc_html($team_name); 
                    endif;
                    ?></div>
                    <div class="team-gallery__position">
                    <?php if($team_spec): 
                    echo esc_html($team_spec); 
                    endif;
                    ?></div>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
        <div id="contact-us" class="col-md-10 col-md-push-1">
          <div class="our-team__bottom-description text-center">
          <?php $team_text = get_theme_mod('team_text'); ?>
            <p><?php echo wpautop($team_text); ?></p>
          </div>
        </div>
        <div class="our-team__contact-btn text-center">
          <button id="btn-contact-us-team" data-toggle="modal" data-target="#contact-form" class="btn sa-btn">Contact Us</button>
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
      </div>
    </div>
    <?php } ?>