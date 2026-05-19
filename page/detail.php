<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| SESSION CART
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['cart'])) {

    $_SESSION['cart'] = [];
}

/*
|--------------------------------------------------------------------------
| TAMBAH KE KERANJANG
|--------------------------------------------------------------------------
*/

if (isset($_POST['tambah_keranjang'])) {

    $produk = [

        "nama"   => $_POST['nama'],
        "harga"  => $_POST['harga'],
        "gambar" => $_POST['gambar'],
        "size"   => $_POST['size'],
        "qty"    => $_POST['qty']

    ];

    $_SESSION['cart'][] = $produk;

    echo "
    <script>
        alert('Produk berhasil ditambahkan ke keranjang');
        window.location.href='index.php';
    </script>
    ";

    exit;
}
?>

<!-- PRODUCT DETAIL -->
<section class="product-detail py-5">

    <div class="container">

        <div class="row g-4">

            <!-- GAMBAR PRODUK -->
            <div class="col-md-6">

                <img 
                src="Image/Rectangle 24.png" 
                alt="Puma MB.03"
                class="img-fluid rounded shadow-sm">

            </div>

            <!-- INFO PRODUK -->
            <div class="col-md-6">

                <h6 class="text-danger fw-bold">
                    PUMA
                </h6>

                <h2 class="fw-bold mb-3">
                    MB.03 Lo TMNT Krang Unisex Basketball Shoes
                </h2>

                <h3 class="text-primary fw-bold mb-4">
                    Rp. 1.999.000
                </h3>

                <!-- FORM -->
                <form method="POST">

                    <!-- DATA HIDDEN -->
                    <input 
                    type="hidden"
                    name="nama"
                    value="MB.03 Lo TMNT Krang Unisex Basketball Shoes">

                    <input 
                    type="hidden"
                    name="harga"
                    value="1999000">

                    <input 
                    type="hidden"
                    name="gambar"
                    value="Image/Rectangle 24.png">

                    <!-- SIZE -->
                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Pilih Size
                        </label>

                        <select 
                        class="form-select"
                        name="size">

                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>

                        </select>

                    </div>

                    <!-- QUANTITY -->
                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            Quantity
                        </label>

                        <input 
                        type="number"
                        class="form-control"
                        name="qty"
                        value="1"
                        min="1">

                    </div>

                    <!-- BUTTON -->
                    <button 
                    type="submit"
                    name="tambah_keranjang"
                    class="btn btn-primary w-100 py-3 fw-bold">

                        BELI SEKARANG

                    </button>

                </form>

            </div>

        </div>

        <!-- DESKRIPSI -->
        <div class="row mt-5">

            <div class="col-12">

                <h4 class="fw-bold mb-3">
                    Product Info
                </h4>

                <p class="text-secondary">

                    Sepatu MB.03 Lo TMNT Krang Unisex Basketball Shoes 
                    ini terinspirasi dari karakter TMNT Krang.
                    Dengan desain futuristik dan warna berani,
                    sepatu ini cocok untuk performance maupun gaya sehari-hari.

                </p>

            </div>

        </div>

        <!-- HIGHLIGHT -->
        <div class="row g-3 mt-4">

            <div class="col-md-6">

                <img 
                src="Image/Rectangle 34.png"
                alt="Highlight"
                class="img-fluid rounded shadow-sm">

            </div>

            <div class="col-md-6">

                <img 
                src="Image/Rectangle 35.png"
                alt="Highlight"
                class="img-fluid rounded shadow-sm">

            </div>

        </div>

    </div>

</section>

<!-- REKOMENDASI -->
<section class="recommendation py-5 bg-light">

    <div class="container">

        <h4 class="fw-bold mb-4">
            Rekomendasi lainnya
        </h4>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-6 col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <img 
                    src="Image/Rectangle 18 (7).png"
                    class="card-img-top"
                    alt="Produk">

                    <div class="card-body">

                        <h6 class="text-danger fw-bold">
                            PUMA
                        </h6>

                        <p class="card-text">
                            MagMax NITRO Men’s Running Shoes
                        </p>

                        <h6 class="text-primary fw-bold">
                            Rp. 2.699.000
                        </h6>

                        <a 
                        href="#"
                        class="btn btn-dark w-100 mt-2">

                            Lihat Produk

                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="col-6 col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <img 
                    src="Image/Rectangle 18 (7).png"
                    class="card-img-top"
                    alt="Produk">

                    <div class="card-body">

                        <h6 class="text-danger fw-bold">
                            PUMA
                        </h6>

                        <p class="card-text">
                            MagMax NITRO Men’s Running Shoes
                        </p>

                        <h6 class="text-primary fw-bold">
                            Rp. 2.699.000
                        </h6>

                        <a 
                        href="#"
                        class="btn btn-dark w-100 mt-2">

                            Lihat Produk

                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="col-6 col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <img 
                    src="Image/Rectangle 18 (7).png"
                    class="card-img-top"
                    alt="Produk">

                    <div class="card-body">

                        <h6 class="text-danger fw-bold">
                            PUMA
                        </h6>

                        <p class="card-text">
                            MagMax NITRO Men’s Running Shoes
                        </p>

                        <h6 class="text-primary fw-bold">
                            Rp. 2.699.000
                        </h6>

                        <a 
                        href="#"
                        class="btn btn-dark w-100 mt-2">

                            Lihat Produk

                        </a>

                    </div>

                </div>

            </div>

            <!-- CARD 4 -->
            <div class="col-6 col-md-3">

                <div class="card border-0 shadow-sm h-100">

                    <img 
                    src="Image/Rectangle 18 (7).png"
                    class="card-img-top"
                    alt="Produk">

                    <div class="card-body">

                        <h6 class="text-danger fw-bold">
                            PUMA
                        </h6>

                        <p class="card-text">
                            MagMax NITRO Men’s Running Shoes
                        </p>

                        <h6 class="text-primary fw-bold">
                            Rp. 2.699.000
                        </h6>

                        <a 
                        href="#"
                        class="btn btn-dark w-100 mt-2">

                            Lihat Produk

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>