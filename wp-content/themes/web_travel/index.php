<?php include("header.php") ?>
<body>
	<div class="container">
	<?php include("module/mod_head.php") ?>
		<!-- ./header -->
		<div class="clear"></div>
		<div class="main">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-4">
					<?php include("module/menu.php") ?>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-8 vd">
					<div id="overlay" class="overlay"></div>
					<div class="row" id="vd">
						<h4>Tận hưởng bản sắc Việt</h4>
						<?php 
						$args = array(
						'post_type' => 'video'
						 
							);
							
							$the_query = new WP_Query( $args ); ?>

							<?php 
							if ( $the_query->have_posts() )
							{
						         $dem=-1;
								  while ( $the_query->have_posts() )
									{
									  $the_query->the_post(); 
									  $name=$the_query->post->post_title;
									  $id=$the_query->post->ID;
									  $ngay_dang=$the_query->post->post_date;
									  $dem++;
									  $img=do_shortcode('[types field="hinh-video" id="$id" output="raw"]'); 
									  $video=do_shortcode('[types field="video" id="$id" output="raw"]'); 
							  
							  ?>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<div id="video<?php echo $dem ?>" class="loadVideo">
								<div class="hinhanh">
									<img  src="<?php echo $img ?>" style="width: 100%" />
									<span class="glyphicon glyphicon-play-circle bg_img"></span>
								</div>
							</div>
						    <video id="video<?php echo $dem ?>player" controls class="videoPlayer">
						          <source src="<?php echo $video ?>" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
						          <source src="https://videoUrl/file.webm" type='video/webm; codecs="vp8, vorbis"' />
						          Video not supported.
						    </video>
						</div>
						<?php }	}	?>
						
					</div>
				</div>
			</div>
		</div><!-- ./main -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>