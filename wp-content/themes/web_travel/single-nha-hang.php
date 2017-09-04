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
				<div class="col-md-9 col-sm-9 col-xs-8 ">
					<<div class="sanpham">
						<div class="sp_title">
							<h3><?php the_post(); the_title();?></h3>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star-empty"></span>
						</div><!-- ./sp_title -->
						<div id="carousel-id" class="carousel slide" data-ride="carousel">
							<?php 
							    $id=$post->ID;
								$img1=do_shortcode('[types field="hinh-nh-1" id="$id" output="raw"]'); 
								$img2=do_shortcode('[types field="hinh-nh-2" id="$id" output="raw"]'); 
								$img3=do_shortcode('[types field="hinh-nh-3" id="$id" output="raw"]'); 
								$link=get_permalink($id);

							?>
							<ol class="carousel-indicators">
								<li data-target="#carousel-id" data-slide-to="0" class="img active" style="background:url(<?php echo $img1 ?>);
    background-size: contain; "></li>
								<li data-target="#carousel-id" data-slide-to="1" class="img" style="
								background:url(<?php echo $img2 ?>); margin-left: 120px ; background-size: contain; "></li>
								<li data-target="#carousel-id" data-slide-to="2" class="img" style="background:url(<?php echo $img3 ?>); margin-left: 240px ;    background-size: contain; "></li>
							</ol>
							<div class="carousel-inner">
								<div class="item">
									<img src="<?php echo $img1 ?>" width="100%">
								</div>
								<div class="item">
									<img src="<?php echo $img2 ?>" width="100%">
								</div>
								<div class="item active">
									<img src="<?php echo $img3 ?>" width="100%">
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div><!-- .hinh -->
						<div class="sp_gt">
							<h5>Giới thiệu</h5>
							<?php 
							the_content();
						?>
						</div><!-- ./sp_gt -->
					</div><!-- ./sanpham -->
				</div>
			</div>
		</div><!-- ./main -->
		<div class="sp_lq" style="background: rgba(0,56,108,0.5); color: #fff;padding:10px 10px;margin-bottom: 100px">
			<h4>Nhà hàng khác</h4>
			<div class="row" >
				<?php 
					
					$args = array(
						'post_type' => 'nha-hang',
						'posts-per-page'=>3
					);
					
					$the_query = new WP_Query( $args ); 
					if ( $the_query->have_posts() )
					{
						while ( $the_query->have_posts() )
						{
						  	$the_query->the_post(); 
							  $name=$the_query->post->post_title;
							  $id=$the_query->post->ID;
							  $ngay_dang=$the_query->post->post_date;
							  $img=do_shortcode('[types field="hinh-nh-1" id="$id" output="raw"]'); 
							  $link=get_permalink($id);
				?>
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 hinh">
							
							<img src="<?php echo $img?>" alt="" width="100%" height="50%">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
						<h6><?php echo $name?></h6>
						<div class="clear"></div>
							<p style="padding-top: 10px">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</p>
						</div>
					</div>
				</div>
				<?php 
					} 
						wp_reset_postdata();
					}
				?>
			</div>
		</div><!-- ./sp_lq -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>