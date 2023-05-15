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
							<a href="../../images/produk_detail/Shower-Cucumber.png" class="prod-img">
								<img src="../../images/produk_detail/Shower-Cucumber.png" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/Shower-Cucumber.png" class="prod-img">
								<img src="../../images/produk_detail/Shower-Cucumber.png" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Brightening Shower Scrub – Cucumber (Scarlett)</h3>
					<p class="price">
						<span>Rp75.000</span>
						<span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span>
					</p>
					<p align="justify">Rasakan sensasi kesegeran aroma dari Scarlett Whitening Shower Scrub Cucumber ketika kamu membersihkan tubuh! Kandungan Glutathione (Mother of Antioxidant), Vitamin E dan buliran scrub halus.......(Deskripsi Lengkap ada di bawah)</p>
					<br>
					<br>
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
			<p align="justify">Rasakan sensasi kesegeran aroma dari Scarlett Whitening Shower Scrub Cucumber ketika kamu membersihkan tubuh! </p>
			<p align="justify">Kandungan Glutathione (Mother of Antioxidant), Vitamin E dan buliran scrub halus yang terdapat didalam Scarlett Whitening Shower Scrub Cucumber apabila digunakan secara rutin dapat membantu meregenerasi, melembabkan serta mencerahkan kulit tubuh secara lebih maksimal.</p>
		</div>
	</div>
</div>
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
<?php
require_once "../../template/bawah_detail.php";
?>