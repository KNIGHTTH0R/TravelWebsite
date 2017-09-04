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
					<div class="sanpham">
						<div class="sp_title">
							<h3>TIN TỨC</h3>
						</div><!-- ./sp_title -->
						<?php 
						$args = array(
						'post_type' => 'tin-tuc'
						 
							);
							
							$the_query = new WP_Query( $args ); ?>

							<?php 
							if ( $the_query->have_posts() )
							{
						         
								  while ( $the_query->have_posts() )
									{
									  $the_query->the_post(); 
									  $name=$the_query->post->post_title;
									  $id=$the_query->post->ID;
									  $ngay_dang=$the_query->post->post_date;
									  $img=do_shortcode('[types field="hinh-tin-tuc" id="$id" output="raw"]'); 
									$link=get_permalink($id);
									  
							  ?>
						<div class="tintuc">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs 6">
									<img src="<?php echo $img ?>" alt="" width="100%">
								</div>
								<div class="col-md-9 col-sm-9 col-xs 6">
									<?php echo $name ?><br>
									<a href="<?php echo $link ?>">Chi tiết >></a>
								</div>
							</div>
						</div><!-- ./tintuc -->
						<?php 	
							}	
							}		
						?>
					</div><!-- ./sanpham -->
				</div>
			</div>
		</div><!-- ./main -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>