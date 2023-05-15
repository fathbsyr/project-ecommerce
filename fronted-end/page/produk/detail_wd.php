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
							<a href="../../images/produk_detail/wardah.png" class="prod-img">
								<img src="../../images/produk_detail/wardah.png" class="img-fluid" alt="Wardah">
							</a>
						</div>
					</div>
					<div class="item">
						<div class="product-entry border">
							<a href="../../images/produk_detail/wardah.png" class="prod-img">
								<img src="../../images/produk_detail/wardah.png" class="img-fluid" alt="Wardah">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-desc">
					<h3>Wardah Saling Menguatkan (Packcage)</h3>
					<p class="price">
						<span>Rp51.000</span>
						<span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span>
					</p>
					<p align="justify">Wardah Saling Menguatkan Package. Kuatkan rambut hijabmu dari akarnya. Strong and healthy hair? Your truly hair goals ever!</p>
					<ol align="justify">
						<h5>Terdiri Dari</h5>
						<li>Hairfall Treatment Shampoo</li>
						<li>Hairfall Treatment Conditioner</li>
						<li>(Deskripsi Lengkap Ada Di Bawah)</li>
					</ol>
					<br><br><br><br>
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
			<p align="justify">Wardah Saling Menguatkan Package. Kuatkan rambut hijabmu dari akarnya. Strong and healthy hair? Your truly hair goals ever!</p>
			<ul align="justify">
			<h7>Isi PaketTerdiri Dari 2 Produk, Yakni:</h7>
				<li>Hairfall Treatment Shampoo
					<br>
					The Real Hijab Shampoo Expert. Dengan Scalp Care Technology yang diciptakan untuk menjaga kesehatan kulit kepala yang tertutup hijab. Kulit kepala yang sehat adalah kunci dari rambut berhijab yang kuat, bebas ketombe, lepek, gatal, dan bau apek. Dengan paduan bahan aktif natural yang bekerja multiaksi. Ginseng Extract bantu kurangi rambut rontok, Rosemary Extract yang terkenal menutrisi kulit kepala, serta Keratin bantu jaga kekuatan batang rambut agar tidak mudah patah.
				</li>
				<li> Hairfall Treatment Conditioner
					<br>
					Bantu melembutkan rambut, mengurangi rambut rontok, dan bantu kurangi tampilan rambut kering dan bercabang.
				</li>
			</ul>
			<ol align="justify">
				<h7>Cara Penggunaan: </h7>
				<li>Gunakan Hairfall Treatment Shampoo di kulit kepalamu minimal 2 hari sekali atau ketika rambut mulai berminyak, bilas hingga bersih</li>
				<li>Lanjut gunakan Hairfall Treatment Conditioner di batang rambut, tunggu beberapa menit, lalu bilas hingga bersih</li>
			</ol>
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