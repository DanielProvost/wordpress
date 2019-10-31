<?php 
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );

if( $current_options['home_project_section_enabled'] == 'on' ) { 
?>
<!-- Portfolio Section -->
<section id="section" class="portfolio bg-color">
	<div class="container" id="portfolio" >
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<?php if($current_options['protfolio_tag_line']!='') {?>
					<h1 class="section-heading"><?php echo $current_options['protfolio_tag_line']; ?>
					</h1><?php } ?>
					<?php if($current_options['protfolio_description_tag']!='') {?>
					<p><?php echo esc_html($current_options['protfolio_description_tag']); ?></p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		
				
		<!-- Portfolio Item -->
	<div class="tab-content main-portfolio-section" id="myTabContent">
		<!-- Portfolio Item -->
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_one_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_one_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_one']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_one']); ?>" class="project_feature_img" />
							<?php } ?>
							<?php if($current_options['project_one_url']!='') {?>
							</a>
							<?php } ?>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<h4 class="entry-title">
                                    <a href="#openModal">Hanami</a>

                                    <div id="openModal" class="modalDialog">
                                        <div>
                                         <a href="#close" title="Close" class="close">Fermer</a>
                                          <h2 class='hanamiH2'>Hanami</h2>
                                              <div style ='display: flex; justify-content: center; flex-wrap:wrap;'>
                                                   <img src="wp-content/themes/busiprofChild/images/mayuko1.png" alt="" class="hanamiStyle" >
                                                  <img src="wp-content/themes/busiprofChild/images/mayuko2.png" alt="" class="hanamiStyle">
                                                   <img src="wp-content/themes/busiprofChild/images/mayuko3.png" alt="" class="hanamiStyle">

                                              </div>
                                       </div>
                                   </div>

								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_one']!='') {?>
								<p><?php echo esc_html($current_options['project_text_one']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_two_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_two_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_two']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_two']); ?>" class="project_feature_img" />
							<?php } ?>
							<?php if($current_options['project_two_url']!='') {?>
							</a>
							<?php } ?>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<h4 class="entry-title">
                                    <a href="#openModal1">Alumni</a>

                                    <div id="openModal1" class="modalDialog">
                                        <div>
                                            <a href="#close" title="Close" class="close">Fermer</a>
                                            <h2 class='hanamiH2'>Alumni</h2>
                                            <div style ='display: flex; justify-content: center; flex-wrap:wrap;'>

                                                <img src="wp-content/themes/busiprofChild/images/alumni.png" alt="" class="hanamiStyle"  >

                                            </div>
                                        </div>
                                    </div>

								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_two']!='') {?>
								<p><?php echo esc_html($current_options['project_text_two']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>	
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_three_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_three_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_three']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_three']); ?>" class="project_feature_img" />
							<?php } ?>
							<?php if($current_options['project_three_url']!='') {?>
							</a>
							<?php } ?>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								
								<h4 class="entry-title">
                                    <a href="#openModal2">Calendrier</a>

                                    <div id="openModal2" class="modalDialog">
                                        <div>
                                            <a href="#close" title="Close" class="close">Fermer</a>
                                            <h2 class='hanamiH2'>Calendrier Javascript</h2>
                                            <div style ='display: flex; justify-content: center; flex-wrap:wrap;'>

                                                <img src="wp-content/themes/busiprofChild/images/calendrier.png" alt="" class="hanamiStyle">

                                            </div>
                                        </div>
                                    </div>

								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_three']!='') {?>
								<p><?php echo esc_html($current_options['project_text_three']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_four_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_four_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_four']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_four']); ?>" class="project_feature_img" />
							<?php } ?>
							<?php if($current_options['project_four_url']!='') {?>
							</a>
							<?php } ?>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<h4 class="entry-title">
                                    <a href="#openModal3">Webagency</a>

                                    <div id="openModal3" class="modalDialog">
                                        <div>
                                            <a href="#close" title="Close" class="close">Fermer</a>
                                            <h2 class='hanamiH2'>Webagency</h2>
                                            <div style ='display: flex; justify-content: center; flex-wrap:wrap;'>

                                                <img src="wp-content/themes/busiprofChild/images/webagency1.png" alt="" class="hanamiStyle">
                                                <img src="wp-content/themes/busiprofChild/images/webagency2.png" alt="" class="hanamiStyle"">

                                            </div>
                                        </div>
                                    </div>

								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_four']!='') {?>
								<p><?php echo esc_html($current_options['project_text_four']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>
			</div>
	</div>
</section>
<!-- End of Portfolio Section -->
<div class="clearfix"></div>
<?php } ?>