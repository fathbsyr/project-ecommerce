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
                            <a href="../../images/produk_detail/Cetaphil.png" class="prod-img">
                                <img src="../../images/produk_detail/Cetaphil.png" class="img-fluid" alt="Cetaphil">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-entry border">
                            <a href="../../images/produk_detail/Cetaphil.png" class="prod-img">
                                <img src="../../images/produk_detail/Cetaphil.png" class="img-fluid" alt="Cetaphil">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3>Cetaphil Facial Cleanser</h3>
                    <p class="price">
                        <span>Rp140.000</span>
                        <span class="rate">
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-full"></i>
                            <i class="icon-star-half"></i>
                            (74 Rating)
                        </span>
                    </p>
                    <p align="justify">Sederhanakan cara Anda merawat kulit dengan pembersih wajah harian Cetaphil. Membuat kulit terasa lembut, bersih, dan sehat, pembersih wajah harian Cetaphil efektif, namun lembut dalam mengangkat minyak, kotoran, dan riasan. Formulanya yang......<br>(Deskripsi Lengkap Ada Di Bawah)</p>
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
            <p align="justify">Sederhanakan cara Anda merawat kulit dengan pembersih wajah harian Cetaphil. Membuat kulit terasa lembut, bersih, dan sehat, pembersih wajah harian Cetaphil efektif, namun lembut dalam mengangkat minyak, kotoran, dan riasan. Formulanya yang tidak membuat kulit terkelupas dan tidak menyebabkan iritasi akan membilas bersih tanpa meninggalkan residu yang menyumbat pori-pori dan tidak akan membuat kulit terasa kering atau kencang. Formula berbusa rendah direkomendasikan oleh dokter kulit dan dapat digunakan setiap hari di pagi dan malam hari. Dengan 16 ons di dalam botol, pengguna dapat menambahkannya ke dalam rutinitas pembersihan harian. Botol Cetaphil Daily Facial Cleanser ini memiliki fitur pompa sekali sentuh yang mudah dioperasikan untuk pengeluaran yang cepat.</p>
            <ul align="justify">
                <h7>Manfaat dan Kegunaan</h7>
                <li>Cukup lembut untuk penggunaan sehari-hari</li>
                <li>Pembersih wajah untuk kulit berminyak dengan formula yang lembut dan tidak menyebabkan iritasi untuk kulit normal hingga berminyak</li>
                <li>Terbukti secara klinis dapat membersihkan kulit secara mendalam tanpa membuat kulit terasa kering</li>
                <li>Membantu kulit terasa segar dan lembap</li>
                <li>Formula berbusa rendah tidak akan menghilangkan minyak esensial pada kulit, yang dapat membuat kulit terasa kering dan kencang</li>
                <li>Formula berbusa rendah tidak akan menghilangkan minyak esensial pada kulit, yang dapat membuat kulit terasa kering dan kencang</li>
                <li>Hypoallergenic</li>
                <li>Menghilangkan minyak, kotoran dan riasan</li>
                <li>Untuk kulit sensitif</li>
                <li>Direkomendasikan oleh dokter kulit dan non-komedogenik</li>
                <li>Membilas bersih tanpa meninggalkan residu yang menyumbat pori-pori</li>
                <li>Pompa 1 sentuhan yang sederhana</li>
            </ul>
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