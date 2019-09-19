<style type="text/css">
	.homenewdesign_section_10 .section_inner_middle {
	    width: 83%;
	    padding: 0;
	}

	.creambrown {
	    color: #b6995b;
	}


	.retorementboxsection {
	    width: 32.5%;
	    display: inline-table;
	    border-radius: 70px;
	    transition: 0.5s;
	}

	.retirementboxa {
	    box-shadow: 3px 1px 1px 1px #ececec;
	    margin-right: 21px;
	}

	.retorementboxsection:hover {
	    transform: scaleY(1.1);
	}
</style>
<div class="retirementboxes">
	<?php
		$latest_cpt = get_posts("post_type=post&numberposts=3");
		foreach ($latest_cpt as $key => $value) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), 'single-post-thumbnail' );
			$image_url = $image[0];
			$title = '';
			if( strlen($value->post_title) > 30 ){
				$title = substr($value->post_title, 0,30) . '...';
			} else {
				$title = $value->post_title;
			}
	?>
	
<div class="retorementboxsection">
<div class="retirementboxa bg-white">
<p><img src="<?php echo $image_url; ?>"></p>
<a href="/<?php echo $value->post_name?>" target="_blank" rel="noopener noreferrer"><p class="retireheading"><?php echo $title ; ?></p></a>
</div>
<div class="clear"></div>
</div>
<?php 	} ?>

</div>
<div class="clear"></div>

<!-- 
<div class="homenewdesign_section_10 bg-white">
<div class="_container">
<div class="container_inner_section">
<div class="section_inner_middle ">
<h2 class="homenewdesign_section_10 heading creambrown text-center paddingbottom1em">Retirement and Financial Resources </h2>
[epic_latest3_post]
</div>
</div>
</div> -->