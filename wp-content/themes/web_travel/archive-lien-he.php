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
					<?php 
	
					if(isset($_REQUEST["bt_gui"]))
					{
						$ten=$_REQUEST["txt-name"];
						$email=$_REQUEST["txt-email"];
						$sdt=$_REQUEST["txt-tel"];
						$noidung=$_REQUEST["txt-message"];

						$today = date("j/n/Y"); 
						$html="<b>Người gửi :</b> :".$ten."<br/>";
						$html.="<b>Ngày gửi :</b> :".$today."<br/>";	
						$html.="<b>Số điện thoại :</b> :".$sdt."<br/>";	
						$html.="<b>Email :</b> ".$email."<br/>";
						$html.="<b>Nội dung :</b> ".$noidung."<br/>";
						
						$my_post = array(
							'post_title'    => 'Liên hệ',
							'post_content'  => $html,
							'post_status'   => 'private', 
							'post_type'     => 'kh-lien-he',
						);
						wp_insert_post( $my_post );
						
						$headers = 'From : '. $email . "\r\n" .
						'Reply-To: '. $email . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
						$headers .= 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";	
						wp_mail($mail_nhan,"Thông tin liên hệ từ website ", $html,$headers);		 
						wp_redirect(get_permalink($page_lien_he) );
					}

					 ?>
			
					<div class="sanpham">
						<div class="sp_title">
							<h3>LIÊN HỆ</h3>
						</div><!-- ./sp_title -->
						<div class="lh_dc">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<p>
										<?php the_post();the_content() ?>
									</p>
								</div>
								<div class="col-md-6 col-sm-6 col-xs 6">
									<img src="<?php bloginfo('template_directory'); ?>/images/bd.png" alt="" width="100%">
								</div>
							</div>
						</div><!-- ./tintuc -->
						<div class="lienhe">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6 lh">
									<label for="">Họ tên</label>
									<input type="text" placeholder="Nhập họ tên" name="txt-name">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 lh">
									<label for="">Email</label>
									<input type="email" placeholder="Nhập Email" name="txt-email">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 lh">
									<label for="">Số điện thoại</label>
									<input type="number" placeholder="Nhập SDT" name="txt-tel">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 lh">
									<label for="">Nội dung</label>
									<textarea name="NoiDung" placeholder="Nội dung" name="txt-message"></textarea>
								</div>
								<div class="clear"></div>
								<div class="col-md-6 col-sm-6 col-xs-6 pull-right lh">
									<input type="submit" value="Gửi" class="pull-right" name="bt_gui">
									<input type="reset" value="Hủy bỏ" class="pull-right">
								</div>
							</div>
						</div><!-- ./tintuc -->
					</div><!-- ./sanpham -->
				</div>
			</div>
		</div><!-- ./main -->
	</div><!-- ./conatiner -->
	<?php include("footer.php") ?>
</body>
</html>