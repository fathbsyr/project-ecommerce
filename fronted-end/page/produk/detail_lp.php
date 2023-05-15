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
                            <a href="../../images/produk_detail/LorelParis.jpg" class="prod-img">
                                <img src="../../images/produk_detail/LorelParis.jpg" class="img-fluid" alt="Cetaphil">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="../../images/produk_detail/LorelParis.jpg" class="prod-img">
                                <img src="../../images/produk_detail/LorelParis.jpg" class="img-fluid" alt="Cetaphil">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3>L'Oreal Paris Hair Care</h3>
                    <p class="price">
                        <span>Rp190.000</span>
                        <span class="rate">
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-half"></i>
                            (74 Rating)
                        </span>
                    </p>
                    <p align="justify">L'Oreal Paris EverPure Frizz-Defy kondisioner bebas sulfat dengan minyak marula adalah kondisioner yang dalam untuk perlindungan kelembapan dan ketahanan rambut kusut hingga 24 jam. Formula kami sangat lembut pada rambut yang diwarnai. Tidak ada sulfat, garam, atau.....<br>(Deskripsi Lengkap Ada Di Bawah)</p>
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
            <p align="justify">L'Oreal Paris EverPure Frizz-Defy kondisioner bebas sulfat dengan minyak marula adalah kondisioner yang dalam untuk perlindungan kelembapan dan ketahanan rambut kusut hingga 24 jam. Formula kami sangat lembut pada rambut yang diwarnai. Tidak ada sulfat, garam, atau surfaktan yang keras yang dapat mengikis, membuat rambut kusam dan rusak. Rasakan formula yang kaya akan sensorik murni, lembut, dan aroma aromatik segar yang mekar.</p>
            <ul align="justify">
                <h7>Manfaat dan Kegunaan</h7>
                <li>L'Oreal Paris EverPure Frizz-Defy Conditioner untuk mengontrol kelembapan dan rambut kusut yang secara mendalam mengondisikan rambut yang mudah kusut</li>
                <li>Formula bebas sulfat yang anti luntur, tidak mengandung garam atau surfaktan yang dapat membuat rambut kusam dan rusak</li>
                <li>Kondisioner yang diresapi dengan Marula Oil, rasakan formula yang kaya akan sensorik, lembut, dan wangi aromatik segar yang mekar</li>
                <li>Membersihkan rambut yang mudah kusut dengan lembut untuk mengontrol kelembapan dan kusut, mudah diatur, dan berkilau halus</li>
                <li>Rambut yang diwarnai membutuhkan perawatan khusus, kondisioner rambut kami untuk rambut kusut sangat lembut untuk warna rambut Anda</li>
            </ul>
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