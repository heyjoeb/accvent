<div class="main-slider">
  <?php
    if( have_rows('slides', 'option') ):
      while ( have_rows('slides', 'option') ) : the_row();?>
        <div class="main-slider__item">
          <div class="main-slider__item-wrapper">
            <div class="main-slider__item-wrapper-text">
              <h2><?php the_sub_field('titulo_slide', 'option'); ?></h2>
              <p><?php the_sub_field('texto_slide', 'option'); ?></p>
              <?php 
              $link = get_sub_field('link_slide', 'option');
              if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
            <?php $image = get_sub_field('imagen_slide', 'option'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>
        </div>
    <?php
      endwhile;
    else :?>
    <?php
    endif;
  ?>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a Claro Dominicana</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>


  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a Claro Dominicana</p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
  <div class="main-slider__item">
    <div class="main-slider__item-wrapper">
      <div class="main-slider__item-wrapper-text">
        <h2>Training</h2>
        <p>Nexxt Infraestructura desarrolla presentación técnico-comercial a <span class="txt-bold">Claro Dominicana</span></p>
        <a href="" class="btn btn-white">continue reading</a>
      </div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/01.jpg" alt="">
    </div>
  </div>
</div><!-- /main-slider -->