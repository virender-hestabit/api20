<footer class="footer_container">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-6">
				<div class="footer_list footer_head footer_blocks">
					<h3>quick Links</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="footer_list footer_head footer_blocks">
					<h3>Our Top Categories</h3>
					<ul>
						<li><a href="#">parasitic</a></li>
						<li><a href="#">diseases</a></li>
						<li><a href="#">lupus</a></li>
						<li><a href="#">psoriasis</a></li>
						<li><a href="#">herpes</a></li>
						<li><a href="#">chlamydia</a></li>
						<li><a href="#">anemi</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3  col-6">
				<div class="footer_list footer_head footer_blocks">
					<h3>Help</h3>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="footer_follow_us footer_head footer_blocks">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="footer_contact_us footer_head footer_blocks">
					<h3>Contact Us</h3>
					<ul>
						<li><a href="#"><i class="fas fa-mobile"></i><span class="footer_contact_us_text">+91 4444444444</span></a></li>
						<li><a href="#"><i class="fas fa-envelope"></i><span class="footer_contact_us_text">mail@gmail.com</span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<div class="copyright">
					<p> &copy; company.Name2020. All right reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>


<script>
$(document).ready(function() {
  $('.sidebar_crousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    navText: [
        '<div class="nav_right"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
        '<div class="nav_left"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
    ],
    // navContainer: '.main-content .custom-nav',
	loop: false,
    responsiveClass: true,
    responsive: {
      320: {
        items: 1,
      }
    }
  })
});
// $('.Search_toggle').click(function(){
// });
// $('.heighlight').click(function(){
// 	$('.heighlight_dropdown').toggleClass('heighlight_dropdown_active');
// });
</script>
<script type="text/javascript" src="<?php echo base_url('application/assests/medicare/assets/js/all.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assests/medicare/assets/js/slick.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assests/medicare/assets/js/bootstrap.bundle.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assests/medicare/assets/js/bootstrap.min.js');?>"></script>
<!-- <script type="text/javascript" src="<?php //echo base_url('application/assests/medicare/assets/js/owl.carousel.min.js');?>"></script> -->
<script type="text/javascript">
$('.toogle_menu').click(function(){
	$('.top_mob_header_search').slideToggle();
	$('.navbars').slideToggle();
});

$('.smart_slider').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  arrows: true,
  appendDots: false,
  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});
$('.category_slider').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  arrows: true,
  appendDots: false,
  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
  speed: 300,
  slidesToShow: 4,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 991,
      settings: {
 		 arrows: true,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
 		 arrows: true,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
 		 arrows: false,
        slidesToShow: 1
      }
    }
  ]
});
$(function(){
    var current = location.pathname;
    $('#nav li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
});
</script>
</body>
</html>
