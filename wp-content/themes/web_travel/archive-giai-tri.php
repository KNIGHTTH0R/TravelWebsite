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
					
					<div class="gt">
						<div class="sp_title">
							<h3>GIẢI TRÍ</h3>
						</div><!-- ./sp_title -->
						<div class="giaitri">
							<div class="row">
								<?php 
								     $taxonomy="loai-giai-tri";
									 $catergory = get_terms(
									 $taxonomy,
										  array(	
										  'orderby'    => 'custom_sort',									  	
										  'parent'=>0,
										  'order'    => 'desc',	
										  'hide_empty' => 0	
										  )	
									); 	
									 
									
									foreach($catergory as $cater)
									 {
									    $name=$cater->name;
									    $tem_child=get_term_children( $cater->term_id, $taxonomy );
										$link=get_term_link( $cater->term_id, $taxonomy);	
									?>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<h4><?php echo $name?></h4>
									<div class="thumbnail">
										<img src="<?php bloginfo('template_directory'); ?>/images/bg.jpg" alt="" width="100%">
										<div class="caption">
											<?php 
											$args = array(
											'post_type' => 'nha-hang'
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
												  $link=get_permalink($id);
										?>
										<li><a href="<?php echo $link ?>"><?php echo $name ?></a></li>
										<?php 	
											}	
											}			
										?>
										</ul>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div><!-- ./sanpham -->
				</div>
			</div>
		</div><!-- ./main -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>