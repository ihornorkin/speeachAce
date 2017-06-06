    <?php if(get_theme_mod('lms_disable') != 'on' ){ ?>      
    <div id="lms" class="management-system">
      <div class="container">
        <div class="management-system__top-description">
          <div class="section-heading">
          <?php $lms_title = get_theme_mod('lms_title'); ?>
            <h2><?php echo esc_html($lms_title); ?></h2>
            <div class="section-heading__duplicate">
              <span class="section-heading__heading"><?php echo esc_html($lms_title); ?></span>
            </div>
          </div>
          <?php $lms_subtitle = get_theme_mod('lms_subtitle'); ?>
          <h3 class="text-center"><?php echo esc_html($lms_subtitle); ?></h3>
        </div>
        <div class="management-system__logos">
          <div class="col-md-10 col-md-push-1">
              <?php 
              $lms_logos = get_theme_mod('lms_logos');
              $lms_logos = explode(',', $lms_logos);
              ?>
            <div class="management-logos">
            <?php
              foreach ($lms_logos as $lms_logos_single) {
                $image = wp_get_attachment_image_src( $lms_logos_single, 'full');
                ?>
                <div class="col-md-2">
                  <img src="<?php echo esc_url( $image[0] ); ?>" data-rjs="3" />
                </div>
                <?php
              }
              ?>             
            </div>
          </div>
        </div>
        <div class="management-system__main">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <?php $lms_video = get_theme_mod('lms_video'); ?>
                <?php echo wp_oembed_get($lms_video) ; ?>
              </div>
              <div class="col-md-6">
                <div class="checked-list">
                <?php $lms_list1 = get_theme_mod('lms_list1'); ?>
                <?php $lms_list2 = get_theme_mod('lms_list2'); ?>
                <?php $lms_list3 = get_theme_mod('lms_list3'); ?>
                  <li><?php echo esc_html($lms_list1); ?></li>
                  <li><?php echo esc_html($lms_list2); ?></li>
                  <li><?php echo esc_html($lms_list3); ?></li>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="management-system__btn-group">
          <?php $lms_btn1 = get_theme_mod('lms_btn1'); ?>
          <?php $lms_btn2 = get_theme_mod('lms_btn2'); ?>
          <?php $lms_btn3 = get_theme_mod('lms_btn3'); ?>
          <?php $lms_btn2_url = get_theme_mod('lms_btn2_url'); ?>                  
          <button id="btn-contact-us-lms" data-toggle="modal" data-target="#contact-form" class="btn sa-btn"><?php echo esc_html($lms_btn1); ?></button>
          <a href="<?php echo esc_html($lms_btn2_url); ?>"><button class="btn sa-btn"><?php echo esc_html($lms_btn2); ?></button></a>
          <button id="btn-contact-us-lms" data-toggle="modal" data-target="#contact-form-lms" class="btn sa-btn"><?php echo esc_html($lms_btn3); ?></button>        
        </div>

      </div>
        <div id="contact-form-lms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal fade">
          <div role="document" class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                  <i class="icon-cancel"></i>
                </button>
                <div class="section-heading">
                  <h2>Contact Us LMS!</h2>
                  <div class="section-heading__duplicate">
                    <span class="section-heading__heading">Contact Us LMS!</span>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                   <?php
                    $lms_contact = get_theme_mod('lms_contact');
                    echo do_shortcode($lms_contact);
                   ?>
              </div>
            </div>
          </div>
        </div>                
    </div>
    <?php } ?>