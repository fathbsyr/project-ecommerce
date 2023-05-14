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
							<a href="../../images/produk_detail/NiveaMenEBD.png" class="prod-img">
								<img src="../../images/produk_detail/NiveaMenEBD.png" class="img-fluid" alt="Wardah">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/NiveaMenEBD.png" class="prod-img">
								<img src="../../images/produk_detail/NiveaMenEBD.png" class="img-fluid" alt="Wardah">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Nivea Men Extra Bright Dark Spot Minimizer Foam</h3>
					<p class="price">
						<span>Rp70.000</span>
						<span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span>
					</p>
					<p align="justify">Jangan anggap enteng noda hitam! Noda hitam atau flek hitam dapat muncul akibat paparan sinar matahari yang berlebih, asap polusi, kotoran, & debu. Gunakan NIVEA MEN Extra Bright Dark Spot Minimizer Foam. Pembersih wajah pria yang secara efektif mencerahkan dan membersihkan kulit kusam dan.....<br>(Deskripsi Lengkap Ada Di Bawah)</p>
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
			<p align="justify">Jangan anggap enteng noda hitam! Noda hitam atau flek hitam dapat muncul akibat paparan sinar matahari yang berlebih, asap polusi, kotoran, & debu. Gunakan NIVEA MEN Extra Bright Dark Spot Minimizer Foam. Pembersih wajah pria yang secara efektif mencerahkan dan membersihkan kulit kusam dan noda hitam. Dengan Active Vitamin C yang terbukti dapat mencerahkan kulit wajah 10x lebih efektif*. Cocok digunakan sehari-hari dan untuk semua jenis kulit terutama untuk pria dengan wajah kusam dan sering terpapar sinar matahari. Telah diuji secara dermatologi cocok untuk kulit. Formula NIVEA MEN tidak membuat kulit wajah kering. *Sesuai hasil tes in vitro dibandingkan Vitamin C.</p>
			<ul align="justify">
				<h7>Hightlight Produk</h7>
				<li>Mengandung Active Vitamin C yang mampu mencerahkan wajah 10x lebih efektif</li>
				<li>Efektif membersihkan kulit kusam dan menyamarkan bintik hitam pada wajah</li>
				<li>Cocok digunakan sehari-hari, untuk segala jenis kulit pria</li>
				<li>Terbukti aman untuk kulit wajah dan teruji secara dermatologi</li>
			</ul>
			<ul align="justify">
				<h7>Manfaat</h7>
				<li>Membersihkan</li>
				<li>Warna Kulit Yang Merata</li>
				<li>Vitamin C</li>
				<li>Menghilangkan Kulit Kusam dan Lelah</li>
			</ul>
			<ol align="justify">
				<h7>Cara Pemakaian</h7>
				<li>Busakan foam dan pijatkan lembut ke wajah yang telah dibasahi.</li>
				<li>Bilas dengan air bersih.</li>
				<li>Gunakan setiap pagi dan malam hari.</li>
			</ol>
			<div>
				<h7>Komposisi:</h7>
			    <p align="justify">Aqua, Myristic Acid, Propylene Glycol, Palmitic Acid, Stearic Acid, Potassium Hydroxide, Glycerin, Lauric Acid, PEG-150, PEG-8, Glyceryl Stearate, Cera Alba, Sodium Methyl Cocoyl Taurate, Arachidic Acid, BHT, Trisodium EDTA, Oleic Acid, 4-Butylresorcinol, Magnesium Chloride, Sodium Ascorbyl Phosphate, Tocopheryl Acetate, Panthenol, Glyceryl Glucoside, Ginkgo Biloba Leaf Extract, Glycyrrhiza Glabra Root Extract, Glucose, PEG-40 Hydrogenated Castor Oil, Trideceth-9, Panax Ginseng Root Extract, Parfum.</p>
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