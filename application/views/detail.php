<?php include('layout/head.php');?>
<body>
<?php include('layout/header.php');?>
<!-- detail page  -->

<div class="detail_page">
	<div class="container">
		<div class="detail_page_title">
			<h4 style="text-transform: capitalize;"><?php echo $disease_detail[0]['disease_name'];?></h4>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-8">
			
				<div class="detail_page_extra">
					<!-- <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p> -->
					<p><?php //echo( $v["title"]);?></p>
				</div>
				<div class="detail_post">
					<!-- <img src="<?php echo base_url('application/assests/medicare/media/post_banner.png');?>" alt="Website Post" /> -->
				
		        
		 
					<div class="detail_post_content">
						<p><?php 
						$end = strpos($disease_article,"span id=\"References\">References</span>");
						// var_dump($end);
						echo substr($disease_article,0,$end-1);?></p>
						<!-- <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						<p>a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
						<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						<p>a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p> -->
					</div>
				</div>
<!-- 				<div class="detail_post">
					<img src="<?php echo base_url('application/assests/medicare/media/post_banner.png');?>" alt="Website Post" />
					<div class="detail_post_content">
						<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						<p>a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
						<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						<p>a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
					</div>
				</div>-->
			</div> 
			<div class="col-lg-4 col-md-12">
				<div class="detail_post_right">
					<h4>Google Adsense</h4>
					<div class="detail_right_box">
						<div class="detail_right_box_img">
							<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Detail page" />
						</div>
						<div class="detail_right_contant">
							<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						</div>
					</div>
					<div class="detail_right_box">
						<div class="detail_right_box_img">
							<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Detail page" />
						</div>
						<div class="detail_right_contant">
							<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						</div>
					</div>
					<div class="detail_right_box">
						<div class="detail_right_box_img">
							<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Detail page" />
						</div>
						<div class="detail_right_contant">
							<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						</div>
					</div>
					<div class="detail_right_box">
						<div class="detail_right_box_img">
							<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Detail page" />
						</div>
						<div class="detail_right_contant">
							<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						</div>
					</div>
					<div class="detail_right_box">
						<div class="detail_right_box_img">
							<img src="<?php echo base_url('application/assests/medicare/media/image2.png');?>" alt="Detail page" />
						</div>
						<div class="detail_right_contant">
							<p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- detail page  -->

<?php include('layout/footer.php');?>