<?php 
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );
if( $current_options['home_banner_strip_enabled'] == 'on' && $current_options['slider_head_title'] != '' ) { ?>
<div class="clearfix"></div>
<!-- Slider -->
<?php } if($current_options['slider_image']!='' ) { ?>
<div id="main" role="main">
	<section class="slider">
		<ul class="slides">
				<li>
                    <svg class='opacity' width="2200" height="400" version="1.1" xmlns="http://www.w3.org/2000/svg">

                        <circle cx="216" cy="197" r="33" fill="#FEEB31" />

                        <line x1="268" x2="437" y1="131" y2="316" stroke="#166D2F"  stroke-width="40" stroke-linecap="round"/>

                        <line x1="520" x2="627" y1="180" y2="80" stroke="black"  stroke-width="48"/>

                        <circle cx="585" cy="330" r="34" fill="#15A1DB"/>

                        <rect class='transformSVG' x='665' y='-320' width=115px height=115px fill="#E44C24" rx='30' ry='30'/>

                        <rect class='transformSVG' x='670' y='-580' width=85px height=85px fill="#2BA03C" rx='20' ry='20'/>

                        <rect class='transformSVG' x='900' y='-485' width=80px height=80px fill="#F59054" rx='20' ry='20'/>

                        <line x1="1050" x2="1229" y1="191" y2="376" stroke="#3EAC8F"  stroke-width="45" stroke-linecap="round"/>

                        <rect class='transformSVG' x='1040' y='-685' width=75px height=75px fill="#85E6C1"/>

                        <line x1="1485" x2="1669" y1="131" y2="316" stroke="#E44C24"  stroke-width="40" stroke-linecap="round"/>

                        <rect class='transformSVG' x='1030' y='-1010' width=140px height=140px fill="#006CB8"/>

                        <rect class='transformSVG' x='1260' y='-800' width=20px height=20px fill="#006CB8"/>

                        <rect class='transformSVG' x='1280' y='-1040' width=80px height=80px fill="#2BA03C" rx='25' ry='25'/>

                        <rect class='transformSVG' x='1420' y='-1150' width=110px height=110px fill="#E8C931" rx='30' ry='30'/>

                        <rect class='transformSVG' x='360' y='-200' width=20px height=20px fill="#85E6C1"/>

                    </svg>
<!--                  Bon bah c'est là-->
<!--					<img alt="img" src="--><?php //echo esc_url($current_options['slider_image']); ?><!--" />-->
					<div class="container">
						<div class="slide-caption">
							<?php if($current_options['caption_head']!='') {?>
							<h2>
                                <?php $listeTitre = explode(' ', $current_options['caption_head']); ?>
                                <span class="titrePage"><?php echo esc_html($listeTitre[0]); ?></span>
                                <br/>
                                <span class="titrePage"><?php echo esc_html($listeTitre[1]) .  ' ' . esc_html($listeTitre[2]); ?></span>
                            </h2>
							<?php } if($current_options['caption_text']!='') {?>
							<p><?php echo esc_html($current_options['caption_text']); ?></p>
							<?php } ?>	
							<?php if($current_options['readmore_text_link']!=''){ ?>
							<div><a href="<?php echo esc_url($current_options['readmore_text_link']); ?>" 
							<?php if($current_options['readmore_target'] !=false) { ?>
							target="_blank" <?php } ?> class="flex-btn"><?php echo esc_html($current_options['readmore_text']); ?></a>
							</div>
							<?php }?>
						</div>		
					</div>
				</li>
			</ul>		
	</section>
</div>
<!-- End of Slider -->
<div class="clearfix"></div>
<?php } else{
	
	?>
<?php
} if( $current_options['home_banner_strip_enabled'] == 'on') {?>
<section class="header-title"><h2><?php echo esc_html($current_options['slider_head_title']); ?> </h2></section>
<div class="clearfix"></div>
<?php } ?>