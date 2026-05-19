<?php

if(isset($_GET['page'])) {

    $page = $_GET['page'];

    switch($page) {

        /*
        |--------------------------------------------------------------------------
        | HOME
        |--------------------------------------------------------------------------
        */

        case 'home':

            include "page/home.php";

        break;

        /*
        |--------------------------------------------------------------------------
        | DETAIL
        |--------------------------------------------------------------------------
        */

        case 'detail':

            include "page/detail.php";

        break;

        /*
        |--------------------------------------------------------------------------
        | SHOP
        |--------------------------------------------------------------------------
        */

        case 'shop':

            include "page/shopall.php";

        break;

        /*
        |--------------------------------------------------------------------------
        | KERANJANG
        |--------------------------------------------------------------------------
        */

        case 'keranjang':

            /*
            |--------------------------------------------------------------------------
            | HAPUS PRODUK
            |--------------------------------------------------------------------------
            */

            if(isset($_GET['hapus'])) {

                $index = $_GET['hapus'];

                unset($_SESSION['cart'][$index]);

                $_SESSION['cart'] = array_values($_SESSION['cart']);

                echo "
                <script>
                    alert('Produk berhasil dihapus');
                    window.location.href='index.php?page=keranjang';
                </script>
                ";
            }

            echo "

            <div class='container py-5'>

                <h2 class='fw-bold mb-4'>
                    Keranjang Belanja
                </h2>

            ";

            /*
            |--------------------------------------------------------------------------
            | CEK KERANJANG
            |--------------------------------------------------------------------------
            */

            if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

                $total = 0;

                foreach($_SESSION['cart'] as $index => $item) {

                    $subtotal = $item['harga'] * $item['qty'];

                    $total += $subtotal;

                    echo "

                    <div class='card mb-3 shadow-sm border-0'>

                        <div class='card-body'>

                            <div class='row align-items-center'>

                                <!-- GAMBAR -->
                                <div class='col-md-2 text-center'>

                                    <img 
                                    src='".$item['gambar']."'
                                    class='img-fluid rounded'
                                    style='width:100px;'>

                                </div>

                                <!-- INFO -->
                                <div class='col-md-6'>

                                    <h5 class='fw-bold'>
                                        ".$item['nama']."
                                    </h5>

                                    <p class='mb-1'>
                                        Size : ".$item['size']."
                                    </p>

                                    <p class='mb-1'>
                                        Quantity : ".$item['qty']."
                                    </p>

                                    <h6 class='text-primary fw-bold'>
                                        Rp. ".number_format($subtotal,0,',','.')."
                                    </h6>

                                </div>

                                <!-- BUTTON -->
                                <div class='col-md-4 text-md-end mt-3 mt-md-0'>

                                    <a 
                                    href='index.php?page=keranjang&hapus=".$index."'
                                    class='btn btn-danger'>

                                        Hapus

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                    ";
                }

                /*
                |--------------------------------------------------------------------------
                | TOTAL
                |--------------------------------------------------------------------------
                */

                echo "

                <div class='card shadow-sm border-0 mt-4'>

                    <div class='card-body text-end'>

                        <h4 class='fw-bold mb-3'>

                            Total :
                            Rp. ".number_format($total,0,',','.')."

                        </h4>

                        <button class='btn btn-success px-5 py-2'>

                            Checkout

                        </button>

                    </div>

                </div>

                ";

            } else {

                /*
                |--------------------------------------------------------------------------
                | KERANJANG KOSONG
                |--------------------------------------------------------------------------
                */

                echo "

                <div class='alert alert-warning text-center p-4'>

                    <h5 class='mb-0'>
                        Keranjang masih kosong
                    </h5>

                </div>

                ";
            }

            echo "</div>";

        break;

        /*
        |--------------------------------------------------------------------------
        | DEFAULT
        |--------------------------------------------------------------------------
        */

        default:

            include "page/home.php";

        break;
    }

} else {

    include "page/home.php";
}

?>