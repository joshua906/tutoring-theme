<!---RIBBON SECTION START- -->
<?php
 if( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ) {
$heading = get_theme_mod('ribbon_heading','');
$ribbon_button_text = get_theme_mod('ribbon_button_text','');
?>
<div class="ribbon-wrapper">
<!--<?php echo  oneline_lite_svg_enable(); ?>-->
<section id="ribbon" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" >
<?php if(get_theme_mod('ribbon_bg_options')!==''){?>
<video  data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" autoplay="autoplay" loop="loop" id="bgvid"  poster="<?php echo esc_url(get_theme_mod('ribbon_bg_image')); ?>">
</video>
<?php } ?>
            <div class="container">
               
                <div class="services ribon-box ">
                   <div class="row">
                   	<div class="col-md-12">
                   		<h1 class="dark-blue wow fadeInRight" data-wow-delay="0s"> Here's how I can help </h1>
                   		<p>By gaining a strong foundation to read and write  early in a child's development, your child will improve their ability to communicate, discover new things, helps develop the creative side to people, helps them learn to listen, and also improves a child's writing. I can help your child gain clarity and understanding by teaching them: </p>
                   	</div>
                   </div>
                   
                    <!--<div class="ribbon-content wow fadeInLeft" data-wow-delay="0s">
                        <?php if($heading!=''){ ?>
                        <h3 class="main-heading"><?php echo esc_html($heading); ?></h3>
                        <?php } else { ?>
                        <h3 class="main-heading">
                        <?php 
                             echo do_shortcode("[themehunk-customizer-oneline-lite did='5']");
                        ?>
                        </h3>
                        <?php } ?>
                    </div>
                       <?php if($ribbon_button_text!=''){ ?>
                        <div class="ribbon-button wow fadeInLeft" data-wow-delay="0s">
                         <a class="button header-button left-button" href="<?php echo esc_url(get_theme_mod('ribbon_button_link','#')); ?>"><?php echo esc_html($ribbon_button_text); ?></a>
                         </div>
                    <?php } else { ?>
                      <div class="ribbon-button wow fadeInLeft" data-wow-delay="0s">
                        <a class="button header-button left-button" href="#"><?php _e('Start here','oneline-lite'); ?></a>
                    </div>
                    <?php } ?>
                    -->
                    
                </div>
            </div>
            
            
        </section>
</div>
<?php } ?>