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
							<a href="../../images/produk_detail/NiveaMenDAA.png" class="prod-img">
								<img src="../../images/produk_detail/NiveaMenDAA.png" class="img-fluid" alt="nivea men">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/NiveaMenDAA.png" class="prod-img">
								<img src="../../images/produk_detail/NiveaMenDAA.png" class="img-fluid" alt="nivea men">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Nivea Men Deep Acne Attack Facial Wash</h3>
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
					<p align="justify">NIVEA MEN Deep Acne Attack Facial Wash, dengan kandungan Himalayan Salt, mampu membersihkan wajah dari jerawat dalam 7 hari*, komedo, peradangan jerawatan, noda bekas jerawat, berdasarkan hasil uji in-vivo. Telah diuji secara dermatologi cocok untuk kulit. Formula NIVEA MEN tidak membuat kulit wajah kering......<br>(Deskripsi Lengkap Ada Di Bawah)</p>
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
			<p align="justify">NIVEA MEN Deep Acne Attack Facial Wash, dengan kandungan Himalayan Salt, mampu membersihkan wajah dari jerawat dalam 7 hari*, komedo, peradangan jerawatan, noda bekas jerawat, berdasarkan hasil uji in-vivo. Telah diuji secara dermatologi cocok untuk kulit. Formula NIVEA MEN tidak membuat kulit wajah kering.</p>
			<ul align="justify">
				<h7>Hightlight Produk</h7>
				<li>Lawan Habis 99% bakteri penyebab jerawat berulang</li>
				<li>Membersihkan kulit & memberikan efek purifikasi</li>
				<li>Mengangkat kotoran & minyak berlebih secara menyeluruh</li>
			</ul>
			<ul align="justify">
				<h7>Manfaat</h7>
				<li>Membersihkan</li>
				<li>Mencerahkan</li>
				<li>Menghilangkan Kulit Berjerawat</li>
				<li>Menghilangkan Kulit Kusam dan Lelah</li>
			</ul>
			<ol align="justify">
				<h7>Cara Pemakaian</h7>
				<li>Busakan scrub mud foam dan pijatkan lembut ke wajah yang telah dibasahi.</li>
				<li>Bilas dengan air bersih.</li>
				<li>Gunakan setiap pagi dan malam hari.</li>
			</ol>
			<div>
				<h7>Komposisi:</h7>
				<p align="justify">Aqua, Glycerin, Myristic Acid, Palmitic Acid, Stearic Acid, Potassium Hydroxide, Lauric Acid, Glyceryl Stearate, PEG-8, Cellulose, Cera Alba, Microcrystalline Cellulose, Acrylates Copolymer, Sodium Methyl Cocoyl Taurate, Menthol, Trisodium EDTA, Arachidic Acid, CI 16035, Calcium Carbonate, Oleic Acid, CI 77268:1, Carnitine, Garcinia Cambogia Fruit Extract, Magnolia Officinalis Bark Extract, Salicylic Acid, Sodium Lauryl Sulfate, Glycyrrhiza Glabra Root Extract.</p>
			</div>
		</div>
	</div>
</div>
<?php
require_once "../../template/bawah_detail.php";
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