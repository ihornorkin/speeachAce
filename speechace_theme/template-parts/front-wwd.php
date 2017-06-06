    <?php if(get_theme_mod('wwd_disable') != 'on' ){ ?>
    <div id="what-we-do" class="what-we-do">
      <div class="container">
        <div class="what-we-do__top-description text-center">
          <div class="section-heading">
            <?php $wwd_title = get_theme_mod('wwd_title'); ?>
            <h2><?php echo esc_html($wwd_title); ?></h2>
            <div class="section-heading__duplicate">
              <span class="section-heading__heading"><?php echo esc_html($wwd_title); ?></span>
            </div>
          </div>
          <?php $wwd_subtitle = get_theme_mod('wwd_subtitle'); ?>
          <h3><?php echo esc_html($wwd_subtitle); ?></h3>
        </div>
        <div class="what-we-do__images">
          <div class="img-slider">
          <?php $wwd_image = get_theme_mod('wwd_image');
              if ($wwd_image){ ?> 
            <div class="img-slider__item">
              <img src="<?php echo esc_url($wwd_image)?>" class="img-responsive" />
            </div>
            <?php } ?>
            <?php $wwd_image2 = get_theme_mod('wwd_image2');
              if ($wwd_image){ ?> 
            <div class="img-slider__item">
              <img src="<?php echo esc_url($wwd_image2)?>" class="img-responsive" />
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-8 col-md-push-2">
          <div class="what-we-do__bottom-description text-center">
            <?php $wwd_text = get_theme_mod('wwd_text'); ?>
            <p><?php echo esc_html($wwd_text); ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>