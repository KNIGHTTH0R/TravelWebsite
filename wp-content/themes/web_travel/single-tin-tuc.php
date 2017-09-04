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
					<div class="sanpham">
						<div class="tintuc">
							<div class="row">
							<h4><?php the_post(); the_title() ?></h4>
								<span class="pull-right" style="color: #000"><?php the_post(); the_date() ?></span>
								<?php the_post(); the_content() ?>
							</div>
						</div><!-- ./tintuc -->
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