<div class="menu_left">
	<ul class="nav">
			<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo_1.png" alt="" width="100%" height="100%" style="background: #00386c"></a >
			<li class="dropdown">
				<a href="sanpham.html" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plane"> </span> Khách sạn và du lịch	<span class="glyphicon glyphicon-play"></span></a>
				<ul class="dropdown-menu">
					<?php 
					     $taxonomy="danh-muc";
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
					<li><a href="<?php echo $link?>"><?php echo $name?></a></li>
					<?php 
						}
					?>
				</ul>
			</li>
			<li class="dropdown">
				<a href="sanpham.html" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plane"> </span> Nhà hàng	<span class="glyphicon glyphicon-play"></span></a>
				<ul class="dropdown-menu">
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
			</li>
			<li><a href="<?php echo get_post_type_archive_link("giai-tri");?>"><span class="glyphicon glyphicon-plane"> </span> Giải trí</a></li>
			<li><a href="<?php echo get_post_type_archive_link("tin-tuc");?>"><span class="glyphicon glyphicon-plane"> </span> Tin tức</a></li>
			<li><a href="<?php echo get_post_type_archive_link("su-kien");?>"><span class="glyphicon glyphicon-plane"> </span> Sự kiện</a></li>
		</ul>
</div>