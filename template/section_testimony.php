<?php 
if( shortcode_exists( 'themehunk-customizer-oneline-lite' ) ) {
    $heading = get_theme_mod('team_heading','');
    $subheading = get_theme_mod('team_subheading','');
?>

<div class="testimony">
	<div class="container-new">
		<div class="row">
			<div class="col-md-12">
				<h1> Testimonies</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
  						<div class="container-card text-center">
    							<img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt="quotation-mark" style="color: #fff;" width="50px"/>
    							<p class="testimony-p">Her Students know she cares deeply about them as individuals and they know she cares deeply about their success. Students have told me that Mrs. Matthews makes learning fun and she makes sense out of even the most difficult task.</p> 
						  <p><span><b>- Jo Ann Holman </b> | Elementary School Teacher</span></p>
  						</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php } ?>