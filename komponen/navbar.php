<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| HITUNG JUMLAH KERANJANG
|--------------------------------------------------------------------------
*/

$jumlah_cart = 0;

if (isset($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $item) {

        $jumlah_cart += $item['qty'];
    }
}
?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">

    <div class="container-fluid px-4">

        <!-- LOGO -->
        <a 
        class="navbar-brand d-flex align-items-center"
        href="index.php?page=home">

            <img 
            src="Image/accusoft.png"
            alt="Logo"
            class="logo-img"
            style="
            width:40px;
            height:40px;
            object-fit:contain;
            ">

            <span class="ms-2 fw-bold text-white fs-4">

                Chic Street

            </span>

        </a>

        <!-- BUTTON MOBILE -->
        <button 
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div 
        class="collapse navbar-collapse justify-content-end"
        id="navbarNavDropdown">

            <!-- NAV MENU -->
            <ul class="navbar-nav align-items-lg-center gap-lg-2">

                <!-- HOME -->
                <li class="nav-item">

                    <a 
                    class="nav-link fw-semibold"
                    href="index.php?page=home">

                        HOME

                    </a>

                </li>

                <!-- SHOP -->
                <li class="nav-item">

                    <a 
                    class="nav-link fw-semibold"
                    href="index.php?page=shop">

                        EKSLUSIF

                    </a>

                </li>

                <!-- DROPDOWN -->
                <li class="nav-item dropdown">

                    <a 
                    class="nav-link dropdown-toggle fw-semibold"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">

                        KATEGORI

                    </a>

                    <ul class="dropdown-menu border-0 shadow">

                        <li>

                            <a 
                            class="dropdown-item"
                            href="#">

                                Anak-anak

                            </a>

                        </li>

                        <li>

                            <a 
                            class="dropdown-item"
                            href="#">

                                Wanita

                            </a>

                        </li>

                        <li>

                            <a 
                            class="dropdown-item"
                            href="#">

                                Pria

                            </a>

                        </li>

                    </ul>

                </li>

                <!-- LOGIN -->
                <li class="nav-item">

                    <a 
                    class="nav-link fw-semibold"
                    href="#">

                        MASUK / DAFTAR

                    </a>

                </li>

                <!-- BANTUAN -->
                <li class="nav-item">

                    <a 
                    class="nav-link fw-semibold"
                    href="#">

                        BANTUAN

                    </a>

                </li>

            </ul>

            <!-- SEARCH -->
            <form class="d-flex ms-lg-4 me-3 mt-3 mt-lg-0">

                <input 
                class="form-control form-control-sm rounded-pill px-3 me-2"
                type="search"
                placeholder="Cari produk..."
                aria-label="Search">

                <button 
                class="btn btn-outline-light btn-sm rounded-pill px-3"
                type="submit">

                    Cari

                </button>

            </form>

            <!-- CART -->
            <a 
            href="index.php?page=keranjang"
            class="text-decoration-none mt-3 mt-lg-0">

                <div class="position-relative d-flex align-items-center">

                    <!-- ICON CART -->
                    <img 
                    src="Image/Vector.png"
                    alt="Cart"
                    class="cart-icon"
                    style="
                    width:30px;
                    height:30px;
                    object-fit:contain;
                    ">

                    <!-- BADGE -->
                    <span 
                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                        <?php echo $jumlah_cart; ?>

                    </span>

                </div>

            </a>

        </div>

    </div>

</nav>