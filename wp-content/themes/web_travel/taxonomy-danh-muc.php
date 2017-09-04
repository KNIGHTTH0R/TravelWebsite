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
				<div class="col-md-9 col-sm-9 col-xs-8">
					<div id="overlay" class="overlay"></div>
					<div class="sanpham">
						<div class="sukien">
							<div class="row">
								<h4>Khách sạn và du lịch</h4>
								<?php 
									$cater = get_queried_object();					     
									$taxonomy=$cater->taxonomy;
									$tendm=$cater->name;
									$slug=$cater->slug;
									 
									$args = array(
										'post_type' => 'du-lich',
										'tax_query' => array(
											array(
												'taxonomy' => 'danh-muc',
												'field'    => 'slug',
												'terms'    => $slug,
											),
										),
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
											  $img=do_shortcode('[types field="hinh-1" id="$id" output="raw"]'); 
											  $link=get_permalink($id);
								?>
							
								<div class="col-md-4 col-sm-4 col-xs 4" style="margin-bottom: 10px">
									<img src="<?php echo $img?>" alt="" width="100%">
									<b><?php echo $name?></b>
									<div class="ct">
										<a href="<?php echo $link?>">Chi tiết >></a>
									</div>
								</div>
								<?php 
									} 
										wp_reset_postdata();
									}
								?>
							</div>
						</div><!-- ./sukien -->
					</div>
				</div>
			</div>
		</div><!-- ./main -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>