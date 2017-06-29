<?php 
 if( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ) {
$heading = get_theme_mod('our_services_heading','');
$subheading = get_theme_mod('our_services_subheading','');
?>
<div class="service-wrapper about-background">
<!--<?php echo  oneline_lite_svg_enable(); ?>-->
<section id="about" class="svg_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" >
    <!--<div class="container">
        <div class="page-services">
        <?php if($heading!=''){ ?>
            <h2 class="main-heading wow fadeInRight" data-wow-delay="0s"><?php echo esc_html($heading); ?></h2>
            <?php } else { ?>
            <h2 class="main-heading wow fadeInRight" data-wow-delay="0s"><?php 
                    echo do_shortcode("[themehunk-customizer-oneline-lite did='111']"); ?></h2>
            <?php } ?>
            <?php if($subheading!=''){ ?>
            <p class="sub-heading wow fadeInRight" data-wow-delay="0s"><?php echo esc_html($subheading); ?></p>
            <?php } else { ?>
            <p class="sub-heading wow fadeInRight" data-wow-delay="0s"><?php echo do_shortcode("[themehunk-customizer-oneline-lite did='6']"); ?> </p>
        <?php } ?>
            <div class="service-block">
                <ul class="service-grid wow fadeInLeft" data-wow-delay="0s">
         <?php
            if ( is_active_sidebar( 'multi-service-widget' ) ){
                    dynamic_sidebar( 'multi-service-widget' );
                 } else {
                    echo do_shortcode("[themehunk-customizer-oneline-lite did='1']");
                    } ?>
                </ul>
            </div>
        </div>
    </div>-->
    
    <div class="container-new">
    	<div class="row">
    		<div class="col-md-12">
    			<h1 class="services-h1 wow fadeInRight" data-wow-delay="0s">Hi, my  name is Melina</h1>
    			
    			<p class="service-montserrat wow fadeInRight" data-wow-delay="0s">I help elementary school students become better readers so they can improve their test scores and overall comprehension of class material even if their confidence and self esteem is low.  </p>
    			
    			<p class="services-white wow fadeInRight" data-wow-delay="0s">I do that by working with students one on one or within a group setting and catering a unique lesson plan for each individual that achieves optimal growth.I believe in order to teach a child you must create a relationship first with the child, By doing this I am able to learn about them and their learning style which helps me cater lesson plans that build confidence and understanding of course material. </p>
   		 		
   		 		
				<button class="accordion"> <p class="services-more wow fadeInRight" data-wow-delay=".2s"><b>Learn More About Janes Jounrey to becoming a teacher  here >></b></p></button>
				<div class="panel">
 	 			<p class="services-white">My career as an educator began long before I started doing this professionally in the classroom setting. Being able to teach four children how to excel in the classroom and become the young successful adults they are today have been one of my greatest successes and joys in life.</p>
 	 			<p class="services-white">So much so, that I sought out ways to help other children and students who struggle with course material, low self-esteem, or confidence. It is a great pleasure of mine to help them gain academic success. This lead me to become a fulltime tutor where I can utilize my skills to help children achieve academic success in the early stages of development.</p>
 	 			<p class="services-white">My goal for each student is to build their confidence in the classroom. By investing my time in building a relationship with each student and learning their learning style,  I find that they [ your input here ].</p>
				</div>

   		 		
    		
    	</div>
    </div>
</section>
</div>
<div class="clearfix"></div>



<script>
	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
} 
</script>


<?php } ?>