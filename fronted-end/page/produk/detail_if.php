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
							<a href="../../images/produk_detail/Imboost_Force_Sirup.png" class="prod-img">
								<img src="../../images/produk_detail/Imboost_Force_Sirup.png" class="img-fluid" alt="Imboost Force">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/Imboost_Force_Sirup.png" class="prod-img">
								<img src="../../images/produk_detail/Imboost_Force_Sirup.png" class="img-fluid" alt="Imboost Force">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Imboost Force</h3>
					<p class="price">
						<span>Rp270.000</span>
						<span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span>
					</p>
					<p align="justify">Imboost Force Sirup merupakan suplemen kesehatan yang mengandung ekstrak tanaman herbal Echinacea purpurea yang biasa diekstrak untuk dijadikan obat. Suplemen ini sangat efektif digunakan untuk terapi suportif yang bagus untuk meningkatkan sistem kekebalan tubuh untuk melawan berbagai infeksi penyakit.</p>
					<ol align="justify">
						<li>Memelihara...<br>(Deskripsi Lengkap Ada Di Bawah)</li>
					</ol>
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
			<p align="justify">Imboost Force Sirup merupakan suplemen kesehatan yang mengandung ekstrak tanaman herbal Echinacea purpurea yang biasa diekstrak untuk dijadikan obat. Suplemen ini sangat efektif digunakan untuk terapi suportif yang bagus untuk meningkatkan sistem kekebalan tubuh untuk melawan berbagai infeksi penyakit.</p>
			<ul align="justify">
				<h7>Khasiat</h7>
				<li>Memelihara Kesehatan Tubuh</li>
				<li>Membantu Meningkatkan Daya Tahan Tubuh</li>
				<li>Melawan Berbagai Infeksi Penyakit</li>
			</ul>
			<ul align="justify">
				<h7>Komposisi di tiap 5 ml mengandung:</h7>
				<li>Echinacea purpurea herb dry extract 250 mg</li>
				<li>Black elderberry fruit dry extract 400 mg</li>
				<li>Zn Picolinate 5 mg</li>
			</ul>
			<div>
				<p>Berat Bersih: 60 ml</p>
			</div>
			<div>
				<p>Brand: SOHO</p>
			</div>
			<div>
				<p>BPOM No: SD 031 609 591</p>
			</div>
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