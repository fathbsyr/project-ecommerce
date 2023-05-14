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
							<a href="../../images/produk_detail/Vaseline.png" class="prod-img">
								<img src="../../images/produk_detail/Vaseline.png" class="img-fluid" alt="Wardah">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/Vaseline.png" class="prod-img">
								<img src="../../images/produk_detail/Vaseline.png" class="img-fluid" alt="Wardah">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Vaseline Healty Sunblock SPF 30</h3>
					<p class="price">
						<span>Rp80.000</span>
						<span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span>
					</p>
					<p align="justify">Adalah gel yang melindungi kulit anda dari paparan radiasi sinar matahari yang dapat merusak kulit.</p>
					<ul align="justify">
						<h7>Manfaat dan Kegunaan</h7>
						<li>Mengandung SPF 30 dan Broad Spectrum Sunscreen PA++ untuk melindungi kulit dari sinar UVA dan UVB yang dapat menyebabkan kerutan, noda, bintik hitam, dan kusam</li>
						<li>Mengandung.....<br>(Deskripsi Lengkap Ada Di Bawah)</li>
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
			<p align="justify">Adalah gel yang melindungi kulit anda dari paparan radiasi sinar matahari yang dapat merusak kulit..</p>
			<ul align="justify">
				<h7>Manfaat dan Kegunaan</h7>
				<li>Mengandung SPF 30 dan Broad Spectrum Sunscreen PA++ untuk melindungi kulit dari sinar UVA dan UVB yang dapat menyebabkan kerutan, noda, bintik hitam, dan kusam</li>
				<li>Mengandung nutrisi Yogurt Protein dan Aloe Vera Extract untuk kulit lembut dan segar</li>
				<li>Meresap cepat tanpa rasa lengket</li>
			</ul>
			<ol align="justify">
				<h7>Cara Pemakaian</h7>
				<li>Aplikasikan pada seluruh permukaan kulit tubuh sebelum beraktivitas..</li>
				<li>Jangan berdiri terlalu lama di bawah sinar matahari meskipun sudah menggunakan tabir surya.</li>
			</ol>
			<div>
				<h7>Komposisi:</h7>
				<p align="justify">Water, Cyclopentasiloxane, Ethylhexyl Methoxycinnamate, Caprylic/Capric Triglyceride, Glycerin, Zinc Oxide, Dimethicone, Cetyl PEG/PPG-10/1 Dimethicone, Microcrystalline Wax, Methylparaben, Perfume, Sodium Chloride, Triethoxycaprylylsilane, Propylparaben, Disodium EDTA, Yogurt Powder, BHT, Aloe Barbadensis Leaf Juice, Maltodextrin, Methylisothiazolinone.</p>
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