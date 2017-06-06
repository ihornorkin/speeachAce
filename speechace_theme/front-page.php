<?php get_header(); ?>
        <?php if(get_theme_mod("top_disable") != "on" ){ ?>
        <div class="intro-section__img-map">
        <?php $top_image = get_theme_mod("top_image"); ?>
          <img src="<?php echo esc_url($top_image)?>" data-rjs="3" class="img-responsive center-block" />
        </div>
        <div class="intro-section__description text-center">
        <?php $top_title = get_theme_mod("top_title"); ?>
          <h1><?php echo esc_html($top_title); ?></h1>
        <?php $top_subtitle = get_theme_mod("top_subtitle"); ?>
          <h2><?php echo esc_html($top_subtitle); ?></h2>
        </div>
        <div class="intro-section__buttons text-center clearfix">
          <?php $top_btn1 = get_theme_mod("top_btn1"); ?>
          <?php $top_btn2 = get_theme_mod("top_btn2"); ?>
          <?php $top_btn1_url = get_theme_mod("top_btn1_url"); ?>
          <?php $top_btn2_url = get_theme_mod("top_btn2_url"); ?>
          <a href="<?php echo esc_html($top_btn1_url); ?>"><button class="btn sa-btn"><?php echo esc_html($top_btn1); ?></button></a>
          <a href="<?php echo esc_html($top_btn2_url); ?>"><button class="btn sa-btn"><?php echo esc_html($top_btn2); ?></button></a>
        </div>
        <?php } ?>
      </div>
    </div>

    <?php

    $sections = array(
       'wwd' => get_theme_mod('wwd_order'),
       'api' => get_theme_mod('sa_order'),
       'apps' => get_theme_mod('apps_order'),
       'lms'  => get_theme_mod('lms_order'),
       'taub'  => get_theme_mod('taub_order'),
       'team'  => get_theme_mod('team_order')
    );

    $sections = array_flip($sections);
    ksort($sections);

    foreach ($sections as $key => $val){

    get_template_part('template-parts/front', $val);

    }
    ?>

<?php get_footer(); ?>
