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
                            <a href="../../images/produk_detail/coolgate.png" class="prod-img">
                                <img src="../../images/produk_detail/coolgate.png" class="img-fluid" alt="Cetaphil">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="../../images/produk_detail/coolgate.png" class="prod-img">
                                <img src="../../images/produk_detail/coolgate.png" class="img-fluid" alt="Cetaphil">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3>Coolgate Teeth Care</h3>
                    <p class="price">
                        <span>Rp145.000</span>
                        <span class="rate">
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-half"></i>
                            (74 Rating)
                        </span>
                    </p>
                    <p align="justify">Coolgate dapat membuat gigi anda terlihat lebih cerah dan indah.</p>
                    <ul align="justify">
                        <li>Efek pemutihan instan</li>
                        <li>Formulanya mengandung pencerah mata yang telah terbukti secara klinis</li>
                        <li>Menyikat gigi akan mengaktifkannya untuk....<br>(Deskripsi Lengkap Ada Di Bawah)</li>
                    </ul>
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
            <p align="justify">Coolgate dapat membuat gigi anda terlihat lebih cerah dan indah..</p>
            <ul align="justify">
                <h7>Manfaat dan Kegunaan</h7>
                <li>Efek pemutihan instan</li>
                <li>Formulanya mengandung pencerah mata yang telah terbukti secara klinis</li>
                <li>Menyikat gigi akan mengaktifkannya untuk menghasilkan busa biru yang memberikan efek sementara</li>
                <li>Membuat gigi Anda terlihat lebih putih setelah menyikat gigi</li>
            </ul>
            <ul align="justify">
                <h7>Komposisi</h7>
                <li>Sodium Fluride 0.32% w/w (1450 F-)</li>
            </ul>
            <ul>
                <h7>Gender</h7>
                <li>Unisex</li>
            </ul>
            <ul>
                <h7>Bahan Formulasi</h7>
                <li>Pasta</li>
            </ul>
            <ul>
                <h7>Rasa</h7>
                <li>Mint Dazzling</li>
            </ul>
            <ul align="justify">
                <h7>Insturksi</h7>
                <li>Petunjuk penggunaan: Gosok gigi selama 2 menit, 3 kali sehari. Anak-anak berusia 6 tahun ke bawah harus diawasi oleh orang dewasa dan hanya boleh menggunakan jumlah seukuran kacang polong. Dalam kasus asupan fluoride dari sumber lain, konsultasikan dengan dokter gigi atau dokter. Jangan ditelan. Ludah dan bilas sampai bersih setelah menyikat gigi.</li>
            </ul>
            <ul align="justify">
                <h7>Lokasi Penyimpanan</h7>
                <li>Letakkan di tempat yang sejuk dan kering, jauhkan dari sinar matahari secara langsung.</li>
            </ul>
            <ul align="justify">
                <h7>Peringatan Keamanan</h7>
                <li>Anak-anak berusia 6 tahun ke bawah hanya boleh menggunakan jumlah seukuran kacang polong, dan diawasi oleh orang dewasa untuk meminimalkan tertelan. Dalam kasus asupan fluoride dari sumber lain, konsultasikan dengan dokter gigi atau dokter. Jangan ditelan. Ludah dan bilas sampai bersih setelah menyikat gigi.</li>
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