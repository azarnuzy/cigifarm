<?php 
// Load data konfigurasi website
$site 				= $this->konfigurasi_model->listing();
$nav_produk_footer 	= $this->konfigurasi_model->nav_produk();
?>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">

			<div class="col-sm-8 col-lg-3 p-b-50">
				</div>


				<div class="col-sm-8 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30 ">
						KATEGORI
					</h4>

					<ul>
						<?php foreach ($nav_produk_footer as $nav_produk_footer) { ?>
						<li class="p-b-10 cl0">
							<a href="<?php echo base_url('produk/kategori/'.$nav_produk_footer->slug_kategori) ?>" class="stext-107 cl0 hov-cl0 trans-04">
							<?php echo $nav_produk_footer->nama_kategori ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>

				<div class="col-sm-8 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						KONTAK KAMI
					</h4>

					<p class="stext-107 cl0 size-201">
						Punya pertanyaan? Kunjungi sosial media yang ada di bawah ini 
						
						<div class="p-t-27">
						
						<a href="https://wa.me/6281214369502" class="fs-18 cl0 hov-cl0 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a>
						
						<a href="https://web.facebook.com/profile.php?id=100069976154053" class="fs-18 cl0 hov-cl0 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="<?php echo $site->instagram ?>" class="fs-18 cl0 hov-cl0 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="https://cigifarmjl@gmail.com" class="fs-18 cl0 hov-cl0 trans-04 m-r-16">
							<i class="fa fa-envelope"></i>
						</a>
						</div>

					
				</div>

			</div>


				<p class="stext-107 cl0 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php echo $site->namaweb; ?>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

</div>

<!--===============================================================================================-->	
	<script src="<?php echo base_url() ?>assets/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/slick/slick.min.js"></script>
	<script src="<?php echo base_url() ?>assets/template/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/template/js/main.js"></script>

</body>
</html>