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
            <div class="container-new">
               
                <div class="services ribon-box">
                   <div class="row">
                   	<div class="col-md-12">
                   		<h1 class="dark-blue-topics wow fadeInRight" data-wow-delay="0s"> Here's how I can help </h1>
                   		<p>By gaining a strong foundation to read and write  early in a child's development, your child will improve their ability to communicate, discover new things, helps develop the creative side to people, helps them learn to listen, and also improves a child's writing. I can help your child gain clarity and understanding by teaching them: </p>
                   	</div>
                   </div>
                   <!-- phonics -->
                   <div class="spacing"></div>
				  <div class="row">
					  <div class="col-xs-12 col-md-6">
					  		<img src="<?php echo get_template_directory_uri(); ?>/images/phonics-image.svg" alt="phonics-image"/> 
					  </div>
						<div class="col-md-offset-1 col-md-5">
							<h5 class="dark-blue-topic-headings">Phonics</h3>
							<img class="curveline" src="<?php echo get_template_directory_uri(); ?>/images/curveline.svg" alt="line" width="50px"/>
							<p>Phonics is the system of relationships between letters and sounds in a language.</p>
							<p>mple: Vowels, Consonants, letter recognition</p>
							<p>Children haveproblems in reading because they are not able to recognize the sounds of the letters in the words they read. Phonics helps improve a child's wordrecognition, spelling, and reading comprehension skills. </p>
						</div>
					</div>
                	
                	
                 	<!-- sightwords -->
                   <div class="spacing"></div>
                  	<div class="row">
						<div class="col-md-offset-1 col-md-5 col-md-push-6">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sight-words.svg" alt="sight-words-image"/> 

						</div>
						<div class=" col-md-6 col-md-pull-5">

							<h5 class="dark-blue-topic-headings">Sight Words</h5>
							<img class="curveline" src="<?php echo get_template_directory_uri(); ?>/images/curveline.svg" alt="line" width="50px"/>
<p>Some words are difficult to decode and therefore must be memorized and recognized by site. Words such as The, go, could, said, long, most, know make up approximately 65% of the words we see.</p>
							<p>Learning these words will help readers recognize words that have a more complex spelling rules and words that cant be sounded out, which help the child become aproficient reader and writer.</p>
						</div>
					</div>
                 	
                 	
                 	<!-- Spelling -->
                   <div class="spacing"></div>
                  	<div class="row">
						<div class="col-xs-12 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/images/spelling-image.svg" alt="spelling-image"/> 
						</div>
						<div class="col-md-offset-1 col-md-5">
							<h5 class="dark-blue-topic-headings">Spelling</h5>
							<img class="curveline" src="<?php echo get_template_directory_uri(); ?>/images/curveline.svg" alt="line" width="50px"/>
							<p>So what is the importance of learning to spell correctly? Cant we just use spell checker? Learning how to spell correctly helps the child make the connection between the letters and their sounds. </p>
							<p>Why is it important: You cant rely on technology alone to correct your mistakes. Learning the proper way to spell will increase your ability to communicate effectively, improve your vocabulary, prevents other readers from getting distracted as they read through your content, and is shown as a sign of intelligence. </p>
						</div>
					</div>
                 	
                 	<!-- Reading Comprehension -->
                   <div class="spacing"></div>
                   
                  	<div class="row">
						<div class="col-md-5">
							<h5 class="dark-blue-topic-headings">Reading Comprehension</h5>
							<img class="curveline" src="<?php echo get_template_directory_uri(); ?>/images/curveline.svg" alt="line" width="50px"/>
							<p>The importance of reading is to derive meaning. Imagine reading a book and not being able to understand the message its trying to convey, Frustrating right? Without thoroughly understanding information a students success throughout their education could be inhibited.  With a strong ability to derive meaning from words helps a child develop intellectually, socially, and emotionally.</p>
						</div>
						<div class="col-xs-12 col-md-offset-1 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/images/reading-comprehension.svg" alt="Reading"/> 
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