<div class="header">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
					
						<ul class="nav navbar-nav navbar-inverse navbar-right">
							<li><a href="<?php echo home_url();?>">Trang chủ</a></li>
							<li><a href="<?php echo get_post_type_archive_link("gioi-thieu");?>">Giới thiệu</a></li>
							<li><a href="<?php echo get_post_type_archive_link("lien-he"); ?>">Liên hệ</a></li>
							<li>
								<form class="navbar-form" role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search">
										<button type="submit" class="btn btn-default">
											<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										</button>
									</div>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>