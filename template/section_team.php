<!-- TEAM SECTION START -->
<?php 
if( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ) {
    $heading = get_theme_mod('team_heading','');
    $subheading = get_theme_mod('team_subheading','');
?>
<div class="the-work">
<div class="container-new">
	<div class="row">
		<div class="col-md-12">
			<h1>My process for your childs success</h1>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h5>1. Discovery</h4>
			<p>Finding out where the student is in their progression</p>
		</div>
		<div class="col-md-6">
			<h5>2. Relationship</h4>
			<p>Developing a relationship with the student and getting to know their learning style </p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h5>3. Lesson Plan</h4>
			<p>Finding out where the student is in their progression</p>
		</div>
		<div class="col-md-6">
			<h5>4. Educate</h4>
			<p>Developing a relationship with the student and getting to know their learning style </p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
	    <img src="<?php echo get_template_directory_uri(); ?>/images/process-image.svg" alt="process-image"/> 
	    </div>
	</div>
</div>
</div>
<!--<div class="team-wrapper">
<section id="team" class="svg_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">
    <div class="container">
        <div class="page-team">
               <?php if($heading!=''){ ?>
            <h2 class="main-heading wow fadeInLeft" data-wow-delay="0s"><?php echo esc_html($heading); ?></h2>
            <?php } else { ?>
            <h2 class="main-heading wow fadeInLeft" data-wow-delay="0s"><?php echo do_shortcode("[themehunk-customizer-oneline-lite did='222']"); ?></h2>
            <?php } ?>
            <?php if($subheading!=''){ ?>
            <p class="sub-heading wow fadeInLeft" data-wow-delay="0s"><?php echo esc_html($subheading); ?></p>
            <?php } else { ?>
            <p class="sub-heading wow fadeInLeft" data-wow-delay="0s"><?php echo do_shortcode("[themehunk-customizer-oneline-lite did='6']"); ?> </p>
        <?php } ?>
            <div class="team-block">
                <ul class="team-grid wow fadeInRight" data-wow-delay="0s">
                <?php
            if ( is_active_sidebar( 'multi-team-widget' ) ){
                    dynamic_sidebar( 'multi-team-widget' );
                 } else {
                 echo do_shortcode("[themehunk-customizer-oneline-lite did='2']");
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
</div>-->
<div class="clearfix"></div>
<?php } ?>