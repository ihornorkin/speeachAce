    <?php if(get_theme_mod('taub_disable') != 'on' ){ ?>    
    <div id="customers" class="trusted">
      <div class="container">
        <div class="trusted__top-description text-center">
          <div class="section-heading">
            <?php $taub_title = get_theme_mod('taub_title'); ?>
            <h2><?php echo esc_html($taub_title); ?></h2>
            <div class="section-heading__duplicate">
              <span class="section-heading__heading"><?php echo esc_html($taub_title); ?></span>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-md-push-1">
          <div class="trusted__cards">
          <?php 
              $taub_logos = get_theme_mod('taub_logos');
              $taub_logos = explode(',', $taub_logos);

              foreach ($taub_logos as $taub_logos_single) {
                $image = wp_get_attachment_image_src( $taub_logos_single, 'full');
                ?>
                <div class="trusted-card">  
                  <div class="trusted-card__wrapper">
                      <img src="<?php echo esc_url( $image[0] ); ?>" data-rjs="3" />
                  </div>
                </div>
                <?php } ?>                    
          </div>
          <div class="trusted__quotes">
            <div class="quotes">
              <?php
              $args = array(
              'numberposts' => -1,
              'post_type'   => 'replies',
              'suppress_filters' => true,
              );
              $posts = get_posts( $args );
              foreach($posts as $post){ setup_postdata($post);
              ?>            
              <div class="quotes__item">
                <div class="quote-card">
                  <div class="quote-card__wrapper">
                    <blockquote><?php the_content(); ?></blockquote>
                    <span class="quote-card__name"><?php the_title(); ?></span>
                  </div>
                </div>
              </div>
              <?php
              }
              wp_reset_postdata();
              ?>                                       
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>