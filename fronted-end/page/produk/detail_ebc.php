<?php
include_once "../../template/atas_detail.php"
?>
</nav>

<div class="colorlib-product">
	<div class="container">
		<div class="row row-pb-lg product-detail-wrap">
			<div class="col-sm-8">
				<div class="owl-carousel">
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/EnergyBrightCream.jpg" class="prod-img">
								<img src="../../images/produk_detail/EnergyBrightCream.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/EnergyBrightCream.jpg" class="prod-img">
								<img src="../../images/produk_detail/EnergyBrightCream.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Energy Bright Cream <br> (MsGlow For Men)</h3>
					<p class="price">
						<span>Rp90.000</span>
						<span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span>
					</p>
					<p align="justify">Energy Bright Cream yang diformulasikan dengan 3 macam UV filter yang dapat membantu melindungi kulit secara maksimal, membantu melembutkan, melembabkan dan mencerahkan Kulit.</p>
					<ul>
						<h10>Manfaat</h10>
						<li align="justify">Memberikan tone up 1 tingkat pada wajah dan membantu.....<br>(Deskripsi Lengkap Ada Di Bawah).</li>
					</ul>
					<div class="input-group mb-4">
						<span class="input-group-btn">
							<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
								<i class="icon-minus2"></i>
							</button>
						</span>
						<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
						<span class="input-group-btn ml-1">
							<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
								<i class="icon-plus2"></i>
							</button>
						</span>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="addtocart"><a href="../utama/login.html" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<h5>Deskripsi Lengkap</h5>
			<p align="justify">Energy Bright Cream yang diformulasikan dengan 3 macam UV filter yang dapat membantu melindungi kulit secara maksimal, membantu melembutkan, melembabkan dan mencerahkan Kulit.</p>
			<p align="justify">
				Manfaat: Memberikan tone up 1 tingkat pada wajah dan membantu melembutkan, melembabkan, mencerahkan kulit.
			</p>
			<p align="justify">
				Jenis Kulit: Semua Jenis Kulit.
			</p>
			<ul align="justify">
				<h7>Komposisi</h7>
				<li>Avena Strigosa Seed Extract</li>
				<li>Niacinamide</li>
				<li>Aloevera Extract</li>
			</ul>
			<ul align="justify">
				<h7>[ Cara Pemakaian ]</h7>
				<li>Tekan tube dan ambil secukupnya di telapak tangan, ambil menggunakan jari dan oleskan secara merata pada area wajah. Gunakan rangkaian produk MS Glow for Men untuk hasil yang maksimal.</li>
			</ul>
		</div>
	</div>
</div>
<?php
require_once "../../template/bawah.php";
?>
<script>
	$(document).ready(function() {

		var quantitiy = 0;
		$('.quantity-right-plus').click(function(e) {

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);


			// Increment

		});

		$('.quantity-left-minus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if (quantity > 0) {
				$('#quantity').val(quantity - 1);
			}
		});

	});
</script>
</body>

</html>