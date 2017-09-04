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
							<h3>SỰ KIỆN</h3>
							<?php 
							$taxonomy="thang";
							$catergory = get_terms(
							  $taxonomy,
								  array(	
								  'orderby'    => 'custom_sort',	
								  'parent'=>0,
								  'order'    => 'desc',	
								  'hide_empty' =>0	
								  )	
							  ); 	
							 
							 
							 foreach($catergory as $cater)
							{
								   $link=get_term_link($cater->term_id,$taxonomy);
						   ?>
						</div><!-- ./sp_title -->
						<div class="sukien">
							<div class="row">
								<h4><?php echo $cater->name?></h4>
								<?php 
									// the query
									$args = array(
										'post_type' => 'su-kien',
										'tax_query' => array(
											array(
												'taxonomy' => 'thang',
												'field'    => 'slug',
												'terms'    => $cater->slug,
											),
										),
									);
									
									
									$the_query = new WP_Query( $args ); ?>

									<?php if ( $the_query->have_posts() )
										{
									?>
										<!-- pagination here -->

										<!-- the loop -->
										<?php while ( $the_query->have_posts() )
											{
											  $the_query->the_post(); 
											  $name=$the_query->post->post_title;
											  $id=$the_query->post->ID;
											  $ngay_dang=$the_query->post->post_date;
											  $img=do_shortcode('[types field="hinh-su-kien" id="$id" output="raw"]'); 
											  $link=get_permalink($id);
											  $gia=do_shortcode('[types field="gia" id="$id"]');
						
								?>
								<div class="col-md-4 col-sm-4 col-xs 4">
									<img src="<?php echo $img ?>" alt="" width="100%">
									<b><?php echo $name ?></b>
									<div class="ct">
										<a href="<?php echo $link ?>">Chi tiết >></a>
									</div>
								</div>
								<?php } wp_reset_postdata();}?>
								  
							</div>
							<?php }?>  
						</div><!-- ./sukien -->
						
					</div><!-- ./sanpham -->
				</div>
			</div>
		</div><!-- ./main -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>