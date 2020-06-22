<?php include('layout/head.php');?>
<?php include('layout/header.php');?>
<body>
<section class="slider">
	<div class="smart_slider">
		<div class="slider_box">
			<img src="<?php echo base_url('application/assests/medicare/media/ban1.jpg');?>" alt="website" />
		</div>
		<div class="slider_box">
			<img src="<?php echo base_url('application/assests/medicare/media/ban1.jpg');?>" alt="website" />
		</div>
		<div class="slider_box">
			<img src="<?php echo base_url('application/assests/medicare/media/ban1.jpg');?>" alt="website" />
		</div>
	</div>
</section>

<?php foreach ($final_data as $data) { ?>
<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>

				<div class="category_head">
					<h4><?php echo $data['cat_name'];?></h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Pneumonia</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<?php foreach ($data['single_disease'] as $single_disease) { ?>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4><?php echo $single_disease['disease_name'];?></h4>
								<p><?php echo strtolower(Strip_tags(substr($single_disease['disease_article'],0,250))).".."; ?></p>
							</div>
							<div class="category_box_action">
								<a href="<?php echo base_url('disease/detail/'.$single_disease['disease_id']); ?>">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Strep Throat</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">strep throat</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>strep throat</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>strep throat</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>strep throat</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>strep throat</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>strep throat</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="google_addsans">
	<div class="container">
		<div class="google_adds">
			<h1>For Google Adsense code</h1>
		</div>
	</div>
</section>

<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Parasitic</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Parasitic</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Parasitic</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Parasitic</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Parasitic</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Parasitic</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Parasitic</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Diseases</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Diseases</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Diseases</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Diseases</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Diseases</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Diseases</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Diseases</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Lupus</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Lupus</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Lupus</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Lupus</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Lupus</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Lupus</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Lupus</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="google_addsans">
	<div class="container">
		<div class="google_adds">
			<h1>For Google Adsense code</h1>
		</div>
	</div>
</section>

<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Psoriasis</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Psoriasis</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Psoriasis</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Psoriasis</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Psoriasis</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Psoriasis</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Psoriasis</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Herpes</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Herpes</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Herpes</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Herpes</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Herpes</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Herpes</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Herpes</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="category">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Chlamydia</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="slider_nav">
					<div class="left_slider_text">Chlamydia</div>
					<div class="right_slider_text"><a href="#">View All</a></div>
				</div>
				<div class="category_slider">
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Chlamydia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Chlamydia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Chlamydia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Chlamydia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
					<div class="category_box">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Chlamydia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="google_addsans">
	<div class="container">
		<div class="google_adds">
			<h1>For Google Adsense code</h1>
		</div>
	</div>
</section>

<section class="welcome_section">
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<div class="google_adds"></div>
			</div>
			<div class="col-md-4">
				<div class="welcome_section_img">
					<img src="<?php echo base_url('application/assests/medicare/media/image1.png');?>" alt="Website" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="welcome_section_content">
					<div class="welcome_sub_head">
						<h4>Welcome to Medhealth</h4>
					</div>
					<div class="welcome_body">
						<h4>This is Photoshop's version Lorem Ipsum. Proin gravidapsum version Lorem Ipsum.</h4>
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						<p> a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
					</div>
				</div>
			</div>
			<div class="col-md-1">
				<div class="google_adds"></div>
			</div>
		</div>
	</div>
</section>

<section class="welcome_section">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-lg-5">
				<div class="welcome_section_content">
					<div class="welcome_sub_head">
						<h4>Welcome to Medhealth</h4>
					</div>
					<div class="welcome_body">
						<h4>This is Photoshop's version Lorem Ipsum. Proin gravidapsum version Lorem Ipsum.</h4>
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus This is Photoshop's version  of Lorem Ipsum.</p>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-lg-7">
				<div class="welcome_extra_block">
					<div class="welcome_extra_left_img">
						<div class="welcome_video_block">
							<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Website" width="100%" />
							<span><label><i class="fas fa-play"></i>&nbsp;Watch Video!</label></span>
						</div>
					</div>
					<div class="welcome_extra_right">
						<div class="checked_pregraph">
							<h4>pneumonia</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
						</div>
						<div class="checked_pregraph">
							<h4>pneumonia</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
						</div>
						<div class="checked_pregraph">
							<h4>pneumonia</h4>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our_team">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_sub_head">
					<h4>Category</h4>
				</div>
				<div class="category_head">
					<h4>Strep throat</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-team-container">
					<div class="our-team-box-img">
						<img src="<?php echo base_url('application/assests/medicare/media/image3.png');?>" alt="Website" />
					</div>
					<div class="our-team-box-content">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Pneumonia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-team-container">
					<div class="our-team-box-img">
						<img src="<?php echo base_url('application/assests/medicare/media/image3.png');?>" alt="Website" />
					</div>
					<div class="our-team-box-content">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Pneumonia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="our-team-container">
					<div class="our-team-box-img">
						<img src="<?php echo base_url('application/assests/medicare/media/image3.png');?>" alt="Website" />
					</div>
					<div class="our-team-box-content">
						<div class="category_box_inner">
							<div class="category_box_img">
								<img src="<?php echo base_url('application/assests/medicare/media/icon1.png');?>" alt="Website" />
							</div>
							<div class="category_box_dis">
								<h4>Pneumonia</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							<div class="category_box_action">
								<a href="#">Read more<span class="category_box_action_icon"><i class="fas fa-angle-right"></i></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our_team">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="category_head">
					<h4>Latest Articles</h4>
					<span class="custom_border"></span>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest_block">
					<div class="latest_block_img">
						<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Website" />
					</div>
					<div class="latest_block_content">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<div class="action_btn">
							<a href="#">More<span class="action_btn_icon"><i class="fas fa-plus"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest_block">
					<div class="latest_block_img">
						<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Website" />
					</div>
					<div class="latest_block_content">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<div class="action_btn">
							<a href="#">More<span class="action_btn_icon"><i class="fas fa-plus"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest_block">
					<div class="latest_block_img">
						<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Website" />
					</div>
					<div class="latest_block_content">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<div class="action_btn">
							<a href="#">More<span class="action_btn_icon"><i class="fas fa-plus"></i></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="latest_block">
					<div class="latest_block_img">
						<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Website" />
					</div>
					<div class="latest_block_content">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<div class="action_btn">
							<a href="#">More<span class="action_btn_icon"><i class="fas fa-plus"></i></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="google_addsans">
	<div class="container">
		<div class="google_adds">
			<h1>For Google Adsense code</h1>
		</div>
	</div>
</section>
<?php include('layout/footer.php');?>