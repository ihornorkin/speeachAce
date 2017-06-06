    <?php if(get_theme_mod('apps_disable') != 'on' ){ ?>  
    <div id="apps" class="apps">
      <div class="container">
        <div class="apps__top-description">
          <div class="section-heading">
          <?php $apps_title = get_theme_mod('apps_title'); ?>
            <h2><?php echo esc_html($apps_title); ?></h2>
            <div class="section-heading__duplicate">
              <span class="section-heading__heading"><?php echo esc_html($apps_title); ?></span>
            </div>
          </div>
        </div>
        <div class="apps__preview">
          <div class="preview">
            <div class="preview__items-wrapper">
          <!-- foreach -->
          <?php $apps_slides_count = get_theme_mod('apps_slides');
          for($i=1; $i<$apps_slides_count+1; $i++){
              $apps_slide = get_theme_mod('apps_slide'.$i);
              $apps_slide_text = get_theme_mod('apps_slide_text'.$i);
            ?>
            
              <div class="preview__item">
                <div class="preview__phone">
                  <img src="<?php echo esc_url($apps_slide); ?>" data-rjs="3" class="img-responsive" />
                </div>
                <div class="controls">
                  <div class="controls__wrapper">
                    <div class="controls__item">
                      <div class="controls__inner"></div>
                    </div>
                    <div class="controls__line"></div>
                  </div>
                </div>
                <div class="preview__descr">
                  <span><?php echo esc_html($apps_slide_text); ?></span>
                </div>
                <div class="preview__download text-center">
                <?php $apps_download = get_theme_mod('apps_download'.$i); ?>
                <?php $apps_download_link = get_theme_mod('apps_download_link'.$i); ?>
                  <a href="<?php echo esc_url($apps_download_link); ?>">
                    <img src="<?php echo esc_url($apps_download); ?>" data-rjs="3" />
                  </a>
                </div>
              </div>    
            <?php } ?>
            </div>
          </div>
        </div>
        <div class="apps__bottom-description">
        <!-- foreach -->
        <?php for($i=1; $i<$apps_slides_count+1; $i++){ 
          $apps_text = get_theme_mod('apps_text'.$i);
          $apps_subtext = get_theme_mod('apps_subtext'.$i);
        ?>  
          <div class="apps__description-item">
            <h3 class="text-center"><?php echo esc_html($apps_text); ?></h3>
            <div class="row">
              <div class="col-md-8 col-md-push-2">
                <div class="row">
                  <div class="col-md-6">
                    <p><?php echo esc_html($apps_subtext); ?></p>
                  </div>
                  <div class="col-md-6">
                    <div class="checked-list">
                  <?php
                  $apps_count = get_theme_mod('apps_count_lists'.$i);
                  for($k=1; $k<$apps_count+1; $k++){
                    $apps_list = get_theme_mod('apps_lists'.$i.$k);
                  ?>
                    <li><?php echo esc_html($apps_list); ?></li>
                  <?php } ?>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>    