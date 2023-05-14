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
                            <a href="../../images/produk_detail/EnergizerFacialWash.jpg" class="prod-img">
                                <img src="../../images/produk_detail/EnergizerFacialWash.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="../../images/produk_detail/EnergizerFacialWash.jpg" class="prod-img">
                                <img src="../../images/produk_detail/EnergizerFacialWash.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3>Energizer Facial Wash (MsGlow For Men)</h3>
                    <p class="price">
                        <span>Rp60.000</span>
                        <span class="rate">
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-half"></i>
                            (74 Rating)
                        </span>
                    </p>
                    <p align="justify">Energizer Facial Wash 3 ini 1 yang diperkaya dengan Avena Strigosa Seed Extract, Niacinamide, Beads dan Clay yang membantu mencerahkan, melembutkan, melembabkan, membersihkan minyak dan kotoran secara optimal.</p>
                    <ul align="justify">
                        <h7>Manfaat</h7>
                        <li>Mencerahkan</li>
                        <li>Melembutkan</li>
                        <li>Mel............<br>(Deskripsi Lengkap Ada Di Bawah)
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
            <p align="justify">Energizer Facial Wash 3 ini 1 yang diperkaya dengan Avena Strigosa Seed Extract, Niacinamide, Beads dan Clay yang membantu mencerahkan, melembutkan, melembabkan, membersihkan minyak dan kotoran secara optimal</p>
            <p align="justify">
				Jenis Kulit: Semua Jenis Kulit.
			</p>
            <ul align="justify">
                <h7>Manfaat</h7>
                <li>Mencerahkan</li>
                <li>Melembutkan</li>
                <li>Melembabkan</li>
                <li>Membersihkan minyak dan kotoran</li>
            </ul>
            <ul align="justify">
                <h7>Komposisi</h7>
                <li>Niacinamide</li>
                <li>Avena Strigosa Seed Extract</li>
                <li>Beads Dan Clay</li>
            </ul>
            <ul align="justify">
                <h7>[ Cara Pemakaian ]</h7>
                <li>Wash : Busakan pada tangan kemudian aplikasikan ke bagian wajah yg basah, lalu bilas hingga bersih.</li>
                <li>Scrub : Aplikasikan pada wajah yg basah (sedikit air), pijat secara lembut dengan gerakan memutar lalu bilas hingga bersih.</li>
                <li>Mask : Aplikasikan pada wajah yg kering. Diamkan selama 10 menit, lalu bilas hingga bersih. Lakukan 2-3x seminggu.</li>
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